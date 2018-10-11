# PHP LogBucket

Library for easy access to the LogBucket.org API

## Installation ##

1) Install via Composer

```
composer require sinevia/php-logbucket
```

2) Manually download

## How to Use ##

1) First download and install the library

2) Get an account at http://logbucket.org/

3) Create a new log bucket and get the API key

4) Use the library to log messages

```
\LogBucket::alert('KEY','An alert message');
\LogBucket::debug('KEY','An ordinary debug message');
\LogBucket::critical('KEY','A critical message');
\LogBucket::info('KEY','An information message');
\LogBucket::emergency('KEY','An emergency message');
\LogBucket::error('KEY','An error message'); 
```

## History ##
- 2018.10.11 - Added to GitHub, and Packagist.
- 2013.07.07 - Version 2.0 released. Unicode support added. Bugs fixed.
- 2013.05.11 - Version 1.0 released.
