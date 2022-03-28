<div class="content-title">
    <h5><?= $name?></h5>
</div>

<?php
    $table = new App\Views\templates\Table();
    $table->setHeading('Passos', 'Passo Seguinte')
        ->addRow(['data' => '(A) Limitação Horária', 'class' => 'tleft'], '(B)')
        ->addRow(['data' => '(B) Envio SMS', 'class' => 'tleft'], '(C) / (E)')
        ->addRow(['data' => '(C) Delay', 'class' => 'tleft'], '(D)')
        ->addRow(['data' => '(D) Envia e-mail a quem não recebeu SMS', 'class' => 'tleft'], '(E)')
        ->addRow(['data' => '(E) Landing page Revolving', 'class' => 'tleft'], '(-)');

    echo $table->generate();
?>