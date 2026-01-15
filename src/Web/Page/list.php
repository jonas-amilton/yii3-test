<?php
use App\Web\Page\Page;
use Yiisoft\Html\Html;
use Yiisoft\Router\UrlGeneratorInterface;

/** @var iterable<Page> $pages */
/** @var UrlGeneratorInterface $urlGenerator */
?>

<h1>Pages</h1>

<p>
    <?= Html::a('New page', $urlGenerator->generate('page/edit', ['slug' => 'new'])) ?>
</p>

<?php if (empty(iterator_to_array($pages))): ?>
    <p>No pages yet.</p>
<?php else: ?>
    <ul>
        <?php foreach ($pages as $page): ?>
            <li>
                <?= Html::a(Html::encode($page->title), $urlGenerator->generate('page/view', ['slug' => $page->getSlug()])) ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
