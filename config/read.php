<?php
if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
    require_once "config.php";

    $sql = "SELECT * FROM sdg WHERE id = ?";

    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("i", $param_id);

        $param_id = trim($_GET["id"]);

        if ($stmt->execute()) {
            $result = $stmt->get_result();

            if ($result->num_rows == 1) {

                $row = $result->fetch_array(MYSQLI_ASSOC);

                $sdgName = $row['sdg_name'];
                $sdgDesc = $row['sdg_desc'];
                $sdgColor = $row['sdg_color'];
                $website1 = $row['website_1'];
                $webDesc1 = $row['website_1_desc'];
                $website2 = $row['website_2'];
                $webDesc2 = $row['website_2_desc'];
            } else {
                header("location: error.php");
                exit();
            }
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }

    $stmt->close();

    $mysqli->close();
} else {
    header("location: error.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper {
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-5 mb-3">View Record</h1>
                    <div class="form-group">
                        <label>SDG Name</label>
                        <p><b><?php echo $row['sdg_name']; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>SDG Description</label>
                        <p><b><?php echo $row['sdg_desc']; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>SDG Color</label>
                        <p><b><?php echo $row['sdg_color']; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Website 1 Name</label>
                        <p><b><?php echo $row['website_1'];; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Website 1 Description</label>
                        <p><b><?php echo $row['website_1_desc']; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Website 2 Name</label>
                        <p><b><?php echo $row['website_2']; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Website 2 Description</label>
                        <p><b><?php echo $row['website_2_desc']; ?></b></p>
                    </div>
                    <p><a href="admin.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>