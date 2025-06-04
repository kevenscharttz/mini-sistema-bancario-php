<?php
$continuar = true;
$titular = "Keven Willians";
$saldo = 1000;

while ($continuar == true) {
    echo "\n=====================================\n";
    echo "👤 Titular: $titular\n";
    echo "💰 Saldo: R$ $saldo\n";
    echo "=====================================\n\n";

    // menu
    echo "📋 MENU:\n";
    echo "1️⃣  Consultar saldo atual\n";
    echo "2️⃣  Sacar valor\n";
    echo "3️⃣  Depositar valor\n";
    echo "4️⃣  Sair\n";
    echo "Escolha uma opção: ";

    // Obter dados pelo terminal
    $opcao = (int) fgets(STDIN);

    switch ($opcao){
        case 1:
            consultarSaldo();
            break;
        case 2:
            $saldo = sacar($saldo);
            break;
        case 3:
            $saldo = depositar($saldo);
            break;
        case 4:
            $continuar = false;
            echo "\n👋 Obrigado por usar o sistema. Até logo!\n";
            break;
        default:
            echo "\n❌ Opção inválida. Tente novamente.\n";
    }
}

function consultarSaldo(){
    global $saldo;
    echo "\n🔍 Seu saldo atual é de R$ $saldo\n";
}

function sacar($saldo){
    echo "\n💸 Quanto você deseja sacar? R$ ";
    $saque = (float) fgets(STDIN);
    if ($saque <= $saldo) {
        $saldo -= $saque;
        echo "✅ R$ $saque foram sacados com sucesso!\n";
    } else if ($saque > $saldo) {
        echo "❌ Saldo insuficiente!\n";
    }
    return $saldo;
}

function depositar($saldo){
    echo "\n💰 Quanto você deseja depositar? R$ ";
    $deposito = (float) fgets(STDIN);
    if ($deposito >= 0) {
        $saldo += $deposito;
        echo "✅ R$ $deposito foram depositados com sucesso!\n";
    } else {
        echo "❌ Valor inválido.\n";
    }
    return $saldo;
}
?>
