<?php

namespace VioletaskyaPhotos\Tests\Feature;

use VioletaskyaPhotos\Tests\FeatureTestCase;
use VioletaskyaPhotos\Tests\FakeFlickrRepository;

class FlickrTest extends FeatureTestCase
{
    public function setUp()
    {
        parent::setUp();
        $this->app->bind('VioletaskyaPhotos\Repositories\RepositoryInterface', FakeFlickrRepository::class);
    }

    /** @test */
    public function it_can_receive_images()
    {
        $response = $this->get(route('photos'))
            ->assertOk();

        $data = $response->json()['data'];
        $this->assertCount(2, $data);
        $this->assertArrayHasKey('thumbnail', $data[0]);
        $this->assertArrayHasKey('image', $data[0]);
        $this->assertArrayHasKey('original', $data[0]);
    }
}
