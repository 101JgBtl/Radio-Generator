# Radio Frequencies

Radio Frequencies is a small project for ArmA 3 TvT Events. The idea behind this project is, that you can easily generate an table with random generated frequencies. If your enemy know your current frequency because he for example capture one of your radios, you can switch the frequency by tell them the new frequency line, for example "Able-1 change to frequency Golf". Everyone who has the list, know the new frequency, everyone else not.

## Installation
- Step 1: Clone the repo
- Step 2: Copy .env.example to .env and enter database informations
- Step 3: ```composer install``` to install php dependencies
- Step 4: ```php artisan migrate``` to create the Database
- Step 5: ```npm i && npm run prod ``` to install npm dependecys and generate css & js files

## Requirements
- Database Server (e.g. MySQL, we use MySQL 8)
- PHP >= 7.4

## Questions or Bugs?
Just open an issue at [Issues](https://github.com/101JgBtl/Radio-Generator/issues)
