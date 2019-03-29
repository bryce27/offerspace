## Installation
- Install Laravel and run composer install
- php artisan migrate
- php artisan db:seed

## Time log

2:01 pm
- booted up homestead and configured environment (set hosts file and Homestead.yaml)
- installed dependencies
- configured sqlite

2:08
- created pages model and table via a new migration
- created page controller 

2:12
- added auth scaffolding 
- created routes

2:15
- created blade templates

2:21
- fixed “attribute page does not exist” bug

2:23
- reformatted submission form - styling and positioning

2:35
- validated form input and redirected to single page view

2:50
- resolved ‘page expired’ bug (forgot csrf field - working now)

2:59
- tried using automatic injection, but decided to forego it for now

3:05
- 'show page' view now working
- fixed styling

3:35
- forgot to put timestamps
- made sure all the links were working and checked all routes

3:48
- touched up code
- converted routes into Laravel's resource route (cleaner - more concise)

4:00
- done converting links to new resource routes

4:03
- edited front page ('welcome' and 'app')

4:12
- fixed sanitization regex

4:18
- created db seed for pages

4:34
- added php unit tests

4:38 
- final touches and readme
