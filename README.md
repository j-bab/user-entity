# User Entity POC

An Example self-validating User Entity written in vanilla PHP

# Getting started

clone this repository, and enter the directory

## CLI
assuming you have php 7.4+ and composer installed

run 
`composer install`
to fetch the required packages

run
`.\vendor\bin\phpunit tests`
to run the test suite

## Docker
assuming you have docker installed on your system

run 
`docker-compose run composer install`
to fetch the required packages

run 
`docker-compose run phpunit tests`
to run the test suite
