# CedrickValera_IT0049

TFA1
This repository is for Technicals required for the course / subject of IT0049
Submitted by: Cedrick Nicolas Valera

## Overview

A four-page CodeIgniter 4 application built as the first version of a basic Point-of-Sale (POS) system. This activity focuses on routing, controllers, and views — no database is used yet. The Customer Accounts and User Accounts pages use static PHP arrays as a temporary, in-memory data source.

- `app/Controllers/Pages.php` — handles the landing and about pages
- `app/Controllers/Customers.php` — holds the static customer array and passes it to the view
- `app/Controllers/Users.php` — holds the static user array and passes it to the view
- `app/Views/pages/` — landing and about page templates
- `app/Views/customers/index.php` — loops through the customer array with `foreach`
- `app/Views/users/index.php` — loops through the user array with `foreach`
- `app/Config/Routes.php` — registers all four routes

## Running Locally
