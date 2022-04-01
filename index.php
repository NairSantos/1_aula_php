<?php
require_once("pessoa.class.php");

$pessoa = new Pessoa();
$pessoa->setNome("Nair");
$pessoa->setEndereco("Ruinha");
$pessoa->setBairro("São Miguel");
$pessoa->setCep("00000-000");
$pessoa->setCidade("São Paulo");
$pessoa->setEstado("São Paulo");
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
</head>
<body>
    <table>
        <tr>
            <td style="border: 1px solid #002060; background: MediumVioletRed	;"><?php echo $pessoa->getNome(); ?></td>
        </tr>
        <tr>
            <td style="border: 1px solid #002060; background: deepPink;"><?php echo $pessoa->getEndereco(); ?></td>
        </tr>
        <tr>
            <td style="border: 1px solid #002060; background: PaleVioletRed;"><?php echo $pessoa->getBairro(); ?></td>
        </tr>
        <tr>
            <td style="border: 1px solid #002060; background: HotPink;"><?php echo $pessoa->getCep(); ?></td>
        </tr>
        <tr>
            <td style="border: 1px solid #002060; background: LightPink;"><?php echo $pessoa->getCidade(); ?></td>
        </tr>
        <tr>
            <td style="border: 1px solid #002060; background: MistyRose;"><?php echo $pessoa->getEstado(); ?></td>
        </tr>
    </table>
</body>
</html>