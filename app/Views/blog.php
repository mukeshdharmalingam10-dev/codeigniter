<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ci Blog</title>

    <!-- Import Google Icon Font -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Import Materialize CSS -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
    >
</head>
<body>
    <div class="container section">
        <div class="row">
            <div class="col s12">
                <div class="card-panel">
                    <div class="card-content">
                        <span class="card-title grey-text text-darken-4">
                            Blog
                            <a class="right waves-effect waves-light btn modal-trigger" href="#createModal">
                                Create Blog
                            </a>
                        </span>

                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Actions</th>
 
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Alvin</td>
                                    <td>Eclair</td>
                                   
                                    <td>
                                        <button data-target="editModal1" class="btn waves-effect waves-light modal-trigger">Edit</button>
                                        <button class="btn red waves-effect waves-light">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Alan</td>
                                    <td>Jellybean</td>
                                  
                                    <td>
                                        <button data-target="editModal2" class="btn waves-effect waves-light modal-trigger">Edit</button>
                                        <button class="btn red waves-effect waves-light">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Create Modal -->
    <div id="createModal" class="modal">
        <div class="modal-content">
            <h4>Create New Blog Post</h4>
            <form>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="create_name" type="text" class="validate">
                        <label for="create_name">Title</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="create_content" class="materialize-textarea" data-length="120"></textarea>
                        <label for="create_content">Description</label>
                    </div>
                </div>
            </form>
        </div>

        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn">Create Post</a>
        </div>
    </div>

    <!-- Edit Modal 1 -->
    <div id="editModal1" class="modal">
        <div class="modal-content">
            <h4>Edit Post</h4>
            <form>
                <div class="row">
                    <div class="input-field col s12">
                        <input value="Alvin" id="edit_name_1" type="text" class="validate" readonly>
                        <label class="active" for="edit_name_1">Name</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="edit_content_1" class="materialize-textarea" readonly>Eclair</textarea>
                        <label class="active" for="edit_content_1">Content</label>
                    </div>
                </div>
            </form>
        </div>

        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn">Update Post</a>
        </div>
    </div>

    <!-- Edit Modal 2 -->
    <div id="editModal2" class="modal">
        <div class="modal-content">
            <h4>Edit Post</h4>
            <form>
                <div class="row">
                    <div class="input-field col s12">
                        <input value="Alan" id="edit_name_2" type="text" class="validate" readonly>
                        <label class="active" for="edit_name_2">Name</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="edit_content_2" class="materialize-textarea" readonly>Jellybean</textarea>
                        <label class="active" for="edit_content_2">Content</label>
                    </div>
                </div>
            </form>
        </div>

        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn">Update Post</a>
        </div>
    </div>

    <!-- JavaScript at end of body for optimized loading -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const modals = document.querySelectorAll('.modal');
            M.Modal.init(modals);
        });
    </script>
</body>
</html>