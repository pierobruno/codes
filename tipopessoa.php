<?php
/*
	Dica para você diminuir o tamanho do seu formulário e otimizar sua programacao.
  Ao invés de colocar um campo perguntando se é pessoa física ou jurídica, faça direto via programação no seu script de salvamento.
  
  Sabemos que existe uma diferença entre a quantidade de caracteres do CPF para o CNPJ, basta identificar este número e fazer uma comparação simples com IF.
  ##################################################
  #                  #       CPF     #    CNPJ     #
  ##################################################
  #                  #               #             #
  # COM FORMATAÇÃO   #       14      #     19      #
  #                  #               #             #
  # SEM FORMATAÇÃO   #       11      #     15      #
  ##################################################
  
  Segue Exemplo:
*/

//recebendo a informação, como vem de um formulário vou usar o POST, entretanto poderia ser GET ou REQUEST.
//recebimento simples, o tratamento do dado vc pode pesquisar em outro post.
$cpf_cnpj = $_POST["num_cpf_cnpj"];

// verificando a quantidade de caracteres do dado recebido
$qtd_carac_cpfcnpj = strlen($cpf_cnpj); 

/* 
Obs.: como vamos saber se está formatado ou nao?
No seu formulário/script vc pode definir mascaras e formataçoes para o dado, entretanto neste exemplo vou utilizar uma forma universal, 
em que o dado estando ou nao formatado ele vai assumir o correto posicionamento.

Note que o CNPJ formatado ou nao, tem o valor de 15 ou mais caracteres. Baseado nisto vamos utilizar como parâmetro para comparação e identificação.
OBS.: 0 a esquerda muitas vezes é desconsiderado. Com isto temo um problema pois a mascara no cnpj é xxx.xxx.xxx/xxxx-xx, e muita das vezes quando o cnpj
começa com zero, ele é escrito assim: xx.xxx.xxx/xxxx-xx e com isto temos um grande problema, pois ele sem formatação fica com 14 caracteres, que é o numero de
caracteres do CPF formtado, gerando um ERRO na comparação.

certifique-se de colocar a máscara ou a informação de que o CNPJ deverá ser informado com os 15 digitos.
*/

// Aqui fazemos a comparação e imprimivos o Tipo de Pessoa, ou atribuimos este a uma variável para ser utilizada. Vou usar o IF em sua escrita tradicional.
if ($qtd_carac_cpfcnpj >= 15) {
	echo "Pessoa Jurídica";
}else{
	echo "Pessoa Física";
}
?>
