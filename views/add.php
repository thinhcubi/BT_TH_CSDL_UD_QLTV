
<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            Thêm mới nhân sự
        </div>
        <div class="card-body">
            <div class="col-12">
                <form method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control">
                        <?php if (isset($errors['name'])): ?>
                            <p class="text-danger"><?php echo $errors['name'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Date Of Birth</label>
                        <input type="text" class="form-control" name="dateOfBirth">
                        <?php if (isset($errors['dateOfBirth'])): ?>
                            <p class="text-danger"><?php echo $errors['dateOfBirth'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" name="address">
                        <?php if (isset($errors['address'])): ?>
                            <p class="text-danger"><?php echo $errors['address'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone</label>
                        <input type="text" class="form-control" name="phone">
                        <?php if(isset($errors['phone'])): ?>
                        <p class="text-danger"><?php echo $errors['phone']  ?></p>
                        <?php endif; ?>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Lưu</button>
                    <a type="button" href="index.php" class="btn btn-secondary">Quay lại</a>
                </form>
            </div>
        </div>
    </div>
</div>
