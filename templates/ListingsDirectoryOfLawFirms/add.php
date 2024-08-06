<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ListingsDirectoryOfLawFirm $listingsDirectoryOfLawFirm
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Listings Directory Of Law Firms'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="listingsDirectoryOfLawFirms form content">
            <?= $this->Form->create($listingsDirectoryOfLawFirm) ?>
            <fieldset>
                <legend><?= __('Add Listings Directory Of Law Firm') ?></legend>
                <?php
                    echo $this->Form->control('law_firm_name');
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
                    echo $this->Form->control('year_of_establishment');
                    echo $this->Form->control('courts_of_practice');
                    echo $this->Form->control('practice_areas');
                    echo $this->Form->control('brief_profile');
                    echo $this->Form->control('free_initial_consultation');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
