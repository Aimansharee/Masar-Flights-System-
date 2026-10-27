# ✈️ Masar Flights
### A Comprehensive Online Flight Booking and Management System

**Masar Flights** is a comprehensive web-based flight booking and management system developed using **PHP** and **MySQL**, with modern, interactive user interfaces built using **Bootstrap** and **jQuery**.

The system provides passengers with a seamless flight search and booking experience while offering administrators a complete dashboard for managing airlines, airports, flight schedules, reservations, users, and system settings.

---

## 📌 Table of Contents

1. [Key Features](#-key-features)
2. [Technologies and Libraries Used](#-technologies-and-libraries-used)
3. [Database Structure](#-database-structure)
4. [System Requirements](#-system-requirements)
5. [Installation and Setup Guide](#-installation-and-setup-guide)
6. [Default Login Credentials](#-default-login-credentials)
7. [Project File and Folder Structure](#-project-file-and-folder-structure)
8. [Troubleshooting](#-troubleshooting)

---

## ✈️ Key Features

### 1. Client Portal

- **Advanced Flight Search:** Search for flights based on departure airport, arrival airport, departure date, and return date, with support for both one-way and round-trip bookings.

- **Detailed Flight Information:** View available flights, departure and arrival times, airlines and their logos, flight or aircraft numbers, ticket prices, and remaining seat availability.

- **Individual and Group Reservations:** Book one or multiple seats in a single reservation and enter passenger information, including full name, address, and phone number.

- **User Authentication:** Allow passengers to register new accounts and securely log in to the system.

- **About Us Page:** An interactive informational page whose content can be managed through the administration dashboard.

### 2. Admin Panel

- **Airlines Management:** Add, edit, and delete airline records, including uploading airline logos.

- **Airports Management:** Add, update, and delete airports, including their corresponding cities and countries.

- **Flights Management:** Schedule and manage flights by assigning airlines, departure and arrival airports, flight times, seating capacity, and ticket prices.

- **Booking Management:** Monitor flight reservations, view passenger details, modify passenger information, and cancel bookings when necessary.

- **User Management:** Manage system administrator and staff accounts.

- **System Settings:** Customize the system name (**Masar Flights**), contact email address, phone number, banner or cover image, and About Us content through a **WYSIWYG Editor**.

---

## 🛠 Technologies and Libraries Used

### Backend

- **Programming Language:** PHP 7.2+
- **Database Connectivity:** MySQLi (Object-Oriented)
- **Session Management and Authentication:** PHP Sessions

### Database

- **MySQL / MariaDB**

### Frontend

- **HTML5 & CSS3:** Used to structure and style the user interface.
- **Bootstrap 4.5.0:** Provides responsive layouts and interactive components compatible with desktops, tablets, and mobile devices.
- **jQuery:** Handles AJAX requests and dynamically updates content without requiring full-page reloads.
- **Select2:** Provides searchable dropdown menus for selecting airports and airlines.
- **DataTables:** Enhances data tables with sorting, searching, and pagination capabilities.
- **Bootstrap Datepicker & DateTimePicker:** Enables convenient selection of flight dates and times.
- **FontAwesome 5 & Boxicons:** Provides modern icons for navigation and interface design.
- **jQuery TE:** A rich-text editor used to manage formatted content in the administration dashboard.

---

## 🗄 Database Structure

**Database Name:** `masar_flights_db`

The SQL file located at `database/masar_flights_db.sql` contains the following tables:

| Table Name | Description |
|---|---|
| `system_settings` | Stores general system settings, including the system name, email address, phone number, cover image, and website description. |
| `airlines_list` | Stores airline information and uploaded airline logos. |
| `airport_list` | Stores airport records and their geographical locations. |
| `flight_list` | Stores scheduled flight details, departure and arrival times, ticket prices, and seat availability. |
| `booked_flight` | Stores flight reservations, passenger records, and passenger contact information. |
| `users` | Stores administrator and system user accounts, authentication credentials, and access permissions. |

---

## 💻 System Requirements

To install and run **Masar Flights**, ensure that your environment meets the following requirements:

- **Local Web Server Environment:** [XAMPP](https://www.apachefriends.org/) (recommended), WampServer, or Laragon.
- **Web Server:** Apache (running and properly configured).
- **Database Server:** MySQL or MariaDB.
- **Web Browser:** A modern browser such as Google Chrome, Microsoft Edge, Mozilla Firefox, or Safari.

### Required PHP Extensions

- `mysqli`
- `session`
- `json`
- `fileinfo`
- `mbstring`
- `gd`

---

## 🚀 Installation and Setup Guide

Follow the steps below to install and run the project on your local machine.

### Step 1: Start the XAMPP Server

1. Open the **XAMPP Control Panel**.
2. Click **Start** next to **Apache** and **MySQL**.
3. Ensure that both services are running successfully and highlighted in green.

### Step 2: Copy the Project Files

1. Navigate to your XAMPP installation directory.
2. Locate the `htdocs` folder.
3. Copy the entire `Masar_Flights` project folder into `htdocs`.

**Example path on Windows:**

`C:\xampp\htdocs\Masar_Flights`

### Step 3: Create and Import the Database

1. Open your web browser and navigate to phpMyAdmin:

   `http://localhost/phpmyadmin`

2. Click **New** in the left sidebar.

3. Enter the following database name:

   `masar_flights_db`

4. Select the collation:

   `utf8mb4_general_ci`

5. Click **Create**.

6. Select the newly created database and navigate to the **Import** tab.

7. Click **Choose File** and select:

   `database/masar_flights_db.sql`

8. Click **Go** to import the database tables and sample data.

### Step 4: Verify Database Connection Settings (Optional)

The default database connection configuration is defined in:

`admin/db_connect.php`

**Default connection:**

```php
$conn = new mysqli('localhost', 'root', '', 'masar_flights_db');
```

If your MySQL server uses a password, replace the empty password parameter with your local database password.

**Note:** Do not commit real database passwords or other sensitive credentials to a public repository.

### Step 5: Access the Application

Once the installation is complete, open the following URLs in your browser.

**Client Portal:**

`http://localhost/Masar_Flights`

**Administration Dashboard:**

`http://localhost/Masar_Flights/admin`

---

## 🔑 Default Login Credentials

### Administrator Account

**Admin Login URL:**

`http://localhost/Masar_Flights/admin`

**Username:** `admin`

**Password:** `admin123`

**Security Notice:** These are development/demo credentials only. Change or disable them before deploying the application to a public server. Do not use default credentials in a production environment.

### Demo Passenger Account

**Username:**

`gwilson@sample.com`

Alternatively, navigate to the **Sign Up** page to create a new passenger account.

---

## 📂 Project File and Folder Structure

```text
Masar_Flights/
├── admin/                         # Administration dashboard
│   ├── assets/                    # Admin assets and libraries
│   ├── admin_class.php            # Central CRUD operations handler
│   ├── ajax.php                   # AJAX request handler
│   ├── db_connect.php             # Database connection
│   ├── airlines.php               # Airline management
│   ├── airport.php                # Airport and city management
│   ├── flights.php                # Flight scheduling and listing
│   ├── manage_flight.php          # Add and edit flight details
│   ├── booked.php                 # Booking and passenger records
│   ├── manage_booked.php          # Edit passenger and booking details
│   ├── site_settings.php          # System configuration
│   ├── users.php                  # Administrator user management
│   ├── login.php                  # Admin login page
│   ├── topbar.php                 # Admin navigation bar
│   └── index.php                  # Admin dashboard homepage
├── assets/                        # Images and airline logos
├── css/                           # Public frontend stylesheets
├── database/
│   └── masar_flights_db.sql       # Database schema and sample data
├── js/                            # Public frontend JavaScript files
├── about.php                      # About Us page
├── book_flight.php                # Flight booking form
├── flights.php                    # Flight search results
├── footer.php                     # Footer and included libraries
├── get_fields.php                 # Dynamic passenger input fields
├── header.php                     # Header and frontend libraries
├── home.php                       # Homepage and flight search
├── index.php                      # Main application entry point
├── login.php                      # Passenger login
├── signup.php                     # Passenger registration
├── requirements.txt               # Server and library requirements
└── README.md                      # Complete project documentation
```

---

## ❓ Troubleshooting

### 1. Database Connection Error: `Could not connect to mysql`

If the application cannot connect to the database:

- Ensure that the MySQL service is running in the XAMPP Control Panel.
- Verify that the database has been created with the correct name: `masar_flights_db`.
- Confirm that the SQL file was successfully imported.
- Check the database username and password in `admin/db_connect.php`.

### 2. Airline Logos or Cover Images Are Not Displayed

If airline logos or website cover images do not appear:

- Verify that the `assets/img/` directory exists.
- Ensure that the required image files are available.
- Check that the directory has appropriate read and write permissions.

### 3. Error 404: Not Found

If the application returns a 404 error:

- Make sure the project folder is placed inside the `htdocs` directory.
- Verify that the folder name matches the URL path.

For example, if your project folder is named `Masar_Flights`, the application URL should be:

`http://localhost/Masar_Flights`

- Ensure that the Apache server is running correctly.

---

## 📄 Project Overview

**Project Name:** Masar Flights

**Project Type:** Web-Based Flight Booking and Management System

**Backend:** PHP, MySQL, MySQLi

**Frontend:** HTML5, CSS3, Bootstrap, jQuery

**Main Modules:** Flight Search, Ticket Booking, Passenger Management, Airlines Management, Airports Management, Flight Scheduling, User Management, and Administration Dashboard.
