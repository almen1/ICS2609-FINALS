<?php
require_once "config.php";

$sdgName = $sdgDesc = $sdgColor = $website1 = $web1URL = $webDesc1 = $website2 = $web2URL = $webDesc2 = "";
$sdgName_err = $sdgDesc_err = $sdgColor_err = $website1_err = $web1URL_err = $webDesc1_err = $website2_err = $web2URL_err = $webDesc2_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $input_sdgName = trim($_POST["sdgName"]);
    if (empty($input_sdgName)) {
        $sdgName_err = "Please enter SDG Name.";
    } elseif (!preg_match("/^[a-zA-Z\s]+$/", $input_sdgName)) {
        $sdgName_err = "Please enter a valid SDG Name.";
    } else {
        $sdgName = $input_sdgName;
    }

    $input_sdgDesc = trim($_POST["sdgDesc"]);
    if (empty($input_sdgDesc)) {
        $sdgDesc_err = "Please enter SDG Description.";
    } else {
        $sdgDesc = $input_sdgDesc;
    }

    $input_sdgColor = trim($_POST["sdgColor"]);
    if (empty($input_sdgColor)) {
        $sdgColor_err = "Please enter SDG Hex without #.";
    } elseif (!preg_match("/^#?[a-fA-F0-9]{6}$/", $input_sdgColor)) {
        $sdgColor_err = "Please enter a valid SDG Hex code (e.g. #FFFFFF).";
    } else {
        $sdgColor = $input_sdgColor;
    }

    $input_website1 = trim($_POST["website1"]);
    if (empty($input_website1)) {
        $website1_err = "Please enter website Name.";
    } elseif (!preg_match("/^[a-zA-Z0-9\s_-]+$/", $input_website1)) {
        $website1_err = "Please enter a valid website Name.";
    } else {
        $website1 = $input_website1;
    }

    $input_web1URL = trim($_POST["web1URL"]);
    if (empty($input_web1URL)) {
        $web1URL_err = "Please enter website URL.";
    } elseif (!filter_var($input_web1URL, FILTER_VALIDATE_URL)) {
        $web1URL_err = "Please enter a valid website URL.";
    } else {
        $web1URL = $input_web1URL;
    }

    $input_website2 = trim($_POST["website2"]);
    if (empty($input_website2)) {
        $website2_err = "Please enter website Name.";
    } elseif (!preg_match("/^[a-zA-Z0-9\s_-]+$/", $input_website2)) {
        $website2_err = "Please enter a valid website Name.";
    } else {
        $website2 = $input_website2;
    }

    $input_web2URL = trim($_POST["web2URL"]);
    if (empty($input_web2URL)) {
        $web2URL_err = "Please enter website 2 URL.";
    } elseif (!filter_var($input_web2URL, FILTER_VALIDATE_URL)) {
        $web2URL_err = "Please enter a valid website 2 URL.";
    } else {
        $web2URL = $input_web2URL;
    }

    $input_webDesc1 = trim($_POST["webDesc1"]);
    if (empty($input_webDesc1)) {
        $webDesc1_err = "Please enter website Description.";
    } else {
        $webDesc1 = $input_webDesc1;
    }

    $input_webDesc2 = trim($_POST["webDesc2"]);
    if (empty($input_webDesc2)) {
        $webDesc2_err = "Please enter website Description.";
    } else {
        $webDesc2 = $input_webDesc2;
    }

    if (empty($sdgName_err) && empty($sdgDesc_err) && empty($sdgColor_err) && empty($website1_err) && empty($web1URL_err) && empty($webDesc1_err) && empty($website2_err) && empty($web2URL_err) && empty($webDesc2_err)) {
        $sql = "INSERT INTO sdg (sdg_name, sdg_desc, sdg_color, website_1, website_1_url, website_1_desc, website_2, website_2_url, website_2_desc) VALUES (?,?,?,?,?,?,?,?,?)";

        if ($stmt = $mysqli->prepare($sql)) {
            $stmt->bind_param("sssssssss", $param_sdgName, $param_sdgDesc, $param_sdgColor, $param_website1, $param_web1URL, $param_webDesc1, $param_website2, $param_web2URL, $param_webDesc2);

            $param_sdgName = $sdgName;
            $param_sdgDesc = $sdgDesc;
            $param_sdgColor = $sdgColor;
            $param_website1 = $website1;
            $param_web1URL = $web1URL;
            $param_webDesc1 = $webDesc1;
            $param_website2 = $website2;
            $param_web2URL = $web2URL;
            $param_webDesc2 = $webDesc2;

            if ($stmt->execute()) {
                header("location: admin.php");
                exit();
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        $stmt->close();
    }

    $mysqli->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
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
                    <h2 class="mt-5">Create Record</h2>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"
                        enctype="multipart/form-data">

                        <div class="form-group">
                            <label>SDG Name</label>
                            <input type="text" name="sdgName"
                                class="form-control <?php echo (!empty($sdgName_err)) ? 'is-invalid' : ''; ?>"
                                value="<?php echo $sdgName; ?>">
                            <span class="invalid-feedback"><?php echo $sdgName_err; ?></span>
                        </div>

                        <div class="form-group">
                            <label>SDG Description</label>
                            <textarea name="sdgDesc"
                                class="form-control <?php echo (!empty($sdgDesc_err)) ? 'is-invalid' : ''; ?>"><?php echo $sdgDesc; ?></textarea>
                            <span class="invalid-feedback"><?php echo $sdgDesc_err; ?></span>
                        </div>

                        <div class="form-group">
                            <label>SDG Color</label>
                            <input type="text" name="sdgColor"
                                class="form-control <?php echo (!empty($sdgColor_err)) ? 'is-invalid' : ''; ?>"
                                value="<?php echo $sdgColor; ?>">
                            <span class="invalid-feedback"><?php echo $sdgColor_err; ?></span>
                        </div>

                        <div class="form-group">
                            <label>Website 1 Name</label>
                            <input type="text" name="website1"
                                class="form-control <?php echo (!empty($website1_err)) ? 'is-invalid' : ''; ?>"
                                value="<?php echo isset($website1) ? $website1 : ''; ?>">
                            <span class="invalid-feedback"><?php echo $website1_err; ?></span>
                        </div>

                        <div class="form-group">
                            <label>Website 1 URL</label>
                            <input type="text" name="web1URL"
                                class="form-control <?php echo (!empty($web1URL_err)) ? 'is-invalid' : ''; ?>"
                                value="<?php echo isset($web1URL) ? $web1URL : ''; ?>">
                            <span class="invalid-feedback"><?php echo $web1URL_err; ?></span>
                        </div>

                        <div class="form-group">
                            <label>Website 1 Description</label><br />
                            <textarea name="webDesc1"
                                class="form-control <?php echo (!empty($webDesc1_err)) ? 'is-invalid' : ''; ?>"><?php echo $webDesc1; ?></textarea>
                            <span class="invalid-feedback"><?php echo $webDesc1_err; ?></span>
                        </div>

                        <div class="form-group">
                            <label>Website 2 Name</label>
                            <input type="text" name="website2"
                                class="form-control <?php echo (!empty($website2_err)) ? 'is-invalid' : ''; ?>"
                                value="<?php echo isset($website2) ? $website2 : ''; ?>">
                            <span class="invalid-feedback"><?php echo $website2_err; ?></span>
                        </div>

                        <div class="form-group">
                            <label>Website 2 URL</label>
                            <input type="text" name="web2URL"
                                class="form-control <?php echo (!empty($web2URL_err)) ? 'is-invalid' : ''; ?>"
                                value="<?php echo isset($web2URL) ? $web2URL : ''; ?>">
                            <span class="invalid-feedback"><?php echo $web2URL_err; ?></span>
                        </div>

                        <div class="form-group">
                            <label>Website 2 Description</label><br />
                            <textarea name="webDesc2"
                                class="form-control <?php echo (!empty($webDesc2_err)) ? 'is-invalid' : ''; ?>"><?php echo $webDesc2; ?></textarea>
                            <span class="invalid-feedback"><?php echo $webDesc2_err; ?></span>
                        </div>

                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="admin.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
