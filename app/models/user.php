<?php
namespace coding\app\models;
use coding\app\system\DataBase;
class User extends Model{
    public static $tblName="users";
    function __construct()
    {
        
    }
    function __set($name, $value)
    {
        $this->$name=$value;
    }
    function save(){
        
        $values=array();
        $columns=array();
        foreach (get_object_vars($this) as $key=> $property) {
            if($property !=self::$tblName)
            {
                $values[]=is_string($property)?"'".$property."'":$property;
                $columns[]=$key;

            }
            
        }
        $values=implode(",",$values);
        $columns=implode(",",$columns);
        $sql_query="inser into ". self::$tblName." (".$columns.") values (".$values.")";
        echo $sql_query;
        
    }
    protected static $instance;
    function __constructor(){

    }
    public static function action(){
        if (!self::$instance) {
            self::$instance=new self();
        }
        return self:: $instance;
    }
    public function create($POST){
        
        $error=array();
        $arr['name']=ucwords(trim($POST['name']));
        $arr['email']=trim($POST['email']);
        $arr['password']=trim($POST['password']);
        $arr['is_active']=isset($POST['is_active'])?1:0;
        $arr['role_id']=isset($POST['role_id'])?1:0;
        // if(empty($arr['name']) || !preg_match("/^[a-zA-Z]+$/", $arr['name']))
        // {
        //     $error[]="user name can only have letter and space";
        //     print_r($error);
        // }
        if(!filter_var($arr['email'],FILTER_VALIDATE_EMAIL))
        {
            $error[]="please enter valid email";
            print_r($error);
        }
        if(empty($arr['password']) || strlen($arr['password']) < 4)
        {
            $error[]="password must be more than 4 char ...";
            print_r($error);
        }
        // if($arr['user_type'] !="admin" && $arr['user_type'] !="user")
        // {
        //     $error[]="please enter valid user type";
        // }
        if(count($error) == 0)
        {
            // print_r($arr);
            return DataBase::table('users')->insert($arr);

        }

        return $error;

    }
    public function update_by_id($values,$id){
       return DataBase::table('users')->update($values)->where("id = :id",["id"=>$id]);


    }
    public function where($where,$values){
        

    }
   
    public function get_all(){
        return DataBase::table('users')->select()->all();
        
    }
    
    public function __call($function, $params)
    {
        $value= $params[0];
        $column= str_replace("get_by_", "", $function);
        $column= addslashes($column);
        $check=DataBase::table('users')->query('show columns from users');
        
        echo '<pre>';
        $all_columns=array_column($check,"Field");
        if(in_array($column,$all_columns))
        {
            return DataBase::table('users')->select()->where($column . " = :" . $column,[$column => $value]);

        }
        

    }

}
?>