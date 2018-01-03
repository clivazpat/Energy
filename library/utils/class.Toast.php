<?php

namespace Energy\Library\Utils;

/**
 * Class Toast
 * @package Energy\Library\Utils
 * Classe servant à afficher des toasts dans les différentes pages
 */
class Toast
{
    private static $time = 4000;

    /**
     * Méthode permettant d'ajouter un nouveau message
     * @param $message  Contenu du message
     * @param $color    Couleur du toast
     */
    public static function message($message, $color)
    {
        $_SESSION['messages'][] = array(
            'message' => $message,
            'color' => $color
        );
    }

    /**
     * Méthode permettant d'afficher les messages stockés dans la session
     * @return string   Code html contenant les toasts
     */
    public static function displayMessages()
    {
        if (!isset($_SESSION['messages']) || sizeof($_SESSION['messages']) == 0)
            return "";

        $out = '<script> ';
        foreach ($_SESSION['messages'] as $message) {
            $out .= ' Materialize.toast("' . $message['message'] . '", "' . self::$time . '", "' . $message['color'] . '"); ';
        }

        $out .= '</script> ';
        $_SESSION['messages'] = array();

        return $out;
    }
}