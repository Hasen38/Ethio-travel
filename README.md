# Ethio-travel 

This repository contains the source code for the travel agency website, a platform for booking tours and experiences in Ethiopia.  Built with laravel 11 ,tailwind css for styling and Stripe for seemless payment integration .

[Watch Demo video](https://youtu.be/yjoGlbUIK5I)

#Screenshots.
![Hero](![Screenshot 2025-03-05 134636](https://github.com/user-attachments/assets/a01ba0cb-308c-4590-ac5a-17b67211fbb1)
)
![Services](![Screenshot 2025-03-05 133806](https://github.com/user-attachments/assets/bc8a4be3-f5c7-4769-8af0-abaf7820b3fb)

![Tours](![Screenshot 2025-03-05 133833](https://github.com/user-attachments/assets/1cbae325-34d5-48ad-b7d9-a74b4811dee2)

![Special Package](![Screenshot 2025-03-05 133900](https://github.com/user-attachments/assets/ea8794a9-1990-4729-898c-bc3f0a85cfe3)



## Features

1-user registration and login.
2-reset password.
2-Tour.
3-packages.
4-booking.
5-Secure online payment gateway integration (credit card, debit card, PayPal, etc.).


## Installation <a name="installation"></a>

clone the Repository

 ```bash
 git clone [https://github.com/hasen38/Ethio-travel.git]
 ```
2. Go to project directory

```
cd Ethio-travel

```

3. Install packages with composer

```
composer install

```

4. Install npm packages with 
```
npm install; npm run dev


```
5. Create your database 

6. Rename .env.example to .env Or copy it and paste at project root directory and name the file .env.You can also use this command.

```
cp .env.example ./.env

```
7. Generate app key with this command
```
php artisan key:generate

```

8. Set database connection to your database in the .env file.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=Ethio-travel
DB_USERNAME=root
DB_PASSWORD=

```
9. Import full database sql file in the database folder, or run migrations
Use this command to run migrations

```
php artisan migrate --seed

```
10. Start the local server and browser to your app.
This command will start the development server
```
php artisan serve

```

11. Open the address in the terminal in your browser.Usually address is usually like this:
```
http://127.0.0.1:8000

```
12. Enjoy and make sure to star the repo :).Report bugs,features and also send your pull requests.

