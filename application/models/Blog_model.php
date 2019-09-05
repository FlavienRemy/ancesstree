<?php

class Blog_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function add_article($title, $content, $date, $tags) { // Ajouter un article

        if (empty($title) || empty($content) || empty($date) || empty($tags)) {

            return '<p style = "color: red"> Field required </p>'; //$date[\'invalide\'] = \'
            
        }

        else {
            
            if ($this->db->query("INSERT INTO blog (blog_titre, blog_contenu, blog_date, blog_tags) VALUES ('$title', '$content', '$date', '$tags')")) {
                
                return '<p style = "color: green">Article added</p>';
                
            }
        }
        
    }

    public function get_article() {

        $query = $this->db->query("SELECT * FROM blog ORDER BY blog_id DESC LIMIT 6"); // LIMIT sert a delimiter le nombre d'article que l'on va montrer

        return $query->result();

    }

    public function get_1_article($id) {

        $query = $this->db->query("SELECT * FROM blog WHERE blog_id = '$id'"); // LIMIT sert a delimiter le nombre d'article que l'on va montrer

        return $query->result();

    }

    public function get_article_by_id($article) {

        $query = $this->db->query("SELECT * FROM blog WHERE blog_id = '$article'");

        return $query->result();

    }
    


}