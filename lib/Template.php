<?php

namespace JobSite;
class Template{
    public mixed $search;
    protected $template;
    protected $vars = [];

    // __construct
    public function __construct($template){
        $this->template = $template;
    }

    // __get
    public function __get($key){
        return $this->vars[$key];
    }

    // __set
    public function __set($key, $value){
        $this->vars[$key] = $value;

    }

    // __toString
    public function __toString(){
        extract($this->vars);
        chdir(dirname($this->template));
        ob_start();
        include basename($this->template);
        return ob_get_clean();
    }
}
