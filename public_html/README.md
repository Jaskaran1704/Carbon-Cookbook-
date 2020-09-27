# README #

This README would normally document whatever steps are necessary to get your application up and running.

### What is this repository for? ###

* Quick summary
* Version
* [Learn Markdown](https://bitbucket.org/tutorials/markdowndemo)

### How do I get set up? ###

* Summary of set up
* Configuration
* Dependencies
* Database configuration
* How to run tests
* Deployment instructions

### Docker Compose

We use Docker Compose to launch this application. Here is how to do it:

```
docker-compose up -d --build
```

See in the docker-compose.yml file for which ports it listens on.

### Database migrations

We use Flyway to manage the different SQL scripts for each change to the database schema.
Docker Compose should run flyway scripts automatically. Simply add scripts under flyway/sql/
and make sure to follow the numbering system of flyway.

### Contribution guidelines ###

* Writing tests
* Code review
* Other guidelines

### Who do I talk to? ###

* Repo owner or admin
* Other community or team contact
