<?php

namespace App\Console\Commands;

use App\Models\AdminUser;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:admin {email} {password}';

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
    public function handle()
    {
        $password = $this->arguments()['password'];

        if (strlen($password) < 6) {
            echo 'Password must have at least 6 characters.';
            return;
        }

        AdminUser::create([
            'email' => $this->arguments()['email'],
            'password' => Hash::make($password)
        ]);

        echo 'Admin created successfully';

        return 0;
    }
}
