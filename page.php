<?php
get_header();
 //echo  get_the_content();//
?>
<?php  the_title();?>
   <!-- Main -->
   <main>
            <!-- Welcome section -->
            <section class="tm-welcome">
                <div class="row">
                    <div class="col-12">
                       
                        <?php  the_content();?>     
                    </div>
                </div>


<div class="collapse navbar-collapse tm-nav" id="navbarSupportedContent1">
                        
                        
                        <ul class="navbar-nav mr-auto">
                          <li class="nav-item active">
                            <a class="nav-link tm-nav-link" href="#">Home <span class="sr-only"></span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link tm-nav-link" href="company.html">About</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link tm-nav-link" href="services.html">Gallery</a>
                          </li>
                          
                        </ul>
                        
                    
                      </div>
                      
                    
                </div>
            </div>
        </div>
    </div>
  <?php  ?>
   <?php              
get_footer(); 
?>