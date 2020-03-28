<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2> ข้อมูลหนังสือ </h2>
    </div>

    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>ชื่อหนังสือ</th>
          <th>ผู้แต่ง</th>
          <th>ประเภทหนังสือ</th>
          <th>สำนักพิมพ์</th>
          <th>ราคา</th>
          <th>สถานะการขาย</th>
        </tr>
        <?php foreach($bookshop as $bookid): ?>
          <tr>
            <td><?= $book->book_name; ?></td>
            <td><?= $book->author_id; ?></td>
            <td><?= $book->category_id; ?></td>
            <td><?= $book->publisher_name; ?></td>
            <td><?= $book->price; ?></td>
            <td><?= $book->status; ?></td>
            <td>

            <a href="BookEdit.php?book_name=<?= $person->book_name ?>" class="btn btn-info">Edit</a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?list_id=<?= $person->book_name ?>" class='btn btn-danger'>Delete</a>
            </td>

            </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>