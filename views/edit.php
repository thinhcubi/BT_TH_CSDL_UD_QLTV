
<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            Cập nhật thông tin nhân su
        </div>
        <div class="card-body">
            <div class="col-12" >
                <form method="post" enctype="multipart/form-data" >
                    <div class="mb-3">
                        <?php foreach ($customers as $customer): ?>
                        <label class="form-label">Name</label>
                        <input type="text" value="<?php echo $customer->name; ?>" name="name" class="form-control">
<!--                        --><?php //if (isset($errors['name'])): ?>
<!--                            <p class="text-danger">--><?php //echo $errors['name'] ?><!--</p>-->
<!--                        --><?php //endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Date Of Birth</label>
                        <input type="text" value="<?php echo $customer->dateOfBirth; ?>" class="form-control" name="dateOfBirth">
<!--                        --><?php //if (isset($errors['email'])): ?>
<!--                            <p class="text-danger">--><?php //echo $errors['email'] ?><!--</p>-->
<!--                        --><?php //endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Address</label>
                        <input type="text" value="<?php echo $customer->address; ?>" class="form-control" name="address">
<!--                        --><?php //if (isset($errors['address'])): ?>
<!--                            <p class="text-danger">--><?php //echo $errors['address'] ?><!--</p>-->
<!--                        --><?php //endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone</label>
                        <input type="text" value="<?php echo $customer->phone; ?>" class="form-control" name="phone">
<!--                        --><?php //if (isset($errors['address'])): ?>
<!--                            <p class="text-danger">--><?php //echo $errors['address'] ?><!--</p>-->
<!--                        --><?php //endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <img width="150px" height="200px" src="<?php echo $customer->image ?>">
                        <input type="file" class="form-control" name="image">
                    </div>
                    <?php endforeach; ?>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                    <a type="button" href="index.php" class="btn btn-secondary">Quay lại</a>
                </form>
            </div>
        </div>
    </div>
</div>
