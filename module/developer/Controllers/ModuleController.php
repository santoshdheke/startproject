<?php

namespace Module\Developer\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;

class ModuleController extends DeveloperBaseController
{
    public $view_path = 'module';
    public $base_route = 'module';
    public $columns = '';

    public function __construct()
    {
        //
    }

    public function index()
    {
        $folders = glob(base_path('/module/*'));
        $modules = [];
        foreach ($folders as $folder) {
            $arr = explode('/',$folder);
            if (!in_array(end($arr),['developer','common'])){
                array_push($modules,end($arr));
            }
        }
        return view(parent::__loadView('create'),compact('modules'));
    }

    public function store(Request $request)
    {
        $this->generationMigrationFile($request);
        $this->makeMigration();
        $this->makeController();
        $this->makeModel();
        $this->makeRepo();
        $this->makeServices();

        return redirect()->back()->with('success','Successfully added '.ucfirst('table').' Module');
    }

    public function generationMigrationFile(Request $request)
    {
        $this->columns = "";
        foreach ($request->data as $data) {

            $column = strtolower(str_replace(' ','_',$data["column"]));
            $new = '$table->'.$data['type'].'("'.$column.'")';

            if ($data['unique'] == "1"){
                $new .= '->unique()';
            }

            if ($data['nullable'] == "1"){
                $new .= '->nullable()';
            }

            $new .= ";\n\t\t\t";

            $this->columns .= $new;
        }
    }

    public function makeMigration()
    {
        $stub = __DIR__ . '/stubs/migration.module.stub';
        $file = file_get_contents($stub);

        $file = str_replace('{{table}}', Str::plural(strtolower(request('table'))), $file);
        $file = str_replace('{{filds}}', $this->columns, $file);

        $filename = date('Y_m_d').'_'.time().'_create_'.Str::plural(strtolower(request('table')))."_table.php";

        $path = base_path('module/common/database/migrations/' . $filename);
        $this->makeDirectory($path);
        file_put_contents($path,$file,0);
        $this->filesPut($path, $file);

        return true;
    }

    public function makeController()
    {
        $stub = __DIR__ . '/stubs/controller.module.stub';
        $file = file_get_contents($stub);

        $file = str_replace('{{module}}', ucfirst(request('module')), $file);
        $file = str_replace('{{bigtitle}}', ucfirst(request('table')), $file);
        $file = str_replace('{{smalltitle}}', strtolower(request('table')), $file);

        $path = base_path('module/' . strtolower(request('module')) . '/Controllers/' . ucfirst(request('table')) . 'Controller.php');
        $this->makeDirectory($path);
        file_put_contents($path,$file,0);
        $this->filesPut($path, $file);

        return true;
    }

    public function makeRepo()
    {
        $stub = __DIR__ . '/stubs/repo.module.stub';
        $file = file_get_contents($stub);
        $file = str_replace('{{bigtitle}}', ucfirst(request('table')), $file);

        $path = base_path('module/common/Repositories/' . ucfirst(request('table')) . 'Repository.php');
        $this->makeDirectory($path);
        file_put_contents($path,$file,0);
        $this->filesPut($path, $file);

        return true;
    }

    public function makeModel()
    {
        $stub = __DIR__ . '/stubs/model.module.stub';
        $file = file_get_contents($stub);
        $file = str_replace('{{bigtitle}}', ucfirst(request('table')), $file);

        $path = base_path('module/common/Models/' . ucfirst(request('table')) . '.php');
        $this->makeDirectory($path);
        file_put_contents($path,$file,0);
        $this->filesPut($path, $file);

        return true;
    }

    public function makeServices()
    {
        $stub = __DIR__ . '/stubs/services.module.stub';
        $file = file_get_contents($stub);
        $file = str_replace('{{bigtitle}}', ucfirst(request('table')), $file);

        $path = base_path('module/common/Services/' . ucfirst(request('table')) . 'Service.php');
        $this->makeDirectory($path);
        file_put_contents($path,$file,0);
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
