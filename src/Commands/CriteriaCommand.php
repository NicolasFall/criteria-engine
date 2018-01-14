<?php

namespace CriteriaEngine\Commands;

use Illuminate\Console\Command;

class CriteriaCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'criteria:criteria {name=Default}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Createa a new criteria.';

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
        $className = $this->compose_name($this->argument('name'));

        $template = file_get_contents( __dir__ . "/../Stubs/criteria.stub");

        $new_class = str_replace('DummyCriteriaName', $className, $template);

        $output_file = $this->get_output_file_path($className);
        file_put_contents($output_file, $new_class);
    }

    protected function compose_name($name){
        return $name . 'Criteria';
    }

    protected function get_base_path_string(){
        return Config('criteria-engine.config.criteria_store_path');
    }

    protected function get_output_file_path($filename){
        return $this->get_base_path_string() . DIRECTORY_SEPARATOR . $filename . '.php';
    }
}
