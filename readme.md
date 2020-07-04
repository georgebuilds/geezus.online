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

#### ADDING CUSTOM HANDLERS

Add new class to /app/ActionHandlers or /app/IntentHandlers respectively. The 
name of the class should match the name of the intent or action in DialogFlow. 
Space characters from DialogFlow intent/action names will be removed, and dashes will be replaced
with underscores. As an example, the "Look Up Image" action would be matched up with the LookUpImage.php class, 
and so forth. The namespace of your handler classes should match PSR4 standards. Using the 
same example as before, the full name of the new class would be

`\Geezus\ActionHandlers\LookUpImage`

Your handler should have a method called "run" . Feel free to implement the provided HandlerInterface 
 interface to ensure ongoing compatibility.