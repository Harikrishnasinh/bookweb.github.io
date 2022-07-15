<!-- Google Fonts -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <!-- Font Awesome CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
    <style>
        body {
            background: #67B26F;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #4ca2cd, #67B26F);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #4cc9cd, #b2677a);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            padding: 0;
            margin: 0;
            font-family: 'Lato', sans-serif;
            color: #000;
        }

        .student-profile .card {
            border-radius: 10px;
        }

        .student-profile .card .card-header .profile_img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin: 10px auto;
            border: 10px solid #ccc;
            border-radius: 50%;
        }

        .student-profile .card h3 {
            font-size: 20px;
            font-weight: 700;
        }

        .student-profile .card p {
            font-size: 16px;
            color: #000;
        }

        .student-profile .table th,
        .student-profile .table td {
            font-size: 14px;
            padding: 5px 10px;
            color: #000;
        }
    </style>
</head>
<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "ajaxcrud");
// $username = $_GET['username'];
// mysqli_insert_id($username);
// ECHO $username;
$id = $_SESSION['id'];
echo $id;
$select = "SELECT  * FROM `register` WHERE `id` = '$id' ";
$query = mysqli_query($con, $select);
while ($row = mysqli_fetch_assoc($query)) {
?>

    <body>
        <div class="student-profile py-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-5 align-content-center mt-4">
                        <div class="card shadow-sm">
                            <div class="card-header bg-transparent text-center">
                                <img class="profile_img" src="https://source.unsplash.com/600x300/?student" alt="student dp">
                                <h1>Username (id)</h1>
                                <h2>@&nbsp;<span style="font-size: larger; font-family:courier; font-weight:bolder"><?php echo $row['username']; ?></span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-5">
                        <div class="card shadow-sm">
                            <div class="card-header bg-transparent border-0">
                                <h3 class="mb-0">
                                    <i class="pr-1"></i><span style="font-family:Century; letter-spacing:2px;">About</span>
                                </h3>
                            </div>
                            <div class="card-body pt-0">
                                <table class="table table">
                                    <tr>
                                        <th width="100%" style="text-align:center; font-size:larger;">Username</th>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center; font-size:larger"><?php echo $row['username']; ?></td>
                                    </tr>
                                    <tr>
                                        <th width="100%" style="text-align:center; font-size:larger;">Firstname & lastname</th>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center; font-size:larger"><?php echo $row['firstname'];
                                                                                            echo " & ";
                                                                                            echo $row['lastname']; ?></td>
                                    </tr>
                                    <tr>
                                        <th width="100%" style="text-align:center; font-size:larger;">Contact No.</th>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center; font-size:larger"><?php echo $row['mobile']; ?></td>
                                    </tr>
                                    <tr>
                                        <th width="100%" style="text-align:center; font-size:larger;">Birthdate</th>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center; font-size:larger"><?php echo $row['birthdate']; ?></td>
                                    </tr>
                                    <tr>
                                        <th width="100%" style="text-align:center; font-size:larger;">Email</th>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center; font-size:larger"><?php echo $row['email']; ?></td>
                                    </tr>
                                    <tr>
                                        <th width="100%" style="text-align:center; font-size:larger;">Password</th>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center; font-size:larger"><?php echo $row['password']; ?></td>
                                    </tr>
                                </table><p></p>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <a class="btn btn-outline-primary" href="update_formu.php?id=<?php echo $id; ?>" type="button">Update</a>&nbsp;
                                    <a class="btn btn-primary" href="index.php" type="button">Back</a>
                                </div>
                            </div>
                        </div>
                        <!-- <div style="height: 26px"></div> -->
                    </div>
                </div>
            </div>
        </div>
    <?php
}

    ?>
    </body>

</html>