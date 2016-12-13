<section>
<?php
echo form_open('students/'.$page); ?>

    <div class="form-group row">
      <label for="first_name" class="col-xs-2 col-form-label">Voornaam</label>
      <div class="col-xs-10">
        <input class="form-control" type="text" <?php  echo (isset($student['first_name']) ? 'value="'.$student['first_name'].'"' : 'placeholder="Voornaam"'); ?> name="first_name" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="last_name" class="col-xs-2 col-form-label">Achternaam</label>
      <div class="col-xs-10">
        <input class="form-control" type="text" <?php echo (isset($student['last_name']) ? 'value="'.$student['last_name'].'"' : 'placeholder="Achternaam"');?> name="last_name" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="ov_number" class="col-xs-2 col-form-label">Number</label>
      <div class="col-xs-10">
        <input class="form-control" type="text" <?php echo (isset($student['ov_number']) ? 'value="'.$student['ov_number'].'"' : 'placeholder="00000000"');?> name="ov_number" minlength="8" maxlength="8" required>
      </div>
    </div>

    <button type="submit" class="btn btn-primary">Toevoegen</button>

  </form>
</section>
