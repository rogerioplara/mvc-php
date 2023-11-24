<?php $render('header'); ?>

<h2>Adicionar Novo Usuário</h2>
<!-- o form será enviado pelo método post e a action será na mesma página -->
<form action="<?= $base ?>/novo" method="POST"></form>

<?php $render('footer'); ?>