<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Доска объявлений</title>
</head>
<body>
<form action="3a-1.php" method="POST">
    <label for="email">Email</label>
    <input type="email" name="email"><br>
    <label for="category">Категория</label>
    <select name="category" required>
        <?php
        $categories = scandir("categories");
        foreach ($categories as $category) {
            if ($category != "." && $category != "..") {
                echo "<option value=\"$category\">$category</option>";
            }
        }
        ?>
    </select><br>
    <label for="title">Заголовок объявления</label>
    <input type="text" name="title" required><br>
    <label for="description">Текст объявления</label>
    <textarea name="description" id="" cols="30" rows="5" required></textarea><br>
    <input type="submit" value="Сохранить">
</form>
<table>
    <thead>

    <th>Email</th>
    <th>Заголовок</th>
    <th>Категория</th>
    <th>Описание</th>
    </thead>
    <?php

    function redirectToHome():void{
        exit();
    }


    if(false === isset($_POST['email'],$_POST['category'],$_POST['title'],$_POST['description'])){
        redirectToHome();
    }

    $email = $_POST['email'];
    $category = $_POST['category'];
    $title = $_POST['title'];
    $description = $_POST['description'];


    $filePath = "categories/{$category}/{$title}-{$email}.txt";
    file_put_contents($filePath, $description);

    chmod($filePath, 0777);

    $categories = scandir("categories");
    foreach ($categories as $category) {
        if ($category != "." && $category != "..") {
            $announcements = scandir("categories/$category");
            foreach ($announcements as $announcement) {
                if ($announcement != "." && $announcement != "..") {
                    $tmp = pathinfo($announcement, PATHINFO_FILENAME);
                    $pieces = explode('-', $tmp);
                    $title = $pieces[0];
                    $email = $pieces[1];
                    $description = file_get_contents("categories/$category/$announcement");
                    echo "<tr><td>$email</td><td>$title</td><td>$category</td><td>$description</td></tr>";
                }
            }
        }
    }
    ?>
</table>
</body>
</html>
