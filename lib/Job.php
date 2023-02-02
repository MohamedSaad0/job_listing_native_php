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
            categories.name AS cname
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
}
