<?php
require "navbar.php";

$sql = "SELECT * FROM `product`";
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
                $catid = $row['category_id'];
                $sql2 = mysqli_query($con, "SELECT name FROM `category` WHERE `id`='$catid'");
                $row2 = mysqli_fetch_assoc($sql2);
                echo $row2['name'];
                ?>

            </td>


            <td>


              <div class="d-flex" style="justify-content:space-around;">

                <a class="btn btn-warning" href="edit_product.pnhp?id=<?php echo $row['id'];   ?>"><i
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