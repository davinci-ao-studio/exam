<table class="table">
  <thead>
    <tr>
      <th>Examinatoren</th>
      <th>Examen</th>
      <th>Leerling</th>
      <th>Locatie</th>
      <th>Afneem tijd</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php
    $today = false;
    foreach ($calendar as $calendar_item): ?>
      <tr<?php
      if ($calendar_item['submit']) {
        echo 'class="success"';
      } else if (date('U', strtotime($calendar_item['date'])) <= (int)time()){
        echo 'class="danger"';
      }
      ?>>
      <?php
      if (date('Ymd') == date('Ymd', strtotime($calendar_item['date'])) && !$today): ?>
        <th colspan="6">Vandaag</th>
      </tr>
      <tr>
      <?php
      $today = true;
      elseif(time() <= strtotime('+1 week') && date('Ymd') != date('Ymd', strtotime($calendar_item['date'])) && $today): ?>
        <th colspan="6">Deze week</th>
      </tr>
      <tr>
      <?php
      endif; ?>
        <td><?= $calendar_item['examiner_id_1'] . ' & ' . $calendar_item['examiner_id_2']  ?></td>
        <td><?= $calendar_item['title']?></td>
        <td><?= $calendar_item['first_name']?> <?= $calendar_item['last_name']?></td>
        <td><?= $calendar_item['adress']?>, <?= $calendar_item['city'];?></td>
        <td><?= date("j-m-Y; G:i", strtotime($calendar_item['date']))?></td>
        <td>
          <a href="/calendar/remove/<?= $calendar_item['id']?>">
            <span class="glyphicon glyphicon-remove">
            </span>
          </a>
          <?php if(!$calendar_item['submit']):?>
            <a href="#">
              <span class="glyphicon glyphicon-pencil">
              </span>
            </a>
            <a href="/exam/conduct/<?= $calendar_item['id']?>">
              <span class="glyphicon glyphicon-play">
              </span>
            </a>
          <?php endif; ?>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<a href="/calendar/create" class="btn btn-info" role="button"><span class="glyphicon glyphicon-plus"></span> Agenda item toevoegen</a>
