
<table class="table table-striped table-calendar">
  <thead>
    <tr>
      <th>Status</th>
      <th>Examinatoren</th>
      <th>Examen</th>
      <th>Leerling</th>
      <th>Afneem tijd</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <!-- Add subtitles for each time period -->
    <?php
    $status = 0;
    foreach ($calendar as $calendar_item):
      ?>

      <?php
      if (date('Ymd') == date('Ymd', strtotime($calendar_item['date'])) && $status == 0): ?>
      <tr>
        <th colspan="7">Vandaag</th>
      </tr>
      <?php
      $status = 1;
      elseif(strtotime($calendar_item['date']) <= strtotime('+1 week') && date('Ymd') != date('Ymd', strtotime($calendar_item['date'])) && $status == 1): ?>
      <tr>
        <th colspan="7">Deze week</th>
      </tr>
      <?php
      $status = 2;
      elseif (strtotime($calendar_item['date']) > strtotime('+1 week') && $status <= 2): ?>
      <tr>
        <th colspan="7">Later</th>
      </tr>
      <?php
      $status = 3;
      endif;

      echo time() > strtotime('+1 week');

        if ($calendar_item['submit'] == '1') {
          echo '<tr class="success"> <td><span class="glyphicon glyphicon-ok"></span> Ingevuld';
        } else if (date('U', strtotime($calendar_item['date'])) <= (int)time() && $calendar_item['answer_count'] == 0) {
          echo '<tr class="danger"> <td><span class="glyphicon glyphicon-remove"></span> Te laat';
        } else if ($calendar_item['answer_count'] > 0) {
          echo '<tr class="warning"> <td><span class="glyphicon glyphicon-pencil"></span> Bezig';
        } else {
          echo '<tr><td><span class="glyphicon glyphicon-minus"></span> Onvoltooid';
        }
      ?></td>
        <td><?= $calendar_item['examiner_id_1'] . ' & ' . $calendar_item['examiner_id_2']  ?></td>
        <td><?= $calendar_item['title']?></td>
        <td><?= $calendar_item['first_name']?> <?= $calendar_item['last_name']?></td>
        <td><?= date("j-m-Y; G:i", strtotime($calendar_item['date']))?></td>
        <td>
          <a href="/calendar/remove/<?= $calendar_item['id']?>">
            <span class="glyphicon glyphicon-trash">
            </span>
          </a>
          <a target="_blank" href="/print/<?= $calendar_item['student_id']?>">
            <span class="glyphicon glyphicon-print">
            </span>
          </a>
          <?php if(!$calendar_item['submit']):?>
            <a href="#">
              <span class="glyphicon glyphicon-wrench">
              </span>
            </a>
            <a href="/exam/conduct/<?= $calendar_item['exam_id']?>">
              <span class="glyphicon glyphicon-play">
              </span>
            </a>
          <?php endif; ?>
        </td>
		<td>
		</td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<a href="/calendar/create" class="btn btn-primary btn-sm outline" role="button"><span class="glyphicon glyphicon-plus"></span> Agenda item toevoegen</a>
