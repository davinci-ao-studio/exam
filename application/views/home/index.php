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
      <td>
        <a href="/calendar/remove/<?= $item['id']?>">
          <span class="glyphicon glyphicon-remove">
          </span>
        </a>
        <a href="#">
          <span class="glyphicon glyphicon-pencil">
          </span>
        </a>
        <a href="/exam/conduct/<?= $item['id']?>">
          <span class="glyphicon glyphicon-play">
          </span>
        </a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
