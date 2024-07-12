<!DOCTYPE html>
<html>

<head>
    <title>My Website</title>
</head>
<body>
    <header>
        <!-- Header content goes here --> 
         <h1>Welcome to My Website</h1>
    </header>

    <nav>
        <!-- Navigation content goes here -->
         <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/profile">Profile</a></li>
            <li><a href="/experience">Experience</a></li>
         </ul>
    </nav>

    <main>
        <!-- Main content goes here -->
         <?= $this-> renderSection('content') ?>
    </main>

    <footer>
        <!-- Footer content goes here -->
         <p>© 2023 My Website. All rights reserved</p>
    </footer>
</body>

</html>