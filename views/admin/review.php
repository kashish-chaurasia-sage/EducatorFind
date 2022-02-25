<?php $this->load->view('admin/layout/header');?>


 <?php $this->load->view('admin/layout/left_sidebar');?>

<!-- START -->
<section>
    <div class="ad-com">
        <div class="ad-dash leftpadd">
            <div class="ud-cen">
                <div class="log-bor">&nbsp;</div>
                <span class="udb-inst">All Review</span>
                <div class="ud-cen-s2">
                    <h2>All Review </h2>
                                        <div style="display: none" class="static-success-message log-suc"><p>User(s) has been Permanently Deleted!!! Please wait for automatic page refresh!! </p></div>
                    <div class="ad-int-sear">
                        <input type="text" id="pg-sear" placeholder="Search this page..">
                    </div>
                    <table id="example" class="responsive-table bordered" style="width:100%">
        <thead>
            <tr>
                   <th>No</th>
                            <th>Review For (Educator)</th>
                            <th>Review By</th>
                            <th>Review</th>
							<th>Date</th>

            </tr>
        </thead>
        <tbody>
            	 <?php if(!empty($review)){
							$i=1;
							foreach($review as $key =>$value){ ?>
                            <tr>
							    <td><?=$i;?></td>
								<td><a href="<?= base_url('detail/'.url_title($value->edu_name).'/'.$value->listing_educator_id);?>" class="db-list-edit text-success" target="_blank"><?= $value->edu_name;?></a></td>
                                 <td><?= $value->name  ;?></td>
                                <td><?= $value->review_message  ;?></td>
                                <td><?= $value->created_on  ;?></td>
                                
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


</body>

</html>