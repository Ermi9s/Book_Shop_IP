
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $coverimage = $_FILES['coverimage']['name'];
    $blog = $_POST['blog'];
    $book =$_FILES['book']['name'];
    $author = $_POST['author'];
   
    $error_message = array();
    $imageUrlRegex = "/\.(jpg|jpeg|png|gif)$/i";
    
    if (empty($name)) {
      $error_message['name'] = "Name is required.";
     }
    if (empty($author)) {
        $error_message['author'] = "Author is required.";   
    }

    if (empty($price)) {      
        $error_message['price'] = "Price is required.";
    }

     if (empty($coverimage)  ) {
    $error_message['coverimage'] = "Cover image is required.";

    }
    
    if (empty($book)) {
            $error_message['book'] = "Book is required.";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="shortcut icon" href="../img/icon.jpg" type="image/x-icon">
    <title>Book Add</title>
    <style>
        *{
           margin: 0;
           padding: 0;
           box-sizing: border-box;
           font-family: 'Poppins', sans-serif;
         }
         header{
            background: #e7f0f3ac;
            width: 100%;
            height: 100%;
         }
        fieldset{
            width: 400px;
            margin: 30px auto;
            text-align: center;
            border-radius: 20px;
           
        }
        .form {
            
            max-width: 300px;
        }
        .form input{
            display: block;
            width: 350px;
            height: 30px;
            margin: 30px;
           
        }
        .form label{
            display: block;
            text-align: left;
            padding-left: 20px;
        }
        .form .btn{
         cursor: pointer;
         background-color: #0b910b;
         color: #ffffff;
         font-size: 20px;
         border: none;
         border-radius: 10px;
        }

        .form .btn:hover{
        border: 1px solid #0b910b;
        color: #0b910b;
        background: #ffffff;
        }
        .form .message{
            color: red;
            font-size: 15px;
            text-align: center;
        }
        @media(max-width:900px)
{
    fieldset{
        width :400px;
    }
    input{
        max-width: 250px;
      
    }
    
}
    </style>
</head>
<body>
    <header>
    <nav class="navbar">
            <div class="logo">
                <img src="../img/logo2.jpg" alt="" style="width: 40px; height: 30px;"> 
                <h2>Book Store</h2>
            </div>

            <div class="navmenu">
                <ul>
                    <li><a href="../index.html">Home</a></li>
                    <li><a style="text-decoration: none; color: white;" href=".\addaudio.php"> Add Audio Books</a></li>
                </ul>
            </div>
        </nav>

        <fieldset class="form">
            <legend>Text Book</legend>
            <form action="../backend/bookadd.php" enctype="multipart/form-data" method="POST">
                <label>Book Name</label>
                <input type="text" name="name" required value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>">
                
                <label>Book Author</label>
                <input type="text" name="author" required value="<?php echo isset($_POST['author']) ? $_POST['author'] : ''; ?>">
                
                <label>Price</label>
                <input type="number" name="price" required value="<?php echo isset($_POST['price']) ? $_POST['price'] : ''; ?>">
                
                <label>Genre</label>
                <input type="text" name="genre" required value="<?php echo isset($_POST['genre']) ? $_POST['genre'] : ''; ?>">
                
                <label>Cover Image</label>
                <input type="file" name="coverimage" required>
                
                <label>Book File</label>
                <input type="file" name="book" required>
                
                <label>Blog</label>
                <textarea name="blog" cols="30" rows="10"><?php echo isset($_POST['blog']) ? $_POST['blog'] : ''; ?></textarea>
                
                <input type="submit" value="Add Book" name="addbook" class="btn">               
            </form>
        </fieldset>
    </header>
</body>
</html>
