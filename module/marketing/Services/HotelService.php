<?php

namespace Module\Marketing\Services;


use Module\Marketing\Repositories\HotelRepository;
use Module\Marketing\Services;

class HotelService
{

    use Services;

    public function __construct(HotelRepository $marketingRepository)
    {
        $this->marketingRepository = $marketingRepository;
    }
}