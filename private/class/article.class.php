<?php 
    class Article  {

    public $id;
    public $author_id = 1;
    public $create_date = 0;
    public $last_edit_date = 0;
    public $preview_text;
    public $full_text;
    public $subject;
    public $visible;

    public $errors = [];

    public function __construct($args=[]) {
        (isset($args['author_id'])) ?  $this->author_id = $args['author_id'] : $this->author_id = 1;
        (isset($args['create_date'])) ? $this->create_date = $args['create_date'] : $this->create_date = ''; 
        (isset($args['last_edit_date'])) ? $this->last_edit_date = $args['last_edit_date'] : $this->last_edit_date = ''; 
        (isset($args['preview_text'])) ? $this->preview_text = $args['preview_text'] : $this->preview_text = ''; 
        (isset($args['full_text'])) ? $this->full_text = $args['full_text'] : $this->full_text = ''; 
        (isset($args['subject'])) ? $this->subject = $args['subject'] : $this->subject = ''; 
        (isset($args['visible'])) ? $this->visible = $args['visible'] : $this->visible = ''; 
    }

    public function find_all_articles(){
        global $database;

        $sql = "SELECT * FROM articles ORDER BY create_date DESC";
        $result = $this->fetch_all($sql);
        return $result;
    }

    public function find_all_visible_articles(){
        global $database;

        $sql = "SELECT * FROM articles WHERE visible = 1 ORDER BY create_date DESC";
        $result = $this->fetch_all($sql);
        return $result;
    }

    public function find_all_articles_per_page($per_page, $offset){
        global $database;
        
        $sql = "SELECT * FROM articles ";
        $sql .= " ORDER BY create_date DESC ";
        $sql .= " LIMIT {$per_page} ";
        $sql .= "OFFSET {$offset} ";
        $result = fetch_all($sql);
        return $result;
    }

    public function find_all_articles_per_page_visible($per_page, $offset){
        global $database;

        $sql = "SELECT * FROM articles " ;
        $sql .= " WHERE visible = 1 ";
        $sql .= " ORDER BY create_date DESC ";
        $sql .= " LIMIT {$per_page} ";
        $sql .= " OFFSET {$offset} ";
        $result = fetch_all($sql);
        return $result;
     }


    public function fetch_all($sql) {
        global $database;

        $res = $database->query($sql);
        While ($row = $res->fetch_object()) {
            $rows[] = $row;
        }
        $res->free();
        return $rows;
    }

    protected function validate() {
        $this->errors = [];

        if(is_blank($this->subject)) {
            $this->errors[] = "Тема сообщения не может быть пустой";
        }
        if(is_blank($this->full_text)) {
            $this->errors[] = "Сообщение не может быть пустым";
        }
        return $this->errors;
    }

    public function create() {
        global $database;

        $this->validate();
        if(!empty($this->errors)) {return false;}

        $sql ="INSERT INTO articles (";
        $sql .= "author_id, preview_text, full_text, subject, visible ";
        $sql .= ")  VALUES (";
        $sql .= "'" . $this->author_id . "', ";
        $sql .= "'" . $this->preview_text . "', ";
        $sql .= "'" . $this->full_text . "', ";
        $sql .= "'" . $this->subject . "', ";
        $sql .= "'" . $this->visible . "'";
        $sql .= ")";

        $result = $database->query($sql);
        if($result) {
            $this->id = $database->insert_id;
        }
        return $result;
    }


}