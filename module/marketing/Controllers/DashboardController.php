<?php

namespace Module\Marketing\Controllers;


class DashboardController extends MarketingBaseController
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