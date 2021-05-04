
<h1>Basic Registration Form</h1>
<p>This is a basic Form with alot of loopholes. You can edit it to your likings. The form provides you with basic PHP and mysql database connection and saves the data in the databases that is created on the runtime. You can further add your features and use it. </p>

<br>

<p>To use this project. Paste these files in 'wamp64/[ Your folder name (in my case lab8) ]/' and then run the wamp services. Then go to browser and type "localhost/[ Your folder name]/form.php". As the databases are create on runtime it won't be a problem to create a new database but if you want it to be you database with some othr name, you have to change the name or if you already have a database create then remove the part where it's creating a database and add the lines "$database={your database name]" beneath the "$password = root" and add "$database" in the "$conn = new mysqli($servername, $username, $password, $database);" in the form.php file. </p>

<hr>

<h4>Note:</h4>
<p>You have to type the name of the file manually as i didn't link the files so if you want to look at the data, you have to go to url and change form.php to search.php</p>

<h2>form.php</h2> 

<a href="https://im2.ezgif.com/tmp/ezgif-2-fc370513be0f.gif"><img src="https://im2.ezgif.com/tmp/ezgif-2-fc370513be0f.gif" title="gif"/></a>

<br>


<h2>search.php</h2> 

<a href="https://im2.ezgif.com/tmp/ezgif-2-0c0e80444ae4.gif"><img src="https://im2.ezgif.com/tmp/ezgif-2-0c0e80444ae4.gif" title="gif"/></a>

<br>

<p>As i mentioned earlier. It has alot of loopholes due to which it gives error as vairable not defined because when the php code debugs there aren't any variables given. This is just a basic form to get you started. You can modify it according to your needs. Hope it helps. </p>
