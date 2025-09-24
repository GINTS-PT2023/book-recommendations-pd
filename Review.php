<?php

class Review
{

    private $fname;
    private $title;
    private $review;
    private $rating;

    function __construct($fname, $title, $review, $rating)
    {
        $this->fname = $fname;
        $this->title = $title;
        $this->review = $review;
        $this->rating = $rating;
    }

    function getFullName($id, $fname, $last_name)
    {
        echo $fname . " " . $last_name;
    }
}
