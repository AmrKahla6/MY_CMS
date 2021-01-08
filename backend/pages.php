<?php include_once "./inc/header.php"?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
                        <div class="container-fluid">
                            <div class="page-header-content d-flex align-items-center justify-content-between text-white">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon"><i data-feather="book-open"></i></div>
                                    <span>All Pages</span>
                                </h1>
                                <a href="new-page.html" title="Add New Page" class="btn btn-white">
                                    <div class="page-header-icon"><i data-feather="plus"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--Table-->
                    <div class="container-fluid mt-n10">

                        <div class="card mb-4">
                            <div class="card-header">All Pages</div>
                            <div class="card-body">
                                <div class="datatable table-responsive">
                                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Page Title</th>
                                                <th>Page Details</th>
                                                <th>Views</th>
                                                <th>Created By</th>
                                                <th>Status</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <a href="#">
                                                        Lifestyle
                                                    </a>
                                                </td>
                                                <td>Details</td>
                                                <td>61</td>
                                                <td>Md. A. Barik</td>
                                                <td>
                                                    <div class="badge badge-success">Published
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="btn btn-blue btn-icon"><i data-feather="edit"></i></button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-red btn-icon"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>
                                                    <a href="#">
                                                        Loved
                                                    </a>
                                                </td>
                                                <td>Details</td>
                                                <td>61</td>
                                                <td>Md. A. Barik</td>
                                                <td>
                                                    <div class="badge badge-success">Published
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="btn btn-blue btn-icon"><i data-feather="edit"></i></button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-red btn-icon"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>
                                                    <a href="#">
                                                        Programming
                                                    </a>
                                                </td>
                                                <td>Details</td>
                                                <td>61</td>
                                                <td>Md. A. Barik</td>
                                                <td>
                                                    <div class="badge badge-success">Published
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="btn btn-blue btn-icon"><i data-feather="edit"></i></button>
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
