# UNSHELF

A Library inventory management app.

## Getting Started

-   Copy the `.env.example` file and rename it as `.env` and setup database.
-   On your terminal, run `php artisan serve` and access `localhost:8000` to
    view the site on your browser. Optionally, you can pass `--port=PORT` to
    serve the site on a different port.

        php artisan serve --port=3000

-   run `composer install` to register an APP_KEY

## TODO

-   [ ] setup app
-   [ ] add user and auth
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

#### System

-   request form tracking
-   inventory tracking

#### Tentative Features

-   book reservation
-   notifications when books become available
-   members search book titles, author, isbns, category?
