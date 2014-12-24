<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Add Operating System</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="operatingSystems form">
    <?php echo $this->Form->create('OperatingSystem', array(
            'inputDefaults' => array(
                'class' => 'form-control form-add'
            )
        )
    );; ?>
    <fieldset>

        <?php
        echo $this->Form->input('name');
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
