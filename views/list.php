
<!doctype html>
<html lang="en">
<head>
    <title>Danh sách nhân sự</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div style="text-align: center;color: dimgrey" class="card-header">
            Danh sách nhân sự
        </div>
      <div> <a class="btn btn-success mb-2"  href="index.php?page=add">Add</a></div>
<table class="table table-dark table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">DateOfBirth</th>
        <th scope="col">Address</th>
        <th scope="col">Phone</th>
        <th scope="col">Image</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($customers as $item): ?>
    <tr>
        <th scope="row"><?php echo $item->id ?></th>
        <td><?php echo $item->name ?></td>
        <td><?php echo $item->dateOfBirth ?></td>
        <td><?php echo $item->address ?></td>
        <td><?php echo $item->phone ?></td>
        <td><img width="100px" height="80px" src="<?php echo $item->image; ?>" </td>
        <td>
            <a href="index.php?page=delete&id=<?php echo $item->id; ?>" onclick=" return confirm('Are you sure ?')">Delete</a>
        </td>
        <td>
            <a href="index.php?page=edit&id=<?php echo $item->id; ?>">Edit</a>
        </td>
    </tr>
    <?php endforeach; ?>

    </tbody>
</table>
       <div>
           <a href='views/login.php'>Log out</a>
       </div>


</body>
</html>

