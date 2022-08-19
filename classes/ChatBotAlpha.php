<?php

include(__DIR__ . '/ChatBotSkelet.php');
include(__DIR__ . '/Filters.php');

class ChatBotAlpha extends ChatBotSkelet {
    use Filters;
    public static function readTags(string $str) {
        parent::$tags = explode(' ', $str);
    }

    public static function getAnswer() {
        $counters = [];
        $i = 0;
        foreach (parent::ANSWERS as $answer) {
            $answer_tags = $answer[1];
            $counters[$i++] = count(array_intersect($answer_tags, parent::$tags));
        }

        $answer_key = Filters::getKeyOfMaxValue($counters);
        return parent::ANSWERS[$answer_key][0];
    }
}