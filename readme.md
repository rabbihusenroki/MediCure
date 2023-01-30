## About MEDICURE

<a href="https://github.com/rabbihusenroki">MediCure</a> is an impressive ecommerce script which comprises of all the basic features that needed for online buy. The Main Objective of the project is to manage the details of health related items, Category, Cart, Orders, Customers. It manages all the information about Medicine, Delivery, Customers. The project is totally built in administrative. The administrator and selected sub-administrator can guaranteed the access. The purpose of the project is to build an application program to reduce the manual work for managing the Medicine item, Category, Cart, Delivery it tracks all the details about the Cart, Orders, Customers.

```diff
+ Requests: 
+ 1. Kindy give us a star in github, if you like/clone our project.
```

## Key Features

For Customers:

●	Customers can create their own profile through a simple registration.

●	Without registration they can’t order.

●	They can update their profile.

●	Customers can order their desired Medicine or Equipment from our online medicine store.
●	They can pay via Visa Card and Master Card.

●	Before submitting to us they can see their invoice and edit, update or delete it.

●	Also they can track their order status.

●	Customers can see information and description of the Medicine item from product lists

●	They can search for their required one.
●	They can add products to wishlist for further order.
●	Customers also can select their payment method.
●	Customers will get product invoice via mail.

●	Users can message or call any time.

●	Product review option.
●	Customer can read and share Multi-Language blog.
●	By subscribing, customer can get upcoming product notification. 
●	Customer can get product discount by using coupon.
●	Customer can see our product overview by video.
●	They can share products in any social platform.




For Admin:

●	Admin can create user role for his system maintenance.

●	Admin can remove any registered customer.
●	Admin can confirm and cancel the order.

●	Admin can see customer information and the total number of orders.

●	Admin can add and delete products.

●	Admin can update the order status.

●	Admin can track monthly and yearly sales.
●	Admin can track stock and return products.
●	Admin can create special discount or coupon for users.

●	Admin can manage all information Category, Delivery, Orders etc.
●	Admin will get users mail via Newsletter.
●	Admin can rank his/her website by using SEO tool
●	Admin can change system setting.
●	Admin can write articles in Multi-Language. 


## Demo & Credentials
Demo Link : https://www.ulearnpro.com/demo/

|    Role       |        Email ID        |   Password    |
| ------------- | ---------------------  | ------------- |
|    Admin      | admin@medicure.com       |    medicure     |
|    Customer | customer@medicure.com  |    medicure     |


## Access Page

Login at the following link using the customer credentials, username:customer@medicure.com | password:medicure

```sh
http://127.0.0.1:8000/login
```

Login at the following link using the Admin credentials, username:admin@medicure.com | password:medicure

```sh
http://127.0.0.1:8000/admin/login
```

## Installation
In the root folder, find the .env file and change the following values

```sh
APP_NAME=
APP_URL=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

MAIL_DRIVER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=yourmail
MAIL_PASSWORD=your password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=mail address
MAIL_FROM_NAME="App Name"
```

Through terminal or command prompt, update composer to install the dependencies:

```sh
composer update
```


```sh
php artisan key:generate
```


## Support
For contribution and customisation supports, kindly contact us through the Email ID rabbihusenroki@gmail.com

## License
MediCure is open-source software licensed under the [MIT License](LICENSE).
