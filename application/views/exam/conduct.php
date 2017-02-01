<table class="table-condensed table table-costum">
  <tbody>
    <tr>
      <th>Proeve:</th>
      <td colspan="3">Applicatieontwikkelaar - <?= $exam_info['title'] ?></td>
    </tr>
    <tr>
      <th>Crebo:</th>
      <td>95311</td>
      <th>Cohert:</th>
      <td><?= date("Y", strtotime($exam_info['date']))?></td>
    </tr>
    <tr>
      <th>Kandidaat:</th>
      <td><?= $exam_info['first_name'] ?> <?= $exam_info['last_name']?></td>
      <th>OV-nummer:</th>
      <td><?= $exam_info['ov_number']?></td>
    </tr>
    <tr>
      <th>Examinatoren:</th>
      <td colspan="3"><?= $exam_info['examiner_id_1']?> & <?= $exam_info['examiner_id_2']?></td>
    </tr>
    <tr>
      <th>Datum:</th>
      <td colspan="3"><?= date("j-m-Y", strtotime($exam_info['date']))?></td>
    </tr>
    <tr>
      <th>Resultaat:</th>
      <td colspan="3">NULL</td>
    </tr>
  </tbody>
</table>
<hr class="exam">
<?php
echo form_open('exam/save/' . $exam_info['id']);
 ?>
  <table class="table">
    <thead>
      <tr>
        <th></th>
        <th class='col-xs-1'>Ja</th>
        <th class='col-xs-1'>Nee</th>
      </tr>
      <?php
        $last_subtitle = '';
        foreach ($exam_questions as $question):
          if (!($question['title'] == $last_subtitle)):
            ?>
            <tr>
              <th colspan="4"><?= $question['title'] ?></th>
            </tr>
            <?php
          endif;
        $last_subtitle = $question['title'];
        ?>
        <tr>
          <td><?= $question['question_title'] ?></td>
          <td class='col-xs-1'>
            <div class="radio">
              <?php if ($question['answer'] == '1'): ?>
                <input type="radio" name="<?= $question['id'] ?>" checked></input>
              <?php else: ?>
                <input type="radio" name="<?= $question['id'] ?>"></input>
              <?php endif; ?>
            </div>
          </td>
          <td class='col-xs-1'>
            <div class="radio">
              <?php if ($question['answer'] == '1'): ?>
              <input type="radio" name="<?= $question['id'] ?>" checked></input>
            <?php else: ?>
              <input type="radio" name="<?= $question['id'] ?>"></input>
            <?php endif; ?>
            </div>
          </td>
        </tr>
      <?php endforeach; ?>
    </thead>
  </table>

  <input type="hidden" name="submit" value="false" />
  <button type="submit" class="btn btn-primary btn-sm outline">Opslaan</button>
</form>
