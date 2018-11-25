<?php

namespace VioletaskyaPhotos\Repositories;

use Illuminate\Support\Facades\Cache as BaseCache;
use Carbon\Carbon;
use JeroenG\Flickr\Api as FlickerApi;
use JeroenG\Flickr\Flickr;
use VioletaskyaPhotos\Transformers\FlickrTransformer;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;

class FlickrRepository implements RepositoryInterface
{
    private $flickr;

    protected $data = [];

    public function __construct()
    {
        $this->flickr = new Flickr(new FlickerApi(config('photos.FLICKR_KEY'), 'php_serial'));
    }

    /** @inheritdoc */
    public function all()
    {
        if (BaseCache::has('flickr')) {
            $this->data = BaseCache::get('flickr');
        }
        else {
            $this->data = $this->flickr->request('flickr.people.getPublicPhotos', [
                'user_id' => '150896280@N05',
                'extras'  => 'url_s, url_z, url_c, url_l, url_o'
            ]);
            $minutes = Carbon::now()->addDay();
            BaseCache::put('flickr', $this->data, $minutes);
        }

        return $this;
    }

    /** @inheritdoc */
    public function transform()
    {
        $manager = new Manager();
        $resource = new Collection($this->data->photos['photo'], new FlickrTransformer());
        $manager->parseIncludes('characters');
        return $manager->createData($resource)->toArray();
    }
}