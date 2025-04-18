<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Title</title>
</head>
<body>
    <div id="form"></div>
        <form action="save.php" method="post">
            <label for="email">E-mail</label>
            <input type="email" name="email" required>

            <label for="category">Category</label>
            <select name="category" required>
                <?php
                    $dir = opendir("categories");
                    while($file = readdir($dir)) {
                        if (is_dir('categories/'.$file) && $file != "." && $file != "..") {
                            echo "<option value=\"$file\">" . htmlspecialchars($file) . "</option>";
                        }
                    }
                ?>
            </select>

            <label for="title">Title</label>
            <input type="text" name="title" required>

            <label for="description">Description</label>
            <textarea rows="3" name="description" required></textarea>

            <input type="submit" value="Save">
        </form>
    </div>

    <div id="table">
        <table>
            <thead>
                <th>Заголовок</th>
                <th>Категория</th>
                <th>E-mail</th>
                <th>Описание</th>
            </thead>
            <tbody>
                <?php
                    $dir = opendir("categories");
                    while($category = readdir($dir)) {
                        if (!is_dir('categories/'.$category) || $category == '.' || $category == '..') {
                            continue;
                        }
                        foreach (scandir("categories/".$category) as $filename){
                            if($filename == "." || $filename == ".."){
                                continue;
                            }

                            $fp = fopen("categories/$category/$filename", "r");
                            $filename = fgets($fp);
                            $email = fgets($fp);
                            $description = "";
                            while(!feof($fp)) {
                                $description .= fgets($fp) . "\n";
                            }
                            fclose($fp);

                            echo "<tr>";
                                echo "<td>" . htmlspecialchars($filename) . "</td>";
                                echo "<td>" . htmlspecialchars($category) . "</td>";
                                echo "<td>" . htmlspecialchars($email) . "</td>";
                                echo "<td>" . htmlspecialchars($description) . "</td>";
                            echo "</tr>";
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>