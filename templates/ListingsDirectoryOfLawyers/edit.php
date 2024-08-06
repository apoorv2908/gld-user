<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ListingsDirectoryOfLawyer $listingsDirectoryOfLawyer
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $listingsDirectoryOfLawyer->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $listingsDirectoryOfLawyer->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Listings Directory Of Lawyers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="listingsDirectoryOfLawyers form content">
            <?= $this->Form->create($listingsDirectoryOfLawyer) ?>
            <fieldset>
                <legend><?= __('Edit Listings Directory Of Lawyer') ?></legend>
                <?php
                    echo $this->Form->control('first_name');
                    echo $this->Form->control('last_name');
                    echo $this->Form->control('country');
                    echo $this->Form->control('state');
                    echo $this->Form->control('city');
                    echo $this->Form->control('pin_code');
                    echo $this->Form->control('street_address_line1');
                    echo $this->Form->control('street_address_line2');
                    echo $this->Form->control('email');
                    echo $this->Form->control('website');
                    echo $this->Form->control('phone');
                    echo $this->Form->control('mobile');
                    echo $this->Form->control('image_logo');
                    echo $this->Form->control('professional_qualifications');
                    echo $this->Form->control('affiliating');
                    echo $this->Form->control('registration_number');
                    echo $this->Form->control('practicing_since');
                    echo $this->Form->control('courts_of_practice');
                    echo $this->Form->control('practice_areas');
                    echo $this->Form->control('complete_detail');
                    echo $this->Form->control('free_initial_consultation');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
