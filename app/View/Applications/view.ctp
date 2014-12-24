<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <?php echo h($application['Application']['name'].' '.$application['OperatingSystem']['name']) ?>
            <?php echo $this->Html->link(__('New Version'), array('controller' => 'versions', 'action' => 'addVersionApplication', $application['Application']['id']),array('class' => 'btn btn-success navbar-btn')); ?>
        </h1>

    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <?php foreach ($application['Version'] as $version): ?>
        <div class="col-lg-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title application-panel-title">
                        <?php echo $this->Html->link(__($version['name']), array('controller' => 'versions','action' => 'view', $version['id'])) ?>
                    </h3>
                </div>
                <div class="panel-body">
                    <?php echo utf8_decode($version['description']); ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
