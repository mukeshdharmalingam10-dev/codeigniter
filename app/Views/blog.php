<!DOCTYPE html>
  <html>
    <head>
      <title>Ci Blog</title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
<div class="container">
    <div class="row">
    <div class="col s12 m12">
      <div class="card-panel">
          <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Blog<a class="right waves-effect waves-light btn-large modal-trigger" href="#modal1">Create Blog</a></span>
           <div id="modal1" class="modal">
    <div class="modal-content">
      <div class="row">
    <div class="input-field col s12">
      <input value="Alvin" id="first_name2" type="text" class="validate">
      <label class="active" for="first_name2">First Name</label>
    </div>
  </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <textarea id="textarea2" class="materialize-textarea" data-length="120"></textarea>
            <label for="textarea2">Textarea</label>
          </div>
        </div>
      </form>
    </div>
          
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn">create post</a>
    </div>
  </div>
          <table>
        <thead>
          <tr>
              <th>Name</th>
              <th>Item Name</th>
              <th>Item Price</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
            <td><button class="btn waves-effect waves-light">Edit</button></td>
            <td><button class="btn red waves-effect waves-light">Delete</button></td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
            <td><button class="btn waves-effect waves-light">Edit</button></td>
            <td><button class="btn red waves-effect waves-light">Delete</button></td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
          </tr>
        </tbody>
      </table>
    </div>
      </div>
    </div>
  </div>
   </div>
      <!--JavaScript at end of body for optimized loading-->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
  $(document).ready(function(){
    $('.modal').modal();
  }); </script>
    </body>
  </html>