<?php

class Job
{
    private $db;

    public function __construct()
    {
        $this->db = new DB;
    }

    //get all jobs
    public function getAllJobs()
    {
        $this->db->query(
            'SELECT
            jobs.*,
            categories.name AS cat_name
        FROM
            jobs
        INNER JOIN categories ON jobs.category_id = categories.id
        ORDER BY
             jobs.post_date'
        );

        // assin results
        $results = $this->db->resultSet();
        return $results;
    }

    public function getCategories()
    {
        $this->db->query(
            'SELECT * FROM categories'
        );
        // assign results
        $results = $this->db->resultSet();
        return $results;
    }

    //get jobs by category
    public function getSingleCategory($id)
    {
        $this->db->query(
            'SELECT jobs.* , categories.name as catName FROM jobs INNER JOIN categories ON jobs.category_id = categories.id
            WHERE jobs.category_id = ' . $id . '
            ORDER BY post_date DESC'
        );
        $results = $this->db->resultSet();
        return $results;
    }

    public function getCategory($category_id)
    {
        $this->db->query(
            'SELECT * FROM categories WHERE id = :category_id');
            $this->db->bind(':category_id', $category_id);
            
            // Assign Row
            $row = $this->db->single();
            
            return $row;

    }
}
