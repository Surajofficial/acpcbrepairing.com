<style>
  picture img {
    width: 100%;
    display: block;
  }

  .title-font {
    font-size: 1.4em;
  }
</style>
<div class="card">

  <picture class="card-img-top">
    <source media='(min-width: 401px)' srcset='<?= $cours['image_big']; ?>' />
    <source media='(max-width: 400px)' srcset='<?= $cours['image_small']; ?>' />
    <img src='<?= $cours['image_big']; ?>' alt="<?= $cours['img_alt'] ?>" />
  </picture>
  <div class="card-body">
    <h4 class="card-title weight-100 <?= $cours['title'] == 'EV Controller Repairing' ? 'title-font' : '' ?>"><?= $cours['title']; ?></h4>
    <p class="card-text" style="text-align:justify;"><?= $cours['short_content']; ?></p>
    <a type="button" class="btn btn-default" href="<?= $cours['url']; ?>">View Course</a>
  </div>
</div>