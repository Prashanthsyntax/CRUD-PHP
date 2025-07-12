# 📝 Student Registration System

A simple and professional CRUD (Create, Read, Update, Delete) web application for student registration built using **HTML**, **CSS**, **PHP**, and **MySQL**.

## 📌 Features

- ✅ Register a student (Name, Email, Age)
- ✅ View all registered students
- ✅ Edit student details
- ✅ Delete student records
- ✅ Stylish UI with responsive design
- ✅ Mobile-friendly and clean layout

## 🛠️ Tech Stack

- **Frontend:** HTML5, CSS3 (Custom + Responsive Design)
- **Backend:** PHP
- **Database:** MySQL
- **Server:** Apache (e.g., XAMPP / WAMP / MAMP)

---

## ⚙️ Setup Instructions

### 1. Clone or Download the Repository
```bash
git clone https://github.com/your-username/student-registration-system.git
```

### 2. Place the Project in Your Web Server Directory
- For **XAMPP**, move the folder to:  
  `C:\xampp\htdocs\student-registration-system`

### 3. Start Apache and MySQL using XAMPP Control Panel

### 4. Import the Database

- Open **phpMyAdmin** at:  
  `http://localhost/phpmyadmin`

- Create a database named:
  ```sql
  test
  ```

- Run the SQL below in the **SQL tab**:
```sql
CREATE TABLE registration (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  age INT NOT NULL
);
```

### 5. Open the App

- Navigate to:
  ```
  http://localhost/student-registration-system/index.html
  ```

---

## 🗂️ Folder Structure

```
/student-registration-system/
├── index.html           # Registration form
├── connect.php          # Insert logic
├── view.php             # Display all records
├── edit.php             # Edit student form
├── delete.php           # Delete logic
├── style.css            # Main CSS
├── view.css             # Styling for view table
└── README.md            # This file
```

---

## 🙌 Credits

Created by [Prashanth](https://github.com/PrashanthSyntax)

---

## 📃 License

This project is open-source under the [MIT License](LICENSE).
