<style>
    picture img {
        width: 100%;
        display: block;
    }
    a,a:hover{
        text-decoration:none;
        color:inherit;
    }
</style>
<div class="card">
<a href="<?= $cours['url']; ?>">
    <picture class="card-img-top">
        <source media='(min-width: 401px)' srcset='<?= $cours['banner_url'] == Null ?  URL . 'assets/media/course/acmechnical.webp' : URL . $cours['banner_url']; ?>' />
        <img src='<?= $cours['banner_url'] == Null ?  URL . 'assets/media/course/acmechnical.webp' : URL . $cours['banner_url']; ?>' />
    </picture>

    <div class="card-body">
        <h5 class="card-title weight-100"><?= str_replace('-', ' ', explode('.', $cours['url'])[0]); ?></h5>
        <p class="card-text" style="text-align: justify;">
            <?php echo substr($cours['short_data'],0,200); ?></p>
        <a type="button" class="btn btn-default" href="<?= $cours['url']; ?>">View Course</a>
    </div>
    </a>
</div>