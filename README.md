# TechByte

> 🖥️ **A shop that runs on Oracle** — a Laravel computer store where the business logic lives in PL/SQL, not only in PHP

**TechByte** is a computer store: laptops, desktops, components and accessories, with a basket, favourites, opinions, complaints and a newsletter. What makes it different from a standard Laravel shop is the database — it runs against **Oracle 19c** through `yajra/laravel-oci8`, and a good part of the logic sits in PL/SQL procedures and functions rather than in controllers.

There are two front doors and two guards: customers get a dashboard, a profile and an order history; employees get their own area behind a separate `auth:employee` guard. A static HTML prototype of the whole shop lives beside the Laravel application, in `frontend/`.

![Laravel](https://img.shields.io/badge/Laravel-11-FF2D20?logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.2-777BB4?logo=php&logoColor=white)
![Oracle](https://img.shields.io/badge/Oracle-19c-F80000?logo=oracle&logoColor=white)
![PL/SQL](https://img.shields.io/badge/PL%2FSQL-27%20routines-F80000?logo=oracle&logoColor=white)
![Blade](https://img.shields.io/badge/Blade-templates-F05340?logo=laravel&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-green)

**Live:** [techbyte.dawidolko.pl](https://techbyte.dawidolko.pl)

---

## 🎯 Key Features

- **Oracle as the primary database** — not MySQL with an Oracle badge. The default connection is `oracle`, the driver is `yajra/laravel-oci8`, and the schema, sequences and triggers are in `plsql-oracle19c/`.
- **Logic in PL/SQL where it belongs** — twenty-seven procedures, functions and triggers: adding and updating products, registering customers, searching by name or e-mail, promotional listings, average ratings and top-rated products.
- **Two guards, two areas** — `auth:customer` opens the dashboard, profile, favourites, basket and complaints; `auth:employee` opens the staff side. Neither can see the other's routes.
- **Favourites and a basket per account** — both are stored against the customer, including adding several items at once from a list.
- **Opinions and complaints as first-class records** — a customer rates a product or files a complaint, and both land in their own tables with their own PL/SQL support for averages.
- **A catalogue split the way a computer shop is** — computers, laptops and components each have their own listing and product page, with specifications in a separate table.
- **Search across the catalogue** — a dedicated controller rather than a filter tacked onto the listing.
- **A static prototype alongside the application** — `frontend/` holds the full HTML/CSS/JS version the Laravel views were built from.

---

## 🗄️ Database

The entity-relationship diagram is in `entity-relationship-diagram/`, and the scripts are in `plsql-oracle19c/`:

| File                  | What it does                                             |
| --------------------- | -------------------------------------------------------- |
| `export.sql`          | Schema — tables, constraints, sequences.                 |
| `export_of_data.sql`  | The catalogue and reference data.                        |
| `procedures.sql`      | The 27 procedures, functions and triggers.               |
| `delete.sql`, `clear.sql` | Tear-down and truncation, for a clean re-run.        |
| `python-codes/`       | Helper scripts used to generate and load data.           |

Tables behind the shop: `products`, `categories`, `products_categories`, `specifications`, `customers`, `employees`, `orders`, `orders_products`, `opinions`, `complaints`, `sales`, `newsletter`.

---

## 🛠️ Technology Stack

| Technology            | Version | Role                                                     |
| --------------------- | ------- | -------------------------------------------------------- |
| **Laravel**           | 11      | Routing, Eloquent, Blade, two authentication guards.      |
| **PHP**               | 8.2     | Runtime.                                                  |
| **Oracle Database**   | 19c     | Primary database; schema and logic in PL/SQL.             |
| **yajra/laravel-oci8**| 11.2    | Oracle driver for Eloquent.                               |
| **Stripe PHP**        | 14.6    | Payment integration.                                      |
| **HTML/CSS/JS**       | —       | The static prototype in `frontend/`.                      |

---

## 🚀 Getting Started

### Prerequisites

- PHP 8.2 with Composer and the OCI8 extension
- Oracle Database 19c (or Oracle XE) reachable from the app
- Node.js 18 for the asset build

### 1. Clone the repository

```bash
git clone https://github.com/dawidolko/TechByte-Project-Laravel.git
cd TechByte-Project-Laravel/backend
```

### 2. Install and configure

```bash
composer install
cp .env.example .env
php artisan key:generate
```

Point `.env` at the Oracle instance:

```env
DB_CONNECTION=oracle
DB_HOST=localhost
DB_PORT=1521
DB_SERVICE_NAME=XEPDB1
DB_USERNAME=techbyte
DB_PASSWORD=secret
```

### 3. Load the schema

Run the scripts in `plsql-oracle19c/` in this order, with SQL*Plus or SQL Developer:

```sql
@export.sql             -- tables, constraints, sequences
@export_of_data.sql     -- catalogue and reference data
@procedures.sql         -- procedures, functions, triggers
```

### 4. Run

```bash
php artisan serve       # http://127.0.0.1:8000
```

The static prototype needs no server — open `frontend/index.html` directly.

---

## 📁 Project Structure

```
TechByte-Project-Laravel/
├── backend/                          # the Laravel application (Oracle connection)
│   ├── app/
│   │   ├── Http/Controllers/         # Main, Computers, Laptops, Components,
│   │   │                             # Cart, Favorite, Search, Opinion,
│   │   │                             # Complaint, Newsletter, Customer, Employee
│   │   └── Models/                   # Products, Categories, Specifications,
│   │                                 # Customers, Employees, Sale, Opinions…
│   ├── config/database.php           # default connection: oracle
│   └── routes/web.php                # customer and employee route groups
├── backend-clear-laravel/            # a clean Laravel skeleton for comparison
├── frontend/                         # the static HTML/CSS/JS prototype
├── plsql-oracle19c/                  # schema, data, procedures, helper scripts
├── entity-relationship-diagram/      # the ERD
└── docs/                             # documentation, prototypes, diagrams
```

---

## 📄 License

MIT © [Dawid Olko](https://dawidolko.pl)
