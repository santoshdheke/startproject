<?php

namespace Module\Marketing\Controllers;


use Module\Marketing\Crud;

class HotelController extends MarketingBaseController
{
    public $view_path = 'hotel';
    public $title = 'Hotel';
    use Crud;

    public function __construct()
    {

    }
}