<?php
<input type="text" class="form-control datetimepicker" required="" name="pickup" value="<?php echo date("Y-m-d H:i",strtotime($_GET['pickup'])) ?>" autocomplete="off">