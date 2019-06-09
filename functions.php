<?php
/**
 * показывает цену в рублях с отделение тысячных пробелом
 * @param $price {number} - сумма
 * @return {string} сумма, где тысячная часть отделена проблом и стоит знак рубля
 */
function show_price($price)
{
    return number_format(ceil($price), 0, ',', ' ') . " " . "р";
};

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

/**
 * возвращает разницу в часах и мунутах между датами
 * @param $date1 {string} - дата из которой нужно вычитать
 * @param $date2 {int} - вычитаемая дата, задается в unixtime
 * @return $remain_time {int} отсавшееся время в часах и минутах
 */

function count_time ($date1, $date2){
$diff = $date2 - $date1;
$remain_time = date("H:i:s", $diff );
return "$remain_time";
}


