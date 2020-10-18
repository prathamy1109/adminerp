<?php

class MY_Loader extends CI_Loader
{
    public function template($template_name, $vars = array(), $return = false)
    {
        if ($return):
        $content  = $this->view('section/header', $vars, $return);
        $content  = $this->view('section/sidebar', $vars, $return);
        $content .= $this->view($template_name, $vars, $return);
        $content .= $this->view('section/footer', $vars, $return);

        return $content; else:
        $this->view('section/header', $vars);
        $this->view('section/sidebar', $vars);
        $this->view($template_name, $vars);
        $this->view('section/footer', $vars);
        endif;
    }
}
