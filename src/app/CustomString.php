<?php
namespace App;

class CustomString
{
    public static function revers(string $str): string
    {
        $arr = preg_split("/(\?|\.|!|\s+)/", $str, 0, PREG_SPLIT_DELIM_CAPTURE);
        $result = "";
        foreach ($arr as $word) {
            $upperIndexes = [];
            for ($i = 0; $i < strlen($word); $i++) {
                $char = mb_substr($word, $i, 1);
                if ($char == mb_strtoupper($char)) {
                    $upperIndexes[] = $i;
                }
            }
            preg_match_all('/./us', $word, $array);
            $revers = array_reverse($array[0]);
            foreach ($revers as $k => $val) {
                if (in_array($k, $upperIndexes)) {
                    $revers[$k] = mb_strtoupper($val);
                } else {
                    $revers[$k] = mb_strtolower($val);
                }
            }
            $result .= implode('', $revers);
        }
        return $result;
    }
}
