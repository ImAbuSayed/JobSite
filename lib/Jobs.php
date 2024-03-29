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

    //Create Job
    public function createJob($data){
        $this->db->query("INSERT INTO jobs (job_title, company, category_id, location, deadline, description, salary, contact_user, contact_email, responsibility) 
        VALUES (:job_title, :company, :category_id, :location, :deadline, :description, :salary, :contact_user, :contact_email, :responsibility)");

        //Bind values
        $this->db->bind(':job_title', $data['job_title']);
        $this->db->bind(':company', $data['company']);
        $this->db->bind(':category_id', $data['category_id']);
        $this->db->bind(':location', $data['location']);
        $this->db->bind(':deadline', $data['deadline']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':salary', $data['salary']);
        $this->db->bind(':contact_user', $data['contact_user']);
        $this->db->bind(':contact_email', $data['contact_email']);
        $this->db->bind(':responsibility', $data['responsibility']);

        //Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    // Delete Job
    public function deleteJob($id){
        $this->db->query("DELETE FROM jobs WHERE id = :id");
        $this->db->bind(':id', $id);

        // Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    //Edit Job
    public function editJob($id, $data){
        $this->db->query("UPDATE jobs SET job_title = :job_title, company = :company, category_id = :category_id, location = :location, deadline = :deadline, description = :description, salary = :salary, contact_user = :contact_user, contact_email = :contact_email, responsibility = :responsibility WHERE id = :id");

        // Bind values
        $this->db->bind(':id', $id);
        $this->db->bind(':job_title', $data['job_title']);
        $this->db->bind(':company', $data['company']);
        $this->db->bind(':category_id', $data['category_id']);
        $this->db->bind(':location', $data['location']);
        $this->db->bind(':deadline', $data['deadline']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':salary', $data['salary']);
        $this->db->bind(':contact_user', $data['contact_user']);
        $this->db->bind(':contact_email', $data['contact_email']);
        $this->db->bind(':responsibility', $data['responsibility']);

        // Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    // Search Jobs by navbar search

    public function searchJobs(mixed$search){
        $this->db->query("SELECT jobs.*, categories.name AS cname
        FROM jobs
        INNER JOIN categories
            ON jobs.category_id = categories.id
        WHERE jobs.job_title LIKE :search
        ORDER BY post_time DESC");

        $this->db->bind(':search', '%'.$search.'%');

        $rows = $this->db->resultSet();

        return $rows;
    }

}