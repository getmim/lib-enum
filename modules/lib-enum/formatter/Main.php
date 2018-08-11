<?php
/**
 * Enum format type
 * @package lib-enum
 * @version 0.0.2
 */

namespace LibEnum\Formatter;

use LibEnum\Library\Enum;

class Main
{
    static function enum($value, $f, $o, $format){
        return new Enum($format->enum, $value);
    }

    static function multipleEnum($value, $f, $o, $format){
        $values = explode($format->separator, $value);
        $result = [];
        foreach($values as $val)
            $result[] = new Enum($format->enum, trim($val));
        return $result;
    }
}