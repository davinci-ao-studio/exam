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
//var_dump($exam_questions);
echo form_open('exam/save/'.$exam_info['id'], 'id="conduct"');
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
            <div class="checkbox">
              <label>
                <input type="radio" name='<?= $question['id'] ?>' value="1" <?= $question['answer'] == '1' ? 'checked' : ''?>>
              </label>
            </div>
          </td>
          <td class='col-xs-1'>
            <div class="checkbox">
              <label>
                <input type="radio" name='<?= $question['id'] ?>' value="0" <?= $question['answer'] == '0' ? 'checked' : ''?>>
              </label>
            </div>
          </td>
        </tr>
      <?php endforeach; ?>
    </thead>
  </table>
  <input type="hidden" name="submit" value="false">
</form>

<footer><button type="submit" class="btn btn-primary" form='conduct' id='save_exam'>Opslaan</button></footer>

<script type="text/javascript">
  $(document).ready(function(){
    $('#conduct').submit(function() {
      var r;
      $('tr').each(function() {
        var inputs = $(this).find('input');
        var first = inputs.first().prop('checked');
        var second = inputs.last().prop('checked');
        if (first == false && second == false) {
          if (confirm('Weet u zeker dat u het formulier op wilt slaan? U kunt later het examen hervatten.')) {
            r = false;
            return r;
          }
        }
      })
      if (r != false) {
        if (confirm('U heeft het volledige formulier ingevuld. Wilt u het formulier inleveren? Hierna kunt u het formulier niet meer aanpassen!')) {
          $('[name="submit"]').val('true');
        }
      }

    })
  })
</script>
