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
                    <td></td>
                </tr>
                <?php endwhile; ?>

        </table>
        <!-- <ul class="items">
            <li class="item">
                <h2 class="title">title one</h2>
                <p class="content">content one</p>
            </li>
            <li class="item">
                <h2 class="title">title two</h2>
                <p class="content">content two</p>
            </li>
        </ul> -->
        <form class="item-add" action="process.php" method="post">
            <input class="title-add" type="text" name="title" placeholder="title" autocomplete="off" required>
            <input class="content-add" type="text" name="content"  size="1000" placeholder="content" ></textarea>
            <input class="submit" type="submit" name="save" value="add new note" >
        </form>


    </div>
</body>
</html>