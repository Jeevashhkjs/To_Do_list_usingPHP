<?php 

class router
{
    public $DataArray = [];

    public function getUsers($middleware){
        $this->DataArray[count($this->DataArray)-1]['middleWare'] = $middleware;
        // print_r($this->DataArray);
    }

    public function get($uri,$controller){
        $this->DataArray = [
            "uri" => $uri,
            "controller" => $controller,
            "METHOD" => "GET",
            "middleWare" => null
        ];
        return $this;
    }

    public function news($name){
        return $this;
    }

//     public function post($uri,$controller){
//         $this -> DataArray = [
//             "uri" => $uri,
//             "controller" => $controller,
//             "METHOD" => "GET",
//             "middleware" => null
//         ];
//         return $this;
//     }

    public function checkUri(){
        print_r($this->DataArray);
        foreach ($this -> DataArray as $routersDat){
            // return $this->DataArray;
            if($routersDat['uri'] === $_SERVER['REQUEST_URI']){
                // if($routersDat['middleware'] == 'auth'){
                //     (new authenticUsers()) -> handle();
                // }
                // if($routersDat['middleware'] == 'guest'){
                //     (new guestUsers()) -> handle();
                // }
            }

        }
        // exit();
    }
}

class authenticUsers
{
    public function handle(){
        if(!isset($_SESSION['login'])){
            header('Location:/');
        }
    }
}

// class guestUsers
// {
//     public function handle(){
//         if(isset($_SESSION['login'])){
//             header('Location:/');
//         }
//     }


?>