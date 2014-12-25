<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Applications
            <?php echo $this->Html->link(__('New'), array('action' => 'add'),array('class' => 'btn btn-success navbar-btn')); ?>
        </h1>

    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
	<?php foreach ($applications as $application): ?>
        <div class="col-lg-3">
            <div class="panel panel-index">
                <div class="panel-heading">
                    <h3 class="panel-title application-panel-title">
                        <?php echo $this->Html->link(__($application['Application']['name'].' '.$application['OperatingSystem']['name']), array('action' => 'view', $application['Application']['id'])) ?>
                    </h3>
                </div>
                <div class="panel-body">
                    <?php echo h($application['Application']['description']); ?>
                </div>
                <div class="panel-footer application-panel-footer"><?php echo h($application['Application']['current_version']); ?></div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

