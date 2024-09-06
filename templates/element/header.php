         <header class="header_section px-5">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <?= $this->Html->image('Logo3.png', [
    'style' => 'width: 200px; height: auto;'
]) ?>

                  </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                        <?= $this->Html->link('Home', ['controller' => 'Homepage', 'action' => 'index'], ['class' => 'nav-link']) ?>
                        </li>
                       <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Directories <span class="caret"></span></a>

                           <ul class="dropdown-menu">
                           <li>
                           <?= $this->Html->link('Directory of Lawyers', ['controller' => 'Searchdirectory', 'action' => 'lawyers']) ?>
                           </li>
                           <li>
                           <?= $this->Html->link('Directory of Law Firms', ['controller' => 'Searchdirectory', 'action' => 'lawfirms']) ?>
                  </li>    
                        </ul>

                        </li>
                        <li class="nav-item">
    <?= $this->Html->link('Practice Area', ['controller' => 'Searchdirectory', 'action' => 'practiceareas'], ['class' => 'nav-link']) ?>
</li>
                        <li class="nav-item">
    <?= $this->Html->link('Law Article', ['controller' => 'Articlepage', 'action' => 'index'], ['class' => 'nav-link']) ?>
</li>

<li class="nav-item mx-5">
    <?php if (isset($loggedInUser)): ?>
        <a href="<?= $this->Url->build(['controller' => 'Selectdirectory', 'action' => 'index']) ?>">
            <button class="btn btn-warning">
                Submit Listing
            </button>
        </a>
    <?php else: ?>
        <a href="<?= $this->Url->build(['controller' => 'Login', 'action' => 'login']) ?>">
            <button class="btn btn-warning">
                Submit Listing
            </button>
        </a>
    <?php endif; ?>
</li>
<li class="nav-item ">
    <?php if (isset($loggedInUser)): ?>
        <div class="dropdown mt-2">
            <p class=" dropdown-toggle" type="button" id="userDropdown" aria-expanded="false">
                <?= h($loggedInUser->firstname) ?>
    </p>
            <ul class="dropdown-menu" aria-labelledby="userDropdown">
                <li><a href="<?= $this->Url->build(['controller' => 'Myaccount', 'action' => 'index']) ?>">My Profile</a></li>
                <li><a  href="<?= $this->Url->build(['controller' => 'Login', 'action' => 'logout']) ?>">Logout</a></li>
            </ul>
        </div>
    <?php else: ?>
        <a href="<?= $this->Url->build(['controller' => 'Login', 'action' => 'login']) ?>">
            <button class="btn btn-success">
                Login
            </button>
        </a>
    <?php endif; ?>
</li>



                     </ul>
                  </div>
               </nav>
         </header>


                  </div>

