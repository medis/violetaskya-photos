<?php

namespace VioletaskyaPhotos\Tests;

use VioletaskyaPhotos\Repositories\FlickrRepository;

class FakeFlickrRepository extends FlickrRepository
{
    protected $data = [];

    public function all()
    {
        $this->data = (object) [
            'photos' => [
                'page' => 1,
                'pages' => 1.0,
                'perpage' => 100,
                'total' => 2,
                'photo' => [
                    [
                        'id' => '36305204220',
                        'owner' => '150896280@N05',
                        'secret' => '6139ebe7a0',
                        'server' => '4359',
                        'farm' => 5.0,
                        'title' => 'Violeta Skya',
                        'ispublic' => 1,
                        'isfriend' => 0,
                        'isfamily' => 0,
                        'url_s' => 'https://farm5.staticflickr.com/4359/36305204220_6139ebe7a0_m.jpg',
                        'height_s' => '240',
                        'width_s' => '160',
                        'url_z' => 'https://farm5.staticflickr.com/4359/36305204220_6139ebe7a0_z.jpg',
                        'height_z' => '640',
                        'width_z' => '427',
                        'url_c' => 'https://farm5.staticflickr.com/4359/36305204220_6139ebe7a0_c.jpg',
                        'height_c' => '800',
                        'width_c' => 534.0,
                        'url_l' => 'https://farm5.staticflickr.com/4359/36305204220_6139ebe7a0_b.jpg',
                        'height_l' => '1024',
                        'width_l' => '683',
                        'url_o' => 'https://farm5.staticflickr.com/4359/36305204220_b260c4d7d5_o.jpg',
                        'height_o' => '2784',
                        'width_o' => '1856'
                    ],
                    [
                        'id' => '36654368016',
                        'owner' => '150896280@N05',
                        'secret' => 'a7681f73b8',
                        'server' => '4401',
                        'farm' => 5.0,
                        'title' => 'Violeta Skya',
                        'ispublic' => 1,
                        'isfriend' => 0,
                        'isfamily' => 0,
                        'url_s' => 'https://farm5.staticflickr.com/4401/36654368016_a7681f73b8_m.jpg',
                        'height_s' => '240',
                        'width_s' => '160',
                        'url_z' => 'https://farm5.staticflickr.com/4401/36654368016_a7681f73b8_z.jpg',
                        'height_z' => '640',
                        'width_z' => '427',
                        'url_c' => 'https://farm5.staticflickr.com/4401/36654368016_a7681f73b8_c.jpg',
                        'height_c' => '800',
                        'width_c' => 534.0,
                        'url_l' => 'https://farm5.staticflickr.com/4401/36654368016_a7681f73b8_b.jpg',
                        'height_l' => '1024',
                        'width_l' => '683',
                        'url_o' => 'https://farm5.staticflickr.com/4401/36654368016_a3f790d7ba_o.jpg',
                        'height_o' => '5616',
                        'width_o' => '3744',
                    ]
                ]
            ],
            'stat' => 'ok'
        ];

        return $this;
    }
}