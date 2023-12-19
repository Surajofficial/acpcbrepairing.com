<?php
$title = "Gallery";
$page = 'about';
$metaData = array(
  'title'      => 'Gallery',
  'description' => 'Students can get online training for laptop repairing course. We are the best institute for online laptop repairing course. ',
  'keywords'    => 'online laptop repairing course, Laptop online repairing institute, best online laptop repairing course in india, online Mobile repairing institute, Mobile repairing course, online led tv repairing course '
);
include('common/header.inc.php');
?>

<?php //include("common/breadcrumb.inc.php");
?>
<style>
  .btn:focus,
  .btn:active,
  button:focus,
  button:active {
    outline: none !important;
    box-shadow: none !important;
  }

  #image-gallery .modal-footer {
    display: block;
  }

  .thumb {
    margin-top: 15px;
    margin-bottom: 15px;
  }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">

<section id="about" class="mt-4 pt-4">
  <div class="container-fluid">

    <header class="section-header">
      <h3>Our Gallery</h3>
      <div class="text-center p-4" style="color:#ccc;"><i class="fas fa-home"></i> <a href="<?= URL; ?>" style="text-decoration:none;">Home</a> / Gallery</div>
    </header>
  </div>

  <div class="container-fluid">




    <div class="row">


      <?php
      $path    = 'assets/media/gallery/';
      $files = scandir($path);
      for ($i = 2; $i < count($files); $i++) {
      ?>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
          <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="assets/media/gallery/<?= $files[$i] ?>" data-target="#image-gallery">
            <img class="img-thumbnail" src="assets/media/gallery/<?= $files[$i] ?>" alt="Another alt text">
          </a>
        </div>
      <?php
      };
      ?>
    </div>


    <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="image-gallery-title"></h4>
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
            </button>
          </div>
          <div class="modal-body">
            <img id="image-gallery-image" class="img-responsive col-md-12" src="">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
            </button>

            <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
            </button>
          </div>
        </div>
      </div>
    </div>




  </div>


</section>

<script>
  let modalId = $('#image-gallery');

  $(document)
    .ready(function() {

      loadGallery(true, 'a.thumbnail');

      //This function disables buttons when needed
      function disableButtons(counter_max, counter_current) {
        $('#show-previous-image, #show-next-image')
          .show();
        if (counter_max === counter_current) {
          $('#show-next-image')
            .hide();
        } else if (counter_current === 1) {
          $('#show-previous-image')
            .hide();
        }
      }

      /**
       *
       * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
       * @param setClickAttr  Sets the attribute for the click handler.
       */

      function loadGallery(setIDs, setClickAttr) {
        let current_image,
          selector,
          counter = 0;

        $('#show-next-image, #show-previous-image')
          .click(function() {
            if ($(this)
              .attr('id') === 'show-previous-image') {
              current_image--;
            } else {
              current_image++;
            }

            selector = $('[data-image-id="' + current_image + '"]');
            updateGallery(selector);
          });

        function updateGallery(selector) {
          let $sel = selector;
          current_image = $sel.data('image-id');
          $('#image-gallery-title')
            .text($sel.data('title'));
          $('#image-gallery-image')
            .attr('src', $sel.data('image'));
          disableButtons(counter, $sel.data('image-id'));
        }

        if (setIDs == true) {
          $('[data-image-id]')
            .each(function() {
              counter++;
              $(this)
                .attr('data-image-id', counter);
            });
        }
        $(setClickAttr)
          .on('click', function() {
            updateGallery($(this));
          });
      }
    });

  // build key actions
  $(document)
    .keydown(function(e) {
      switch (e.which) {
        case 37: // left
          if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
            $('#show-previous-image')
              .click();
          }
          break;

        case 39: // right
          if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
            $('#show-next-image')
              .click();
          }
          break;

        default:
          return; // exit this handler for other keys
      }
      e.preventDefault(); // prevent the default action (scroll / move caret)
    });
</script>
<?php
$title = 'Laptop & Mobile Repairing course'; ?>
<?php include("common/enroll.inc.php"); ?>
<?php //include("common/testimonial.inc.php");
?>

<?php include("common/footer.inc.php"); ?>