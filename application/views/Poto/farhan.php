<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Farhan Maulana - Portfolio</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #333;
      color: #fff;
      padding: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    nav ul {
      list-style: none;
      padding: 0;
    }

    nav li {
      display: inline;
      margin-left: 20px;
    }

    nav a {
      color: #fff;
      text-decoration: none;
    }

    nav a:hover {
      text-decoration: underline;
    }

    section {
      padding: 20px;
    }

    #about {
      background-color: #f0f0f0;
    }

    #portfolio {
      background-color: #e0e0e0;
    }

    #contact {
      background-color: #f0f0f0;
    }

    .portfolio-item {
      margin-bottom: 20px;
    }

    .portfolio-item img {
      width: 100%;
      height: auto;
    }
  </style>
</head>
<body>
  <header>
    <h1>Farhan Maulana</h1>
    <nav>
      <ul>
        <li><a href="#about">About Me</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </header>

  <section id="about">
    <h2>About Me</h2>
    <p>Perkenalkan saya Farhan Maulana</br>
        Nim:12220319</p>
  </section>

  <section id="contact">
    <h2>Contact</h2>
    <p>.</p>
  </section>

  <footer>
    <p>&copy; 2023 Farhan Maulana</p>
  </footer>
</body>
</html>
