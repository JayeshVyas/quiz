<?php
    include "DBConnect.php";
    $question_no = $_GET["question"];
    $sql = "SELECT Question FROM problems WHERE Question_No='$question_no'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc()) 
        {
            echo $row["Question"];
        }
    }
    else {
        echo "0 results";
    }
    $conn->close();
?>
