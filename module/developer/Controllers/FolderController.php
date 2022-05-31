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

        $this->generationFolders($request);
        $this->makeRoute();
        $this->makeProvider();
        $this->makeView();
        $this->makeControllers();
        $this->registerSystem();

        return redirect()->back()->with('success', 'Successfully added ' . ucfirst('table') . ' Folder');
    }

    public function generationFolders(Request $request)
    {
        $this->makeDir(base_path('module/' . strtolower(request('name'))));
        $this->makeDir(base_path('module/' . strtolower(request('name')) . '/Controllers'));
        $this->makeDir(base_path('module/' . strtolower(request('name')) . '/views'));
        $this->makeDir(base_path('module/' . strtolower(request('name')) . '/views/theme_one'));
        $this->makeDir(base_path('module/' . strtolower(request('name')) . '/views/theme_one/layouts'));
        $this->makeDir(base_path('module/' . strtolower(request('name')) . '/views/theme_one/particle'));
        $this->makeDir(base_path('module/' . strtolower(request('name')) . '/views/theme_one/dashboard'));
    }

    public function makeDir($path)
    {
        if (!file_exists($path)){
            mkdir(mkdir($path),777);
        }
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

        $stub = __DIR__ . '/stubs/views/dashboard.blade.stub';
        $file = file_get_contents($stub);
        $path = base_path('module/' . strtolower(request('name')) . '/views/theme_one/dashboard/index.blade.php');
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

        $text = "App\\Providers\\AppServiceProvider::class,\n\t\t";
        $text .= "\\Module\\".ucfirst(request('name'))."\\".ucfirst(request('name'))."ServiceProvider::class,";
        $file = str_replace('App\\Providers\\AppServiceProvider::class,', $text, $file);

        $path = base_path('config/app.php');
        $this->makeDirectory($path);
        file_put_contents($path, $file, 0);
        $this->filesPut($path, $file);
        exec("php artisan config:cache");
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

    public function makeControllers()
    {
        $stub = __DIR__ . '/stubs/basecontroller.module.stub';
        $file = file_get_contents($stub);

        $file = str_replace('{{bigtitle}}', ucfirst(request('name')), $file);
        $file = str_replace('{{smalltitle}}', strtolower(request('name')), $file);

        $path = base_path('module/' . strtolower(request('name')) . '/Controllers/' . ucfirst(request('name')) . 'BaseController.php');
        $this->makeDirectory($path);
        file_put_contents($path, $file, 0);
        $this->filesPut($path, $file);

        $stub = __DIR__ . '/stubs/controller.module.stub';
        $file = file_get_contents($stub);

        $file = str_replace('{{bigtitle}}', "Dashboard", $file);
        $file = str_replace('{{smalltitle}}', "dashboard", $file);
        $file = str_replace('{{module}}', ucfirst(request('name')), $file);

        $path = base_path('module/' . strtolower(request('name')) . '/Controllers/' . 'DashboardController.php');
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
