<?php $this->load->view('admin/layout/header');?>


 <?php $this->load->view('admin/layout/left_sidebar');?>

<!-- START -->
<section>
    <div class="ad-com">
        <div class="ad-dash leftpadd">
            <div class="ud-cen">
                <div class="log-bor">&nbsp;</div>
                <span class="udb-inst">All Educator Details</span>
                <div class="ud-cen-s2">
                    <h2>All Educator - 297</h2>
                                        <div style="display: none" class="static-success-message log-suc"><p>User(s) has been Permanently Deleted!!! Please wait for automatic page refresh!! </p></div>
                    <div class="ad-int-sear">
                        <input type="text" id="pg-sear" placeholder="Search this page..">
                    </div>
                    <table id="example" class="responsive-table bordered" style="width:100%">
        <thead>
            <tr>
                   <th>No</th>
                            <th>User Name</th>
                            <th>User ID</th>
                            <th>IsFeatured</th>
                            <th>Academic</th>
                            <th>Councelling</th>
							<th>Training</th>
								<th>Action</th>
            </tr>
        </thead>
        <tbody>
            	 <?php if(!empty($educator)){
							$i=1;
							foreach($educator as $key =>$value){ ?>
                            <tr>
                                <td><?=$i;?></td>
                                <td> <img src="<?php echo base_url('uploads/'.$value->user_id.'/'.$value->edu_image);?>" alt="" onerror="this.onerror=null;this.src='<?php echo base_url('assets/public/images/no-image.jpg');?>';">
								<?=$value->edu_name;?><span><?=$value->Eid;?></span><span>Join: <?=$value->created;?></span>
                                </td>
                                <td><?=$value->Eid;?> </td>

                                
                                <td> <input type="checkbox" name="isFeatured" id="isFeaturedId" value="" onclick="IsFeatured(<?=$value->Eid;?>)" <?= ($value->isFeatured == 1)? 'checked':'' ;?>><i></td>
                                <td><?= ($value->academic ==1)? 'Yes':'No' ;?></td>
                                <td><?= ($value->counselling ==1)? 'Yes':'No' ;?></td>
                                <td><?= ($value->training ==1)? 'Yes':'No' ;?></td>
								 <td><a href="<?= base_url('detail/'.url_title($value->edu_name).'/'.$value->Eid);?>" class="db-list-edit" target="_blank">Details</a></td>
                               
                            </tr>    
							<?php $i++; } }else{?>
						 <div class="alert alert-primary" role="alert">
                             No data found
                         </div>
						 <?php }?>
        </tbody>
      
    </table>
                </div>
            </div>
            <div class="ad-pgnat">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
 <?php $this->load->view('admin/layout/footer');?>
<script>$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<script>
    function IsFeatured(Eid) {
                    var eid=Eid;
					var featured=$("#isFeaturedId").is(":checked") ? "1" : "0";
					var featuredAction=featured;
					
                    var allow_url = "<?php echo base_url('admin-educator/isfeatured');?>";

                    $.ajax({
                        type: 'POST',
                        url: allow_url,
                        data: {eid: eid,featuredAction:featuredAction},
                    }).done(function (response) {
                        swal(response);
                      });
                    }

</script>



</body>

</html>