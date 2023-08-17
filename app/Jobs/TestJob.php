<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Events\TestEvent;

class TestJob implements ShouldQueue
{
    use Dispatchable, Queueable;

    public function handle(): void
    {
        TestEvent::dispatch('the content');
    }
}
