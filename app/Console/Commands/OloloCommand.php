<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class OloloCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:ololo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test wdbfwjdfvksdjbfksdjbvkds rkjdbg';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->table(
            ['Name', 'Email'],
            User::all(['name', 'email'])->toArray()
        );
        return 0;
    }
}
