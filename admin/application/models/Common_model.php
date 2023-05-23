<?php
/**
 * User details
 * 
 * Description...
 * 
 * @package user
 * @author Dotwings <your@email.com>
 * @version 0.0.0
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Common_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    /*
     * Add a new user to the system
     * $tableName -> Name of the table
     * $tableData -> Array -> Table data
     */

    function insert_table($tableName, $tableData = array()) {
        // Insert the user record
        if (isset($tableData) && count($tableData) > 0) {
            $this->db->insert($tableName, $tableData);
            return $this->db->insert_id();
			//echo $this->db->last_query(); exit;
        }
        return false;
    }

    /* get the data to table
     * $tableName -> Name of the table
     * $whereData -> Array -> where fields
     * $showField -> Array -> what are the fields need to show
     *  */

    public function selectTable($tableName, $whereData = array(), $showField = array('*'), $orWhereData = array(), $group = array(), $order = '', $having = '', $limit = array(), $result_way = 'all', $echo = 0,$inWhereData = array(),$notInWhereData = array()) {
		
        $this->db->select($showField);
        $this->db->from($tableName);
        if (!empty($whereData) > 0) {
            $this->db->where($whereData);
        }
        if (isset($orWhereData) && !empty($orWhereData)) {
            $this->db->or_where($orWhereData);
        }
        if (isset($inWhereData) && !empty($inWhereData)) {
            $this->db->where_in($inWhereData[0],$inWhereData[1]);
        }
        if (isset($notInWhereData) && !empty($notInWhereData)) {
            $this->db->where_not_in($notInWhereData[0],$notInWhereData[1]);
        }
        if (!empty($group)) {
            $this->db->group_by($group);
        }
        if ($order != '') {
            $this->db->order_by($order,"DESC");
        }
        /*if (count($limit>0)) {
            //$this->db->limit($limit[0],$limit[1]);//example $limit[0] = "0,10" where  0 is for offset and 10 for limit
        }*/
        $query = $this->db->get();
       
        return $query;
    }

    
    /* update the data to table
     * $tableName -> Name of the table
     * $whereData -> Array -> where fields
     * $updateData -> Array -> updated fields and data
     *  */

    public function updateTable($tableName, $whereData = array(), $updateData = array()) {
        $this->db->where($whereData);
        $this->db->update($tableName, $updateData);
        $return = $this->db->affected_rows() > 0;
        return $return;
        //$query->result_array();
        //$query->num_rows();
    }

    /* update the data to table
     * $tableName -> Name of the table
     * $whereData -> Array -> where fields
     * $updateData -> Array -> updated fields and data
     *  */

    public function deleteTableData($tableName, $whereData = array()) {
        // Insert the user record
        if (isset($whereData) && count($whereData) > 0) {
            $insert_id = $this->db->delete($tableName, $whereData);
            return true;
        }
        return false;
    }




    
    /*
     * get a chat user to the system
	   */
	
	
	
	
	
}

/* End of file user_groups.php */
/* Location: ./application/models/user_groups.php */