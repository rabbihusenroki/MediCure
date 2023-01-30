## About MEDICURE

<a href="https://github.com/rabbihusenroki">MediCure</a> is an impressive ecommerce script which comprises of all the basic features that needed for online buy. The Main Objective of the project is to manage the details of health related items, Category, Cart, Orders, Customers. It manages all the information about Medicine, Delivery, Customers. The project is totally built in administrative. The administrator and selected sub-administrator can guaranteed the access. The purpose of the project is to build an application program to reduce the manual work for managing the Medicine item, Category, Cart, Delivery it tracks all the details about the Cart, Orders, Customers.

```diff
+ Requests: 
+ 1. Kindy give us a star in github, if you like/clone our project.
```


## Screenshots

## Home
![127 0 0 1_8000_ (1)](https://user-images.githubusercontent.com/84996850/215550890-8946ac87-a46d-45a8-b884-7fcfbd265c12.png)

## Shop
![127 0 0 1_8000_allproducts](https://user-images.githubusercontent.com/84996850/215551181-3f7c85b5-a1a5-42ff-8297-1a7f41d61888.png)

## Product Details 
![127 0 0 1_8000_product_details_39_L%20Carnitine%20Muscle%20Recovery%20Tablets](https://user-images.githubusercontent.com/84996850/215552090-ce6a1f01-dac5-49b8-abc3-c2ac9bd4350d.png)

## Wishlist
![127 0 0 1_8000_user_wishlist](https://user-images.githubusercontent.com/84996850/215552475-1d4cedc3-459e-4113-aba7-342b701a48b9.png)

## Cart
![127 0 0 1_8000_product_cart](https://user-images.githubusercontent.com/84996850/215551521-d1605766-5c72-488d-89be-c57913c37949.png)

## Checkout
![127 0 0 1_8000_user_checkout](https://user-images.githubusercontent.com/84996850/215552570-1012588f-bc5d-4502-92a1-21e6945c0455.png)

## Shipping Details
![127 0 0 1_8000_payment_page](https://user-images.githubusercontent.com/84996850/215553797-1c8a9cb4-ebde-430d-b5cd-29b2fb24e26c.png)

## Payment via Srtipe
![127 0 0 1_8000_user_payment_process](https://user-images.githubusercontent.com/84996850/215553909-59eb301d-9816-470e-a93a-9486d97440f0.png)

## Customer Login and Registration
![127 0 0 1_8000_login (1)](https://user-images.githubusercontent.com/84996850/215554073-9b144daf-4af1-469a-a335-b776c1031bc3.png)

## Email Verification
![127 0 0 1_8000_email_verify](https://user-images.githubusercontent.com/84996850/215554740-ca36a003-0a85-483c-83bb-39fe138a7d50.png)

## Customer Dashboard
![127 0 0 1_8000_home (1)](https://user-images.githubusercontent.com/84996850/215552739-35b70020-3277-40ce-9f3d-0731e8defd55.png)

## Product Tracking
![127 0 0 1_8000_order_traking (1)](https://user-images.githubusercontent.com/84996850/215553028-19fcf4db-38a4-4e97-8e62-19fa74539066.png)

## Multilingual Supported Blog
![127 0 0 1_8000_blog_post](https://user-images.githubusercontent.com/84996850/215554860-350c4382-d219-4f85-8438-c17c918eccfd.png)

## Multilingual Supported Blog Details
![127 0 0 1_8000_blog_single_7](https://user-images.githubusercontent.com/84996850/215555191-1e55b6d5-4363-4ba3-8a7b-7f13a8732321.png)

## Admin Login
![127 0 0 1_8000_admin_login](https://user-images.githubusercontent.com/84996850/215555295-3a267ef9-121f-497f-8726-b7ca3ae593fc.png)

## Admin Dashboard
![127 0 0 1_8000_admin_home](https://user-images.githubusercontent.com/84996850/215555368-a285cd64-ab85-4817-8ddc-1cceebc79442.png)




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
Demo Link : http://127.0.0.1:8000

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
## Please note that all features of this project are not free or not included in this source code.

## Support
For contribution and customisation supports, kindly contact us through the Email ID rabbihusenroki@gmail.com

## License
MediCure is open-source software licensed under the [MIT License](LICENSE).
