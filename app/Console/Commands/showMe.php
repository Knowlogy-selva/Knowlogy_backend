<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\allcourse;

class showMe extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'showMe:list';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'show me commant description';
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
     * @return int
     */
    public function handle()
    {
        $currentDate = date('Y-m-d H:i:s'); 
        $this->info(allcourse::select('id')->where('created_at', '<=', $currentDate)->get());
        // $this->info(allcourse::select('id')->where($data, '<=', $currentDate)->delete());
    }
}
 