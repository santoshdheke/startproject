<?php

namespace Module\Admin\Services;

use Module\Admin\Repositories\AdminRepository;
use Module\Admin\Services;

class AdminService
{

    use Services;

    public function __construct(AdminRepository $adminRepository)
    {
        $this->adminRepository = $adminRepository;
    }
}