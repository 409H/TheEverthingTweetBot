# The Everything Tweet Bot

This is a Twitter bot that makes use of Heroku and Heroku Scheduler to tweet a phrase of "[adjective] [noun] [suffix]" such as "Crypto Punks" or "Awesome Punks".

The output being `{$prefix}{$adjective}{$noun}{$suffix}`

It is written in PHP because brother likes it
![/jordan.png](/jordan.png)

```php
// Run test cases
composer run test

// Run script locally
composer run app
```

### Installation

##### Heroku

```
heroku config:set WORDS_PREFIX=""
heroku config:set WORDS_SUFFIX=""
heroku config:set WORDS_LIST_URL=""

heroku config:set TWITTER_OAUTH_ACCESS_TOKEN=""
heroku config:set TWITTER_OAUTH_ACCESS_TOKEN_SECRET=""
heroku config:set TWITTER_CONSUMER_KEY=""
heroku config:set TWITTER_CONSUMER_SECRET=""
```