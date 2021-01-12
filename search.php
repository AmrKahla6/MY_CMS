<?php session_start(); ?>
<?php $page_title = "Search" ?>
<?php require_once("./inc/header.php"); ?>


                    <?php
                       if(isset($_POST['search']))
                       {
                           $keyword = $_POST['search'];
                           $sql     = "SELECT *
                                       FROM posts
                                       WHERE post_status = :status
                                       AND post_title
                                       LIKE :title";

                            $stmt    = $pdo->prepare($sql);
                            $stmt->execute([
                                ':status' => 'published',
                                ':title'  => '%'. trim($keyword) .'%'
                            ]);

                            $post_found = 0;
                            $count = $stmt->rowCount();

                            if($count == 0)
                            {
                                $post_found = 0;
                            }
                            else
                            {
                                $post_found = $count ;
                            }
                       }
                    ?>
                    <header class="page-header page-header-dark bg-gradient-primary-to-secondary">
                        <div class="page-header-content pt-10">
                            <div class="container text-center">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <h1 class="page-header-title mb-3">Search result for <?php echo $keyword ?></h1>
                                        <p class="page-header-text">Total posts found : <?php echo $post_found ?> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="svg-border-rounded text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0" /></svg>
                        </div>
                    </header>
                    <section class="bg-white py-10">
                        <div class="container">

                            <h1>Search Result:</h1>
                            <hr />
                            <div class="row">
                            <?php
                                 $keyword = $_POST['search'];
                                 $sql     = "SELECT *
                                             FROM posts
                                             WHERE post_status = :status
                                             AND post_title
                                             LIKE :title
                                             ORDER BY post_id DESC
                                             LIMIT 0, 6";

                                  $stmt    = $pdo->prepare($sql);
                                  $stmt->execute([
                                      ':status' => 'published',
                                      ':title'  => '%'. trim($keyword) .'%'
                                  ]);
                                  $count = $stmt->rowCount();

                                  if($count == 0)
                                  {
                                      echo "<div class='container text-center'>";
                                        echo "<div class='row justify-content-center'>";
                                            echo "<h1 class='page-header-title mb-3'>No Posts Try Again</h1>";
                                        echo "</div>";
                                      echo "</div>";
                                  }
                                  else
                                  {
                                    while($post = $stmt->fetch(PDO::FETCH_ASSOC))
                                    {
                                        $post_id       = $post['post_id']       ;
                                        $post_title    = $post['post_title']    ;
                                        $post_detail   = $post['post_detail']   ;
                                        $post_category = $post['post_category_id'] ;
                                        $post_image    = $post['post_image']    ;
                                        $post_date     = $post['post_date']     ;
                                        $post_author   = $post['post_author']   ;
                                        $post_view     = $post['post_views']    ;
                                        ?>

                                        <div class="col-md-6 col-xl-4 mb-5">
                                            <a class="card post-preview lift h-100" href="single.php?post_id=<?php echo $post_id; ?>"
                                                ><img class="card-img-top" src="./img/<?php echo $post_image ?>" alt="<?php echo $post_image ?>" />
                                                <div class="card-body">
                                                    <h5 class="card-title"> <?php echo $post_title ?>  </h5>
                                                    <p class="card-text">   <?php echo substr($post_detail , 0 , 140) ?>  </p>
                                                </div>
                                                <div class="card-footer d-flex align-items-center justify-content-between">
                                                    <div class="post-preview-meta">
                                                        <img class="post-preview-meta-img" src="./img/pic.jpg" />
                                                        <div class="post-preview-meta-details">
                                                            <div class="post-preview-meta-details-name"><?php echo $post_author ?></div>
                                                            <div class="post-preview-meta-details-date"><?php echo $post_date ?> </div>
                                                        </div>
                                                    </div>
                                                    <div class="post-preview-meta">
                                                         <?php echo $post_view  ?>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <?php
                                    }
                                  }
                            ?>
                            </div>

                            <nav aria-label="Page navigation example">
                                <ul class="pagination pagination-blog justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#!" aria-label="Previous"><span aria-hidden="true">&#xAB;</span></a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#!">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#!">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#!">3</a></li>
                                    <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#!">12</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#!" aria-label="Next"><span aria-hidden="true">&#xBB;</span></a>
                                    </li>
                                </ul>
                            </nav>

                        </div>

                        <div class="svg-border-rounded text-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0" /></svg>
                        </div>
                    </section>
                </main>
            </div>
<?php require_once("./inc/footer.php"); ?>
