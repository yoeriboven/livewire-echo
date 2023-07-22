# Livewire 3 beta with Laravel Echo bug

I tried upgrading my app to Livewire 3 but it does not receive Laravel Echo events.

This repo has Livewire 3 installed and shows the bug.

When you click the button you will see Laravel Echo receive the event in the console
but Livewire won't receive it.

In my app we dispatch the event from the queue so I did that in this demo app as well.

## Setup
- `cp .env.example .env`
- `composer install`
- Add your Pusher keys to `.env`
- `php artisan horizon`
- `npm install && npm run dev`
