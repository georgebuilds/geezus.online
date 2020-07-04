#### REQUIREMENTS

- PHP 7.3
- An existing DialogFlow chatbot agent

#### INSTALLATION

1. Download the files or clone the repository
2. Install the dependencies

`composer install`

3. Change properties in configuration.php to your liking
4. Add "X-Geezus-Key" header in DialogFlow console's fulfillment settings, using key from above configuration file 
5. Run Geezus

`php -S localhost:80 -t public`

6. Visit Geezus with your web browser at http://localhost/