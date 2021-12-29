
# [Laravel Pusher Vue.js Echo Bootstrap4](https://www.youtube.com/watch?v=u6CwVxcyfD0&list=PLe30vg_FG4OQsCOAzymRY5GkQpFqc1U-D)

### Installation:

- Create MySQL DB
- Create account in https://pusher.com
- Create App and get this your app credentials

- Clone Project.
```
git clone git@github.com:boolfalse/laravel-realtime-chat.git
cd laravel-realtime-chat/
```

- Create .env file in project root folder.
- Fill appropriate credentials as in .env. (Don't forget about setting BROADCAST_DRIVER as 'pusher')


```
composer install
npm install
php artisan migrate
npm run dev
```

- Go to /chat URI and test.

- [OPTIONAL]
 May there need to install Python for windows

- [OPTIONAL]
```
sudo apt update
sudo apt install libpng-dev
```


### Original Source:

- [bitfumes/Real-Time-Chat](https://github.com/bitfumes/Real-Time-Chat)
