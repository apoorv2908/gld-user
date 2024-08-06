<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Edit Your Details</h2>
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Edit User') ?></legend>
                <?php
                    echo $this->Form->control('firstname');
                    echo $this->Form->control('lastname');
                    echo $this->Form->control('email');
                    echo $this->Form->control('contact');
                    echo $this->Form->control('country');
                    echo $this->Form->control('state');
                    echo $this->Form->control('city');
                    


                ?>
            </fieldset>
            <?= $this->Form->button(__('Save Changes')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
