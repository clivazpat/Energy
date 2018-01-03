<?php

namespace Energy\Library\Utils;

/**
 * Class Redirect
 * @package Energy\Library\Utils
 * Permet d'effectuer des redirections vers d'autres pages
 */
class Redirect
{
    /**
     * Redirection vers une url
     * @param $link lien vers lequel on veut rediriger
     */
    public static function toUrl($link) {
    header(sprintf('Location: %s', $link));
    exit;
}

    /**
     * Redirection vers la page précédente
     */
    public static function toLastPage() {
        if(isset($_SERVER['HTTP_REFERER'])) $link = $_SERVER['HTTP_REFERER'];
        else {
            if (isset($_SESSION['user']))
                $link = ABSURL . DS . 'books';
            else
                $link = ABSURL;
        }

        header(sprintf('Location: %s', $link));
        exit;
    }

    /**
     * Redirection vers une action
     * @param $controller       Controller vers lequel on veut rediriger
     * @param string $action    Action vers laquelle on veut rediriger
     * @param null $param       Paramètre éventuels à passer dans l'url
     */
    public static function toAction($controller, $action = 'index', $param = null){
        echo $controller;
        echo $action;
        if(isset($param)) {
            $queryString = '&';
            foreach($param as $key => $value) {
                $queryString .= sprintf('%s=%s', $key, $value);
            }
        }
        else
            $queryString = '';

        header(sprintf('Location: '.ABSURL.DS.'%s'.DS.'%s?%s', $controller, $action, $queryString));
        exit;
    }
}