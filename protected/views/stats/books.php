<?php
$this->menu=array(
    array('label'=>'Вывод списка книг', 'url'=>array('stats/books')),
    array('label'=>'Вывод списка авторов', 'url'=>array('stats/users')),
    array('label'=>'Вывод случайных книг', 'url'=>array('stats/rand')),
);
?>
<h1>Вывод списка книг, находящихся на руках у читателей,<br> и имеющих не менее трех со-авторов.</h1>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'mbook-grid',
    'dataProvider'=>$odpReading,
    'filter'=>$model,
    'columns'=>array(
        array(
            'name'=>'name',
            'type'=>'raw',
            'value'=>'$data->book->name'
        ),
    ),
));