<?php require_once('./inc/header.php'); ?>

    <body class="nav-fixed">
        <?php
            require_once("./inc/navbar.php");
        ?>


        <!--Side Nav-->
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <?php
                    $curr_page = basename(__FILE__);
                    require_once("./inc/sidebar.php");
                ?>
            </div>


            <div id="layoutSidenav_content">
                <main>
                    <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
                        <div class="container-fluid">
                            <div class="page-header-content">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon"><i data-feather="edit-3"></i></div>
                                    <span>Create New User</span>
                                </h1>
                            </div>
                        </div>
                    </div>

                    <?php
                        if(isset($_POST['user_create'])){
                            echo "Hi";
                        }
                    ?>

                    <!--Start Table-->
                    <div class="container-fluid mt-n10">
                        <div class="card mb-4">
                            <div class="card-header">Create New User</div>
                            <div class="card-body">
                                <form action="new-user.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="name">Name:</label>
                                        <input name="name" class="form-control" id="name" type="text" placeholder="User Full Name..." />
                                    </div>
                                    <div class="form-group">
                                        <label for="user-name">User Name:</label>
                                        <input name="user-name" class="form-control" id="user-name" type="text" placeholder="User Name..." />
                                    </div>
                                    <div class="form-group">
                                        <label for="user-email">User Email:</label>
                                        <input name="user-email" class="form-control" id="user-email" type="email" placeholder="User Email..." />
                                    </div>
                                    <div class="form-group">
                                        <label for="user-password">User Password:</label>
                                        <input name="user-pass" class="form-control" id="user-password" type="password" placeholder="User Password..." />
                                    </div>
                                    <div class="form-group">
                                        <label for="user-role">Role:</label>
                                        <select name="user-role" class="form-control" id="user-role">
                                            <option value="admin">Admin</option>
                                            <option value="subscriber">subscriber</option>
                                        </select>
                                        <div class="form-group">
                                        <label for="post-title">Choose photo:</label>
                                        <input name="user-photo" class="form-control-file" id="post-title" type="file" />
                                    </div>
                                    </div>
                                    <button name="user_create" class="btn btn-primary mr-2 my-1" type="submit">Create now!</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--End Table-->
                </main>

<?php require_once('./inc/footer.php'); ?>
