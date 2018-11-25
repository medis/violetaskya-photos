<?php

namespace VioletaskyaPhotos\Repositories;

interface RepositoryInterface
{
    /**
     * Fetch all photos.
     */
    public function all();

    /**
     * Process output.
     */
    public function transform();
}