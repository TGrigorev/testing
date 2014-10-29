<?php
$this->menu=array(
    array('label'=>'Вывод списка книг', 'url'=>array('stats/books')),
    array('label'=>'Вывод списка авторов', 'url'=>array('stats/users')),
    array('label'=>'Вывод случайных книг', 'url'=>array('stats/rand')),
);
?>
    <h1>Вывод пяти случайных книг.</h1>
<?php
$this->widget('zii.widgets.grid.CGridView',array(
    'dataProvider'=> $odpRand,
    'columns'=>array(
        'name'=>'name',
    )
));