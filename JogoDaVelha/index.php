<?php 

// $jogador1 = readline("NOME JOGADOR 1: ");           
// $jogador2 = readline("NOME JOGADOR 2: ");

function tabelaJogoDaVelha(){
    return [
        [' ', ' ', ' '],
        [' ', ' ', ' '],
        [' ', ' ', ' '],
    ];
}


function printJogoDaVelha($tabuleiro){
    for($i=0; $i< 3; $i++){
        for($j=0; $j < 3; $j++){
            echo " ". $tabuleiro[$i][$j] . " ";
            if($j<2){
                echo "|";
            }
        }
        echo "\n";
        if($i < 2){
            echo "-----------\n";
        }
    }
}

function verificarGanhou($tabuleiro, $jogador){
    // verificar linha
    for($i=0; $i < 3; $i++){
        if($tabuleiro[$i][0] == $jogador && $tabuleiro[$i][1] == $jogador && $tabuleiro[$i][2] == $jogador){
            return true;
        }
    }

    for($j=0; $j < 3; $j++){
        if($tabuleiro[0][$j] == $jogador && $tabuleiro[1][$j]  == $jogador && $tabuleiro[2][$j] == $jogador){
            return true;
        }
    }

    if($tabuleiro[0][0] == $jogador && $tabuleiro[1][1] == $jogador && $tabuleiro[2][2] == $jogador){
        return true;
    }

    if($tabuleiro[0][2] == $jogador && $tabuleiro[1][1] == $jogador && $tabuleiro[2][0] == $jogador){
        return true;
    }

    return false;
}

function tabuleiroCheio($tabuleiro){
    for($i=0; $i< 3; $i++){
        for($j=0; $j < 3; $j++){
            $tabuleiro[$i][$j] == " ";
            return false;
        }
    }
    return true;
}
function jogarJogoDaVelha(){
    $tabuleiro = tabelaJogoDaVelha();
    $jogada = 0;

    while(true){
        if($jogada % 2 ){
            $jogadorAtual = "O";
        } else {
            $jogadorAtual = "X";
        }
        printJogoDaVelha($tabuleiro);
        echo "$jogadorAtual, escolha uma posição (linha e coluna) ";
        fscanf(STDIN, "%d %d", $linha, $coluna);
        $linha--;
        $coluna--;

        if($tabuleiro[$linha][$coluna] == " "){
            // da para inserir
            $tabuleiro[$linha][$coluna] = $jogadorAtual;
            $jogada++;

            if(verificarGanhou($tabuleiro, $jogadorAtual)){
                printJogoDaVelha($tabuleiro);
                echo "O jogador $jogadorAtual venceu!\n";
                break;
            }

            if(tabuleiroCheio($tabuleiro)){
                printJogoDaVelha($tabuleiro);
                echo "Empate!\n";
                break;  
            }

        } else {
            echo "Posição já ocupada! Escolha outra!\n";
        }
    }
}

jogarJogoDaVelha();

?>