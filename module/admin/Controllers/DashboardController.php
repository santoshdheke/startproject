<?php

namespace Module\Admin\Controllers;


class DashboardController extends AdminBaseController
{
    public $view_path = 'dashboard';

    public function __construct()
    {
        //
    }

    public function index()
    {
        return view(parent::__loadView('index'));
    }
}