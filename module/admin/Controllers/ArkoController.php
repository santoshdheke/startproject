<?php

namespace Module\Admin\Controllers;


use Module\Common\CrudController;
use Module\Common\Services\ArkoService;

class ArkoController extends AdminBaseController
{
    use CrudController;
    public $view_path = 'arko';
    public $base_route = 'arko';
    public $title = 'Arko';

    public function __construct(ArkoService $arkoService)
    {
        $this->services = $arkoService;
    }
}
