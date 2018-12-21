# Project Title

PROPERTY FINDER TRIP SORTER

This projects intends to sort a list of boarding cards given in an itinerary. 
It assumes that the input list of $boardingCards is not cyclic and there 
is one ticket from every BoardingCard city except final destination.
e.g ["Mombasa":"Nairobi","Nairobi":"Kisumu","Kisumu":"Kampala"]
It uses hashing technique to avoid building a graph
All steps require O(n) time so overall time complexity is O(n).

To add a means of transport the abstract class MeanTransport can be extended.
(The strategy design pattern can be considered to run algorithms at run time though not used in this case)

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites
```
* You need to have PHP 5.4. and above. Also you need apache web server to be running.
* For unit tests you need to have PHPUNIT instaled.
* For managing UNIT test depenedencies you need to have composer.
```

### Installing
```
Clone this repository to your web root folder. 
* Run command $composer install.
* Run command $composer update.
* And on your favourite browser go to http://<yourdomain/PropertyFinder/ to see the stater example
```

## Running the tests
```
Check the file index.php to see how to use/run API 

Run This PHPUNIT command to test sorting algorithm: $phpunit --bootstrap ./vendor/autoload.php tests/src/Models/JourneyTest.php
```

## Built With

* [PHP](www.php.net/) - The server side language used
* [Apache](https://httpd.apache.org/) - Server used to run application
* [PHPUNIT](https://phpunit.de) - Used to run unit tests

## Authors
* **Davison Mghanga Kimigho <dkimigz@gmail.com>** - *Initial work* - [Kimigx](https://github.com/kimigxfoxy)

