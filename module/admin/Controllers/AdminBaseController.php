<?php

namespace Module\Admin\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;


class AdminBaseController extends Controller
{
    public $theme_path = 'adminview::theme_one';
    public $view_path = 'crud';
    public $title = "Dashboard";
    public $base_route;

    public function __loadView($view)
    {
        $view = $this->theme_path.'.'.$this->view_path.'.'.$view;
        View::composer($view,function ($view){
            $view->with('theme_path', $this->theme_path);
            $view->with('view_path', $this->theme_path.'.'.$this->view_path);
            $view->with('title', $this->title);
            $view->with('base_route', 'admin.'.$this->base_route.'.');
        });
        return $view;
    }

    public function returnBack($request)
    {
        if ($request->save) {
            return redirect()->route('admin.' . $this->base_route . '.index')->with('success', $this->title . ' Update Successful.');
        }
        return redirect()->back()->with('success', $this->title . ' Update Successful.');
    }

}
