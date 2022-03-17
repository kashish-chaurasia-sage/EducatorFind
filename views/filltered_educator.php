<?php if(!empty($listed)){ 
                                    
    foreach($listed as $list){
        // error_log("FROM EDUCATOR VIEW***** ".json_encode($list->edu_name));
    // $data=json_decode($educatorVal->LongJsonInfo,true);

    ?>

                    <li class="all-list-item">

                        <div class="eve-box">

                            <!---LISTING IMAGE--->
                            <div class="al-img">
                            <!-- <span class="ver"><i class="material-icons" title="Verified expert">verified_user</i></span> -->

                                <!-- <span class="open-stat">Verified</span> -->
                                <a href="<?= base_url('detail/'.preg_replace('/[[:space:]]+/', '-', strtolower($list->edu_name)).'/'.$list->educator_id);?>">
                                    <img src="<?=base_url('uploads/'.$list->user_id.'/'.$list->edu_image);?>">
                                </a>

                            </div>
                            
                            <!---END LISTING IMAGE--->

                            <!---LISTING NAME--->
                            <div style="padding :0px 0px 0px 10px">
                                <h4>

                                    <a href="<?= base_url('detail/'.preg_replace('/[[:space:]]+/', '-', strtolower($list->edu_name)).'/'.$list->educator_id);?>"><?= $list->edu_name;?></a>
                                </h4>
                                
                                <span class="addr"><?= $list->city_name?$list->city_name: 'No Location';?></span>
                                <div>
                                    <span class="eduData"><?php echo $list->edu_experience; ?> <?php echo "years"; ?><?php echo "Exp."; ?></span>
                                    
                                    <span class="eduData">
                                        <?php
                                            if ($list->edu_mode == "1") {
                                                echo "Online";
                                            }elseif($list->edu_mode == "2"){
                                                echo "Offline";
                                            }else{
                                                echo "Hybrid";
                                            }
                                        ?>
                                        
                                    </span>

                                    <?php if(!empty($list->categories)){ 
                        
                                        foreach($list->categories as $category){
                                            // error_log("Category***** ".json_encode($category));
                                            if(!empty($category->category_id) && $category->category_id == 1){
                                                ?>

                                                <span class="eduData"> <?php echo "Academics"; ?></span>

                                            <?php   

                                            }
                                            if(!empty($category->category_id) && $category->category_id == 2){
                                                ?>
                                                <span class="eduData"> <?php echo "Competetive Exams"; ?></span>

                                                <?php
                                            }
                                            if(!empty($category->category_id) && $category->category_id == 3){
                                                ?>
                                                <span class="eduData"> <?php echo "Career Counselling"; ?></span>

                                                <?php
                                            }
                                            if(!empty($category->category_id) && $category->category_id == 4){
                                                ?>
                                                
                                                <span class="eduData"> <?php echo "Art"; ?></span>

                                                <?php
                                            }
                                            if(!empty($category->category_id) && $category->category_id == 5){
                                                ?>
                                                
                                                <span class="eduData"> <?php echo "Language Learning"; ?></span>

                                                <?php
                                            }
                                            if(!empty($category->category_id) && $category->category_id == 6){
                                                ?>
                                                
                                                <span class="eduData"> <?php echo "Professional Courses"; ?></span>

                                                <?php
                                            }
                                        }
                                    }
                                        

                                    ?>

                                    </div>
                                
                                <!-- <span class="pho">
                                    <?php    
                                        $number=$list->edu_number;
                                        $maskedMobile =  str_pad(substr($number, -4), strlen($number), '*', STR_PAD_LEFT);
                                        echo $maskedMobile; 
                                    ?>
                                </span> -->

                                <!-- <span class="mail">
                                    <?php 
                                        $email=$list->edu_email;
                                        $maskedEmail=substr($email, 0, 3).'****'.substr($email, strpos($email, "@"));
                                        echo $maskedEmail;
                                    ?> 
                                </span> -->

                                <div class="links">
                                    <a href="<?= base_url('detail/'.preg_replace('/[[:space:]]+/', '-', strtolower($list->edu_name)).'/'.$list->educator_id);?>">view more</a>
                                    <a href="Tel: <?= $list->edu_number;?>">Call Now</a>
                                    <a href="https://wa.me/<?= $list->edu_whatsapp;?>" class="what" target="_blank">WhatsApp</a>
                                </div>
                                

                                <span class="enq-sav" data-toggle="tooltip"
                                    title="">
                                    
                                    <span ><i class="material-icons" title="Verified expert">verified_user</i></span>
                                    
                                    </span>
                                    
                                    <span class="enq-sav2" data-toggle="tooltip"
                                    title="">
                                    <span ></span>
                                    <div class="text-center">
                                            <!-- <h4>Rating Overview</h4> -->
                                            <!-- <br> -->
                                            <h1 class="rating-number"><?= $list->avg_rating?$list->avg_rating: '4';?><small>/5</small></h1>
                                            <div class="rating-stars d-inline-block position-relative mr-2">
                                                <img src="<?=base_url('assets/public/images/grey-star.svg');?>" alt="">
                                                <div class="filled-star" style="width:86%"></div>
                                            </div>
                                            <!-- <div class="text-muted">2,145 ratings</div> -->
                                    </div>
                                <!-- <div > -->
                                    
                                <!-- </div> -->
                                

                            </div>
                            
                            <!---END LISTING NAME--->
                            

                        </div>
                    </li>
                    
                    <?php }}else{?>
                    <h4>No data found</h4>
                    <?php }?>   
        
                    <div class="ban-ati-com ads-all-list">
                            <div>
                            <!-- <p align="center"><?php echo $links; ?></p>
                                </div>
                               
                            </div> -->