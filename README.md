# Notifications via discord bot

## 🤔 About the service

- #### Just for testing purposes, using [github.com/laravel-notification-channels/discord](https://github.com/laravel-notification-channels/discord).

- #### Although it was created for testing, in addition to being easily deployed, it can also be modified as needed.

## :man_technologist: Installation

- After cloning the project, run:

```bash
composer install
```
- In config/services.php file replace 'YOUR_API_TOKEN' with your bot's token
```php
    // config/services.php
    'discord' => [
        'token' => 'YOUR_API_TOKEN',
    ],
```
- Add the bot to your server and identify it by running the artisan command:

```shell
    php artisan discord:setup
```
## 🧐 How to use

- Make a post request (example: http://localhost:8000/api/send) with the following body:
```json
    {
        "message": "Hello, World!",
        "channel_id": "564984616574984"
    }
```
