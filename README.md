# PHP & MySQL Project 

A web application developed with PHP and MySQL. This project is designed to be run in a local environment using XAMPP or similar tools.

## 🛠 Features
* Dynamic content management with PHP.
* Relational database using MySQL.
* CRUD operations (Create, Read, Update, Delete).

## 📋 Prerequisites
To run this project, you need to have installed:
* [XAMPP](https://www.apachefriends.org/index.html) (Apache + MySQL) version 3.2.1.
* PHP 5.5.24

## 🚀 Installation & Setup

1.  **Clone the repository:**
    ```bash
    git clone https://github.com/vihusebu/HELPDESK.git
    ```

2.  **Move the project:**
    Copy the project folder to your XAMPP directory (usually `C:/xampp/htdocs/`).

3.  **Database Setup:**
    * Open XAMPP Control Panel and start **Apache** and **MySQL**.
    * Go to [http://localhost/phpmyadmin/](http://localhost/phpmyadmin/).
    * Create a new database (`helpdesk1`).
    * Import the `helpdesk1.sql` file located in the project root.

4.  **Configuration:**
    * Open `config.php` (or your connection file) and update the database credentials if necessary:
        * **Host:** localhost
        * **User:** root
        * **Password:** (empty by default)

5.  **Run the app:**
    Open your browser and go to `http://localhost/your-project-folder/`.

---
*Building, automating, and learning something new every day.*
