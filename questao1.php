<?php
       $content = json_decode(file_get_contents("db.json",true),true);
if($content != null){
	echo json_encode($content);
}else{
	echo 'No data received!';
}


//para testar: Na primeira linha tem um file_get_contents, essa função lê o arquivo que está dentro de json_decode para que quando for preciso manipular os dados salvar esses dados em uma variável chamada content. Se tiver dados, ele mostra, se não ele avisa que não tem. 
?>
