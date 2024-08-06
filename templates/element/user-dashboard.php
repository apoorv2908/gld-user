<div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h5>Manage Account</h5>
                    </div>
                    <div class="card-body">
                        <form>

                            <li  class="btn btn-primary btn-block"><?= $this->Html->link('Edit Details', ['action' => 'edit', $loggedInUser->id], ['class' => 'text-white']) ?></li>
                            <li class="btn btn-primary btn-block"><?= $this->Html->link('Submit Directory Listing', ['controller' => 'Selectdirectory', 'action' => 'index'], ['class' => 'text-white']) ?></li>
                            <li class="btn btn-primary btn-block">Submit Law Article</li>
                            <li class="btn btn-primary btn-block">View/Edit Law Articles</li>
                            <li class="btn btn-primary btn-block">View Transactions</li>
                            <li class="btn btn-primary btn-block">Change Password</li>
                            <li class="btn btn-primary btn-block"><?= $this->Html->link('Logout', ['controller' => 'login', 'action' => 'logout'], ['class' => 'text-white']) ?></li>
                        
                        </form>
                    </div>
                </div>

            </div>