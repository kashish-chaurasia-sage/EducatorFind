<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class CommonMdl extends CI_Model 
{
	public function __construct()
	{
		parent::__construct(); 
	}
	public function insertRow($data_arr,$tbl){
		$this->db->insert($tbl,$data_arr);
		return $this->db->insert_id();
	}
	public function insertinBatch($arr,$tbl)
{
	 return $this->db->insert_batch($tbl,$arr);
} 
	
	public function fetchNumRows($tbl,$cond='',$groupby='')
	{
		$this->db->select('*');
		$this->db->from($tbl);
		if($cond!=''){
		$this->db->where($cond);
	}
		if($groupby!=''){
			$this->db->group_by($groupby);
		}
		$query = $this->db->get();
	//echo $this->db->last_query();die();
		return $query->num_rows();
	}
	public function getRow($tbl,$clms='*',$whr, $order_by=''){
		$this->db->select($clms);
		$this->db->from($tbl);
		if($whr){
			$this->db->where($whr);
		}
		if($order_by!=''){
			$this->db->order_by($order_by['col_name'], $order_by['order']);
		}
		$q=	$this->db->get();
		//echo $this->db->last_query();die();
		return $q->num_rows()?$q->row():'';
	}
	public function getResult($tbl,$clms='*',$whr='',$order_by='',$limit=''){
			
		$this->db->select($clms);
		$this->db->from($tbl);
		if($whr!=''){
		$this->db->where($whr);
					}
		if($order_by!=''){
		$this->db->order_by($order_by['col_name'], $order_by['order']);
		}
		if($limit!=''){
		$this->db->limit($limit);
		}
		$query=$this->db->get();
		return $query->result();
	}
	
	public function getliked($tbl,$whr,$liked){
		$this->db->select('*');
		$this->db->from($tbl);
		$this->db->like($whr, $liked);
		$query = $this->db->get();
		return $query->result();
	}
	
		public function asPerFillter($tbl,$edu_classArr,$edu_subjectArr,$edu_boardArr,$edu_examArr,$edu_carrerArr,$edu_courseArr,$edu_artArr,$edu_langArr){
			$this->db->select('*');
			$this->db->from($tbl);

			if(!empty($edu_classArr)){
			$this->db->like('educator_class', $edu_classArr);
			}
			if(!empty($edu_subjectArr)){
			$this->db->like('edu_subject',$edu_subjectArr);
			}

			if(!empty($edu_boardArr)){
			$this->db->like('edu_board', $edu_boardArr);
			}
			if(!empty($edu_examArr)){
			$this->db->like('edu_exam', $edu_examArr);
			}
			
			if(!empty($edu_carrerArr)){
			$this->db->like('career_path', $edu_carrerArr);
			}
			if(!empty($edu_courseArr)){
			$this->db->like('prof_course', $edu_courseArr);
			}
			if(!empty($edu_artArr)){
			$this->db->like('art', $edu_artArr);
			}
			if(!empty($edu_langArr)){
			$this->db->like('prof_lang',$edu_langArr);
			}
			$query = $this->db->get();
			return $query->result();
	}
	
	public function asPerCategory($tbl,$cat){
			$this->db->select('*');
			$this->db->from($tbl);

			if($cat =='Academic'){
			$this->db->like('academic','1');
			}elseif(!empty($cat) && $cat =='Career Counselling'){
			$this->db->like('counselling','1');
			}elseif(!empty($cat) && $cat =='Professional'){
				$this->db->like('training','1');
			}
			

			$query = $this->db->get();
			return $query->result();
			}
			
			public function getblog($tbl,$blog_id){
			$this->db->select('*');
			$this->db->from($tbl);
            $this->db->where('blog_id',$blog_id);
			$query = $this->db->get();
			return $query->result();
			}
	
	public function getLeadAdmin(){
		$this->db->select('lead.*,users.name,tbl_educator.edu_name');
		$this->db->from('lead');
		$this->db->join('tbl_educator', 'tbl_educator.Eid = lead.listing_educator_id','left');
		$this->db->join('users', 'users.id = lead.enquiry_by_id','left');
		$query=$this->db->get();
		return $query->result();
	}
	
	public function getReviewAdmin(){
		$this->db->select('review.*,users.name,tbl_educator.edu_name');
		$this->db->from('review');
		$this->db->join('tbl_educator', 'tbl_educator.Eid = review.listing_educator_id','left');
		$this->db->join('users', 'users.id = review.review_by_id','left');
		$query=$this->db->get();
		return $query->result();
	}
	
	public function getReviewFront($educator_id){
		$this->db->select('review.*,users.name,users.user_image');
		$this->db->from('review');
		$this->db->join('users', 'users.id = review.review_by_id','left');
		$this->db->where('review.listing_educator_id',$educator_id);
		$query=$this->db->get();
		return $query->result();
	}
	
	public function liked(){
		$this->db->select('liked.*,tbl_educator.*');
		$this->db->from('liked');
		$this->db->join('tbl_educator', 'tbl_educator.user_id = liked.user_id');
		$this->db->where('liked.user_id',$this->session->userdata('userId'));
		$query=$this->db->get();
		return $query->result();
	}
	
	
	public function getResultpaingnation($tbl,$clms='*',$whr,$order_by='',$limit='', $start = ''){
		$this->db->select($clms);
		$this->db->from($tbl);
		if($whr!=''){
		$this->db->where($whr);
	}
		if($order_by!=''){
		$this->db->order_by($order_by['col_name'], $order_by['order']);
		}
		if($limit!=''){
		$this->db->limit($limit,$start);
		}
		$query=$this->db->get();
		return $query->result();
	}
	public function deleteRecord($tbl,$whr){
		if($this->db->delete($tbl,$whr)){
			return true;
		}
	}
	public function updateData($date_arr,$whr,$tbl){
		$this->db->where($whr);
   	if($this->db->update($tbl,$date_arr))
	   	{
	   		return true;
	   	} 
	 }
public function select_avg($tbl,$clms='*',$whr=''){
$this->db->select_avg($clms);
$this->db->from($tbl);
$this->db->where($whr);
$query = $this->db->get();
return $query->result();
}	
public function select_dynamic_columns($tbl,$clms='*',$condArr){
	$this->db->select($clms);
	$this->db->from($tbl);
	if(isset($condArr['zone']) && $condArr['zone']!=0){
      $this->db->where('zone_id',$condArr['zone']);
    }
    if(isset($condArr['city']) && $condArr['city']!=0){
      $this->db->where('city_id',$condArr['city']);
    }
     if(isset($condArr['saap_year']) && $condArr['saap_year']!=0){
      $this->db->where('saap_year_id',$condArr['saap_year']);
    }
	$query = $this->db->get();
	return $query->result_array();
}
public function selectSum($tbl,$clms='*',$whr=''){
	$this->db->select_sum($clms);
	$this->db->from($tbl);
	$query = $this->db->get();
	return $query->row();
}
		public function getResultArray($tbl,$clms='*',$whr='',$order_by='',$limit=''){
		$this->db->select($clms);
		$this->db->from($tbl);
		if($whr!=''){
		$this->db->where($whr);
					}
		if($order_by!=''){
		$this->db->order_by($order_by['col_name'], $order_by['order']);
		}
		if($limit!=''){
		$this->db->limit($limit);
		}
		$query=$this->db->get();
		return $query->result_array();
	}

	public function getUsersDetails($user_id){
		$this->db->select('users.*,tbl_educator.*');
		$this->db->from('users');
		$this->db->join('tbl_educator', 'tbl_educator.user_id = users.id');
		$query=$this->db->get();
		return $query->result();
	}

	 // Get Meeting Schedule Users
	 public function getMeetingUsers($meeting_schedule_id){
	 	$this->db->select('tbl_meeting_schedule_user.meeting_schedule_user_id, tbl_meeting_schedule_user.status, tbl_user.user_id, tbl_user.user_full_name, tbl_user.user_image');
		$this->db->from('tbl_meeting_schedule_user');
		$this->db->join('tbl_user', 'tbl_meeting_schedule_user.user_id = tbl_user.user_id');
		$this->db->where('tbl_meeting_schedule_user.meeting_schedule_id',$meeting_schedule_id);
		$query=$this->db->get();
		return $query->result();
	 	}
		
	public function updateDataOrCond($date_arr,$whr,$orWhr, $tbl){
		
		$this->db->group_start();
		$this->db->where($whr);
		$this->db->or_where($orWhr);
		$this->db->group_end();
		if($this->db->update($tbl,$date_arr))
	   	{
	   		return true;
	   	} 
	 }
	 
	public function getLeadList(){
		$this->db->select('lead.*');
		$this->db->from('lead');
		$this->db->join('tbl_educator', 'tbl_educator.Eid = lead.listing_educator_id');
		$this->db->where('tbl_educator.user_id',$this->session->userdata('userid'));
		$this->db->where('lead.listing_educator_id','tbl_educator.Eid');
		$query=$this->db->get();
		return $result = $query->result();
	}

	public function get_count($table) {
        return $this->db->count_all($table);
    }

    public function get_paginatedRows($limit, $start, $table) {
        $this->db->limit($limit, $start);
        $query = $this->db->get($table);

        return $query->result();
    }

	// Get subCategories based on categoryID
	public function getSubCategorybyCategoryId($category_id){

		$sql="Select * from custom_sub_category where category_id=".$category_id. " and status = 1 order by sort_order desc";    
		$query = $this->db->query($sql);
		return $query->result_array();
		
	}

	// Get location data by pincode search
	public function getLocationbyPincode($pincode){

		$sql="Select * from custom_location where pincode=".$pincode. "";    
		$query = $this->db->query($sql);
		return $query->result_array();
		
	}

	
	

}