<?php
require './HTMLParser.php';

$html = array();

function start_element_handler($tag_name, $attr_list) {
    global $html;
    $attr_code = array();
    foreach ( $attr_list as $name => $value ) {
        $value = htmlspecialchars($value);
        $attr_code[] = "{$name} = \"{$value}\"";
    }
    $attr_code = ' '.implode(' ', $attr_code);

    $html[] = "<{$tag_name}{$attr_code}>";
}

function end_element_handler($tag_name) {
    global $html;
    $html[] = "</{$tag_name}>";
}

function character_data_handler($character_data) {
    global $html;
    if ( $character_data == '' ) echo "-{$character_data}-";
    $html[] = $character_data;
}

$data = 'k<i>j</i><meta>aaa<!-- sss --><b a=">" b="cc">xx</b aa>kkk';
//$data = '<b alt="><" x y g>xxx</b>';
//$data = '<b alt="><" x y g>xxx</b><script>alert("</script >");';
//$data = 'sss<a x = "<d <ba>';

$parser = new HTMLParser();
$parser->set_start_element_handler('start_element_handler');
$parser->set_end_element_handler('end_element_handler');
$parser->set_character_data_handler('character_data_handler');
$parser->parse($data);

print_r($html);
?>