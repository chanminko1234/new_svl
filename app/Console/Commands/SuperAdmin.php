<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SuperAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'superadmin {id : The ID of the user.} {--remove : remove option.}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Upgrade user as SuperAdmin';

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
        if ($this->option('remove')) {
           
            if ($this->confirm('Are you sure you want to remove this user as super admin?')) {
                $user = \Sentinel::findById($this->argument('id'));
                
                if ($user) {

                    $supAdmin = \App\Super_admins::where('user_id', $user->id)->first();
                    $supAdmin->delete();

                    $this->info("{$user->first_name} successfully removed as SUPERADMIN!");

                }else{

                    $this->error("OOPS...!!!! Something went wrong! Check and try again.");

                }
            }

        } else {

            if ($this->confirm('Are you sure you want to make this user as super admin?')) {

                $user = \Sentinel::findById($this->argument('id'));

                if ($user) {

                    $supAdmin = \App\Super_admins::create(['user_id' => $user->id]);
                    $supAdmin->save();

                    $this->info("{$user->first_name} successfully upgraded as SUPERADMIN!");

                }else{

                    $this->error("OOPS...!!!! Something went wrong! Check and try again.");

                }

            }
        }
        
        
    }
}
