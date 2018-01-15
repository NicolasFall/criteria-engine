<?php

namespace CriteriaEngine\Commands;

use Illuminate\Console\Command;
use CriteriaEngine\Classes\FileDirectoryTrait;
class CriterizableObjectCommand extends Command
{

    use FileDirectoryTrait;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'criteria:criterizable {name=Default} {--override}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Createa a new criterizable object. Will be placed in the default criteria directory.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $class_name = $this->compose_name($this->argument('name'));

        $template = file_get_contents( __dir__ . "/../Stubs/criterizableObject.stub");

        $new_class = str_replace('DummyObjectName', $class_name, $template);

        $path = $this->save_new_class_as($new_class,$class_name);
    }

    protected function compose_name($name){
        return $name;
    }

    protected function get_base_path_string(){
        return Config('criteria-engine.config.criteria_store_path');
    }

    protected function get_output_file_path($filename){
        return $this->get_base_path_string() . DIRECTORY_SEPARATOR . $filename . '.php';
    }

    protected function save_new_class_as($new_class, $class_name){
        $override = $this->option('override');

        $this->create_path_if_doesnt_exist($this->get_base_path_string());
        $output_file = $this->get_output_file_path($class_name);
        if(!file_exists($output_file) || (file_exists($output_file) && $override)){
            file_put_contents($output_file, $new_class);
            echo "{$class_name} created succesfully. Stored in {root dir}/{$this->get_base_path_string()}."; 
        }else{
                echo "{$class_name} already exist on {root dir}/{$this->get_base_path_string()}.\n";
                echo "You can use --override option to override target class.";
        }
    }
}
