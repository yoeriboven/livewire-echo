<?php

namespace App\Livewire;

use Livewire\Component;
use App\Jobs\TestJob;
use Livewire\Attributes\On;

class TestComponent extends Component
{
    public bool $hasReceivedEvent = false;

    public function getListeners()
    {
        return [
            'echo:test-channel,TestEvent' => 'receivedEvent'
        ];
    }

    // #[On('echo:test-channel,TestEvent')]
    public function receivedEvent()
    {
        $this->hasReceivedEvent = true;
    }

    public function dispatchJob()
    {
        TestJob::dispatch();
    }

    public function render()
    {
        return view('livewire.test-component');
    }
}
