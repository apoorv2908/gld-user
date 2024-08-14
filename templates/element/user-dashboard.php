<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            <h5>Manage Account</h5>
        </div>
        <div class="card-body">
            <div class="list-group">
                <?= $this->Html->link('Edit Details', ['action' => 'edit', $loggedInUser->id], ['class' => 'list-group-item list-group-item-action']) ?>
                <?= $this->Html->link('Submit Directory Listing', ['controller' => 'Selectdirectory', 'action' => 'index'], ['class' => 'list-group-item list-group-item-action']) ?>
                <?= $this->Html->link('Submit Law Article', ['controller' => 'Myaccount', 'action' => 'submitlawarticle'], ['class' => 'list-group-item list-group-item-action']) ?>
                <?= $this->Html->link('View/Edit Law Article', ['controller' => 'Myaccount', 'action' => 'myArticles'], ['class' => 'list-group-item list-group-item-action']) ?>
                <a href="#" class="list-group-item list-group-item-action">View Transactions</a>
                <a href="#" class="list-group-item list-group-item-action">Change Password</a>
                <?= $this->Html->link('Logout', ['controller' => 'login', 'action' => 'logout'], ['class' => 'list-group-item list-group-item-action']) ?>
            </div>
        </div>
    </div>
</div>
