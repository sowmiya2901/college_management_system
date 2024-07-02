<?php
include("head.html")
?>
<body>
<div class="register">
<form action="connect.php" method="post">
<br /><br />
<label for="name">STUDENT NAME</label>
<input type="text" name="name" size="30" placeholder="enter your name" required />
<br /><br />

<label for="age">AGE</label>
<input type="number" name="age" size="10" />
<br /><br />

<label for="dob">DATE OF BIRTH</label>
<input type="date" name="dob" size="15" />
<br /><br />

<label for="gender">GENDER</label>
<input type="radio" value="male" name="gender" />MALE
<input type="radio" value="female" name="gender" />FEMALE
<input type="radio" value="other" name="gender" />OTHER
<BR /><BR />

<label for="email">EMAIL ID</label>
<input type="email" name="email" size="35" />
<br /><br />

<label for="park">DEPARTMENT</label>
<select name="park">
<option value="ferris wheels">CSE</option>
<option value="dark ride">ECE</option>
<option value="bumber cars">AI & DS</option>
<option value="haunted house">IT</option>
<option value="fun house">EEE</option>
<option value="rollercoaster">MECHANICAL</option>
<option value="drop tower">CIVIL</option>
</select>
<br /><br />
<input type="submit" value="submit" />
<input type="reset" value="reset" />
</form>
</div>
</body>
<?php
include("footer.html")
?>