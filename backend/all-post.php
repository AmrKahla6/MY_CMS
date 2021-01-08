<?php include_once "./inc/header.php"?>

        <!--Side Nav-->
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sidenav shadow-right sidenav-light">
                    <div class="sidenav-menu">
                        <div class="nav accordion" id="accordionSidenav">
                            <a class="nav-link collapsed pt-4" href="index.html">
                                <div class="nav-link-icon"><i data-feather="activity"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"><div class="nav-link-icon"><i data-feather="layout"></i></div>
                                Posts
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" data-parent="#accordionSidenav">
                                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavLayout">
                                    <a class="nav-link" href="all-post.html">All Posts</a>
                                    <a class="nav-link" href="add-new.html">Add New Post</a>
                                </nav>
                            </div>

                            <a class="nav-link" href="categories.html" ><div class="nav-link-icon"><i data-feather="chevrons-up"></i></div>
                                Categories
                            </a>

                            <a class="nav-link" href="pages.html" ><div class="nav-link-icon"><i data-feather="book-open"></i></div>
                                Pages
                            </a>

                            <a class="nav-link" href="comments.html" ><div class="nav-link-icon"><i data-feather="package"></i></div>
                                Comments
                            </a>

                            <a class="nav-link" href="messages.html" ><div class="nav-link-icon"><i data-feather="mail"></i></div>
                                Messages
                            </a>

                            <a class="nav-link" href="profile.html" ><div class="nav-link-icon"><i data-feather="user"></i></div>
                                Profile
                            </a>
                        </div>
                    </div>

                    <div class="sidenav-footer">
                        <div class="sidenav-footer-content">
                            <div class="sidenav-footer-subtitle">Logged in as:</div>
                            <div class="sidenav-footer-title">Md. A. Barik</div>
                        </div>
                    </div>

                </nav>
            </div>


            <div id="layoutSidenav_content">
                <main>
                    <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
                        <div class="container-fluid">
                            <div class="page-header-content">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon"><i data-feather="layout"></i></div>
                                    <span>All Posts</span>
                                </h1>
                            </div>
                        </div>
                    </div>

                    <!--Start Table-->
                    <div class="container-fluid mt-n10">
                        <div class="card mb-4">
                            <div class="card-header">All Posts</div>
                            <div class="card-body">
                                <div class="datatable table-responsive">
                                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Status</th>
                                                <th>Category</th>
                                                <th>Author</th>
                                                <th>Image</th>
                                                <th>Date</th>
                                                <th>Details</th>
                                                <th>Tags</th>
                                                <th>Comments</th>
                                                <th>Views</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Status</th>
                                                <th>Category</th>
                                                <th>Author</th>
                                                <th>Image</th>
                                                <th>Date</th>
                                                <th>Details</th>
                                                <th>Tags</th>
                                                <th>Comments</th>
                                                <th>Views</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <a href="#">I Love You!</a>
                                                </td>
                                                <td>
                                                    <div class="badge badge-success">Published
                                                    </div>
                                                </td>
                                                <td>Love</td>
                                                <td>Md. A. Barik</td>
                                                <td>Image</td>
                                                <td>17 Nov 2020</td>
                                                <td>Post details</td>
                                                <td>Important Tags</td>
                                                <td>
                                                    <a href="comments.html">2</a>
                                                </td>
                                                <td>100</td>
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
                                                    <a href="#">I Love You!</a>
                                                </td>
                                                <td>
                                                    <div class="badge badge-warning">Draft
                                                    </div>
                                                </td>
                                                <td>Love</td>
                                                <td>Md. A. Barik</td>
                                                <td>Image</td>
                                                <td>17 Nov 2020</td>
                                                <td>Post details</td>
                                                <td>Important Tags</td>
                                                <td>
                                                    <a href="comments.html">2</a>
                                                </td>
                                                <td>100</td>
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
                    <!--End Table-->

                </main>

<?php include_once "./inc/footer.php"?>
