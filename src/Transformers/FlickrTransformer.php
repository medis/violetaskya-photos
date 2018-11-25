<?php

namespace VioletaskyaPhotos\Transformers;

use League\Fractal\TransformerAbstract as BaseTransformerAbstract;

class FlickrTransformer extends BaseTransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform($data)
    {
        return [
            'thumbnail' => $data['url_s'],
            'image'     => $data['url_z'],
            'original'  => $data['url_o']
        ];
    }
}
