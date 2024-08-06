<?php

?>
<!DOCTYPE html>
<html>
<head>
   
</head>
<body>
    <nav>
       
    </nav>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
