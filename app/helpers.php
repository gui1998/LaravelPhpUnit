<?php


/**
 * Retorna validação divisor
 *
 * @param   int    $number numero para validar
 * @param   array    $comparative array com validação e retorno
 * @return  string
 */
function verifyMultiple($number, $comparative)
{
    krsort($comparative);
    foreach ($comparative as $key => $value) {
        if (($number % intval($key)) == 0) {
            return $value;
        }
    }
    return strval($number);
}
