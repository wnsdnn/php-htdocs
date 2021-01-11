<?php 

    $connect = mysqli_connect("localhost", "root", "", "board") or die ("fail");

    $id=$_GET['id'];
    $pw=$_GET['pw'];
    $email=$_GET['email'];
    $content = $_GET['content'];
    $date = date('Y-m-d H:i:s');

    $url = './index.php';

    $query = "insert into board(number, title, content, date, hit, id, password) values(null, $'title', $'content', $'date', 0, $'id', $'pw')";

    $result = $connect->$query($query);
    if($resultl){
?>         <script>
                alert("<?php echo "글이 등록되었습니다."?>");
                location.replace("<?php echo $URL?>")
            </script>
<?php
    } else {
        echo "FAIL";
    }

    mysqli_close($connect);


?>