<?php 

$this->extend('layouts/main.php');
$this->section('body');

?>

<h1>Edit Student</h1>

<form action="/students/update/<?= $student['id']; ?>" method="POST" enctype="multipart/form-data">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Student Name</label>
  <input type="text" class="form-control" name="studentName" value="<?= $student['student_name']; ?>">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Student Number</label>
  <input type="text" class="form-control" name="studentNum" value="<?= $student['student_id']; ?>">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Student Section</label>
  <input type="text" class="form-control" name="studentSection" value="<?= $student['student_section']; ?>">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Student Course</label>
  <input type="text" class="form-control" name="studentCourse" value="<?= $student['student_course']; ?>">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Student Batch</label>
  <input type="text" class="form-control" name="studentBatch" value="<?= $student['student_batch']; ?>">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Student Level</label>
  <input type="text" class="form-control" name="studentLevel" value="<?= $student['student_grade_level']; ?>">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Student Profile</label>
  <input type="file" class="form-control" name="studentProfile" value="<?= $student['student_profile']; ?>">
</div>

<button type="submit" class="btn btn-primary">Submit</button>

</form>


<?php $this->endSection(); ?>