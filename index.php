<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Мой блог</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row post-list">
        </div>
        </div>
        <h3 class = "card-title"> добавление</h3>
            <div class="row col-4">
                <div>
                
                    <div class="form-group">
            <input placeholder="Заголовок поста" style="margin-bottom: 10px;"
                type="text" class="form-control" id="title">
        </div>
        <div class="form-group">
            <label for="body">содержание поста </label>
            <textarea placeholder="содержимое" style="margin-bottom: 10px;" 
            class="form-control" id="body"></textarea>
        </div>
    
        <button class="btn btn-primary" onclick="addPost()">Добавить пост</button>
    
</div>
<div class="container mt-5">
        <div class="row post-list">
        </div>
        </div>
        <h3 class = "card-title"> редактироание</h3>
            <div class="row col-4">
                <div>
                
                    <div class="form-group">
            <input placeholder="Заголовок поста" style="margin-bottom: 10px;"
                type="text" class="form-control" id="title-edit">
        </div>
        <div class="form-group">
            <label for="body">содержание поста </label>
            <textarea placeholder="содержимое" style="margin-bottom: 10px;" 
            class="form-control" id="body-edit"></textarea>
        </div>
    
        <button class="btn btn-primary" onclick="updatePost()"  style="margin-bottom: 10px;">обновить пост</button>

<div class="row post-list">
   <!-- вывол всех постов  -->
</div>
</div>
    <script src="main.js"></script>
</body>
</html>