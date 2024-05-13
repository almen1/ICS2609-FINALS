<?php
require_once "config.php";

function displaySDGDetails() {
    global $mysqli;
    $html = '';
    $sql = "SELECT * FROM sdg";
    if ($result = $mysqli->query($sql)) {
        if ($result->num_rows > 0) {
            $html .= '<table class="table table-bordered table-striped">';
            $html .= "<thead>";
            $html .= "<tr>";
            $html .= "<th>#</th>";
            $html .= "<th>Name</th>";
            $html .= "<th>Description</th>";
            $html .= "<th>Color</th>";
            $html .= "<th>Website 1</th>";
            $html .= "<th>Website 1 URL</th>";
            $html .= "<th>Website 1 Description</th>";
            $html .= "<th>Website 2</th>";
            $html .= "<th>Website 2 URL</th>";
            $html .= "<th>Website 2 Description</th>";
            $html .= "</tr>";
            $html .= "</thead>";
            $html .= "<tbody>";
            while ($row = $result->fetch_array()) {
                $html .= "<tr>";
                $html .= "<td>" . $row['id'] . "</td>";
                $html .= "<td>" . $row['sdg_name'] . "</td>";
                $html .= "<td>" . $row['sdg_desc'] . "</td>";
                $html .= "<td>" . $row['sdg_color'] . "</td>";
                $html .= "<td>" . $row['website_1'] . "</td>";
                $html .= "<td>" . $row['website_1_url'] . "</td>";
                $html .= "<td>" . $row['website_1_desc'] . "</td>";
                $html .= "<td>" . $row['website_2'] . "</td>";
                $html .= "<td>" . $row['website_2_url'] . "</td>";
                $html .= "<td>" . $row['website_2_desc'] . "</td>";
                $html .= "<td>";
                $html .= '<a href="read.php?id=' . $row['id'] . '" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                $html .= '<a href="update.php?id=' . $row['id'] . '" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                $html .= '<a href="delete.php?id=' . $row['id'] . '" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                $html .= "</td>";
                $html .= "</tr>";
            }
            $html .= "</tbody>";
            $html .= "</table>";
            $result->free();
        } else {
            $html .= '<div class="alert alert-danger"><em>No records were found.</em></div>';
        }
    } else {
        $html .= '<div class="alert alert-danger"><em>Oops! Something went wrong while fetching SDG details.</em></div>';
    }
    return $html;
}

function displayDonationDetails() {
    global $mysqli;
    $html = '';
    $sql = "SELECT * FROM donation_form";
    if ($result = $mysqli->query($sql)) {
        if ($result->num_rows > 0) {
            $html .= '<table class="table table-bordered table-striped">';
            $html .= "<thead>";
            $html .= "<tr>";
            $html .= "<th>#</th>";
            $html .= "<th>Name</th>";
            $html .= "<th>Contact Information</th>";
            $html .= "<th>Amount</th>";
            $html .= "<th>Payment Method</th>";
            $html .= "<th>Option 1</th>";
            $html .= "<th>Option 2</th>";
            $html .= "<th>Comments</th>";
            $html .= "</tr>";
            $html .= "</thead>";
            $html .= "<tbody>";
            while ($row = $result->fetch_array()) {
                $html .= "<tr>";
                $html .= "<td>" . $row['id'] . "</td>";
                $html .= "<td>" . $row['name'] . "</td>";
                $html .= "<td>" . $row['contact_info'] . "</td>";
                $html .= "<td>" . $row['amount'] . "</td>";
                $html .= "<td>" . $row['payment_method'] . "</td>";
                $html .= "<td>" . $row['option_1'] . "</td>";
                $html .= "<td>" . $row['option_2'] . "</td>";
                $html .= "<td>" . $row['comments'] . "</td>";
                $html .= "</tr>";
            }
            $html .= "</tbody>";
            $html .= "</table>";
            $result->free();
        } else {
            $html .= '<div class="alert alert-danger"><em>No donations were found.</em></div>';
        }
    } else {
        $html .= '<div class="alert alert-danger"><em>Oops! Something went wrong while fetching donation details.</em></div>';
    }
    return $html;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to HOPE Dashboard</title>
    <link rel="icon" href="../assets/hope-favicon.svg">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    a,
    p,
    td,
    th {
        font-size: 12px;
    }

    .navbar-dark .navbar-brand,
    .navbar-dark .navbar-nav .nav-link {
        color: white;
    }

    #sdg-details,
    #donation-details {
        display: none;
    }
    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
    $(document).ready(function() {
        $("#sdg-nav").click(function() {
            $("#sdg-details").show();
            $("#donation-details").hide();
        });
        $("#donation-nav").click(function() {
            $("#donation-details").show();
            $("#sdg-details").hide();
        });
    });
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">HOPE Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a id="sdg-nav" class="nav-link" href="#">SDG Details</a>
                    </li>
                    <li class="nav-item">
                        <a id="donation-nav" class="nav-link" href="#">Donation Form Details</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="sdg-details" class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-between align-items-center mt-5 mb-3">
                        <h2>SDG Details</h2>
                        <a href="create.php" class="btn btn-success"><i class="fa fa-plus"></i> Add New Record</a>
                    </div>
                    <?php echo displaySDGDetails(); ?>
                </div>
            </div>
        </div>
    </div>

    <div id="donation-details" class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5 mb-3">Donation Form Details</h2>
                    <?php echo displayDonationDetails(); ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>