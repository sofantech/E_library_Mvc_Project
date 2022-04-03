<?php
namespace coding\app\system;


class DataBase
{
    public $pdo;
    protected static $instance;
    protected static $con;
    protected static $table;
    protected $query;
    protected $values=array();
    protected $query_type ="select";
    public static function table($table){
        self::$table=$table;
        if (!self::$instance) {
            self::$instance=new self();
        }
        if(!self::$con){

            try {
            
                $string="mysql:host=".DBHOST.";dbname=".DBNAME;
                self::$con=new \PDO($string,DBUSER,DBPASS);
               
            } catch (\PDOException $e) {
                echo $e->getMessage();
                die;
            }
        }
        
        
        return self::$instance;

    }
    protected function run($values= array()){
        
       

        print_r( $this->query );
        $stm=self::$con->prepare($this->query);  
        
           
        $check=$stm->execute($values);
       
        if ($check) {
            switch ($this->query_type) {
                case 'select':
                    $data=$stm->fetchAll(\PDO::FETCH_OBJ);
                    if (is_array($data) && count($data) >0) {
                        return $data;
                    }
                    break;
                case 'update':
                    # code...
                    return true;
                    break;
                case 'insert':
                    echo "true";
                    return true;
                    break;
                case 'delete':
                    return true;
                    break;
                default:
                    # code...
                    break;
            }
            
           
        }
        echo "false";
        return false;
        


    }
    public function all(){
        return $this->run();
        

    }
    public function where($where,$values= array()){
        switch ($this->query_type) {
            case 'select':
                $this->query .= " where " . $where ;
                return $this->run($values);
                break;
            case 'update':
                $values = array_merge($this->values,$values);
                $this->query .= " where " . $where;
                return $this->run($values);
                break;
            default:
                # code...
                break;
        }

    }
    public function select(){
        $this->query_type="select";
        $this->query="select * from " . self::$table ." ";
        print_r(self::$instance);
        return self::$instance; 

    }
    public function update(array $values){
        $this->query_type="update";
        $this->query="update " . self::$table . " set ";
        foreach ($values as $key => $value) {
            $this->query .= $key . "= :" . $key . " "; 
        }
        $this->query=trim($this->query,",");
        $this->values= $values;
        return self::$instance;

    }
    public function insert(array $values){
        // print_r($values);
        $this->query_type="insert";
        $this->query="insert into " . self::$table . "  (";
        foreach ($values as $key => $value) {
            $this->query .= $key . ","; 
        }
        $this->query=trim($this->query,",");
        $this->query .=") values (";
        foreach ($values as $key => $value) {
            $this->query .= ":" . $key . ","; 
        }
        $this->query=trim($this->query,",");
        $this->query .= ")";
        $this->values= $values;
        return $this->run($this->values);

    }
    public function query($query,$values = array()){
        $stm=self::$con->prepare($query);     
        $check=$stm->execute($values);
        if ($check) {
        
            $data= $stm->fetchAll(\PDO::FETCH_OBJ);
            if (is_array($data) && count($data) > 0) {
                return $data;
            }
        }
        return false;
          
        

    }
    
}
?>