<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Add Version for
            <?php echo $application['Application']['name'].' '.$application['OperatingSystem']['name'] ?>
        </h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="versions form">
    <?php echo $this->Form->create('Version', array(
            'inputDefaults' => array(
                'class' => 'form-control form-add'
            )
        )
    );; ?>
    <fieldset>

        <?php
        echo $this->Form->input('name');
        echo $this->Form->input('description');
        ?>
    </fieldset>
    <br>
    <?php echo $this->Form->end(array(
        'label' => 'Submit',
        'class' => 'btn btn-primary btn-connexion',
        'div' => array(
            'class' => 'btn-login btn-add btn-river'
        )
    ));
    ?>
</div>
