<?php

namespace Module\Admin\Controllers;


use Module\Common\CrudController;
use Module\Common\Services\PrabinService;

class PrabinController extends AdminBaseController
{
    use CrudController;
    public $view_path = 'prabin';
    public $base_route = 'prabin';
    public $title = 'Prabin';

    public function __construct(PrabinService $prabinService)
    {
        $this->services = $prabinService;
    }
}
