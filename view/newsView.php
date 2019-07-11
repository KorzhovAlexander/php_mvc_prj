<?php require 'view/temp/header.php'; ?>
<div class="container">
    <div class="row">
        <?php foreach ($newsList as $newsItem):?>
            <div class="col s12 m6">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title"><?php echo $newsItem['title']; ?></span>
                    <p><?php echo $newsItem['news']; ?></p>
                </div>
                <div class="card-action">
                    <a href="#">This is a link</a>
                    <a href="#">This is a link</a>
                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</div>
<?php require 'view/temp/footer.php'?>

