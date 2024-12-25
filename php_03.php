<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <form action="php_03.php" method="post">
                <div>
                    <label for="สูตรคูณ" class="form-label">แม่สูตรคูณ</label>
                    <input type="number" class="form-control" id="num" name="num">
                </div>
            </form>

            <table class = "table table-bordered" >
                <tbody>
                    <?php
                        if(isset($_POST['num'])){
                            $num = $_POST['num'];
                            for($i=1; $i<=12; $i++){
                                $result = $num*$i;
                                echo "<tr>";
                                echo "<td>$num x $i </td>";
                                echo "<td>$result</td>";
                                echo "</tr>";
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
        
    </body>
</html>