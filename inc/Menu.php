<?php
    class Menu{
        public $menu;

        function __construct($menu){
            $this->menu = $menu;
        }
        function get_menu(){
            return $this->menu;
        }
    }
    $Header_menu = new Menu(array("HOME"=>"index.php",
                                  "Browse Topics"=>"#section 2",
                                  "HOW IT WORKS"=>"#section 3",
                                  "FAQS"=>"#section 4",
                                  "CONTACT"=>"#section 5",
                                  "Login" => "login.php",
                        ));
    $BrowseTopics_menu = new Menu(array("Design"=>"design-tab-pane",
                                    "Marketing"=>"marketing-tab-pane",
                                    "Finance"=>"finance-tab-pane",
                                    "Music"=>"music-tab-pane",
                                    "Education"=>"education-tab-pane",
));                   
    function print_menu($menu){
        $menu_items = $menu->get_menu();
        foreach($menu_items as $page=>$url){
            echo '<li class="nav-item" ><a class="nav-link click-scroll" href="'.$url.'">'.$page.'</a></li>';
        }
    }
    
    function print_menutopics($menu){
        $menu_items = $menu->get_menu(); 
        $i = 0;
        foreach($menu_items as $id=>$url){
            echo '<li class="nav-item" role="presentation">';
            if($i == 0){
                echo '<button class="nav-link active" id="'.$id.'" data-bs-toggle="tab" data-bs-target="#'.$url.'" type="button" role="tab" aria-controls="'.$url.'" aria-selected="true">'.$id.'</button>';
            }
            else{
                echo '<button class="nav-link" id="'.$id.'" data-bs-toggle="tab" data-bs-target="#'.$url.'" type="button" role="tab" aria-controls="'.$url.'" aria-selected="false">'.$id.'</button>';
            }
           
        echo '</li>';
        $i++;
        }
    }
?>