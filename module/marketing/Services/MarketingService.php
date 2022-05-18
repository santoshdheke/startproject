<?php

namespace Module\Marketing\Services;


use Module\Marketing\Repositories\MarketingRepository;
use Module\Marketing\Services;

class MarketingService
{

    use Services;

    public function __construct(MarketingRepository $adminRepository)
    {
        $this->adminRepository = $adminRepository;
    }
}