# 🏦 Enterprise Banking Management System

A full-featured **Enterprise Banking Management System** built with **Laravel, PHP, MySQL, Bootstrap, Blade, and JavaScript**.

This project is designed to simulate the core operations of a modern banking platform, providing centralized management for customers, bank accounts, transactions, loans, employees, ATMs, accounting, and financial reports.

## 🚀 Project Overview

This is a web-based banking management platform that helps bank employees and administrators manage daily banking operations through a centralized dashboard.

### Main Features

* 📊 Dashboard and banking statistics
* 👥 Customer management
* 💳 Bank account management
* 💸 Deposits, withdrawals, and transfers
* 🏦 Loan management
* 🏧 ATM management
* 👨‍💼 Employee management
* 📒 Accounting management
* 📈 Financial and operational reports
* ⚙️ System settings

## 🛠️ Technologies Used

* **PHP**
* **Laravel**
* **MySQL**
* **Blade**
* **Bootstrap**
* **JavaScript**
* **CSS**
* **Vite**
* **Git & GitHub**

## 🧩 System Modules

```text
Dashboard
│
├── Customers
├── Accounts
├── Transactions
├── Loans
├── ATM
├── Employees
├── Accounting
├── Reports
└── Settings
```

## ⚙️ Installation

### 1. Clone the repository

```bash
git clone https://github.com/samehalhadadyoussef-coder/bank-site.git
```

### 2. Enter the project directory

```bash
cd bank-site
```

### 3. Install PHP dependencies

```bash
composer install
```

### 4. Create the environment file

```bash
cp .env.example .env
```

For Windows PowerShell:

```powershell
Copy-Item .env.example .env
```

### 5. Generate the application key

```bash
php artisan key:generate
```

### 6. Configure the database

Open `.env` and configure your MySQL database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=bank_site
DB_USERNAME=root
DB_PASSWORD=
```

### 7. Run migrations

```bash
php artisan migrate
```

If seeders are available:

```bash
php artisan migrate --seed
```

### 8. Install frontend dependencies

```bash
npm install
```

### 9. Build frontend assets

```bash
npm run build
```

For development:

```bash
npm run dev
```

### 10. Start the Laravel server

```bash
php artisan serve
```

Then open:

```text
http://127.0.0.1:8000
```

## 🔐 Security

Sensitive environment configuration is excluded from the repository.

The `.env` file should never be committed to GitHub.

Use `.env.example` as the template for local configuration.

## 📱 Responsive Design

The system interface is designed to work across:

* 💻 Desktop
* 💻 Laptop
* 📱 Mobile
* 📱 Tablet

## 🎯 Project Goals

The project demonstrates practical implementation of:

* MVC architecture
* Database relationships
* CRUD operations
* Laravel Eloquent ORM
* Database migrations
* Blade templates
* RESTful routing
* Form validation
* Financial transaction management
* Responsive dashboard design

## 📸 Screenshots

Screenshots of the dashboard and main system modules can be added here.

## 📌 Project Status

**Status: Active Development 🚧**

The system can be continuously enhanced with additional banking features and improvements.

## 👨‍💻 Developer

**Sameh Alhadad Youssef**

GitHub:

https://github.com/samehalhadadyoussef-coder

## 📄 License

This project is developed for educational, portfolio, and demonstration purposes.
