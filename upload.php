<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="theme.css" type="text/css"> </head>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <meta name="description" content="File Upload widget with multiple file selection, drag&amp;drop support, progress bars, validation and preview images, audio and video for jQuery. Supports cross-domain, chunked and resumable file uploads and client-side image resizing. Works with any server-side platform (PHP, Python, Ruby on Rails, Java, Node.js, Go etc.) that supports standard HTML form file uploads.">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap styles -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Generic page styles -->

<!-- blueimp Gallery styles -->
<link rel="stylesheet" href="https://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel="stylesheet" href="css/jquery.fileupload.css">
<link rel="stylesheet" href="css/jquery.fileupload-ui.css">
<!-- CSS adjustments for browsers with JavaScript disabled -->
<noscript><link rel="stylesheet" href="css/jquery.fileupload-noscript.css"></noscript>
<noscript><link rel="stylesheet" href="css/jquery.fileupload-ui-noscript.css"></noscript>
<body>
  <nav class="navbar navbar-expand-md bg-primary navbar-dark">
    <div class="container_header">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false"
        aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          </li>
          <li style="padding-right: 860px;"><a class="navbar-brand" href="#"><img src="images/logo.png" alt="" ></i><b> Digitale</b></a>
          <li class="nav-item">
            <a class="btn navbar-btn ml-2 text-white"><i class=""></i>  Download</a>
          </li>
          <li>
            <a href="publish.php" class="btn navbar-btn ml-2 text-white"><i class=""></i> Publish</a>
          </li>
          <li>
            <li data-toggle="modal" data-target="#mylogin"><a href="#" class="btn navbar-btn ml-2 text-white"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="text-left py-5 " style="background-position: left center;">
        <div class="py-5 ">
          <div class="container">
              <h1>Upload Ceritamu disini </h1>
              <br>
              <form id="fileupload" action="https://jquery-file-upload.appspot.com/" method="POST" enctype="multipart/form-data">
                  <!-- Redirect browsers with JavaScript disabled to the origin page -->
                  <noscript><input type="hidden" name="redirect" value="https://blueimp.github.io/jQuery-File-Upload/"></noscript>
                  <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                  <div class="row fileupload-buttonbar">
                      <div class="col-lg-7">
                          <!-- The fileinput-button span is used to style the file input field as button -->
                          <span class="btn btn-success fileinput-button">
                              <i class="glyphicon glyphicon-plus"></i>
                              <span>Add files...</span>
                              <input type="file" name="files[]" multiple>
                          </span>
                          <button type="submit" class="btn btn-primary start">
                              <i class="glyphicon glyphicon-upload"></i>
                              <span>Start upload</span>
                          </button>
                          <button type="reset" class="btn btn-warning cancel">
                              <i class="glyphicon glyphicon-ban-circle"></i>
                              <span>Cancel upload</span>
                          </button>
                          <button type="button" class="btn btn-danger delete">
                              <i class="glyphicon glyphicon-trash"></i>
                              <span>Delete</span>
                          </button>
                          <input type="checkbox" class="toggle">
                          <!-- The global file processing state -->
                          <span class="fileupload-process"></span>
                      </div>
                      <!-- The global progress state -->
                      <div class="col-lg-5 fileupload-progress fade">
                          <!-- The global progress bar -->
                          <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                              <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                          </div>
                          <!-- The extended global progress state -->
                          <div class="progress-extended">&nbsp;</div>
                      </div>
                  </div>
                  <!-- The table listing the files available for upload/download -->
                  <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
              </form>
              <br>
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h3 class="panel-title">Demo Notes</h3>
                  </div>
                  <div class="panel-body">
                      <ul>
                          <li>The maximum file size for uploads in this demo is <strong>999 KB</strong> (default file size is unlimited).</li>
                          <li>Only image files (<strong>JPG, GIF, PNG</strong>) are allowed in this demo (by default there is no file type restriction).</li>
                          <li>Uploaded files will be deleted automatically after <strong>5 minutes or less</strong> (demo files are stored in memory).</li>
                          <li>You can <strong>drag &amp; drop</strong> files from your desktop on this webpage (see <a href="https://github.com/blueimp/jQuery-File-Upload/wiki/Browser-support">Browser support</a>).</li>
                          <li>Please refer to the <a href="https://github.com/blueimp/jQuery-File-Upload">project website</a> and <a href="https://github.com/blueimp/jQuery-File-Upload/wiki">documentation</a> for more information.</li>
                          <li>Built with the <a href="http://getbootstrap.com/">Bootstrap</a> CSS framework and Icons from <a href="http://glyphicons.com/">Glyphicons</a>.</li>
                      </ul>
                  </div>
              </div>
          </div>
          <!-- The blueimp Gallery widget -->
          <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
              <div class="slides"></div>
              <h3 class="title"></h3>
              <a class="prev">‹</a>
              <a class="next">›</a>
              <a class="close">×</a>
              <a class="play-pause"></a>
              <ol class="indicator"></ol>
          </div>
          <!-- The template to display files available for upload -->
          <script id="template-upload" type="text/x-tmpl">
          {% for (var i=0, file; file=o.files[i]; i++) { %}
              <tr class="template-upload fade">
                  <td>
                      <span class="preview"></span>
                  </td>
                  <td>
                      <p class="name">{%=file.name%}</p>
                      <strong class="error text-danger"></strong>
                  </td>
                  <td>
                      <p class="size">Processing...</p>
                      <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
                  </td>
                  <td>
                      {% if (!i && !o.options.autoUpload) { %}
                          <button class="btn btn-primary start" disabled>
                              <i class="glyphicon glyphicon-upload"></i>
                              <span>Start</span>
                          </button>
                      {% } %}
                      {% if (!i) { %}
                          <button class="btn btn-warning cancel">
                              <i class="glyphicon glyphicon-ban-circle"></i>
                              <span>Cancel</span>
                          </button>
                      {% } %}
                  </td>
              </tr>
          {% } %}
          </script>
          <!-- The template to display files available for download -->
          <script id="template-download" type="text/x-tmpl">
          {% for (var i=0, file; file=o.files[i]; i++) { %}
              <tr class="template-download fade">
                  <td>
                      <span class="preview">
                          {% if (file.thumbnailUrl) { %}
                              <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                          {% } %}
                      </span>
                  </td>
                  <td>
                      <p class="name">
                          {% if (file.url) { %}
                              <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                          {% } else { %}
                              <span>{%=file.name%}</span>
                          {% } %}
                      </p>
                      {% if (file.error) { %}
                          <div><span class="label label-danger">Error</span> {%=file.error%}</div>
                      {% } %}
                  </td>
                  <td>
                      <span class="size">{%=o.formatFileSize(file.size)%}</span>
                  </td>
                  <td>
                      {% if (file.deleteUrl) { %}
                          <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                              <i class="glyphicon glyphicon-trash"></i>
                              <span>Delete</span>
                          </button>
                          <input type="checkbox" name="delete" value="1" class="toggle">
                      {% } else { %}
                          <button class="btn btn-warning cancel">
                              <i class="glyphicon glyphicon-ban-circle"></i>
                              <span>Cancel</span>
                          </button>
                      {% } %}
                  </td>
              </tr>
          {% } %}
          </script>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
          <script src="js/vendor/jquery.ui.widget.js"></script>
          <!-- The Templates plugin is included to render the upload/download listings -->
          <script src="https://blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
          <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
          <script src="https://blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
          <!-- The Canvas to Blob plugin is included for image resizing functionality -->
          <script src="https://blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
          <!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <!-- blueimp Gallery script -->
          <script src="https://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
          <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
          <script src="js/jquery.iframe-transport.js"></script>
          <!-- The basic File Upload plugin -->
          <script src="js/jquery.fileupload.js"></script>
          <!-- The File Upload processing plugin -->
          <script src="js/jquery.fileupload-process.js"></script>
          <!-- The File Upload image preview & resize plugin -->
          <script src="js/jquery.fileupload-image.js"></script>
          <!-- The File Upload audio preview plugin -->
          <script src="js/jquery.fileupload-audio.js"></script>
          <!-- The File Upload video preview plugin -->
          <script src="js/jquery.fileupload-video.js"></script>
          <!-- The File Upload validation plugin -->
          <script src="js/jquery.fileupload-validate.js"></script>
          <!-- The File Upload user interface plugin -->
          <script src="js/jquery.fileupload-ui.js"></script>
          <!-- The main application script -->
          <script src="js/main.js"></script>
          <!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
          <!--[if (gte IE 8)&(lt IE 10)]>
          <script src="js/cors/jquery.xdr-transport.js"></script>
          <![endif]-->
          </body>
          </html>
