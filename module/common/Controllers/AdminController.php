<?php

namespace Module\Admin\Controllers;


class AdminController extends AdminBaseController
{
    private $adminService;

    public function __construct(AdminService $adminService)
    {
        $this->adminService = $adminService;
    }

    public function index()
    {
        $data = $this->adminService->getAll();
    }
}