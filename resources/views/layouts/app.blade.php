<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        body { margin: 0; font-family: Arial, sans-serif; background-color: #f0f0f0; background-image: url('./Untitled.png')};
        header {  color: #fff; text-align: center; padding: 1rem; }
        nav { background-color: #444; overflow: hidden; text-align: center; }
        nav a { color: white; padding: 1rem; display: inline-block; text-decoration: none; }
        nav a:hover { background-color: #60a92e; }
        .content { padding: 2rem; text-align: center; background-color: white; }
        footer { background-color: #60a92e; color: white; text-align: center; padding: 1rem; }
        img { max-width: 100%; }
    </style>
</head>
<body>
    <header>
        <h1>Eastwoods Professional College of Science and Technology</h1>
        <p>Since 1994</p>
    </header>
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/program">Program</a>
        <a href="/admission">Admission</a>
        <a href="/linkages">Linkages</a>
        <a href="/contact">Contact Us</a>
    </nav>
    <div class="content">
        @yield('content')
    </div>
    <footer>
        <p>&copy; 2024 Eastwoods Professional College. All rights reserved.</p>
    </footer>
</body>
</html>
