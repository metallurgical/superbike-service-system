<?php

class Custom_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }   


    function get_branch_distinct($table, $where = false, $tableNameToJoin = false, $tableRelation = false, $order_by = false)
    {
            

            $this->db->select('DISTINCT `depart_id` as depart_id, locations.location', false);
            $this->db->from($table);

            if($where!=false){
               $this->db->where($where);
            }
           
           if($order_by!=false){
                $this->db->order_by($order_by[0], $order_by[1]);
           }
        
           if($tableNameToJoin!=false && $tableRelation!=false){
                for ($i=0; $i < count($tableNameToJoin); $i++){
                    $this->db->join($tableNameToJoin[$i], $tableRelation[$i]);
                }
                
           }
          
         
            $query = $this->db->get();
            return $query->result_array(); 
           
    }

    function get_destination_distinct($table, $where = false, $tableNameToJoin = false, $tableRelation = false, $order_by = false)
    {
            

            $this->db->select('DISTINCT `destination_id` as destination_id, locations.location', false);
            $this->db->from($table);
             if($where!=false){
               $this->db->where($where);
            }
             if($tableNameToJoin!=false && $tableRelation!=false){
                for ($i=0; $i < count($tableNameToJoin); $i++){
                    $this->db->join($tableNameToJoin[$i], $tableRelation[$i]);
                }
                
            }         
            $query = $this->db->get();
            return $query->result_array(); 
           
    }


    
 
}


?>