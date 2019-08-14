<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notes</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Shadows+Into+Light&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    require_once "process.php"
    ?>

    <?php 
    
    $conn = mysqli_connect($servername, $username, $password, $database) or die(mysqli_error($conn));
    
    $result = $conn->query("SELECT * FROM notes") or die($conn->error);

    ?>

    <div class="notes">
        <h1 class="header">Notes</h1>
        <table id="notetable">
            <thead>
                <tr>
                <th id="headtitle">title</th>
                <th id="headcontent">content</th>
                <th id="headaction">action</th>
                </tr>
            </thead>

                <?php 
                while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td class="title"><?php echo $row["title"]; ?></td>
                    <td class="content"><?php echo $row["content"]; ?></td>
                    <td>
                        <!-- <button class="edit"><a href="index.php?edit=<?php echo $row["note_id"]; ?>">Edit</a></button> -->
                        <button class="delete"><a href="index.php?delete=<?php echo $row["note_id"]; ?>">Delete</a></button>
                    </td>
                </tr>
                <?php endwhile; ?>

        </table>

        <form class="item-add" action="process.php" method="post">
            <input class="title-add" type="text" name="title" placeholder="title" value="<?php echo $title; ?>" required>
            <input class="content-add" type="text" name="content"  size="1000" placeholder="content" value="<?php echo $content; ?>">
            <input class="submit" type="submit" name="save" value="save" >
        </form>

    </div>
</body>
</html>