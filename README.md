# UNSHELF

A Library inventory management app.

## Getting Started (work in progress)

-   Copy the `.env.example` file and rename it as `.env` and setup database.
-   On your terminal, run `php artisan serve` and access `localhost:8000` to
    view the site on your browser. Optionally, you can pass `--port=PORT` to
    serve the site on a different port.

        php artisan serve --port=3000

-   run `composer install` to register an APP_KEY and install the dependencies
-   run `npm install && npm run dev` for the UI
-   run `php artisan migrate` to initialize the database

## Content

-   [TODO](#todo)
-   [User Story](#user-story)
    -   [Users](#users)
        -   [Book](#book)
        -   [Librarian](#librarian)
        -   [User](#user)
        -   [Guest](#guest)
        -   [System](#system)
        -   [Tentative Features](#tentative-features)

## TODO

**Session 1**

-   [x] setup app
-   [x] add user and auth
-   [ ] user (admin) can add a category
-   [ ] user (admin) can edit a category
-   [ ] user (admin) can remove a category
-   [ ] user (admin) can add a book
-   [ ] user (admin) can edit a book
-   [ ] user (admin) can remove a book

## User Story

### Users

-   Admin?
-   Librarian
-   User

#### Book

-   has title
-   has a unique identification number
-   can have multiple copies
    -   book item
-   author
-   category
-   publication date

#### Librarian

-   can add books
-   can view books
-   can update a book
-   can approve request forms
-   can decline request forms
-   can set status of a book
    -   available
    -   lost
    -   lent

#### User

-   can add books to a request form
    -   check-out the book
-   can view books
-   rate books?
-   can reserve a book or books
-   can borrow up to 5 books per request
-   one request per day
-   can borrow books for only 10 days

#### Guest

-   can can register to add books to a request form

#### _System_

-   request form tracking
-   inventory tracking

#### _Tentative Features_

-   book reservation
-   notifications when books become available
-   members search book titles, author, isbns, category?
