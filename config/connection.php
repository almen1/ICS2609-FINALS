<?php
    $sdgname = $_POST['name'];
    $sdgdesc = $_POST['desc'];
    $sdgcolor = $_POST['color'];
    $sdgbg = $_POST['bg'];
    $sdgwebsite1 = $_POST['website1'];
    $sdgwebsite1desc = $_POST['website1desc'];
    $sdgwebsite2 = $_POST['website2'];
    $sdgwebsite2desc = $_POST['website2desc'];
    
    //Database connection
    $conn = new mysqli('localhost', 'root', 'hope');
    if ($conn->connect_error) {
        die('Connection Failed : ' . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO registration (name, `desc`, color, bg, website1, website1desc, website2, website2desc) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $sdgname, $sdgdesc, $sdgcolor, $sdgbg, $sdgwebsite1, $sdgwebsite1desc, $sdgwebsite2, $sdgwebsite2desc);
            //pacheck kung tama ssssssss
            // i-integer
            // d-double
            // s-string
            // b-blob
            $stmt->execute();
            $stmt->close();
            $stmt->close();
    }

?>