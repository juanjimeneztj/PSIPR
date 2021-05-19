<?php
namespace Nowy\getURL;
class getURL{
    protected $url;
    protected $method;
    protected $params;

    public function __construct(...$params){
        if(is_array($params)){
            $this->url = isset($params['url'])&&!is_null($params['url'])?$params['url']:null;
            $this->method = isset($params['method'])&&!is_null($params['method'])?$params['method']:'POST';
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

    private static function validate($url,$method,$params){
        $data = true;
        return $data;
    }

    public function send(){
        if(self::validate($this->url,$this->method,$this->params)){
            $data = [
                'message' => 'Testing message',
                'code' => 200
            ];
        }else{
            $data = [
                'message' => 'Testing error',
                'code' => 404
            ];
        }

        return json_encode($data);
    }
}