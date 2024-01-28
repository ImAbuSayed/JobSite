<?php include "inc/header.php"; ?>
    <h2 class="text-center">Add New Job</h2>

    <div class="container">
        <form action="edit.php?id=<?php echo $job->id; ?>" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="title">Job Title</label>
                <input type="text" name="job_title" id="title" class="form-control" value="<?php echo $job->job_title; ?>" required>
            </div>

            <div class="form-group">
                <label for="company">Company</label>
                <input type="text" name="company" id="company" class="form-control" value="<?php echo $job->company; ?>" required>
            </div>

            <div class="form-group">
                <label for="category">Category</label>
                <select name="category" id="category" class="form-control" required>
                    <option value="">Select Category</option>
                    <?php foreach ($categories as $category): ?>
<?php if ($category->id == $job->category_id): ?>
                        <option value="<?php echo $category->id; ?>" selected>
                            <?php echo $category->name; ?>
                        </option>
<?php else: ?>
                        <option value="<?php echo $category->id; ?>">
                            <?php echo $category->name; ?>
                        </option>
<?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" name="location" id="location" class="form-control" value="<?php echo $job->location; ?>" required>
            </div>

            <div class="form-group">
                <label for="deadline">Deadline</label>
                <input type="date" name="deadline" id="deadline" class="form-control" value="<?php echo date('Y-m-d', strtotime($job->deadline)); ?>" required>
            </div>

            <div class="form-group">
                <label for="description">Short Description</label>
                <textarea maxlength="120" name="description" id="description" class="form-control" required><?php echo $job->description; ?></textarea>
            </div>

            <div class="form-group">
                <label for="responsibility">Responsibilities</label>
                <textarea name="responsibility" id="responsibility" class="form-control" class="form-control" style="white-space: pre-wrap" required><?php echo $job->responsibility; ?></textarea>
            </div>

            <div class="form-group">
                <label for="salary">Salary</label>
                <input type="text" name="salary" id="salary" class="form-control" value="<?php echo $job->salary; ?>" required>
            </div>

            <div class="form-group">
                <label for="contact_user">Contact User</label>
                <input type="text" name="contact_user" id="contact_user" class="form-control" value="<?php echo $job->contact_user; ?>" required>
            </div>

            <div class="form-group">
                <label for="contact_email">Contact Email</label>
                <input type="email" name="contact_email" id="contact_email" class="form-control" value="<?php echo $job->contact_email; ?>" required>
            </div>


            <br>
            <input type="submit" value="Submit" class="btn btn-primary" name="submit">
        </form>
    </div>

<?php include "inc/footer.php"; ?>