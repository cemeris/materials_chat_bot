<?php

include(__DIR__ . '/ChatBotAlpha.php');

class ApiHelper
{
    public function getAnswer() {
        $output_str = '';
        if (isset($_GET['question']) && is_string($_GET['question'])) {

            ChatBotAlpha::readTags($_GET['question']);
            $obj1 = new ChatBotAlpha();
            $obj2 = new ChatBotAlpha();
            $output_str .= $obj1->getAnswer($_GET['question']) . '<br>';
            $output_str .= $obj2->getAnswer($_GET['question']);
        }
        return $output_str;
    }
}