<?php
/* openMarchante/basic/views/site/productos.php */
/* @var $this yii\web\View */

use yii\helpers\Html; /* importar módulos */
use yii\widgets\LinkPager;

$this->title = 'Productos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-produc">
    <h1><?= Html::encode($this->title) ?></h1>

    <ul>
    <?php foreach ($productos as $producto): ?>
        <li>
            <img src="img/productos/<?= $producto->imagen ?>"
                 alt="<?= $producto->nombre ?>" />
            <h4><?= Html::encode("{$producto->nombre}") ?></h4>
            <p><strong>Precio:</strong> $<?= $producto->precio ?></p>
        </li>
    <?php endforeach; ?>
    </ul>

</div>
