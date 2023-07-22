<?php

namespace App\Livewire;

use Livewire\Component;
use App\Jobs\TestJob;

class TestComponent extends Component
{
    public bool $receivedEvent = false;

    public function dispatchJob()
    {
        TestJob::dispatch();
    }

    public function render()
    {
        return view('livewire.test-component');
    }
}
