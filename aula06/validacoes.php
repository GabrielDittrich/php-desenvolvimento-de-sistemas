<?php
function form_post_nao_enviado()
{
    return $_SERVER['REQUEST_METHOD'] != 'POST';
}

function verificar_input_vazio()
{
    return empty($_POST['valor1']);
}

function validar_campus_form_boletim()
{

    foreach ($_POST as $indice => $valor) {

        // Se o campo for 'aluno' E seu valor estiver vazio:
        if ($indice == 'aluno' && empty($valor)) {
            $erros[] = "Nome do aluno não pode estar vazio";

            // Se não, se o campo NÃO for 'Aluno' E se o valor NÃO for numerico:
        } else if ($indice != 'aluno' && !is_numeric($valor)) {
            $erros[] = "Nota de $indice não pode estar vazia, e dever ser um número";
        }
    }

    // retorna array erros, que pode não conter nenhum erro dentro dele....
    return $erros;
}
