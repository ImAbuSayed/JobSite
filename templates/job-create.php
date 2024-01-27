<?php include "inc/header.php"; ?>
    <h2 class="text-center">Add New Job</h2>

    <div class="container">
        <form action="create.php" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="title">Job Title</label>
                <input type="text" name="job_title" id="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="company">Company</label>
                <input type="text" name="company" id="company" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="category">Category</label>
                <select name="category" id="category" class="form-control" required>
                    <option value="">Select Category</option>
                    <?php foreach ($categories as $category): ?>
                        <option value="<?php echo $category->id; ?>">
                            <?php echo $category->name; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" name="location" id="location" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="deadline">Deadline</label>
                <input type="date" name="deadline" id="deadline" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description">Short Description</label>
                <textarea maxlength="120" name="description" id="description" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="responsibility">Responsibilities</label>
                <textarea name="responsibility" id="responsibility" class="form-control" class="form-control" style="white-space: pre-wrap" required></textarea>
            </div>

            <div class="form-group">
                <label for="salary">Salary</label>
                <input type="text" name="salary" id="salary" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="contact_user">Contact User</label>
                <input type="text" name="contact_user" id="contact_user" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="contact_email">Contact Email</label>
                <input type="email" name="contact_email" id="contact_email" class="form-control" required>
            </div>


            <br>
            <input type="submit" value="Submit" class="btn btn-primary" name="submit">
        </form>
    </div>

<?php include "inc/footer.php"; ?>