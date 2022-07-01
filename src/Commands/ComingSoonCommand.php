<?php

namespace RhysLees\ComingSoon\Commands;

use Illuminate\Console\Command;

class ComingSoonCommand extends Command
{
    public $signature = 'laravel-coming-soon';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
