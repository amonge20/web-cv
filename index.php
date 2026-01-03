<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
     <?php
        include("conexion.php");
        include("main-css.php");
    ?>
</head>
<body>
    <?php
        include("header.php");

        $dir = "content/";

        if (is_dir($dir)) {
            $files = scandir($dir);

            foreach ($files as $file) {
                if ($file !== "." && $file !== ".." && pathinfo($file, PATHINFO_EXTENSION) === "php") {
                    include $dir . $file;
                }
            }
        }


        include("footer.php");
        include("main-js.php");
    ?>
</body>
</html>