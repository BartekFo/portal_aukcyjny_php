<?php

class mainController
{
    public function __construct($request, $path = 'controller/')
    {
        global $route;
        $param='';
        $request = ltrim($request, '/');
        $name = $request;
        $param=explode('/', $request);
        if (($name=='')||($name=='/')){
            $name='home';
            $request='home';
            $param='';
        }else if (count($param)>1) {
            $request=$param[0];
            if (count($param)>2) {
                $request='notFound';
            }
            array_shift($param);
            $param='/'.implode('/',$param);
            $name=$request;
        }else if (count($param)==1) $param='';

        if (!in_array($name, $route)){
            $name='notFound';
            $request='notFound';
        }
//        $name = ltrim($name, '/');
//        $request = ltrim($request, '/');
        $name = $name . 'Controller';
        $path = $path . $name . '.php';

        try {
            if (is_file($path)) {
                require $path;
                $obj = new $name($request, $param);
            } else {
                throw new Exception('Can not open controller ' . $name . ' in: ' . $path);
            }
        } catch (Exception $e) {
            echo $e->getMessage() . '<br />
                File: ' . $e->getFile() . '<br />
                Code line: ' . $e->getLine() . '<br />
                Trace: ' . $e->getTraceAsString();
            exit;
        }
        return $obj;
    }
}