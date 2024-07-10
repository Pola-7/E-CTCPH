<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Course</title>
    <!-- Bootstrap CSS from MaxCDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-EePleXbdh5ouLpO5kAQkq4FvBTGxggxI3XfZm9RtIiK7cE9bPd8Br41m4RbxJcDP" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="containers">
       <div class="row justify-content-center"> 
           <div class="col-md-6 mt-5 rounded">
                <h2 class="text-center custom-h2-style">ADD COURSE</h2>
                <form action="" method="post" class="p-2" enctype="multipart/form-data" id="form-box">
                    <div class="form-group">
                        <input type="text" name="pImage" class="form-control" placeholder="course name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="price" class="form-control" placeholder="course price" required>
                    </div>
                    <div class="form-group">
                        <div class="custom.file">
                            <input type="file" name="Image" class="custom-file-input" id="customFile" required>
                        </div>
                    </div>
                </form>
            </div> 
        </div>
    </div>



</body>
</html>