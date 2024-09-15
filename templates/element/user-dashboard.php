<div class="col-md-3">
    <div class="card">
        <div class="card-header sam text-white renu">
            <h5>MANAGE ACCOUNT</h5>
        </div>
        <div class="card-body">
            <div class="list-group">
            <?= $this->Html->link('View Account Information', ['action' => 'index', 'controller' => 'Myaccount', $loggedInUser->id], ['class' => 'list-group-item list-group-item-action']) ?>

                <?= $this->Html->link('Edit Account Information', ['action' => 'edit', 'controller' => 'Myaccount', $loggedInUser->id], ['class' => 'list-group-item list-group-item-action']) ?>
                <?= $this->Html->link('Submit Directory Listing', ['controller' => 'Selectdirectory', 'action' => 'index'], ['class' => 'list-group-item list-group-item-action']) ?>
                <?= $this->Html->link('Submit Law Article', ['controller' => 'Myaccount', 'action' => 'submitlawarticle'], ['class' => 'list-group-item list-group-item-action']) ?>
                <?= $this->Html->link('My Law Articles', ['controller' => 'Myaccount', 'action' => 'myArticles'], ['class' => 'list-group-item list-group-item-action']) ?>
                <?= $this->Html->link('My Listings', ['controller' => 'Myaccount', 'action' => 'myListings'], ['class' => 'list-group-item list-group-item-action']) ?>
                <a href="#" class="list-group-item list-group-item-action">View Transactions</a>
                <a href="#" class="list-group-item list-group-item-action">Change Password</a>
                <?= $this->Html->link('Logout', ['controller' => 'login', 'action' => 'logout'], ['class' => 'list-group-item list-group-item-action']) ?>
            </div>
        </div>
    </div>
</div>
