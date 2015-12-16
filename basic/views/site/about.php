<?php

/* @var $this yii\web\View */

use yii\helpers\Html; /* importar módulos */

$this->title = 'Acerca de';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Esta es la página acerca de. Puedes modificar el archivo
        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>

    </p>

    <code><?= __FILE__ ?></code>
</div>
