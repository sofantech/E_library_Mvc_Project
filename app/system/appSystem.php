<?php
namespace coding\app\system;

use coding\app\system\Response as SystemResponse;
use Response;

class AppSystem{
    public Request $request;
    public SystemResponse $response;
    public Router $router;
    public static AppSystem $appsystem;
    
  
    function __construct()
    {

        self::$appsystem=$this;
        $this->request=new Request();
        $this->response=new SystemResponse();
        $this->router=new Router($this->request);

    }
    
    public function start(){
        $this->router->executeRoute();
        

    }
    
}

?>