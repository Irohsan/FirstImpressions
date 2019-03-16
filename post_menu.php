<!DOCTYPE html>

<html>
	<head>

		<title>Create a Post</title>

		<link href="presentation.css" type="text/css" rel="stylesheet">
	</head>
	<body>
        <h1>Create a Post</h1>
        <br>
        <br>
		<form action="post.php" method="post">
            <label>
            Post Title<span style="color:red">*</span>: <input type="text" name = "title">
            <br><br>
            <label>
            Category<span style="color:red">*</span>: <select name = "category">
                <option value="people">People</option>
                <option value="nature">Nature</option>
                <option value="animals">Animals</option>
                <option value="food">Food</option>
                <option value="travel">Travel</option>
                <option value="popculture">Pop Culture</option>
                <option value="art">Art</option>
                <option value="fashion">Fashion</option>
                <option value="history">History</option>
                <option value="other">Other</option>
                </select>  
            </label>
            </label>
            <br><br>
            <label>
            File: <input type="file", name = "fileref">
            </label>
            <br><br>
            <label>
            Post Text<span style="color:red">*</span>: <br><br> <input style="height:200px; width:500px;" type="text" name = "descript">
            </label>
            <br>
            <button style="margin-left: 10%" type="submit">Submit</button>
        </form>
    </body>
</html>
