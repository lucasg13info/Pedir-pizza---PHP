<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulário Pizzaria</title>
</head>
<body>

<header>

<nav>
<h1 class="logo">Pizzaria Estefanos</h1>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="pedido.php">Pedido</a></li>
        <li><a href="cardapio.php">Cardápio</a></li>
        <li><a href="contato.php">Contato</a></li>
    </ul>
</nav>
</header>



<main class="banner1">
<h1 class="titulo">Faça seu pedido</h1>





<form class="formulario" action="pedido.php" method="GET">
    <p>Informe o seu nome</p>    
    <input type="text" name="nome" value="">

    <p> Informe o seu endereço </p>
    <input type="text" name="endereco" value="">

    <p> Informe seu e-mail </P>
    <input type="email" name="email" value=""><br><br>
   
<label for="saboreSalgado"> Escolha os sabores da pizza salgada</br></label>
<select name="saborSalgado">
        <option selected disable> Quatro queijos</option>
            <option value="aModaDaCasa">A moda da casa </option>
            <option value="peperoni">Peperoni</option>
            <option value="rucula">Rúcula</option>   
</select>
<br> <br>

<button type="submit">Enviar</button>
</form>


</main>


<footer>
Copright - Pizzaria Estefanos
</footer>
    
</body>
</html>

