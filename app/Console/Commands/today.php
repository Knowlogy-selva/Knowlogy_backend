<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\allcourse;
use Carbon\Carbon;

class today extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:todaytaks';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $message = allcourse::select('id')->whereDate('created_at', '<', Carbon::now()->subMinute(10))->delete();
        dd($message);
    }
}
