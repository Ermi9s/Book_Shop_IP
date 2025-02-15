<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $coverimage = $_FILES['coverimage']['name'];
    $blog = $_POST['blog'];
    $book =$_FILES['audio']['name'];
    $booksample = $_FILES['audiosample']['name'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    $error_message = array();
    
    
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
    $error_message['coverimage'] = "cover image is required.";

    }
   

    
    if (empty($book)) {
            $error_message['audio'] = "Audio Book is required.";
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
    <script type="text/javascript" src="../js/script.js"></script>
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
    <!--Header Section-->
    <header>
        <nav class="navbar">
            <div class="logo">
                <img src="../img/logo2.jpg" alt="" style="width: 40px; height: 30px;"> 
                <h2>Book Store</h2>
            </div>

            <div class="navmenu">
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../pages/addbook.php">Add Audio Book</a></li>
                </ul>
            </div>
        </nav>

        <fieldset class="form">
            <legend>Text Book</legend>
    
            <form action=" ../backend/audioadd.php " enctype="multipart/form-data" method = 'POST'>
            <label>Book Name</label> <input type="text" name="name" required value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>">
                <?php if(isset($error_message['name'])): ?>
                    <div class="message">
                        <p ><?php echo $error_message['name']; ?></p>
                    </div>
                <?php endif; ?>
                <label>Book Author</label> <input type="text" name="author" required value="<?php echo isset($_POST['author']) ? $_POST['author'] : ''; ?>">
                <?php if(isset($error_message['author'])): ?>
                    <div class="message">
                        <p ><?php echo $error_message['author']; ?></p>
                    </div>
                <?php endif; ?>
            <label>Price</label> <input type="number" name="price" required value="<?php echo isset($_POST['price']) ? $_POST['price'] : ''; ?>">
                <?php if(isset($error_message['price'])): ?>
                    <div class="message">
                        <p ><?php echo $error_message['price']; ?></p>
                    </div>
                <?php endif; ?>

                <label>Genre</label> <input type="text" name="genre" required value="<?php echo isset($_POST['genre']) ? $_POST['genre'] : ''; ?>">
                <?php if(isset($error_message['genre'])): ?>
                    <div class="message">
                        <p ><?php echo $error_message['genre']; ?></p>
                    </div>
                <?php endif; ?>

                <label>Cover Image</label><input type="file" name="coverimage" required value="<?php echo isset($_FILES['coverimage']) ? $_FILES['coverimage'] : ''; ?>"> 
                <?php if(isset($error_message['coverimage'])): ?>
                    <div class="message">
                        <p ><?php echo $error_message['coverimage']; ?></p>
                    </div>
                <?php endif; ?>
            <label>Audio sample </label><input type="file" id="audioInput" accept="audio/*" name="audiosample" value="<?php echo isset($_POST['audiosample']) ? $_POST['audiosample'] : ''; ?>">
            <label>Audio</label><input type="file" id="audioInput" accept="audio/*" name="audio" value="<?php echo isset($_POST['audio']) ? $_POST['audio'] : ''; ?>">
           
            <?php if(isset($error_message['audio'])): ?>
                        <div class="message">
                        <p ><?php echo $error_message['audio']; ?></p>
                    </div>
                <?php endif; ?>

            <label>Blog </label><textarea name="blog" id="" cols="30" rows="10" value="<?php echo isset($_POST['blog']) ? $_POST['blog'] : ''; ?>"></textarea>
                <?php if(isset($error_message['blog'])): ?>
                    <div class="message">
                        <p ><?php echo $error_message['blog']; ?></p>
                    </div>
                <?php endif; ?>
            <input type="submit" value="Add Book" name="addbook" class="btn">               
            </form>
        </fieldset>
    </header>
</body>
</html>