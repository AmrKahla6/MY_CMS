<?php include_once "./inc/header.php"?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
                        <div class="container-fluid">
                            <div class="page-header-content">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon"><i data-feather="edit-3"></i></div>
                                    <span>Try Creating New Post</span>
                                </h1>
                            </div>
                        </div>
                    </div>

                    <!--Start Form-->
                    <div class="container-fluid mt-n10">
                        <div class="card mb-4">
                            <div class="card-header">Create New Post</div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="post-title">Post Title:</label>
                                        <input class="form-control" id="post-title" type="text" placeholder="Post title ..." />
                                    </div>
                                    <div class="form-group">
                                        <label for="post-status">Post Status:</label>
                                        <select class="form-control" id="post-status">
                                            <option>Published</option>
                                            <option>Draft</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="select-category">Select Category:</label>
                                        <select class="form-control" id="select-category">
                                            <option>Love</option>
                                            <option>Coding</option>
                                            <option>Lifestyle</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="post-title">Choose photo:</label>
                                        <input class="form-control" id="post-title" type="file" />
                                    </div>

                                    <div class="form-group">
                                        <label for="post-content">Post Details:</label>
                                        <textarea class="form-control" placeholder="Type here..." id="post-content" rows="9"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="post-tags">Post Tags:</label>
                                        <textarea class="form-control" placeholder="Tags..." id="post-tags" rows="3"></textarea>
                                    </div>
                                    <button class="btn btn-primary mr-2 my-1" type="button">Submit now</button>
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
