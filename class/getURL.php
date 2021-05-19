<?php
namespace App;
class getURL{
    protected $url;
    protected $protocol;
    protected $params;

    public function __construct(...$params){
        if(is_array($params)){
            $this->url = isset($params['url'])&&!is_null($params['url'])?$params['url']:null;
            $this->protocol = isset($params['method'])&&!is_null($params['method'])?$params['method']:'POST';
            $this->params = isset($params['data'])&&!is_null($params['data'])?$params['data']:null;
            $data = [
                'message' => 'Datos correctos, pendiente siguiente instruccion!.',
                'code' => 200
            ];
        }else{
            $data = [
                'message' => 'Datos incorrectos favor de verificar o revisar documentacion!!!...',
                'code' => 404
            ];
        }

        return json_encode($data);
    }

    public function send(){
        $data = [
            'message' => 'Testing message',
            'code' => 200
        ];

        return json_encode($data);
    }
}