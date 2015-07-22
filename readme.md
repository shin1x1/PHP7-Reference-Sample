## PHP 7 Reference Sample

[![Build Status](https://travis-ci.org/shin1x1/PHP7-Reference-Sample.svg)](https://travis-ci.org/shin1x1/PHP7-Reference-Sample)

@see [https://github.com/tpunt/PHP7-Reference](https://github.com/tpunt/PHP7-Reference)


### Usage

```
$ git clone this_repo
$ cd this_repo
$ vagrant up

$ vagrant ssh
[vagrant@php7 ~]$ php -v
PHP 7.0.0beta1 (cli) (built: Jul  8 2015 07:42:13)
Copyright (c) 1997-2015 The PHP Group
Zend Engine v3.0.0-dev, Copyright (c) 1998-2015 Zend Technologies
    with Zend OPcache v7.0.6-dev, Copyright (c) 1999-2015, by Zend Technologies

[vagrant@php7 ~]$ cd /vagrant/
[vagrant@php7 vagrant]$ php vendor/bin/phpunit
PHPUnit 4.7.7 by Sebastian Bergmann and contributors.

......................................................

Time: 1.24 seconds, Memory: 4.00Mb

OK (54 tests, 62 assertions)
[vagrant@php7 vagrant]$
```