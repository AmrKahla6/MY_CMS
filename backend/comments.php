<?php include_once "./inc/header.php"?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
                        <div class="container-fluid">
                            <div class="page-header-content">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon"><i data-feather="package"></i></div>
                                    <span>All Comments</span>
                                </h1>
                            </div>
                        </div>
                    </div>

                    <!--Start Table-->
                    <div class="container-fluid mt-n10">
                        <div class="card mb-4">
                            <div class="card-header">All Comments</div>
                            <div class="card-body">
                                <div class="datatable table-responsive">
                                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>User Name</th>
                                                <th>User Email</th>
                                                <th>In response to</th>
                                                <th>Details</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Approve</th>
                                                <th>Decline</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    Md. A. Barik
                                                </td>
                                                <td>
                                                    mdabarik19@gmail.com
                                                </td>
                                                <td>
                                                    <a href="#">
                                                        Post Title
                                                    </a>
                                                </td>
                                                <td>Details</td>
                                                <td>17 Nov 2020</td>
                                                <td>
                                                    <div class="badge badge-success">
                                                        Approved
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="btn btn-success btn-icon"><i data-feather="check"></i></button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-red btn-icon"><i data-feather="delete"></i></button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-red btn-icon"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>
                                                    Md. A. Barik
                                                </td>
                                                <td>
                                                    mdabarik19@gmail.com
                                                </td>
                                                <td>
                                                    <a href="#">
                                                        Post Title
                                                    </a>
                                                </td>
                                                <td>Details</td>
                                                <td>17 Nov 2020</td>
                                                <td>
                                                    <div class="badge badge-success">Approved
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="btn btn-success btn-icon"><i data-feather="check"></i></button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-red btn-icon"><i data-feather="delete"></i></button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-red btn-icon"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
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
