<?php

namespace CriteriaEngine\Commands;

use Illuminate\Console\Command;

class CriteriaEngineCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'criteria:engine {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new criteria engine.';

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
        //
    }
}
