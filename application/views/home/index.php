<table class="table table-striped">
  <thead>
    <tr>
      <th>Examen</th>
      <th>Student</th>
      <th>Afname tijd</th>
      <th>Locatie</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($calendar as $item): ?>
    <tr>
      <td><?= $item['title']?></td>
      <td><?= $item['first_name']?> <?= $item['last_name']?></td>
      <td><?= $item['date']?></td>
      <td><?= $item['adress']?>, <?= $item['city']?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
