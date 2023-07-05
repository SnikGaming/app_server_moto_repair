<?php

namespace App\Console;

use App\Models\otp;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Carbon\Carbon;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
        $schedule->call(function () {
            while (true) {
                $expirationTime = Carbon::now()->subMinutes(1);
                Otp::where('created_at', '<=', $expirationTime)->delete();
                // Delay 1 giây trước khi tiếp tục vòng lặp
                sleep(1);
            }
        })->everyMinute();
    }
    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
