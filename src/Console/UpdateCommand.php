<?php

namespace VioletaskyaPhotos\Console;

use Illuminate\Console\Command as BaseCommand;

class UpdateCommand extends BaseCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'violetaskya-photos:publish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish violetaskya.com photos config';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->comment('Publishing violetaskya.com photos config...');
        $this->callSilent('vendor:publish', [
            '--tag' => 'violetaskya-photos-config',
            '--force' => true
        ]);

        $this->info('violetaskya.com photos config published successfully.');
    }
}