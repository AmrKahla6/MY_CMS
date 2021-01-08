<?php include_once "./inc/header.php"?>

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

                    <!--Start Table-->
                    <div class="container-fluid mt-n10">
                        <div class="card mb-4">
                            <div class="card-header">Create New User</div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="user-name">User Name:</label>
                                        <input class="form-control" id="user-name" type="text" placeholder="User Name..." />
                                    </div>
                                    <div class="form-group">
                                        <label for="user-email">User Email:</label>
                                        <input class="form-control" id="user-email" type="email" placeholder="User Email..." />
                                    </div>
                                    <div class="form-group">
                                        <label for="user-role">Role:</label>
                                        <select class="form-control" id="user-role">
                                            <option>Admin</option>
                                            <option>Subscriber</option>
                                        </select>
                                        <div class="form-group">
                                        <label for="post-title">Choose photo:</label>
                                        <input class="form-control" id="post-title" type="file" />
                                    </div>
                                    </div>
                                    <button class="btn btn-primary mr-2 my-1" type="button">Create now!</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--End Table-->
                </main>

                <!--start footer-->
                <footer class="footer mt-auto footer-light">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 small">Copyright &#xA9; TechBarik 2020</div>
                            <div class="col-md-6 text-md-right small">
                                <a href="#!">Privacy Policy</a>
                                &#xB7;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
                <!--end footer-->
            </div>
        </div>

        <!--Script JS-->
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
