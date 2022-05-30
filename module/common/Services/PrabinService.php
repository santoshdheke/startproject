<?php

namespace Module\Common\Services;

use Module\Common\Repositories\PrabinRepository;
use Module\Common\Services;

class PrabinService
{

    use Services;

    public function __construct(PrabinRepository $repository)
    {
        $this->repository = $repository;
    }
}
