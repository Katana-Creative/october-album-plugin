For this plugin to work you will need to run inside the ./public/ folder
the following command for installing the tables
php artisan plugin:refresh LzoDevelopment.Album
and this should print an info message with the tables that where created
plugin:refresh ( delete/truncates the tables if they exits and creates new ones so you will lose the data)