
# Anonymous Confession App (Laravel)

## Description:
A simple Laravel project where users can submit anonymous confessions by choosing a city, writing a title and a message. Confessions are saved to the database and displayed on a separate page.

---


## 🛠 Features:
- Submit anonymous confessions securely
- Select city from dropdown (multiple cities supported)
- View all confessions on a clean, styled list page
- Secure delete using a 4-digit code
- Fully responsive layout with animations

---
## 💻 Tech Stack
- Backend: Laravel 10 (PHP)
- Database: MySQL (via XAMPP)
- Frontend: HTML, CSS
- Tooling: Composer, Artisan CLI

---

## 💻 Setup Instructions:

1. Clone or download this project
2. Install dependencies:

--composer install

3. **Create `.env` file**:
- Copy from `.env.example`
- Rename it to `.env`
- Update these values:
  ```
  DB_DATABASE=confession_db
  DB_USERNAME=root
  DB_PASSWORD=
  ```

4. **Generate application key**:

--php artisan key:generate

5. **Create the database manually**:
- Open: [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
- Create new database named:
  ```
  confession_db
  ```

6. **Run the migrations**:

php artisan migrate

7. **Start the Laravel development server**:

php artisan serve

8. **Access the app in your browser**:
- If using `php artisan serve`:
  ```
  http://localhost:8000
  ```
- Or using XAMPP (direct Apache route):
  ```
  http://localhost/confession-app/public
  ```

---

## 📸 Screenshots:

| Submit Form | Confession List |
|-------------|-----------------|
| ![Form Page](resources/screenshots/form.jpej) | ![List Page](resources/screenshots/ConfessionList.jpeg) |

---

## ✅ Project Status:
🎉 Completed and fully functional  
📅 July 2025

---

## 👩‍💻 Author:
Jaya Jani (BCA Student)

---

## 📌 Notes:
- No login or user authentication needed
- Frontend styled with basic CSS
- Can be improved further with Bootstrap or Tailwind later
