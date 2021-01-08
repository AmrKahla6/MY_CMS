<?php include_once "./inc/header.php"?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
                        <div class="container-fluid">
                            <div class="page-header-content">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon"><i data-feather="mail"></i></div>
                                    <span>Reply</span>
                                </h1>
                            </div>
                        </div>
                    </div>

                    <!--Start Form-->
                    <div class="container-fluid mt-n10">
                        <div class="card mb-4">
                            <div class="card-header">Reponse Area:</div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="post-content">Message:</label>
                                        <textarea class="form-control" placeholder="Type here..." id="post-content" rows="9" readonly="true">1</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="user-name">User name:</label>
                                        <input class="form-control" id="user-name" type="text" placeholder="User name ..." readonly="true" value="Md. A. Barik" />
                                    </div>

                                    <div class="form-group">
                                        <label for="post-tags">Reply:</label>
                                        <textarea class="form-control" placeholder="Type your reply here..." id="post-tags" rows="9"></textarea>
                                    </div>

                                    <button class="btn btn-primary mr-2 my-1" type="button">Send my respose</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--End Form-->

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
