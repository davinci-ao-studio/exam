<section>
<?php

echo validation_errors();
echo form_open('students/create'); ?>

    <div class="form-group row">
      <label for="first_name" class="col-xs-2 col-form-label">Voornaam</label>
      <div class="col-xs-10">
        <input class="form-control" type="text" placeholder="Voornaam" name="first_name">
      </div>
    </div>
    <div class="form-group row">
      <label for="last_name" class="col-xs-2 col-form-label">Achternaam</label>
      <div class="col-xs-10">
        <input class="form-control" type="text" placeholder="Achternaam" name="last_name">
      </div>
    </div>
    <div class="form-group row">
      <label for="ov_number" class="col-xs-2 col-form-label">Number</label>
      <div class="col-xs-10">
        <input class="form-control" type="number" placeholder="00000000" name="ov_number">
      </div>
    </div>

    <button type="submit" class="btn btn-primary">Toevoegen</button>

  </form>
</section>
