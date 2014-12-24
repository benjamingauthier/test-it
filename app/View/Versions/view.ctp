<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <?php echo h($version['Applications']['name'].' '.$version['Version']['name'])?>
            <?php echo $this->Html->link(__('New CheckUp'), array('controller' => 'CheckUps', 'action' => 'addCheckUpVersion', $version['Version']['id']),array('class' => 'btn btn-success navbar-btn')); ?>
        </h1>

    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <h2>What do you need to test ?</h2>
    <form>
        <div class="checkbox">
            <label>
                <?php foreach ($version['CheckUp'] as $checkup): ?>
                        <input type="checkbox"> <?php echo $checkup['description'] ?><br>
                <?php endforeach; ?>
            </label>
        </div>
    <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
