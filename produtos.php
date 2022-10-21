<?php include "./cabecalho.php"; ?>
<h1>Minha lista de produtos</h1>
$_GET
<pre>
<?php 
    print_r($_GET);
?>

</pre>
<button class="btn btn-danger">
    <?php echo $_GET["nome"]; ?>
</button>

<div class="form-group col-4">
        <label>Nome</label>
        <input 
            type="text" 
            class="form-control"
            name="nome"
            value="<?php echo $_GET["nome"]; ?>"/>
    </div>
    <div class="form-group col-4">
        <label>Endereço</label>
        <input 
            type="text" 
            class="form-control"
            name="endereco"
            value="<?php echo $_GET["endereco"]; ?>"/>
    </div>
    <div class="form-group col-4">
        <label>CPF</label>
        <input 
            type="text" 
            class="form-control"
            name="cpf"
            value="<?php echo $_GET["cpf"]; ?>"/>
    </div>
<?php include "./rodape.php"; ?>