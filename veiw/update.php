<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="../service/update_service.php" method="POST">
<div><label>Name</label> <input type="text" name="name" placeholder="Name" style="margin-left: 50px; margin-top: 20px;"></div>
<div><label>Phone</label> <input type="text" name="phone" placeholder="Phone number" style="margin-left: 50px; margin-top: 20px;""></div>

<div><label>Email</label> <input type="text" name="email" placeholder="Email" style="margin-left: 50px; margin-top: 20px;""></div>
<div><label>Gender</label> <input type="radio" name="gender" style="margin-left: 50px; margin-top: 20px;">male
<input type="radio" name="gender" style="margin-left: 50px; margin-top: 20px;">female</div>

<div><label>Hobies</label><select style="margin-left: 50px; margin-top: 20px;"  name="hobies">Listening to
	<option>reading</option>
	<option>browsing</option>
	<option>playing</option>
</select>
<div><label>Profile</label> <input type="text" name="profile" placeholder="Profile" style="margin-left: 50px; margin-top: 20px;"> </div>
<div><label>country</label> <input type="text" name="country" placeholder="country" style="margin-left: 50px; margin-top: 20px;"></div>
<div><input type="submit" name="update" value="update" style="margin-left: 200px; margin-top: 20px;"></div>
</form>
</body>
</html>