<?php
require "navbar.php";

$cat = "";
$cat_id = $_GET['id'];
$sql =  "SELECT * from `product` WHERE `category_id`='$cat_id'";
$res = mysqli_query($con, $sql);
$num = mysqli_num_rows($res);


$sql2 = mysqli_query($con, "SELECT name FROM `category` WHERE `id`='$cat_id'");
$row2 = mysqli_fetch_assoc($sql2);
$cat = $row2['name'];

?>

<div class="container my-4">

  <!-- Hoverable Table rows -->
  <div class="card">
    <h5 class="card-header">Total products of
      category <strong>"<?php echo $cat; ?>"</strong> are "<?php echo $num; ?>"</strong>
    </h5>
    <div class="table-responsive text-nowrap">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Image</th>
            <th>Price</th>
            <th>MRP</th>
            <th>Stock</th>
            <th>Category</th>
            <th class="text-center">Action</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <?php

          while ($row = mysqli_fetch_assoc($res)) {
          ?>

          <tr>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>
                <?php
                  echo $row['id'];
                  ?>
              </strong>
            </td>
            <td> <?php
                    echo $row['name'];
                    ?></td>

            <td> <img height="50px" src="<?php
                                            echo $row['image'];
                                            ?>"></td>
            <td><?php
                  echo "₹" . $row['price'];
                  ?></td>
            <td><?php
                  echo "₹" . $row['mrp'];
                  ?></td>
            <td><?php echo $row['stock']; ?></td>
            <td>
              <?php
                echo $cat;
                ?>

            </td>


            <td>


              <div class="d-flex" style="justify-content:space-around;">

                <a class="btn btn-warning" href="edit_post.php?id=<?php echo $row['id'];   ?>"><i
                    class="bx bx-edit-alt me-1"></i></a>
                <a class="btn btn-danger" href="delete.php?post_id=<?php echo $row['id'];   ?>"><i
                    class="bx bx-trash me-1"></i></a>
              </div>
            </td>
          </tr>
          <?php
          }

          ?>

        </tbody>
      </table>
    </div>
  </div>
  <!--/ Hoverable Table rows -->

</div>
<?php
require "footer.php";
?>