<!DOCTYPE html>
<html>
<head>
    <title>Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header><h1>Produtos</h1></header>

<nav>
    <a href="index.html">Home</a>
    <a href="sobre.html">Sobre</a>
    <a href="produtos.php">Produtos</a>
    <a href="novidades.html">Novidades</a>
    <a href="contato.html">Contato</a>
</nav>

<div class="container">
<?php
$produtos = [
    "Canecas personalizadas",
    "Camisetas customizadas",
    "Lembrancinhas",
    "Brindes corporativos"
];

foreach ($produtos as $produto) {
    echo "<div class='card'><h3>$produto</h3></div>";
}
?>
</div>

<footer>
    <p>© 2026</p>
</footer>

</body>
</html>