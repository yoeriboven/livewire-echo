<div>
    Received event: {{ $hasReceivedEvent ? 'Yes' : 'No' }}
    <br/><br/>
    Content: {{ $content }}
    <br/><br/>
    <button type="button" wire:click="dispatchJob">Test</button>

</div>
