<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
		
        $schedule->command('backup:run')->dailyAt('1:00');

        $schedule->call(function() {
            $files = Storage::disk('backups')->files('\\');
            foreach($files as $key=>$file) {
                if($key === count($files)-1) {
                    $path = Storage::disk('backups')->get($file);
                    Storage::disk('google')->put($file, $path);
                }
            }
        })->dailyAt('1:30');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
