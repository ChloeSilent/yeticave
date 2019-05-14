<?php

function show_price($price)
{
    return number_format(ceil($price), 0, ',', ' ') . " " . "р";
}

/**
 * рендерит страницу из шаблона и данных для него
 * @param $template_name {string} - название шаблона
 * @param $data {array} - данные необходимые для шаблона
 * @return {string} итоговый HTML
 */
function render_template($template_name, $data)
{
    $template_name = "templates/$template_name.php";
    if (!is_readable($template_name)) {
        return "";
    };
    ob_start();
    extract($data);
    require($template_name);
    return ob_get_clean();
}

