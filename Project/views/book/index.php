<?php

$pageTitle = "Books";

?>

<?php require_once __DIR__ .
'/../layouts/header.php'; ?>


<link rel="stylesheet"
      href="/Library-Management-System/Project/public/css/book.css">


<?php require_once __DIR__ .
'/../layouts/navbar.php'; ?>


<div class="container">

    <div class="top-bar">

        <h1>Books</h1>

       <?php if(has_role(['admin', 'librarian'])): ?>

    <a class="add-btn"
       href="/Library-Management-System/Project/books/create">

        Add Book

    </a>

<?php endif; ?>

    </div>


    <!-- FLASH MESSAGE -->

    <?php if(isset($_SESSION['message'])): ?>

        <div class="message-box <?= $_SESSION['message_type'] ?>">

            <?= $_SESSION['message'] ?>

        </div>

        <?php
            unset($_SESSION['message']);
            unset($_SESSION['message_type']);
        ?>

    <?php endif; ?>


    <!-- BOOK TABLE -->

    <table>

        <thead>

            <tr>

                <th>ID</th>

                <th>Title</th>

                <th>Author</th>

                <th>Genre</th>

                <th>ISBN</th>

                <th>Total</th>

                <th>Available</th>

                <th>Shelf</th>

                <th>Year</th>
<?php if(has_role(['admin', 'librarian'])): ?>

    <th>Actions</th>

<?php endif; ?>

            </tr>

        </thead>

        <tbody>

        <?php foreach($books as $book): ?>

            <tr>

                <td><?= $book['id'] ?></td>

                <td><?= $book['title'] ?></td>

                <td><?= $book['author'] ?></td>

                <td><?= $book['genre_name'] ?></td>

                <td><?= $book['isbn'] ?></td>

                <td>

    <?= $book['total_copies'] ?>

</td>

<td>

    <?= $book['available_copies'] ?>

</td>

                <td><?= $book['shelf_location'] ?></td>

                <td><?= $book['published_year'] ?></td>
              <td>

    <?php if(has_role(['admin', 'librarian'])): ?>

<td>

    <a class="edit-btn"
       href="/Library-Management-System/Project/books/edit?id=<?= $book['id'] ?>">

        Edit

    </a>


    <form method="POST"
          action="/Library-Management-System/Project/books/delete"
          class="delete-form">

        <input
            type="hidden"
            name="id"
            value="<?= $book['id'] ?>"
        >

        <button
            type="submit"
            class="delete-btn"
        >
            Delete
        </button>

    </form>

</td>

<?php endif; ?>

            </tr>

        <?php endforeach; ?>

        </tbody>

    </table>

</div>


<script src="/Library-Management-System/Project/public/js/book.js"></script>

<?php require_once __DIR__ .
'/../layouts/footer.php'; ?>