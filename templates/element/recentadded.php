<div class="m-3 bg-grey">
    <div class="row">
        <!-- Recent Listings Section -->
        <div class="col-md-6">
            <div class = "d-flex justify-content-center">
                <h4 class = "cl-2">RECENT LISTINGS</h4>
            </div>
            <div class="recent-listings">
                <?php foreach ($approvedListings as $listing): ?>
                    <div class="listing-item">
                        <div class="listing-image">
                            <img src="<?= $this->Url->image($listing->image) ?>" alt="<?= h($listing->law_firm) ?>">
                        </div>
                        <div class="listing-info">
      <?php if ($listing->listing_type === 'Lawyer'): ?>
         <h6 class = "cl-2"><?= h($listing->firstname) . ' ' . h($listing->lastname) ?></h6>
      <?php elseif ($listing->listing_type === 'Law Firm'): ?>
         <h6 class = "cl-2"><?= h($listing->name_of_law_firm) ?></h6>
      <?php endif; ?>
                            <div class="at-1"><svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#000000"><path d="M480-144 144-408l58-46 278 218 278-218 58 46-336 264Zm0-192L144-600l336-264 336 264-336 264Zm0-258Zm0 166 219-172-219-172-219 172 219 172Z"/></svg><?= h($listing->city_name) ?>, <?= h($listing->state_name) ?></div>
                            <div class="at-1"><svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#000000"><path d="M480.21-480Q510-480 531-501.21t21-51Q552-582 530.79-603t-51-21Q450-624 429-602.79t-21 51Q408-522 429.21-501t51 21ZM480-191q119-107 179.5-197T720-549q0-105-68.5-174T480-792q-103 0-171.5 69T240-549q0 71 60.5 161T480-191Zm0 95Q323.03-227.11 245.51-339.55 168-452 168-549q0-134 89-224.5T479.5-864q133.5 0 223 90.5T792-549q0 97-77 209T480-96Zm0-456Z"/></svg><?= h($listing->country_name) ?></div>
                        </div>
                        <div class="listing-type">
                            <p><?= h($listing->listing_type) ?></p>
                            <?= $this->Html->link('View Listing', ['action' => 'view', $listing->id], ['class' => 'view-listing-button']) ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Recent Articles Section -->
        <div class="col-md-6">
        <div class = "d-flex justify-content-center">
                <h4 class = "cl-2">RECENT LAW ARTICLES</h4>
            </div>
            <div class="recent-listings">
                <?php foreach ($approvedArticles as $article): ?>
                    <div class="listing-item">
    <div class="listing-info">
        <h6 class="cl">
            <?= $this->Html->link(h($article->article_title), ['action' => 'viewLawArticle', $article->id]) ?>
        </h6>
        <div class="at-1">
            <p>Submitted on: <span class="cl"><?= h($article->added_on) ?></span> Submitted by: <span class="cl"><?= h($article->added_by) ?></span></p>
        </div>
        <div class="at-1">
            <?php 
            $words = explode(' ', $article->article_body);
            $excerpt = implode(' ', array_slice($words, 0, 30)) . '...';
            ?>
            <?= $excerpt ?>
            <?= $this->Html->link('Read More', ['action' => 'viewLawArticle', $article->id], ['class' => 'read-more-link']) ?>
        </div>
    </div>
</div>

                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
