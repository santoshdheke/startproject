<?php

namespace Module\Frontend\Controllers;


class HomeController extends FrontendBaseController
{
    public $view_path = 'home';

    public function __construct()
    {
        //
    }

    public function index()
    {
        return view(parent::__loadView('index'));
    }
}