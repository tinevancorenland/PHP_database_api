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
    <div class="notes">
        <h1 class="header">Notes</h1>
        <ul class="items">
            <li class="item">
                <h2 class="title">title one</h2>
                <p class="content">content one</p>
            </li>
            <li class="item">
                <h2 class="title">title two</h2>
                <p class="content">content two</p>
            </li>
        </ul>
        <form class="item-add" action="listnotes.php" method="post">
            <input class="title-add" type="text" name="title" placeholder="title" autocomplete="off" required>
            <input class="content-add" type="text" size="1000" placeholder="content" ></textarea>
            <input class="submit" type="submit" value="add new note" >
        </form>


    </div>
</body>
</html>