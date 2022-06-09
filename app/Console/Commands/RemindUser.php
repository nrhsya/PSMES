<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RemindUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
 * The console command description.
 *
 * @var string
 */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle() {
        $users = User::whereNotNull('reminder_date')->get();
        foreach($users as $user) {
          $diffInDays = $user->reminder_date->diff(Carbon::now())->days;
      
          $user->notify("Your deadline is in $diffInDays day!Please chechk PSMES website.");
          
        }
      }
}
