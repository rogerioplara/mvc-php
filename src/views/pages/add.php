<?php $render('header'); ?>

<h2>Adicionar Novo Usuário</h2>
<!-- o form será enviado pelo método post e a action será na mesma página -->
<form action="<?= $base ?>/novo" method="POST">
    <label>
        Nome:<br>
        <input type="text" name="name">
    </label><br><br>
    <label>
        Email:<br>
        <input type="text" name="email">
    </label><br><br>

    <input type="submit" value="Adicionar">
</form>

<?php $render('footer'); ?>