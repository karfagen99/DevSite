<!DOCTYPE html>
<html>
    <head>
        <title>Blog</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../addBlog.css">
    </head>
<body>
    <main role="main">
        <div class="content">
            <div class="content-name"><h1>Добавить статью</h1></div>
            <div class="form-main">
            <form action="../add.php" method="POST">
                <div class="form-title"><input type="text" name="task" id="task" placeholder="Название..." class="form-control"></div>
                <div class="form-desc"><input type="text" name="desk" id="desk" placeholder="Введите текст здесь..." class="form-control"> </div>
                <div class="but"><button type="submit" name="send" class="btn btn-dark">Отправить</button></div>
            </form>
            </div>
            
        </div>
    </main>
</body>