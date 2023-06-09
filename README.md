# Canada-Guide

## Team and work assigned

## Sumit Bopche
* Admin Pages
* Basic User and admin Login
* Model, Migrations
* Admin Dashboard
![1](public/images/finalProjectImages/1.png)
![2](public/images/finalProjectImages/2.png)
![3](public/images/finalProjectImages/3.png)
![4](public/images/finalProjectImages/4.png)
![10](public/images/finalProjectImages/10.png)
![9](public/images/finalProjectImages/9.png)
![11](public/images/finalProjectImages/11.png)
## Fenil Shah
* Home Page
* Social Login Integration
* Related Basic Crud

## Fenil Bhanwadiya
* Blogs Page
* Comments
* Related Basic Crud

## Shally Sharma
* Places to Visit Page(like tripadvisor)
* Related basic crud
* API Integration
![7](public/images/finalProjectImages/7.png)
![8](public/images/finalProjectImages/8.png)


## Dharampreet Singh
* Grocery Store page
* Housing Page
* Grocery Store AdminPage
* Search in Grocery Store
* Search in Housing Page
* Related basic crud
![12](public/images/finalProjectImages/12.jpeg)
![13](public/images/finalProjectImages/13.jpeg)
![14](public/images/finalProjectImages/14.jpeg)
![5](public/images/finalProjectImages/5.png)
![6](public/images/finalProjectImages/6.png)
## Contribution Guidelines

* Clone the repository in your computer
* Create new branch from main branch. Branch Name should be like NamInitials_FeatureName

Example:

```
git checkout -b SB_LoginPage_UI
```

* Commit you changes regularly

```
git add yourFileName

git commit -m "appropriate message"
```

## Folder Structure

### library
* All common functions or utility files should be written inside this folder
### views
* All the html pages will go inside this folder
### styles
* Use Tailwind CSS ( https://tailwindcss.com/docs/installation/play-cdn )
* If any custom css required then those css files will be stored in this folder

# Useful Commands

## Laravel
Run below commands in your cmd
### Run Laravel Application
```
php artisan serve
```
### Create New Eleoquent Model
```
php artisan make:model TableName
```

### Create Migrations

```
php artisan make:migration create_housing_table
```

Update The file which got created in the migrations folder.

### Run Migrations

```
php artisan migrate
```

### Seed Database

```
php artisan db:seed
```

### Refresh Database
This will delete all the data in the database
```
php artisan migrate:refresh
```
If you want to refresh and seed the database
```
php artisan migrate:refresh --seed
```

### Create Factory for Table

```
php artisan make:factory HousingFactory
```

### Create Component

```
    php artisan make:component Navigation
```

### Create Component with view only

```
    php artisan make:component Navigation --view
```

### Model with Migrations

```
php artisan make:model Flight --migrations
```

### Model with Factory

```
php artisan make:model Flight --factory
```

## Faker

```
    https://github.com/fzaninotto/Faker
```
#   C a n a d a - G u i d e  
 "# Canada-Guide" 
