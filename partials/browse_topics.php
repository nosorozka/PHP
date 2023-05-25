
<section class="explore-section section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-12 text-center">
                            <h2 class="mb-4">Browse Topics</h1>
                        </div>

                    </div>
                </div>

                <div class="container">
                    <?php
                    $category_list=$Category->get_category();
                    foreach($category_list as $cat){
                        echo'<h2>'.$cat->name.'</h2>';
                        $topic_list= $Topic->get_topics_by_category($cat->id);
                        echo' <div class="row mb-4">';
                        foreach($topic_list as $top){
                            echo'<div class="col-4">
                            <div class="custom-block bg-white shadow-lg">
                                <div class="d-flex">
                                    <div>
                                        <h5 class="mb-2">'.$top->title.'</h5>

                                        <p class="mb-0">'.$top->subtitle.'</p>
                                    </div>

                                    <span class="badge bg-design rounded-pill ms-auto">'.$top->number.'</span>
                                </div>

                                <img src="'.$top->image.'" class="custom-block-image img-fluid" alt="">
                        </div></div>';

                        }

                      
                        echo'</div>';

                    }
                    ?>
                   
                </div>

                   
            </section>