<?php 
        if(isset($_POST["create"])) {
            include('../connect.php');
            $title = mysqli_real_escape_string($conn ,$_POST["title"]);
            $summary =  mysqli_real_escape_string($conn , $_POST["summary"]);
            $content =  mysqli_real_escape_string($conn , $_POST["content"]);
            $date =  mysqli_real_escape_string($conn , $_POST["date"]);

            $sqlInsert = "INSERT INTO posts(date, content, summary, title) VALUES('$date', '$content', '$summary', '$title')";
            echo($sqlInsert);
            if(mysqli_query($conn, $sqlInsert)){

            }else{
                die('date is not interested');
            }
        }
?>