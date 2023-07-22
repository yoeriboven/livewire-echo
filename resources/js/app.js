import './bootstrap';

Echo.channel('test-channel')
    .listen('TestEvent', (e) => {
        console.log('Event received: "TestEvent');
    });
