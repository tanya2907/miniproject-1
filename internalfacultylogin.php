<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Login</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styleNew.css">
</head>
<body>
    <form method="POST" action="../form/internalform.php"></form>
    <img class="bg" src="../photo-2.png" alt="MIT ADT UNIVERSITY" >
    <div class="container">
        <h1>MIT ADT UNIVERSITY</h1>
        <h3>Faculty Login</h3>
        <form action="connect.php" method="post">
        <input type="text" id="name" placeholder="Enter UserName" name="username" />
       <input type="password" id="password" placeholder="Enter Your Password" name="password" /><br>

       <a href="../form/internalform.php" style="color: white;
       background: black;
       padding: 8px 12px;
       font-size: 20px;
       border:2px solid white;
       border-radius: 14px;
       cursor: pointer;">SUBMIT
       </a>


        </form>
    </div>
</body>
</html>
