<table class="table table-striped">
  <thead>
    <tr>
      <th>Examen</th>
      <th>Student</th>
      <th>Timestamp</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php foreach ($calendar as $item): ?>
      <td><?= $item['exam_id']?></td>
      <td><?= $item['student_id']?></td>
      <td><?= $item['timestamp']?></td>
      <?php endforeach; ?>
    </tr>
  </tbody>
</table>
