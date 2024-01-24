<?php

namespace JobSite;
use JobSite\Database;
include_once 'config/config.php';
class Jobs
{
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    //Get all jobs
    public function getAllJobs(){
        $this->db->query("SELECT jobs.*, categories.name AS cname
        FROM jobs 
        INNER JOIN categories 
            ON jobs.category_id = categories.id
        ORDER BY post_time DESC");

        //Assign result set
        $results = $this->db->resultSet();

        return $results;
    }

    //Get Categories
    public function getCategories(){
        $this->db->query("SELECT * FROM categories");

        // Assign result set
        $results = $this->db->resultSet();

        return $results;
    }

    //Get jobs by category
    public function getJobsByCategory($category){
        $this->db->query("SELECT jobs.*, categories.name AS cname
        FROM jobs
        INNER JOIN categories
            ON jobs.category_id = categories.id
        WHERE jobs.category_id = $category
        ORDER BY post_time DESC");

        //Assign result set
        $results = $this->db->resultSet();

        return $results;
    }

    //Get Category Name by ID
    public function getCategoryNameById($id){
        $this->db->query("SELECT * FROM categories WHERE id = :id");

        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    //Get Job by ID
    public function getJobById($id){
        $this->db->query("SELECT jobs.*, categories.name FROM jobs 
                  INNER JOIN categories ON jobs.category_id = categories.id 
                  WHERE jobs.id = :id");

        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }
}