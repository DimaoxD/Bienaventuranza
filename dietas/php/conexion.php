<?php
	
    $conn = new mysqli("localhost","root","","prueba_bips");
    $count = 0;
    $sql2 = "SELECT * FROM log_dietas WHERE estado = 0";
    $result = mysqli_query($conn, $sql2);
    $count = mysqli_num_rows($result);
