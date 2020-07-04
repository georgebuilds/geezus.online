#### REQUIREMENTS

- PHP 7.3
- An existing DialogFlow chatbot agent

#### DialogFlow CONFIGURATION
1. Set fulfillment webhook url to https://YOURSITE.COM/hook.php

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

Geezus will try to find a matching action handler first. If no matching action handlers are found, Geezus
will try to find a matching intent handler second. To add your own handler, 
add a new class to /app/ActionHandlers or /app/IntentHandlers respectively. The 
name of the class should match the name of the intent or action in DialogFlow. 
Space characters from DialogFlow intent/action names will be removed, and dashes will be replaced
with underscores. As an example, the "Look Up Image" action would be matched up with the LookUpImage.php class, 
and so forth. The namespace of your handler classes should match PSR4 standards. Using the 
same example as before, the full name of the new class would be

```php
\Geezus\ActionHandlers\LookUpImage
```

Your handler should have a method called "fulfill" . Feel free to implement the provided HandlerInterface 
 interface to ensure ongoing compatibility.
