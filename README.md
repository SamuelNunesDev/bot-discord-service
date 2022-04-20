# Notifications via discord bot

## 🤔 About the service

- #### Just for testing purposes, using [github.com/laravel-notification-channels/discord](https://github.com/laravel-notification-channels/discord).

- #### Although it was created for testing, in addition to being easily deployed, it can also be modified as needed.

## :man_technologist: Installation

1. After cloning the project, run:

```bash
composer install
```
2. Create a Discord application.

3. Click the Create a Bot User button on your Discord application.

4. Paste your bot's API token, found under App Bot User, in your services.php config file:
```php
    // config/services.php
    'discord' => [
        'token' => 'YOUR_API_TOKEN',
    ],
```
5. Add the bot to your server and identify it by running the artisan command:

```shell
    php artisan discord:setup
```
## 🧐 How to use

- Make a post request (example: http://localhost:8000/api/send) with the following body:
- The first object only sends a text message, the second creates an [embed](https://discord.com/developers/docs/resources/channel#embed-object)
```json
    {
	"message": "",
	"embed": {
      "title": "Embed Title",
      "type": "rich",
      "description": "content embed",
      "color": "777",
      "timestamp": "2022-04-18T22:42Z"
	},
	"channel_id": "000000000000"
}
```
