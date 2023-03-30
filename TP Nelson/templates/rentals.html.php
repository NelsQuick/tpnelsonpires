<?php

require_once('./classes/Book.php');
$books = Book::getBooks();
require_once('./classes/Rental.php');
$rentals = Rental::getRentals();
require_once('./classes/User.php');
$users = User::getUsers();

foreach ($books as $book): ?>
    <tr>
        <td class="book__title">
            <?= $book['title'] ?>
        </td>
    <?php endforeach; ?>

    <?php foreach ($users as $user): ?>
        <td>
            <?= $user['firstname'] ?>
        </td>
    </tr>
<?php endforeach; ?>


<?php foreach ($rentals as $rental): ?>
    <td class="book_link">
        <?= $rental['start_date'] ?>
    </td>
    <td class="book_link">
        <?= $rental['end_date'] ?>
        
    </td>
    </tr>
<?php endforeach; ?>