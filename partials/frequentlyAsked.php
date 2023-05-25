           <section class="faq-section section-padding" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <h2 class="mb-4">Frequently Asked Questions</h2>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-lg-5 col-12">
                            <img src="images/faq_graphic.jpg" class="img-fluid" alt="FAQs">
                        </div>

                        <div class="col-lg-6 col-12 m-auto">
                            <div class="accordion" id="accordionExample">
                                <?php
                                $faq = $Question->get_question();
                                foreach($faq as $f){
                                    echo'<div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse'.$f->id.'" aria-expanded="true" aria-controls="collapse'.$f->id.'">
                                        '.$f->question.'
                                        </button>
                                    </h2>

                                    <div id="collapse'.$f->id.'" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            '.$f->answer.'
                                        </div>
                                    </div>
                                </div>';
                                }
                                ?>
                                
                            </div>
                        </div>

                    </div>
                </div>
            </section>