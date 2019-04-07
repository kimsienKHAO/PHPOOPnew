<table class="table table-striped table-hover table-bodered">
    <thead class="table table-dark text-white">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Email</th>
        </tr>
    </thead>
    <div class="tbody">
    <?php 
        include "connection.php";
        $query = "SELECT * FROM tblstudent";
        $result = mysqli_query($conn,$query);
        foreach($result as $value){
    ?>
        <tr>
            <td><?php echo $value['id']?></td>
            <td><?php echo $value['name']?></td>
            <td><?php echo $value['gender']?></td>
            <td><?php echo $value['email']?></td>
        </tr>
        <?php
            }
        ?>
    </div>
</table>