<?php

namespace Module\Frontend\Services;

use Module\Admin\Repositories\Admin\AdminRepository;
use Module\Admin\Services;

class AdminService
{

    use Services;

    public function __construct(AdminRepository $adminRepository)
    {
        $this->adminRepository = $adminRepository;
    }
}