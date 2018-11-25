<?php

namespace VioletaskyaPhotos\Controllers;

use Illuminate\Routing\Controller as BaseController;
use VioletaskyaPhotos\Repositories\RepositoryInterface;


class PhotosController extends BaseController
{
    protected $repository;

    public function __construct(RepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return $this->repository->all()->transform();
    }
}