<?php
/**
/** Adicionando rel prettyPhoto a qualquer imagem do conteúdo do post
* @Author Quebrando a Cabeça
* @Author URL http://quebrandoacabeca.com
* @Post URL http://quebrandoacabeca.com/lightbox-no-wordpress/
*/?>

// ADICIONA REL PRETTYPHOTO NOS LINKS DAS IMAGENS DO POST
add_filter('the_content', 'addrel', 12);
function addrel ($content)
{   global $post;
	$pattern = "/<a(.*?)href=('|\")([^>]*).(bmp|gif|jpeg|jpg|png)('|\")(.*?)>(.*?)<\/a>/i";
    $replacement = '<a$1href=$2$3.$4$5 rel="prettyPhoto"$6>$7</a>';
    $content = preg_replace($pattern, $replacement, $content);
    return $content;
}
