 <?php if(!empty($listed)){ foreach($listed as $educatorKey => $educatorVal){ 

					   $data=json_decode($educatorVal->LongJsonInfo,true);
?>
                               
                    <li class="all-list-item">
                                        <div class="eve-box">
                                            <!---LISTING IMAGE--->
                                            <div class="al-img">
                                                 <span class="open-stat">Open</span>
                                                        <a href="">

                                                    <img src="<?=base_url('uploads/'.$educatorVal->user_id.'/'.$data[0]['edu_image']);?>">
                                                </a>

                                            </div>
                                            <!---END LISTING IMAGE--->

                                            <!---LISTING NAME--->
                                            <div>
                                                <h4>
                                                    <a href=""><?= $educatorVal->edu_name;?></a>
                                                                                                    </h4>
                                                                                                <span
                                                    class="addr"><?= $educatorVal->edu_city;?></span>
                                        <span class="pho">
										   <?php  
                                               
       										    $number=$data[0]['edu_mobile'];
                                               $maskedMobile =  str_pad(substr($number, -4), strlen($number), '*', STR_PAD_LEFT);
										         echo $maskedMobile; 
												 ?>
									    </span>
                                        <span class="mail">
										<?php 
										$email=$data[0]['edu_email'];
										$maskedEmail=substr($email, 0, 3).'****'.substr($email, strpos($email, "@"));
										echo $maskedEmail;
										?> 
										</span>

                                                <div class="links">
                                                     <a href="<?= base_url('detail/'.preg_replace('/[[:space:]]+/', '-', strtolower($educatorVal->edu_name)).'/'.$educatorVal->user_id);?>">view more</a>
                                                    <a href="Tel: <?= $data[0]['edu_mobile'];?>">Call Now</a>
                                                    <a href="https://wa.me/<?= $data[0]['edu_whatsapp'];?>" class="what" target="_blank">WhatsApp</a>
                                                </div>

                                            </div>
                                            <!---END LISTING NAME--->

                                            <!---SAVE--->
                                    <span class="enq-sav" data-toggle="tooltip"
                                          title="Click to like this listing">
                                        <i class="l-like Animatedheartfunc299 "
                                           data-for="0"
                                           data-section="1"
                                           data-num="206"
                                           data-item=""
                                           data-id='299'><img
                                                src="https://bizbookdirectorytemplate.com/images/icon/svg/like.svg"></i></span>
                                            <!---END SAVE--->
                                        </div>
                                    </li>
<?php }}else{?>
<h4>No data found</h4>
<?php }?>
 