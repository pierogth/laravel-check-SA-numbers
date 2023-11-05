# laravel-check-SA-numbers
Simple Laravel application that permit to check, and eventually correct a single mobile number, or alternatively a list of numbers  in form of a CSV file.

# App Requirements
In order to run this application, you need Docker (Version 24 or above) and Docker Compose installed in your system.

# How to run
Clone this repository in any folder with the command:
<pre>git clone https://github.com/pierogth/laravel-check-SA-numbers.git </pre>
Then move to the directory just created by the clone command:
<pre>cd laravel-check-SA-numbers</pre>
Then just run the command:
<pre>docker compose up</pre>
it may takes some minutes for pulling images from docker hub repository, for this project have been used the bitnami official image for Laravel 10 and the official image for MariaDB and PHPMyAdmin. However, the DB is not used at all, I initially think may be useful but then I understood that the requirements not need persistance in any data, because I chose to use CSV file also for return the response with elaborated results.

When docker compose up command is done, you can access to the app whit a browser pointing on <a href="http://localhost:9999">localhost:9999</a> and use the App.

# Automatic Unit Tests
To run the automatic Unit Tests of this App, you have to run the command:
<pre>php artisan test</pre>
in the docker container terminal, so, if you have Docker Desktop GUI you can access on the terminal of the container my-app and run the command above, or alternatively, you can 
execute a terminal of the container with this command:
<pre>docker exec -it |mycontainer| bash</pre>
The placeholder |mycontainer| represent the ID of your Docker container running on your PC, to see it, just run <pre>docker ps</pre> command and see the ID corresponding to container named my-app.
After this you can run the command <pre>php artisan test</pre> for phpunit tests.
