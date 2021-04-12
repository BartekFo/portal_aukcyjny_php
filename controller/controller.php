<?php

class Controller
{
    public function loadView($name, $param='', $path = 'view/')
    {
        $name = $name . "View";
        $path = $path . $name . '.php';

        try {
            if (is_file($path)) {
                require $path;
                return new $name($param);
            } else{
                throw new Exception('Can not open view '.$name.' in: '.$path);
            }
        } catch (Exception $e) {
            echo $e->getMessage().'<br />
                File: '.$e->getFile().'<br />
                Code line: '.$e->getLine().'<br />
                Trace: '.$e->getTraceAsString();
            exit;
        }
    }

    public function loadModal($name, $path = 'model/', $param='')
    {
        $name = $name . "mainModel";
        $path = $path . $name . '.php';

        try {
            if (is_file($path)) {
                require $path;
                return new $name();
            } else {
                throw new Exception('Can not open model '.$name.' in: '.$path);
            }
        } catch (Exception $e) {
            echo $e->getMessage().'<br />
                File: '.$e->getFile().'<br />
                Code line: '.$e->getLine().'<br />
                Trace: '.$e->getTraceAsString();
            exit;
        }
    }
}