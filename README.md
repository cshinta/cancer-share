# ![Cancer Share App](public/img/logo.png)

> ### Cancer Share App to fullfill Web Programming's Project

----------

# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)

Must have : Git and Composer

Clone the repository

    git clone <your repo link>

Switch to the repo folder

    cd cancer-share

Install all the dependencies using composer

    composer install

Install all the dependencies using npm

    npm install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

**TL;DR command list**

    git clone <your repo link>
    cd cancer-share
    composer install
    npm install
    cp .env.example .env
    php artisan key:generate
    
**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

    php artisan migrate
    php artisan serve

# How to Contribute
1. First fork this repository
2. Clone repository at your github account
```
git clone <your repo link>
```
3. Change or add feature and commit it
```
git add .
git commit -m "your commit message"

```
4. Push your commit
```
git push
```
5. After your commit is pushed in your repo, ask for pull request
6. Wait until your pull request accepted

## When there is change
Before doing pull the newest commit, stash or commit your works first
1. Pull the newest commit
```
git pull https://github.com/cshinta/cancer-share.git
```
2. If there is conflict, fix it manually then commit it
```
git commit -m "your commit message"
```
3. After that your repository is already up to date
