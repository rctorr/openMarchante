<?php
  use yii\helpers\Html;
?>
<p>Proporcione la siguiente información:</p>

<ul>
    <li><label>Nombre</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>
