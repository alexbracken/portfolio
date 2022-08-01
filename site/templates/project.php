<?php snippet('header') ?>

<main class="project">
  <article>

    <header>
      <?php if ($cover = $page->images()->findBy("template", "cover")): ?>
      <figure class="project-cover">
        <?= $cover ?>
        <figcaption>
          <div>
            <h1><?= $page->headline()->or($page->title()) ?></h1>
            <?php if($page->description()->isNotEmpty()): ?>
            <div class="text">
              <?= $page->intro()->kt() ?>
            </div>
            <?php endif ?>
          </div>
        </figcaption>
      </figure>
      <?php endif ?>
    </header>

    <div class="project-text text">
      <p class="client"><?= $page->client() ?></p>
      <time class="project-date"><?= $page->month() . " " . $page->year() ?></time>
      <?= $page->text()->kt() ?>

      <?php if ($page->tags()->isNotEmpty()): ?>
      <p class="project-tags"># <?= $page->tags() ?></p>
      <?php endif ?>
    </div>
  </article>
</main>

<?php snippet('footer') ?>
