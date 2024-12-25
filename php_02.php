<!DOCTYPE html >
<html>
    <head>

    </head>

    <body>
    <div class="container">
        <h1>เลขคู่-คี่</h1>
        <table class="table table-bordered">
            <tbody>
                <?php
                    for($i=1; $i<=100; $i++){
                        if($i%2==0){
                            echo "<tr>";
                            echo "<td>$i</td>";
                            echo "<td>even</td>";
                            echo "</tr>";
                        }else{
                            echo "<tr>";
                            echo "<td>$i</td>";
                            echo "<td>odd</td>";
                            echo "</tr>";
                        }
                    }
                ?>
            </tbody>
    </div>
    </body>


</html>