#  Laravel Video Game Web Shop

Created by **Matija Kojčić**

This is a web-based video game store built using Laravel. It features user authentication, an admin dashboard, CRUD functionality for games, user orders, and comment management.

---

## 🌐 Available Languages

- [English](README.md)
- [Srpski](README.sr.md)
- [日本語](README.ja.md)

---

##  Setup Instructions

1. Import the `mkojcic.sql` database into your local MySQL server.
2. Run `start.bat` to launch the Laravel development server.
3. Open your browser and go to [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

##  Features

- **Home Page**: Displays featured video games.
- **Game Details**: Click "Опширније" to view game details and scroll down to the "Поручи" button to place an order.
- **User Dashboard**:
  - View and manage your game orders.
  - Leave reviews for games you've purchased.
  - Cancel existing orders.
- **Admin Dashboard**:
  - Accessible only to admin users.
  - Manage:
    - Games (CRUD)
    - Users (CRUD, admin-only)
    - Comments (CRUD)
  - Editors can manage games and comments but cannot access the Users table.
  - Regular users cannot access the admin dashboard at all.

---

##  Test Accounts

| Role   | Email              | Password |
|--------|--------------------|----------|
| Admin  | admin@pwa.rs       | admin    |
| Editor | editor@pwa.rs      | editor   |
| User   | user@pwa.rs        | user     |

---

## Planned Features

- Shopping cart system.
- Multilingual support on the website itself (in addition to this README).