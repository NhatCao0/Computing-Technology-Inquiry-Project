<?php
require_once("settings.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Enquiry</title>
        <link rel="stylesheet" href="styles/style.css">
        <meta charset="utf-8">
        <meta name="description" content="The Reel Room Management">
        <meta name="keywords" content="management">
        <meta name="author" content="Pham Do Tien Phong,Le Dinh Minh Tri">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Enquiry</title>
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
                }

                td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
                }

                tr:nth-child(even) {
                background-color: #dddddd;
                }
        </style>
    </head>

    <body>

        <?php 
            include "includes/header.inc";
                if(isset($_GET['sort'])){
                    $filter = $_GET['sort'];
                    if($filter === 'cost'){
                        $query = "SELECT * from orders ORDER BY order_cost DESC";
                        $kq =  mysqli_query($con, $query);
                        $result_list = array();
                        while ($row = mysqli_fetch_array($kq)) {
                            $result_list[] = $row;
                        }
                    }else if($filter === 'pending'){
                        $query = "SELECT * from orders WHERE order_status='$filter'";
                        $kq =  mysqli_query($con, $query);
                        $result_list = array();
                        while ($row = mysqli_fetch_array($kq)) {
                            $result_list[] = $row;
                        }
                    }
                }else{
                $query = "SELECT * from orders";
                $kq =  mysqli_query($con, $query);
                $result_list = array();
                while ($row = mysqli_fetch_array($kq)) {
                    $result_list[] = $row;
                }
            }

            if(isset( $_GET['change'])){
                $change = $_GET['change'];
                $id = $_GET['id'];
                $sql = "UPDATE orders SET order_status='$change' WHERE order_id=$id";
                if(mysqli_query($con, $sql)){
                    // header('Location : management.php');
                    // exit;
                    $query = "SELECT * from orders";
                        $kq =  mysqli_query($con, $query);
                        $result_list = array();
                        while ($row = mysqli_fetch_array($kq)) {
                            $result_list[] = $row;
                        }
                }else{

                }
            }

            
        ?>

        <!-- ENQUIRY  -->
        <div class="nhat-container">
            <div class="management">
                
                <h2>Orders</h2>
                <div class="container">
                    <div class="btn btn-info" onclick="sortByCost('cost')">Sort By Cost</div>
                    <div class="btn btn-info" onclick="sortByPending('pending')">Order Pending</div>
                </div>
            <table class="mt-5">
                <tr>
                  <th>Order Id</th>
                  <th>Date</th>
                  <th>Cost</th>
                  <th>Status</th>
                  <th>Name</th>
                  <th>Status</th>
                </tr>
                <?php
                foreach ($result_list as $row) {
                ?>
                <tr>
                  <td><a href="details.php?id=<?=$row['order_id']?>"><?php echo $row['order_id']; ?></a></td>
                  <td><?php echo $row['date']; ?></td>
                  <td><?php echo $row['order_cost']; ?></td>
                  <td><div class="<?php if($row['order_status'] == 'Cancel'){
                    echo 'btn btn-danger';
                        }else{
                            echo 'btn btn-success';

                        }?>"><?php echo $row['order_status']; ?></div></td>
                  <td><?php echo $row['first_name'] .''. $row['last_name']; ?></td>
                  <td>
                  <div class="btn btn-warning m-1" onclick="changeStatus('Pending', <?= $row['order_id']?>)">Pending</div>
                  <div class="btn btn-info m-1" onclick="changeStatus('Fulfilled', <?= $row['order_id']?>)">Fulfilled</div>
                  <div class="btn btn-info m-1" onclick="changeStatus('Paid', <?= $row['order_id']?>)">Paid</div>
                  <div class="btn btn-info m-1" onclick="changeStatus('Archived', <?= $row['order_id']?>)">Archived</div>
                  <div class="btn btn-danger m-1" onclick="changeStatus('Cancel', <?= $row['order_id']?>)">Cancel</div>
                  </td>
                </tr>
                <?php
                }
                ?>
              </table>
            </div>
        </div>
                                                      
    <?php 
        include "includes/footer.inc";
    ?>
    </body>
    <script>
        let url = new URL(window.location.href);

        function sortByCost (){
        // Add the parameter
        url.searchParams.set('sort', 'cost');
        url.searchParams.delete('id');
        url.searchParams.delete('change');
            window.location = url;
        }

        function sortByPending () {
            url.searchParams.set('sort', 'pending');
            url.searchParams.delete('id');
        url.searchParams.delete('change');
            window.location = url;
        }
        
        function changeStatus(param , id) {
            url.searchParams.delete('sort');
            url.searchParams.set('id', id);
            url.searchParams.set('change', param);

            window.location = url;
          }

    </script>
</html>