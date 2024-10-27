<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ebook Library</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <header>
        <h1>Welcome to the Ebook Library</h1>
    </header>

    <main style="width:80%; margin:auto; padding:30px;">
    <?php if ($_GET['book']): ?>
            <!-- Row 1: Category 1 -->
            <div class="book-card">
               <a href="./">Go Back</a>
                <h3>Book <?php echo $_GET['book']; ?></h3>
                <hr>
                <img src="assets/img/<?php echo $_GET['book']; ?>.png" alt="Book 1">
            </div>
      <?php endif; ?>
    </main>

    <script src="assets/script.js"></script>
</body>
</html>
