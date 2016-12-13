<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('select').on('change', function(){
      if ($(this).attr('name') == 'examiner_1' || $(this).attr('name') == 'examiner_2') {
        $('select[name="examiner_1"]').children().show();
        $('select[name="examiner_2"]').children().show();
        $('select[name="examiner_1"]').find('option[value="' + $(this).val() + '"]').hide();
        $('select[name="examiner_2"]').find('option[value="' + $(this).val() + '"]').hide();
      }
    });

  });

</script>

<section>
<?php
echo form_open('calendar/'.$page);
?>
    <div class="form-group">
      <label for="example-datetime-local-input">Date and time</label>
      <input class="form-control" name="date" type="datetime-local" value="<?= date('Y-m-d\TH:i', time())?>" id="example-datetime-local-input">
      <label for="example-datetime-local-input">Adres</label>
      <input class="form-control" name="address" type="text" placeholder="Adres" required>
      <input class="form-control" name="city" type="text" placeholder="Stad" required>
    </div>
    <hr>
    <div class="form-group">
      <label for="examiner_1">Examinator 1</label>
      <select class="form-control" name="examiner_1">
      <?php foreach ($teachers as $key => $value): ?>
          <option value="<?= $key ?>"><?= $value['username'] ?></option>
        <?php endforeach; ?>
      </select>
        <label for="examiner_2">Examinator 2</label>
        <select class="form-control" name="examiner_2">
        <?php foreach ($teachers as $key => $value): ?>
            <option value="<?= $key ?>"><?= $value['username'] ?></option>
          <?php endforeach; ?>
        </select>
    </div>
    <hr>
    <div class="form-group">
      <label for="student">Leerling</label>
      <select class="form-control" name="student">
        <?php foreach ($students as $key => $value): ?>
          <option value="<?= $value['id'] ?>"><?= $value['first_name'] . " " . $value['last_name'] ?></option>
        <?php endforeach; ?>
      </select>
      <label for="exam">Examen</label>
      <select class="form-control" name="exam">
        <?php foreach ($exams as $key => $value): ?>
          <option value="<?= $value['id'] ?>"><?= $value['title'] ?></option>
          <?php var_dump($value) ?>
        <?php endforeach; ?>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Volgende</button>
  </form>
</section>
