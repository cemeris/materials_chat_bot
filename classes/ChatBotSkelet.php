<?php
abstract class ChatBotSkelet
{
    const ANSWERS = [
        ['Eat more fruits', ['should', 'eat', 'what', 'i', 'fruits']],
        ['Go for a walk', ['what', 'should', 'we', 'do', 'walk']]
    ];

    protected static $tags = [];
    abstract public static function readTags(string $str);
    abstract public static function getAnswer();
}