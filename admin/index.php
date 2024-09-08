<?php
    include('templates/header.php');
?>

<div class="posts-list w-100 p-5">
    <table class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Publication Date</th>
                <th scope="col">Title</th>
                <th scope="col">Article</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include('../connect.php');
                $sqlSelect = "SELECT * FROM posts";
                $result = mysqli_query($conn, $sqlSelect);
                while($data = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?php echo $data["date"]; ?></td>
                    <td><?php echo $data["title"]; ?></td>
                    <td><?php echo $data["summary"]; ?></td>
                    <td>
                        <a href="view.php?id=<?php echo $data['id']; ?>" class="btn btn-info btn-sm">View</a>
                        <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this post?');">Delete</a>
                    </td>
                </tr>
            <?php 
                }
            ?>
        </tbody>
    </table>
</div>

<?php
    include('templates/footer.php');
?>
