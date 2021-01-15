<?php include_once "./inc/header.php"?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
                        <div class="container-fluid">
                            <div class="page-header-content">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon"><i data-feather="activity"></i></div>
                                    <span>Dashboard</span>
                                </h1>
                            </div>
                        </div>
                    </div>

                    <!--Table-->
                    <div class="container-fluid mt-n10">

                    <!--Card Primary-->
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <p>All Posts</p>
                                    <?php
                                        $sql  = "SELECT * FROM posts";
                                        $stmt = $pdo->prepare($sql);
                                        $stmt->execute();

                                        $post_count = $stmt->rowCount()
                                    ?>
                                    <p><?php echo $post_count ?></p>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="all-post.php">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <p>Comments</p>
                                    <?php
                                        $sql  = "SELECT * FROM comments";
                                        $stmt = $pdo->prepare($sql);
                                        $stmt->execute();

                                        $comments_count = $stmt->rowCount()
                                    ?>
                                    <p><?php echo $comments_count ?></p>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="comments.php">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <p>Categories</p>
                                    <?php
                                        $sql  = "SELECT * FROM categories";
                                        $stmt = $pdo->prepare($sql);
                                        $stmt->execute();

                                        $category_count = $stmt->rowCount()
                                    ?>
                                    <p><?php echo $category_count ?></p>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="categories.php">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <p>Users</p>
                                    <?php
                                        $sql  = "SELECT * FROM users WHERE user_role = :role";
                                        $stmt = $pdo->prepare($sql);
                                        $stmt->execute([
                                            ':role' => 'subscriber',
                                        ]);

                                        $users_count = $stmt->rowCount()
                                    ?>
                                    <p><?php echo $users_count ?></p>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="users.php">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Card Primary-->

                        <div class="card mb-4">
                            <div class="card-header">Most Popular Posts:</div>
                            <div class="card-body">
                                <div class="datatable table-responsive">
                                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>ID</th>
                                                <th>Post Title</th>
                                                <th>Post Category</th>
                                                <th>Total Views</th>
                                                <th>Photo</th>
                                                <th>Author</th>
                                                <th>Posted On</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $sql  = "SELECT * FROM posts WHERE post_status = :status ORDER BY post_views DESC LIMIT 0,5";
                                            $stmt = $pdo->prepare($sql);
                                            $stmt->execute([
                                                ':status' => 'published',
                                            ]);

                                            $x = 1;

                                        while($posts = $stmt->fetch(PDO::FETCH_ASSOC)){
                                            $post_id          = $posts['post_id'];
                                            $post_title       = $posts['post_title'];
                                            $post_views       = $posts['post_views'];
                                            $post_image       = $posts['post_image'];
                                            $post_date        = $posts['post_date'];
                                            $post_author      = $posts['post_author'];
                                            $post_category_id = $posts['post_category_id'];

                                            $sql1  = "SELECT * FROM categories WHERE category_id = :id";
                                            $stmt1 = $pdo->prepare($sql1);
                                            $stmt1->execute([
                                                ':id' => $post_category_id,
                                            ]);
                                            $category      = $stmt1->fetch(PDO::FETCH_ASSOC);
                                            $category_name = $category['category_name']; ?>

                                            <tr>
                                                <td><?php echo $x++?></td>
                                                <td><?php echo $post_id ?></td>
                                                <td>
                                                    <a href="../single.php?post_id=<?php echo $post_id ?>" target="_blank">
                                                        <?php echo $post_title ?>
                                                    </a>
                                                </td>
                                                <td><?php echo $category_name ?></td>
                                                <td><?php echo $post_views ?></td></td>
                                                <td>
                                                    <img src="../img/<?php echo $post_image?>" heigth ="50px" width="50px" alt="<?php echo $post_image?>">
                                                </td>
                                                <td><?php echo $post_author?></td>
                                                <td><?php echo $post_date?></td>
                                            </tr>

                                        <?php }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Table-->

                </main>

<?php include_once "./inc/footer.php"?>

