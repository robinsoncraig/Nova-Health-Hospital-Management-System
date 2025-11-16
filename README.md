# Nova Health Hospital Management System

![GitHub Repo Size](https://img.shields.io/github/repo-size/robinsoncraig/Nova-Health-Hospital-Management-System?style=flat-square)
![GitHub Last Commit](https://img.shields.io/github/last-commit/robinsoncraig/Nova-Health-Hospital-Management-System?color=blue)
![GitHub License](https://img.shields.io/github/license/robinsoncraig/Nova-Health-Hospital-Management-System)
![GitHub Stars](https://img.shields.io/github/stars/robinsoncraig/Nova-Health-Hospital-Management-System?style=social)

A complete hospital management system built with **PHP**, **MySQL**, and **Bootstrap**, featuring user roles for **Admin**, **Doctor**, and **Patient**.

---

## 🚀 Features

### 🏷️ Feature Badges

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![Apache](https://img.shields.io/badge/Apache-D22128?style=for-the-badge&logo=apache&logoColor=white)
![Git](https://img.shields.io/badge/Git-F05032?style=for-the-badge&logo=git&logoColor=white)
![GitHub](https://img.shields.io/badge/GitHub-181717?style=for-the-badge&logo=github&logoColor=white)


A fully featured hospital management platform built to streamline operations, enhance communication, and digitize medical workflows. Key features include:

- **Role‑Based Access Control (RBAC):** Separate dashboards for Admin, Doctor, and Patient with custom permissions.
- **Smart Appointment Management:** Patients can book appointments; doctors can approve, reschedule, or cancel in real time.
- **Electronic Medical Records (EMR):** Secure patient records, diagnoses, prescriptions, and medical history tracking.
- **Doctor Scheduling System:** Doctors can manage availability; system prevents double‑booking.
- **Patient Profile & History:** Centralized patient information, past visits, prescriptions, and lab records.
- **Admin Operations Panel:** Manage doctors, patients, appointments, system settings, and medical data.
- **Responsive UI:** Works smoothly on mobile, tablet, and desktop using Bootstrap.
- **Secure Login System:** Password‑protected access with validation and session management.
- **User-Friendly Navigation:** Clean, modern dashboard layout for better user experience.
- **Database-Driven Architecture:** MySQL‑optimized structure for quick data access.

---

## 🖼️ Screenshots

### 🏠 Homepage
![Homepage](https://raw.githubusercontent.com/robinsoncraig/Nova-Health-Hospital-Management-System/main/images/homepage.png)

### 👨‍💼 Admin Dashboard
![Admin Dashboard](https://raw.githubusercontent.com/robinsoncraig/Nova-Health-Hospital-Management-System/main/images/admin_dashboard.png)

### 👨‍⚕️ Doctor Dashboard
![Doctor Dashboard](https://raw.githubusercontent.com/robinsoncraig/Nova-Health-Hospital-Management-System/main/images/doctor_dashboard.png)

### 🧑‍🦽 Patient Dashboard
![Patient Dashboard](https://raw.githubusercontent.com/robinsoncraig/Nova-Health-Hospital-Management-System/main/images/patient_dashboard.png)

---

## 🔐 Login Credentials

### 👨‍💼 Admin Login
**Login ID:** `admin`  
**Password:** `newpassword123`

### 👨‍⚕️ Doctor Login
**Login ID:** `41945893`  
**Password:** `12345678`

### 🧑‍🦽 Patient Login
**Login ID:** `41945893`  
**Password:** `12345678`

> ⚠ Note: Doctor and Patient share the same login ID and password for demo purposes.

---

## 📦 Installation Guide

Follow these steps to properly set up the system on your local machine or production server:

### ✔ Step 1: Clone or Download the Project
```bash
git clone https://github.com/robinsoncraig/Nova-Health-Hospital-Management-System.git
```
Or download and extract the ZIP file.

### ✔ Step 2: Move Project to Server Directory
Place the folder in:
- **XAMPP:** `htdocs/`
- **WAMP:** `www/`
- **Laragon:** `www/`

### ✔ Step 3: Create Database
1. Open **phpMyAdmin**
2. Click **New** → Create a database named:
```
nova_health
```
3. Import the provided `.sql` file located in the **database/** directory.

### ✔ Step 4: Configure Database Connection
Open the `config.php` file and update your database credentials:
```php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'nova_health';
```

### ✔ Step 5: Run the Project
Start Apache & MySQL, then visit:
```
http://localhost/Nova-Health-Hospital-Management-System/
```

### ✔ Step 6: Login Using Demo Credentials
Use the admin, doctor, or patient accounts provided below.

---

## 🛠️ Tech Stack
| Category | Technology |
|----------|------------|
| **Frontend** | HTML5, CSS3, Bootstrap 5 |
| **Backend** | PHP (Pure PHP – no framework) |
| **Database** | MySQL |
| **Server** | Apache (XAMPP / WAMP / Laragon) |
| **Version Control** | Git & GitHub |
| **UI Assets** | Bootstrap Icons, Custom CSS |

---

## 📁 Folder Structure
```
Nova-Health-Hospital-Management-System/
│── images/
│── css/
│── js/
│── admin/
│── doctor/
│── patient/
│── database/
│── index.php
│── config.php
└── README.md
```

---

## 📜 License
This project is licensed under the **MIT License**.

---

## ⭐ Support the Project
If you like this project, please **star the repo** on GitHub!

👉 https://github.com/robinsoncraig/Nova-Health-Hospital-Management-System
