<?php
require "navbar.php";

$sql = "SELECT * FROM `category`";
$res = mysqli_query($con, $sql);

?>

<div class="container my-4">

  <!-- Hoverable Table rows -->
  <div class="card">
    <h5 class="card-header">Total Categories</h5>
    <div class="table-responsive text-nowrap">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th class="text-center">Total Products</th>
            <th>Image</th>
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
            <td>
              <div class="d-flex" style="justify-content:space-around;">

                <a class="btn btn-primary" href="view_category_product.php?id=<?php echo $row['id'];   ?>"> <strong>

                    <?php
                      $cat_id = $row['id'];
                      $sql = mysqli_query($con, "SELECT * from `product` WHERE `category_id`='$cat_id'");
                      $count = mysqli_num_rows($sql);
                      echo $count;
                      ?>

                  </strong></a>

              </div>
            </td>
            <td> <img height="50px" src="<?php
                                            echo $row['image'];
                                            ?>"></td>
            <td>
              <div class="d-flex" style="justify-content:space-around;">

                <a class="btn btn-warning" href="edit_category.php?id=<?php echo $row['id'];   ?>"><i
                    class="bx bx-edit-alt me-1"></i> Edit</a>
                <a class="btn btn-danger" href="delete.php?cat_id=<?php echo $row['id'];   ?>"><i
                    class="bx bx-trash me-1"></i> Delete</a>
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