<?php
include('config.php');
include('selectaut.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/auteur.css">
    <title>Document</title>
</head>
<body>
<nav class="main-nav">
         <div class="logo">
            <img src="../main__Images/Asset 2hdpi.svg" class="logo-img" alt="logo">
         </div>
         <a href="#" class="menu"><i class="fas fa-bars"></i></a>
         <div class="nav-list" id="nav">
            <ul class="nav-items">
               <li class="nav-links"><a href="#" class="links">Home</a></li>
               <li class="nav-links"><a href="#" class="links">Contact</a></li>
               <li class="nav-links"><a href="#" class="links">Our Books</a></li>
               <li class="nav-links"><a href="#" class="links">Our Authers</a></li>
            </ul>
         </div>
      </nav>
      <img src="../main__Images/header-image.jpg" alt="background" class="header-image">

<form action="insertaut.php" method="post" enctype="multipart/form-data" class="form1">
        
        <input type="text" name="name" id="name" placeholder="      Name">
        
        <input type="file" name="img" width="500px" height="600px" id="img">
        <input type="submit" name="insert" value="ok" class="btn-1">
</form>
<table class="tabel-1">
        <?php while ($row = $z->fetch()) : ?>
            <tr>
                <td class="id"><?php echo htmlspecialchars($row['id']) ?></td>
                <td class="name"><?php echo htmlspecialchars($row['name']); ?></td>
                <td class="tb-img"><img src="../Auteur/<?php echo htmlspecialchars($row['img']) ?>" alt="immg" width="100px" height="100px"></td>
                <form action="updateaut.php" method="post">
                    <td class="edit-btn"><input type="submit" name="modifier"></td>
                    <input type="hidden" name="mod" value="<?php echo htmlspecialchars($row['id']) ?>">
                </form>
                <form action="deleteaut.php" method="post">
                    <input type="hidden" name="del" value="<?php echo htmlspecialchars($row['id']) ?>">
                    <td class="delet-btn"><input type="submit" value="supprimer"></td>
                </form>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>