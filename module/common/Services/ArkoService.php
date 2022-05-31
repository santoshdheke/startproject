<?php

namespace Module\Common\Services;

use Module\Common\Repositories\ArkoRepository;
use Module\Common\Services;

class ArkoService
{

    use Services;

    public function __construct(ArkoRepository $repository)
    {
        $this->repository = $repository;
    }
}
