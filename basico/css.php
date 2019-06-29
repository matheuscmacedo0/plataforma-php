<div class="titulo">Integração CSS</div>

<h1 center>

<?php
echo 'Olá ';
echo '<small>';
echo 'Mundo!';
echo '</small>';
?>

</h1>

<?= "<div center>Outra forma de exibir!</div>" ?>

<br>
<div center marrom><button><?= "Enviar" ?></button></div>

<style>
    button {
        padding: 5px 20px;
        background-color: chocolate;
        color: #eee;
        font-weight: bold;
        border-radius: 6px;
    }
    [center] {
        display: flex;
        justify-content: center;
    }
    [marrom] {
        color: chocolate;
    }
    [dobro] {
        font-size: 2rem;
    }
</style>