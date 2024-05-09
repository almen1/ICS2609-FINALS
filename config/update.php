<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$sdg_name = $sdg_description = $sdg_color = $sdg_bg = $website_1 = $website_1_desc = $website_2 = $website_2_desc = "";
$sdg_name_err = $sdg_description_err = $sdg_color_err = $sdg_bg_err = $website_1_err = $website_1_desc_err = $website_2_err = $website_2_desc_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate sdg_name
    $input_sdg_name = trim($_POST["sdg_name"]);
    if (empty($input_sdg_name)) {
        $sdg_name_err = "Please enter an SDG name.";
    } else {
        $sdg_name = $input_sdg_name;
    }

    // Validate sdg_description
    $input_sdg_description = trim($_POST["sdg_description"]);
    if (empty($input_sdg_description)) {
        $sdg_description_err = "Please enter an SDG description.";
    } else {
        $sdg_description = $input_sdg_description;
    }

    // Validate sdg_color
    $input_sdg_color = trim($_POST["sdg_color"]);
    if (empty($input_sdg_color)) {
        $sdg_color_err = "Please enter an SDG color.";
    } else {
        $sdg_color = $input_sdg_color;
    }

    // Validate sdg_bg
    $input_sdg_bg = trim($_POST["sdg_bg"]);
    if (empty($input_sdg_bg)) {
        $sdg_bg_err = "Please enter an SDG background.";
    } else {
        $sdg_bg = $input_sdg_bg;
    }

    // Validate website_1
    $input_website_1 = trim($_POST["website_1"]);
    if (empty($input_website_1)) {
        $website_1_err = "Please enter Website 1.";
    } else {
        $website_1 = $input_website_1;
    }

    // Validate website_1_desc
    $input_website_1_desc = trim($_POST["website_1_desc"]);
    if (empty($input_website_1_desc)) {
        $website_1_desc_err = "Please enter Website 1 description.";
    } else {
        $website_1_desc = $input_website_1_desc;
    }

    // Validate website_2
    $input_website_2 = trim($_POST["website_2"]);
    if (empty($input_website_2)) {
        $website_2_err = "Please enter Website 2.";
    } else {
        $website_2 = $input_website_2;
    }

    // Validate website_2_desc
    $input_website_2_desc = trim($_POST["website_2_desc"]);
    if (empty($input_website_2_desc)) {
        $website_2_desc_err = "Please enter Website 2 description.";
    } else {
        $website_2_desc = $input_website_2_desc;
    }

    // Check input errors before inserting in database
    if (empty($sdg_name_err) && empty($sdg_description_err) && empty($sdg_color_err) && empty($sdg_bg_err) && empty($website_1_err) && empty($website_1_desc_err) && empty($website_2_err) && empty($website_2_desc_err)) {
        // Prepare an update statement
        $sql = "UPDATE your_table_name SET sdg_name=?, sdg_description=?, sdg_color=?, sdg_bg=?, website_1=?, website_1_desc=?, website_2=?, website_2_desc=? WHERE id=?";

        if ($stmt = $mysqli->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ssssssssi", $param_sdg_name, $param_sdg_description, $param_sdg_color, $param_sdg_bg, $param_website_1, $param_website_1_desc, $param_website_2, $param_website_2_desc, $param_id);

            // Set parameters
            $param_sdg_name = $sdg_name;
            $param_sdg_description = $sdg_description;
            $param_sdg_color = $sdg_color;
            $param_sdg_bg = $sdg_bg;
            $param_website_1 = $website_1;
            $param_website_1_desc = $website_1_desc;
            $param_website_2 = $website_2;
            $param_website_2_desc = $website_2_desc;
            $param_id = $_POST["id"];

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Records updated successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        $stmt->close();
    }

    // Close connection
    $mysqli->close();
} else {
    // Check existence of id parameter before processing further
    if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
        // Get URL parameter
        $id =  trim($_GET["id"]);

        // Prepare a select statement
        $sql = "SELECT * FROM your_table_name WHERE id = ?";
        if ($stmt = $mysqli->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("i", $param_id);

            // Set parameters
            $param_id = $id;

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                $result = $stmt->get_result();

                if ($result->num_rows == 1) {
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = $result->fetch_array(MYSQLI_ASSOC);

                    // Retrieve individual field value
                    $sdg_name = $row["sdg_name"];
                    $sdg_description = $row["sdg_description"];
                    $sdg_color = $row["sdg_color"];
                    $sdg_bg = $row["sdg_bg"];
                    $website_1 = $row["website_1"];
                    $website_1_desc = $row["website_1_desc"];
                    $website_2 = $row["website_2"];
                    $website_2_desc = $row["website_2_desc"];
                } else {
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        $stmt->close();

        // Close connection
        $mysqli->close();
    } else {
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
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
                    <h2 class="mt-5">Update Record</h2>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>SDG Name</label>
                            <input type="text" name="sdg_name" class="form-control <?php echo (!empty($sdg_name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $sdg_name; ?>">
                            <span class="invalid-feedback"><?php echo $sdg_name_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>SDG Description</label>
                            <textarea name="sdg_description" class="form-control <?php echo (!empty($sdg_description_err)) ? 'is-invalid' : ''; ?>"><?php echo $sdg_description; ?></textarea>
                            <span class="invalid-feedback"><?php echo $sdg_description_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>SDG Color</label>
                            <input type="text" name="sdg_color" class="form-control <?php echo (!empty($sdg_color_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $sdg_color; ?>">
                            <span class="invalid-feedback"><?php echo $sdg_color_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>SDG Background</label>
                            <input type="text" name="sdg_bg" class="form-control <?php echo (!empty($sdg_bg_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $sdg_bg; ?>">
                            <span class="invalid-feedback"><?php echo $sdg_bg_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Website 1</label>
                            <input type="text" name="website_1" class="form-control <?php echo (!empty($website_1_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $website_1; ?>">
                            <span class="invalid-feedback"><?php echo $website_1_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Website 1 Description</label>
                            <input type="text" name="website_1_desc" class="form-control <?php echo (!empty($website_1_desc_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $website_1_desc; ?>">
                            <span class="invalid-feedback"><?php echo $website_1_desc_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Website 2</label>
                            <input type="text" name="website_2" class="form-control <?php echo (!empty($website_2_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $website_2; ?>">
                            <span class="invalid-feedback"><?php echo $website_2_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Website 2 Description</label>
                            <input type="text" name="website_2_desc" class="form-control <?php echo (!empty($website_2_desc_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $website_2_desc; ?>">
                            <span class="invalid-feedback"><?php echo $website_2_desc_err; ?></span>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>" />
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>