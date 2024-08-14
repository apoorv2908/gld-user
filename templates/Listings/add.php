<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Listing $listing
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Listings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="listings form content">
            <?= $this->Form->create($listing) ?>
            <fieldset>
                <legend><?= __('Add Listing') ?></legend>
                <?php
                    echo $this->Form->control('firstname');
                    echo $this->Form->control('lastname');
                    echo $this->Form->control('country');
                    echo $this->Form->control('state');
                    echo $this->Form->control('city');
                    echo $this->Form->control('pincode');
                    echo $this->Form->control('street_address');
                    echo $this->Form->control('email');
                    echo $this->Form->control('website');
                    echo $this->Form->control('phone');
                    echo $this->Form->control('mobile');
                    echo $this->Form->control('image');
                    echo $this->Form->control('qualification');
                    echo $this->Form->control('affiliating_bar_council_assoc');
                    echo $this->Form->control('reg_no');
                    echo $this->Form->control('practicing_since');
                    echo $this->Form->control('court_of_practice');
                    echo $this->Form->control('practice_area');
                    echo $this->Form->control('brief_detail');
                    echo $this->Form->control('free_consultation');
                    echo $this->Form->control('law_firm');
                    echo $this->Form->control('designation');
                    echo $this->Form->control('estd_year');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
