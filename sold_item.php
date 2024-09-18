<?php
include("dashboard.php");
include("connection.php");
$query = "select * from tbl_order";
$res = mysqli_query($con, $query);
?>
<div class="col-sm-12">
    <h1 class="text-center mt-2"><i><u>View Sold Item</u></i></h1>
    <hr style="height:5px; background-color:black">
</div>

<div class="row text-center">
    <table class="table border border-dark border-2">
        <form action="">
            <tr>
                <th>Sr. No.</th>
                <th>User Name</th>
                <th>Product Name</th>
                <th>Product Image</th>
                <th>Category Name</th>
                <th>Quantity</th>
                <th>Amount</th>
                <th>DOR</th>
                <th>Remove</th>
            </tr>
            <tbody>
                <?php
                $a = 1;
                while ($row = mysqli_fetch_array($res)) {
                ?>
                    <tr style="color:blue;">
                        <td><?php echo $a; ?></td>
                        <?php $user_id = $row['user_id'];
                        $query2 = "select * from tbl_user where user_id='$user_id'";
                        $res2 = mysqli_query($con, $query2);
                        $row2 = mysqli_fetch_array($res2);
                        ?>
                        <td><?php echo $row2['name']; ?></td>

                        <?php $pro_id = $row['pro_id'];
                        $query3 = "select * from tbl_product where pro_id='$pro_id'";
                        $res3 = mysqli_query($con, $query3);
                        $row3 = mysqli_fetch_array($res3);
                        ?>
                        <td><?php echo $row3['pro_name']; ?></td>
                        <td><img src="product/<?php echo $row3['filename']; ?>" Style="height:100px; width:100px;" /></td>

                        <?php $cat_id = $row['cat_id'];
                        $query4 = "select * from tbl_category where cat_id='$cat_id'";
                        $res4 = mysqli_query($con, $query4);
                        $row4 = mysqli_fetch_array($res4);
                        ?>
                        <td><?php echo $row4['name']; ?></td>
                        <td><?php echo $row['quantity']; ?></td>
                        <td><?php echo $row['amount']; ?></td>
                        <td><?php echo $row['order_date']; ?></td>
                        <td><a href="sold_item_del.php?id=<?php echo $row['order_id']; ?>" style="text-decoration:none; color:red;">remove</a></td>
                    </tr>
            </tbody>
        <?php
                    $a++;
                }
        ?>
        </form>
    </table>
</div>

</div>
</div>
</div>
</div>
<div class="row bg-dark text-center text-light mx-0">
    <div class="col-sm-12">
        <p>copyright &copy; 2022-2023 Designed Devloped By : Darakshan Under the Guidance Mr. Rohit Kumar Softpro India PVT. LTD.</p>
    </div>
</div>
</div>
</body>

</html>