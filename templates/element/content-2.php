

<section class="ftco-section mx-3 apt-40">
                <div class="row justify-content-center">
                    <div class="col-md-7 heading-section text-center">
                        <h2 class="mb-4 font30 text-color-theme text-uppercase "><span>Popular </span>Practice Areas</h2>
                    </div>
                </div>
                <div id="divpracticearea">
                <div class="row form-row">
                            <?php foreach ($practiceareas2 as $practicearea): ?>
                              
                                <div class="col-md-3">
                                <ul class="category">

                                <li class = "text-center">

                                <?= $this->Html->link(
                            h($practicearea->practice_area_title), 
                            ['controller' => 'Searchdirectory', 'action' => 'practiceareasByCountry', $practicearea->sno]
                        ) ?>
                        </li> </ul> </div>
                               

                            <?php endforeach; ?>
                            </div>
                               
                               
                <div class="text-center amt-15">
                    <a href="https://www.globallawdirectories.com/practice-areas.aspx" style="background: #157efb" class=" white font18 rounded  apt-10 apb-10 apr-15 apl-15">View Full List</a>
                </div>
        </section>
