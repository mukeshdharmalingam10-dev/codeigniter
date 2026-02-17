<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>

<div class="container">

<h4>Blog</h4>

<a class="btn modal-trigger" href="#createModal">Create Blog</a>

<table class="striped">
<thead>
<tr>
<th>Title</th>
<th>Description</th>
<th>Actions</th>
</tr>
</thead>

<tbody>

<?php foreach($blogs as $row): ?>

<tr>
<td><?= $row['title'] ?></td>
<td><?= $row['description'] ?></td>

<td>

<!-- EDIT -->
<a href="#edit<?= $row['id'] ?>" class="btn modal-trigger">Edit</a>

<!-- DELETE -->
<form action="<?= base_url('blogs/delete/'.$row['id']) ?>" method="post" style="display:inline;">
<button class="btn red" onclick="return confirm('Are you sure you want to delete this post?')">
Delete
</button>
</form>

</td>
</tr>

<!-- EDIT MODAL -->
<div id="edit<?= $row['id'] ?>" class="modal">
<div class="modal-content">

<form action="<?= base_url('blogs/update/'.$row['id']) ?>" method="post">

<div class="input-field">
<input name="title" value="<?= $row['title'] ?>" required>
<label class="active">Title</label>
</div>

<div class="input-field">
<textarea name="description" class="materialize-textarea" required><?= $row['description'] ?></textarea>
<label class="active">Description</label>
</div>

<button class="btn">Update</button>

</form>

</div>
</div>

<?php endforeach; ?>

</tbody>
</table>

</div>

<!-- CREATE MODAL -->
<div id="createModal" class="modal">
<div class="modal-content">

<form action="<?= base_url('blogs/create') ?>" method="post">

<div class="input-field">
<input name="title" required>
<label>Title</label>
</div>

<div class="input-field">
<textarea name="description" class="materialize-textarea" required></textarea>
<label>Description</label>
</div>

<button class="btn">Create</button>

</form>

</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    M.Modal.init(document.querySelectorAll('.modal'));

    // Custom Validation
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            // Check if this is a delete form
            if (this.getAttribute('action').includes('delete')) {
                return; // Let the onclick confirm handle it
            }

            const title = this.querySelector('[name="title"]').value.trim();
            const description = this.querySelector('[name="description"]').value.trim();

            if (!title || !description) {
                e.preventDefault();
                alert('Title and Description are required!');
            } else if (title.length < 3) {
                e.preventDefault();
                alert('Title must be at least 3 characters long.');
            }
        });
    });
});
</script>

<style>
/* Custom "Square" Pagination Styling */
.pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    list-style: none;
    padding: 20px 0;
    margin: 0;
    font-family: sans-serif; /* Cleaner font for numbers */
}

.pagination li {
    margin: 0 8px; /* More spacing between numbers */
}

.pagination li a {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 35px;
    height: 35px;
    color: #555; /* Default text color */
    text-decoration: none;
    transition: all 0.2s ease;
    font-size: 16px; /* Slightly larger text */
    border-radius: 0; /* Square shape */
    border: none;
    background-color: transparent;
}

.pagination li a:hover {
    background-color: #f0f0f0;
    color: #333;
}

/* Active State - Green Square */
.pagination li.active a {
    background-color: #2ec468; /* Bright Green */
    color: white;
    box-shadow: none; /* Flat look */
    font-weight: normal;
}
</style>

<!-- Pagination Links -->
<div class="center-align" style="margin-top: 20px; margin-bottom: 40px;">
    <?= $pager->links('default', 'material_pager') ?>
</div>

</body>
</html>
