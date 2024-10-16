<?php

if (!isset($_SESSION['sid'])) {
    header("location:student/login_front.php");
}
$s_variable = $_SESSION['sid'];
?>

<div class="side-one">
    <div class="row heading">
        <div class="col-sm-6 col-xs-12 heading-avatar">
        <h4 style="color:#005C4B"><b>chat with officer</b></h4>
        </div>
        <div class="col-sm-1 col-xs-1  heading-dot  pull-right">
            <!-- <i class="fa fa-ellipsis-v fa-2x  pull-right" aria-hidden="true"></i> -->
        </div>
        <div class="col-sm-2 col-xs-2 heading-compose  pull-right">
            <i class="fa fa-comments fa-2x  pull-right" aria-hidden="true"></i>
        </div>
    </div>



    <div class="row sideBar">

        <!-- single student starts -->
        <?php $query = $admin->ret("SELECT * FROM `student`   where `sid`='$s_variable' ");
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) { ?>
        <div class="row sideBar-body">
            <div class="col-sm-3 col-xs-3 sideBar-avatar">
                <div class="avatar-icon">
                <img src="student/uploads/<?php echo $row['photo'] ?>" height="50px" width="50px">
                </div>
            </div>
            <div class="col-sm-9 col-xs-9 sideBar-main">
                <div class="row">
                    <div class="col-sm-8 col-xs-8 sideBar-name">
                       <a href="chat_individual.php?sid=<?php echo $row['sid'] ?>"> <span class="name-meta"><?php echo $row['name'] ?> (You)</a>
                        </span>
                    </div>
                    <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                        <span class="time-meta pull-right">student
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <!-- single student ends -->

    </div>
</div>