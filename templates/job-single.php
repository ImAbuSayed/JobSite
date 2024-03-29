<?php include_once '../vendor/autoload.php';
include_once 'inc/header.php';
?>
    <h1>Job Information</h1>
    <div class="container">
        <table class="table table-striped table-hover table-bordered table-responsive">
            <tbody>
            <tr>
                <td class="tg-n6bu">Job Title</td>
                <td class="tg-0lax"><?php echo $job->job_title; ?></td>
            </tr>
            <tr>
                <td class="tg-n6bu">Company</td>
                <td><?php echo $job->company; ?></td>
            </tr>
            <tr>
                <td class="tg-n6bu">Job Category</td>
                <td><?php echo $job->name; ?></td>
            </tr>
            <tr>
                <td class=" tg-n6bu">Location</td>
                <td class="tg-0lax"><?php echo $job->location; ?></td>
            </tr>
            <tr>
                <td class=" tg-n6bu">Deadline</td>
                <td class="tg-0lax"><?php echo date('F j, Y', strtotime($job->deadline)); ?></td>
            </tr>
            <tr>
                <td class=" tg-n6bu
        ">Description
                </td>
                <td class="tg-0lax"><?php echo $job->description; ?></td>
            </tr>
            <tr>
                <td class=" tg-n6bu
        ">Salary
                </td>
                <td class="tg-0lax"><?php echo $job->salary; ?></td>
            </tr>
            <tr>
                <td class=" tg-n6bu
        ">Responsibilities
                </td>
                <td class="tg-0lax"><?php echo $job->responsibility; ?></td>
            </tr>
            <tr>
                <td class=" tg-n6bu
        ">Posted By
                </td>
                <td class="tg-0lax"><?php echo $job->contact_user; ?></td>
            </tr>
            <tr>
                <td class="tg-n6bu">Email</td>
                <td class="tg-0lax"><?php echo $job->contact_email; ?></td>
            </tr>
            <tr>
                <td class=" tg-n6bu
    ">Phone
                </td>
                <td class="tg-0lax"><?php //echo $job->phone; ?></td>
            </tr>
            <tr>
                <td class=" tg-n6bu
    ">Website
                </td>
                <td class="tg-0lax"><?php //echo $job->website; ?></td>
            </tr>
            <tr>
                <td class="tg-n6bu">Posted Date</td>
                <td class="tg-0lax"><?php echo date('F j, Y', strtotime($job->post_time)); ?></td>
            </tr>
            <tr>
                <td class=" tg-n6bu
    ">Status
                </td>
                <td class="tg-0lax"><?php //echo $job->status; ?></td>
            </tr>
            </tbody>
        </table>
        <div class="text-center">
            <a class=" btn btn-outline-dark rounded-5" href="job.php?id=<?php echo $job->id; ?>" role="button"><b>Apply</b></a>
            <a class="btn btn-outline-dark rounded-5" href="job.php?id=<?php echo $job->id; ?>" role="button"><b>Bookmark</b></a>
            <a class="btn btn-outline-dark rounded-5" href="edit.php?id=<?php echo $job->id; ?>" role="button"><b>Edit</b></a>
            <form style="display: inline;" action="job.php" method="post">
                <input type="hidden" name="del_id" value="<?php echo $job->id; ?>">
                <input class="btn btn-outline-danger rounded-5" type="submit" name="delete" value="Delete">
            </form>
        </div>
        <div>
            <a class="btn btn-danger rounded-5" href="index.php" role="button"><b>Back</b></a>
        </div>
    </div>


<?php include_once 'inc/footer.php'; ?>