<?php

function geraEmail(string $nome): void
{
    $conteudoEmail = <<<FINAL
        Olá, $nome!

        Estamos entrando em contato para
        {motivo do contato}

        {assinatura}
    FINAL;
}

geraEmail('Henrique');

// Nome Heredoc ou nowdoc

