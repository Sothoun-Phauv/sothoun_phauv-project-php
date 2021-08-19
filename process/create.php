<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
</head>
<body>
    <div class="container p-5" >
        <form action="model.php" method="post" class="p-5" style="background:#e1e3e1;" enctype ="multipart/form-data" >
            <a href="http://localhost/sothoun_phauv-project-php/?page=home" class="btn btn-danger btn-sm mb-3"> <i class="fa fa-arrow-circle-left" style="font-size:24px">Back</i></a>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Title" name="title">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Short" name="short" maxlength="300">
            </div>
            <div class="form-group" >
                <input type="file" class="form-control" placeholder="Link image" name="image">
            </div>
            <div class="form-group">
                <textarea name="des" cols="30" rows="5" placeholder="Description" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <select name = "categoryid" class="form-control">
                    <option value="1">Business</option>
                    <option value="2">Sport</option>
                    <option value="3">Agriculture</option>
                    <option value="4">Khmer</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Create</button>
            </div>
        </form>
    </div>
</body>
</html>

