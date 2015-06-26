<?php
$this->title = 'Aulas';

use helps\Url;
use helps\Session;
use widgets\GridView;
?>
<div class="module">
    <div class="module-head">
        <h3><?php echo $this->title ?></h3>
        <a href="<?php echo Url::base('create') ?>" class="btn btn-small btn-success param">Cadastrar</a>
        
    </div>
    <div class="module-body">
            
        <br>         <?php
                            echo GridView::widget([
                                'dataProvider' => $dataProvider,
                                'dataTable'=>'dataTable',
                                'classTable'=>'table',
                                'columns' => [
                                            'id',
                                            'nome',                                                                                        
                                        ],
                                        'actionColumns' => ['update', 'delete'],
                                    ]);

                                    echo Session::getflash('create');
                                    echo Session::getflash('delete');
                                    ?>

                </div><!-- /.box-body -->
            </div><!-- /.box -->
       