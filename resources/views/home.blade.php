<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GT Gallery</title>
</head>
<body>
    <div>
    <?php
            if(DB::conection()->getPdo()){
                echo "Succesfully Connected to DB and DB NAME is".DB::conection()->getDatabase
            }
    ?>
    </div>
</body>
</html>