 <!-- main -->
 <div class="col-9 p-3">
            <div class="ps-3">
                <?php
                $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : '';
                if(!empty($hal)){
                  include_once $hal.'.php';
                }else{
                  include_once 'home.php';
                }
                ?>
                
                
                </div>
                </div>