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
    static protected $connection;
    

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

    static public function set_database($connection) {
        self::$connection = $connection;
      }

    static public function find_all_articles(){
        $articles = $connection->query("SELECT * FROM articles ORDER BY create_date DESC ");
        return $articles;
    }

    

    public function find_article_by_id($id){
        $sth = self::$connection->prepare(
            "SELECT * FROM articles WHERE id = :id ORDER BY create_date DESC "
        );
         $sth->execute(['id' => $id]);
         $article = $sth->fetchAll();
         return array_shift($article);
    }
    // Надо переделать под пагинацию

    // public function find_all_articles_per_page($per_page, $offset){
    //     global $database;
        
    //     $sql = "SELECT * FROM articles ";
    //     $sql .= " ORDER BY create_date DESC ";
    //     $sql .= " LIMIT {$per_page} ";
    //     $sql .= "OFFSET {$offset} ";
    //     $result = fetch_all($sql);
    //     return $result;
    // }

    // public function find_all_articles_per_page_visible($per_page, $offset){
    //     global $database;

    //     $sql = "SELECT * FROM articles " ;
    //     $sql .= " WHERE visible = 1 ";
    //     $sql .= " ORDER BY create_date DESC ";
    //     $sql .= " LIMIT {$per_page} ";
    //     $sql .= " OFFSET {$offset} ";
    //     $result = fetch_all($sql);
    //     return $result;
    // }

    public function create()  { 
    
        // Валидация на ввод верных данных
        $this->validate();
        if(!empty($this->errors)) {return false;}

        $sth = $this->connection->prepare(
            "INSERT INTO articles (
                author_id,
                preview_text,
                full_text,
                subject,
                visible
            ) values (
                :author_id,
                :preview_text,
                :full_text,
                :subject,
                :visible
            )"
        );

        $sth->execute([
            'author_id' => $this->author_id,
            'preview_text' => $this->preview_text,
            'full_text' => $this->full_text,
            'subject' => $this->subject,
            'visible' => $this->visible
        ]);

        return isset($sth->errorInfo()[2]) ? true : $sth->errorInfo()[2];
    
    }

    public function update($id){

        $this->validate();
        if(!empty($this->errors)) {return false;}

        $sth = $this->connection->prepare(
            "UPDATE articles SET preview_text = :preview_text, full_text = :full_text, subject = :subject, visible = :visible WHERE id = :id LIMIT 1 "
        );

        $sth->execute([
            'id' => $id,
            'preview_text' => $this->preview_text,
            'full_text' => $this->full_text,
            'subject' => $this->subject,
            'visible' => $this->visible
        ]);

        return isset($sth->errorInfo()[2]) ? true : $sth->errorInfo()[2];
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

    


}