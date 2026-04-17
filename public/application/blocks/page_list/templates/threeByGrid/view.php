<?php
defined('C5_EXECUTE') or die("Access Denied.");
$th = Loader::helper('text');
$c = Page::getCurrentPage();
$dh = Core::make('helper/date'); /* @var $dh \Concrete\Core\Localization\Service\Date */
?>

<?php
if ($c->isEditMode() && $controller->isBlockEmpty()) { ?>
    <div class="ccm-edit-mode-disabled-item"><?php echo t('Empty Page List Block.')?></div>
<?php
} else { ?>

<div class="ccm-block-page-list-wrapper">

    <?php
        if (isset($pageListTitle) && $pageListTitle) { ?>
        <div class="ccm-block-page-list-header">
            <h5><?php echo h($pageListTitle)?></h5>
        </div>
        <?php
         } ?>

    <?php
        if (isset($rssUrl) && $rssUrl) { ?>
        <a href="<?php echo $rssUrl ?>" target="_blank" class="ccm-block-page-list-rss-feed"><i class="fa fa-rss"></i></a>

        <?php
     } ?>


    <div class="ccm-block-page-list-pages">

        <?php

        $includeEntryText = false;
        if (
            (isset($includeName) && $includeName)
            ||
            (isset($includeDescription) && $includeDescription)
            ||
            (isset($useButtonForLink) && $useButtonForLink)
        ) {
            $includeEntryText = true;
        }

        $n = 0;
        foreach ($pages as $page) {
            $n++;
            if ($n === 1) {
                // Start the row
                echo('<div class="row">');
            }

            // Start the column container
            echo('<div class="col-xs-4">');



            // Prepare data for each page being listed...
            $buttonClasses = 'ccm-block-page-list-read-more';
            $entryClasses = 'ccm-block-page-list-page-entry';
            $title = $th->entities($page->getCollectionName());
            $url = ($page->getCollectionPointerExternalLink() != '') ? $page->getCollectionPointerExternalLink() : $nh->getLinkToCollection($page);
            $target = ($page->getCollectionPointerExternalLink() != '' && $page->openCollectionPointerExternalLinkInNewWindow()) ? '_blank' : $page->getAttribute('nav_target');
            $target = empty($target) ? '_self' : $target;
            $description = $page->getCollectionDescription();
            $description = $controller->truncateSummaries ? $th->wordSafeShortText($description, $controller->truncateChars) : $description;
            $description = $th->entities($description);
            $thumbnail = false;
            if ($displayThumbnail) {
                $thumbnail = $page->getAttribute('thumbnail');
            }
            if (is_object($thumbnail) && $includeEntryText) {
                $entryClasses = 'ccm-block-page-list-page-entry-horizontal';
            }

            $date = $dh->formatDateTime($page->getCollectionDatePublic(), true);

            ?><div class="<?php echo $entryClasses?>"><?php

                if (is_object($thumbnail)) { ?>
                    <div class="ccm-block-page-list-page-entry-thumbnail">
                        <a href="<?php echo $url ?>" target="<?php echo $target ?>">
                        <?php
                        $img = Core::make('html/image', array($thumbnail));
                        $tag = $img->getTag();
                        $tag->addClass('img-responsive');
                        echo $tag;
                        ?></a>
                    </div><?php
                }

                if ($includeEntryText) { ?>
                    <div class="ccm-block-page-list-page-entry-text">

                        <?php if (isset($includeName) && $includeName) { ?>
                            <div class="ccm-block-page-list-title">
                                <?php
                                if (isset($useButtonForLink) && $useButtonForLink) {
                                    echo $title;
                                } else { ?>
                                    <a href="<?php echo $url ?>" target="<?php echo $target ?>"><?php echo $title ?></a><?php
                                } ?>
                            </div><?php
                        }
                        if (isset($includeDate) && $includeDate) { ?>
                            <div class="ccm-block-page-list-date"><?php echo $date?></div><?php
                        }
                        if (isset($includeDescription) && $includeDescription) { ?>
                            <div class="ccm-block-page-list-description">
                                <?php echo $description ?>
                            </div>
                        <?php
                        }
                        if (isset($useButtonForLink) && $useButtonForLink) { ?>
                            <div class="ccm-block-page-list-page-entry-read-more">
                                <a href="<?php echo $url?>" target="<?php echo $target?>" class="<?php echo $buttonClasses?>"><?php echo $buttonLinkText?></a>
                            </div><?php
                        } ?>
                        </div><?php 
                } ?>
            </div>

        <?php
            // End the column container
            echo('</div>');

            if ($n === 3) {
                // End the row
                echo('</div>');
            }

            if ($n === 3) {
                $n = 0;
            }
        } // END foreach
        ?>
    </div> <!-- END ccm-block-page-list-pages -->

    <?php if (count($pages) == 0): ?>
        <div class="ccm-block-page-list-no-pages"><?php echo h($noResultsMessage)?></div>
    <?php endif;
    ?>

</div></div><!-- end .ccm-block-page-list -->


<?php
    if ($showPagination) {
        echo $pagination;
     }
} ?>
