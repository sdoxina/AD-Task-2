<a name="readme-top">

<br/>

<br />
<div align="center">
  <a href="https://github.com/sdoxina/">
    <img src="./assets/img/buttonconeLogo.png" alt="buttoncone" width="80%" height="auto">
  </a>
  <h3 align="center">buttoncone</h3>
</div>
<div align="center">
  A simple crochet showcase website built with PHP, showcasing the use of PHP declarations, loops, conditionals, arrays, functions, and fragmentation.
</div>

<br />

![](https://visit-counter.vercel.app/counter.png?page=sdoxina/AD-Task-2)

[![wakatime](https://wakatime.com/badge/user/65f5d1d3-0933-4b6c-b6df-d8bf043e70be/project/4680a518-92ea-4110-bd23-4d41c4675419.svg)](https://wakatime.com/badge/user/65f5d1d3-0933-4b6c-b6df-d8bf043e70be/project/4680a518-92ea-4110-bd23-4d41c4675419)

---

<br />
<br />

<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#overview">Overview</a>
      <ol>
        <li>
          <a href="#key-components">Key Components</a>
        </li>
        <li>
          <a href="#technology">Technology</a>
        </li>
      </ol>
    </li>
    <li>
      <a href="#rule,-practices-and-principles">Rules, Practices and Principles</a>
    </li>
    <li>
      <a href="#resources">Resources</a>
    </li>
  </ol>
</details>

---

## Overview

**Buttoncone** is a simple crochet item catalog site that demonstrates important PHP fundamentals including:
- Variable declarations and array handling
- Loops for rendering item listings
- Conditionals for filtering and greetings
- Modular code with reusable functions and fragments

The project displays a categorized collection of handmade crochet items (Clothing, Plushies, Bags), dynamically rendered using PHP arrays and functions.

### How PHP is Used

#### ✅ Declarations & Arrays
- Items are stored in a PHP **array of associative arrays (dictionaries)**. Each dictionary represents an item with properties like `name`, `category`, and `image`.

#### 🔁 Loops
- `foreach` loops are used to iterate over all items and render them as Bootstrap cards.
- Loops also dynamically generate category buttons and item sections based on category.

#### ⚡️ Conditionals
- Items are filtered by category using `if` conditions inside the loop.
- Time-based greetings (“Good Morning,” “Good Afternoon,” etc.) use conditional logic based on the current hour.

#### 🧩 Functions & Fragmentation
- Reusable **functions** like `getGreeting()` and `getAllItems()` are defined in `utils/` and `handlers/` folders to keep logic clean and reusable.
- The page layout is **fragmented** using PHP `require_once`:
  - `components/templates/nav.component.php` for the navbar
  - `components/templates/footer.component.php` for the footer
  - Utility logic and handlers are in separate PHP files
- This approach improves **modularity**, maintainability, and readability.

### Key Components

- Homepage with a dynamic greeting based on time of day
- Items page showing categorized crochet items (Clothing, Plushies, Bags)
- Responsive layout built with Bootstrap
- PHP-driven item rendering using clean, modular code

### Technology

#### Language
![HTML](https://img.shields.io/badge/HTML-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS](https://img.shields.io/badge/CSS-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)

#### Framework/Library
![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)

## Rules, Practices and Principles

<!-- Do not Change this -->

1. Always use `AD-` in the front of the Title of the Project for the Subject followed by your custom naming.
2. Do not rename `.php` files if they are pages; always use `index.php` as the filename.
3. Add `.component` to the `.php` files if they are components code; example: `footer.component.php`.
4. Add `.util` to the `.php` files if they are utility codes; example: `account.util.php`.
5. Place Files in their respective folders.
6. Different file naming Cases
   | Naming Case | Type of code         | Example                           |
   | ----------- | -------------------- | --------------------------------- |
   | Pascal      | Utility              | Accoun.util.php                   |
   | Camel       | Components and Pages | index.php or footer.component.php |
8. Renaming of Pages folder names are a must, and relates to what it is doing or data it holding.
9. Use proper label in your github commits: `feat`, `fix`, `refactor` and `docs`
10. File Structure to follow below.

```
AD-ProjectName
└─ assets
|   └─ css
|   |   └─ name.css
|   └─ img
|   |   └─ name.jpeg/.jpg/.webp/.png
|   └─ js
|       └─ name.js
└─ components
|   └─ name.component.php
|   └─ templates
|      └─ name.component.php
└─ handlers
|   └─ name.handler.php
└─ layout
|   └─ name.layout.php
└─ pages
|  └─ pageName
|     └─ assets
|     |  └─ css
|     |  |  └─ name.css
|     |  └─ img
|     |  |  └─ name.jpeg/.jpg/.webp/.png
|     |  └─ js
|     |     └─ name.js
|     └─ index.php
└─ staticData
|  └─ name.staticdata.php
└─ utils
|   └─ name.utils.php
└─ vendor
└─ .gitignore
└─ bootstrap.php
└─ composer.json
└─ composer.lock
└─ index.php
└─ readme.md
└─ router.php
```
> The following should be renamed: name.css, name.js, name.jpeg/.jpg/.webp/.png, name.component.php(but not the part of the `component.php`), Name.utils.php(but not the part of the `utils.php`)

## Resources

| Title        | Purpose                                                                       | Link          |
| ------------ | ----------------------------------------------------------------------------- | ------------- |
| Creating a Responsive Navigation Bar  | Provide guidance on creating a responsive navbar using Bootstrap 5 | [youtube.com](https://www.youtube.com/watch?v=h5apE3E72wY&list=PLL_WPHglaFqyYdX6ED168NWAtEmklolVH&index=3) |
