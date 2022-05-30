<?php

namespace Module\Developer\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;

class FolderController extends DeveloperBaseController
{
    public $view_path = 'folder';
    public $base_route = 'folder';
    public $columns = '';

    public function __construct()
    {
        //
    }

    public function index()
    {
        return view(parent::__loadView('create'));
    }

    public function store(Request $request)
    {

//        $this->generationFolders($request);
//        $this->makeRoute();
//        $this->makeProvider();
//        $this->makeView();
//        $this->registerSystem();

        return redirect()->back()->with('success', 'Successfully added ' . ucfirst('table') . ' Folder');
    }

    public function generationFolders(Request $request)
    {
        mkdir(base_path('module/' . strtolower(request('name'))));
        mkdir(base_path('module/' . strtolower(request('name')) . '/Controllers'));
        mkdir(base_path('module/' . strtolower(request('name')) . '/views'));
        mkdir(base_path('module/' . strtolower(request('name')) . '/views/theme_one'));
        mkdir(base_path('module/' . strtolower(request('name')) . '/views/theme_one/layouts'));
        mkdir(base_path('module/' . strtolower(request('name')) . '/views/theme_one/particle'));
    }

    public function makeView()
    {
        $stub = __DIR__ . '/stubs/views/master_layout.blade.stub';
        $file = file_get_contents($stub);
        $path = base_path('module/' . strtolower(request('name')) . '/views/theme_one/layouts/master_layout.blade.php');
        $this->makeDirectory($path);
        file_put_contents($path, $file, 0);
        $this->filesPut($path, $file);

        $stub = __DIR__ . '/stubs/views/sidebar.blade.stub';
        $file = file_get_contents($stub);
        $path = base_path('module/' . strtolower(request('name')) . '/views/theme_one/particle/sidebar.blade.php');
        $this->makeDirectory($path);
        file_put_contents($path, $file, 0);
        $this->filesPut($path, $file);

        return true;
    }

    public function registerSystem()
    {
        $this->registerComposerJson();
        $this->registerConfig();
    }

    public function registerComposerJson()
    {
        $stub = base_path('composer.json');
        $file = file_get_contents($stub);
        $text = "App\\\\\": \"app/\",\n\t\t\t\"Module\\\\" . ucfirst(request('name')) . "\\\\\": \"module/" . strtolower(request('name')) . "/\",";
        $file = str_replace('App\\\\": "app/",', $text, $file);

        $path = base_path('composer.json');
        $this->makeDirectory($path);
        file_put_contents($path, $file, 0);
        $this->filesPut($path, $file);
        exec("composer dump-autoload");
    }

    public function registerConfig()
    {
        $stub = base_path('config/app.php');
        $file = file_get_contents($stub);
        $text = "App\\\\\": \"app/\",\n\t\t\t\"Module\\\\" . ucfirst(request('name')) . "\\\\\": \"module/" . strtolower(request('name')) . "/\",";
        $file = str_replace('App\\\\": "app/",', $text, $file);

        $path = base_path('config/app.php');
        $this->makeDirectory($path);
        file_put_contents($path, $file, 0);
        $this->filesPut($path, $file);
        exec("composer dump-autoload");
    }

    public function makeRoute()
    {
        $stub = __DIR__ . '/stubs/route.module.stub';
        $file = file_get_contents($stub);

        $path = base_path('module/' . strtolower(request('name')) . '/route.php');
        $this->makeDirectory($path);
        file_put_contents($path, $file, 0);
        $this->filesPut($path, $file);

        return true;
    }

    public function makeProvider()
    {
        $stub = __DIR__ . '/stubs/provider.module.stub';
        $file = file_get_contents($stub);

        $file = str_replace('{{bigtitle}}', ucfirst(request('name')), $file);
        $file = str_replace('{{smalltitle}}', strtolower(request('name')), $file);

        $path = base_path('module/' . strtolower(request('name')) . '/' . ucfirst(request('name')) . 'ServiceProvider.php');
        $this->makeDirectory($path);
        file_put_contents($path, $file, 0);
        $this->filesPut($path, $file);

        return true;
    }

    public function filesPut($path, $contents, $lock = false)
    {
        return file_put_contents($path, $contents, $lock ? LOCK_EX : 0);
    }

    public function isDirectory($directory)
    {
        return is_dir($directory);
    }

    public function makeDirectorys($path, $mode = 0755, $recursive = false, $force = false)
    {
        if ($force) {
            return @mkdir($path, $mode, $recursive);
        }

        return mkdir($path, $mode, $recursive);
    }

    protected function makeDirectory($path)
    {
        if (!$this->isDirectory(dirname($path))) {
            $this->makeDirectorys(dirname($path), 0777, true, true);
        }

        return $path;
    }
}
