<?php
function block_simplehtml_images() {
    return array(html_writer::tag('img', '', array('alt' => get_string('red', 'block_simplehtml'), 'src' => "pix/red.png", 'height' =>    '40px', 'width'=>'70px')),
                html_writer::tag('img', '', array('alt' => get_string('blue', 'block_simplehtml'), 'src' => "pix/blue.png", 'height' => '40px', 'width'=>'70px')),
                html_writer::tag('img', '', array('alt' => get_string('green', 'block_simplehtml'), 'src' => "pix/green.png", 'height' => '40px', 'width'=>'70px')));
}
