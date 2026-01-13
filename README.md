# ⚡ ElectroManager

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)
![Alpine.js](https://img.shields.io/badge/Alpine.js-8BC0D0?style=for-the-badge&logo=alpine.js&logoColor=white)

> A modern, responsive e-commerce platform scaffolding for Hiking Gear & Home Appliances.

---

## 🌟 Features

* **Modern UI/UX**: Built with **Tailwind CSS**, featuring glassmorphism effects, heavy drop shadows, and a clean, spacious layout.
* **Smooth Animations**: **Alpine.js** powers the entrance animations, mobile menu transitions, and interactive elements.
* **Responsive Design**: Fully responsive grid layouts and navigation that adapts from mobile w/ hamburger menu to full desktop experience.
* **Dynamic Routing**: data-driven product pages handled via Laravel Routes (no database required for this demo).
* **Custom 404**: A beautifully designed error page that guides users back home.

---

## 📸 Screenshots

| Home Page | Product Grid |
|:---:|:---:|
| *Hero section with fade-in animations* | *Responsive cards with hover effects* |

---

## 🚀 Getting Started

### Prerequisites

Ensure you have the following installed:

* [PHP](https://www.php.net/) >= 8.1
* [Composer](https://getcomposer.org/)

### Installation

1. **Clone the repository** (if applicable) or navigate to the project directory.

2. **Install Dependencies**

    ```bash
    composer install
    ```

3. **Environment Setup**

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. **Run the Application**

    ```bash
    php artisan serve
    ```

    Visit `http://localhost:8000` in your browser.

---

## 📂 Project Structure

Key files created for this scaffold:

```text
resources/views/
├── layouts/
│   └── Master_page.blade.php    # Main layout with CDN links & Fonts
├── partials/
│   ├── Menu.blade.php           # Responsive Nav with Glassmorphism
│   └── Footer.blade.php         # Stylish Footer
├── errors/
│   └── 404.blade.php            # Custom Error Page
├── Home.blade.php               # Hero Section & Landing
└── Produits.blade.php           # Product Grid (Hiking/Appliances)

routes/
└── web.php                      # Contains static data logic
```

---

## 🎨 Design System

* **Font**: [Poppins](https://fonts.google.com/specimen/Poppins) (Google Fonts)
* **Colors**: Custom `brand` color palette extending Tailwind's default colors (Sky/Blue hues).
* **Icons**: [FontAwesome](https://fontawesome.com/) 6.4.0

---

## 📝 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
