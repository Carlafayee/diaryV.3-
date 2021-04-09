
<html lang="en">
  <head>
    <title>Entry Form</title>
  </head>
<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box

}

body {
    font-family: 'Poppins', sans-serif;
}

.wrapper {
    padding: 30px 50px;
    border: 1px solid #ddd;
    border-radius: 15px;
    margin: 10px auto;
    max-width: 600px

}


label {
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 500;
    color: #ff9aa2;    
    padding-left: 3px
}

.bg-light{
    color: black;
}

.form-control {
    border-radius: 10px
}

input[placeholder] {
    font-weight: 500
}

.form-control:focus {
    box-shadow: none;
    border: 1.5px solid #0779e4
}


.button:hover {
    background-color: #343a40;
    color: #ff9aa2;
}

.button {
    background-color: #ff9aa2;
}


@media(max-width:576px) {
    .wrapper {
        padding: 25px 20px
    }

    #deactivate {
        line-height: 18px
    }
}
</style>
<body>

    <?php 
       require('header.php');
       include('connect.php');
      

       $select = "SELECT * FROM DIARY WHERE DiaryID = :id";

       $statement = $con->prepare($select);

       $statement->bindParam(":id", $_GET['id']);

       $statement->execute();

       $product = $statement->fetch();

     //   echo "<pre>";
    //    print_r($product);
     //     echo "</pre>";
       
    ?>
<div class="wrapper bg-dark mt-sm-5">
    <form class="form" method="POST" action="">
    <div class="py-2">
    <div class="form-group">

        <div class="row py-2">
            <div class="col-md-6"><label for="date" >Date:</label> <input class="bg-light form-control" type="date" value="" id="date"></div>
            <div class="col-md-6"><label for="time" >Time:</label> <input class="bg-light form-control" type="time" value="" id="time"></div>
        </div>

         <div class="row py-2">
            <div class="col-md-6 pt-md-0 pt-3"> <label for="text">Title: </label> <input name="Title" type="text" class="bg-light form-control" placeholder="Enter a title" 

                required value="<?= $product['Title'] ?>"> </div>
        </div>

        <div class="row py-2">
            <textarea name="StoryDiary" 
            placeholder="Write something about your day." 
            class="bg-light form-control" 
            id="entry" 
            rows="10" required > 
            <?= $product['StoryDiary'] ?>
            </textarea>
        </div>
        </div>

        <div class="py-3 pb-4 border-bottom"> 
           <a href="entries.php"> <button type="button" class="btn btn-primary border" data-dismiss="modal">back</button> </a>
             <a onclick ="return confirm('are your sure you want to delete')" href="delete.php?id=<?= $product['DiaryID'] ?>"button type="reset" class="btn btn-danger border">delete</button>  </a>
        </div>

    </div>
    </form>
    </div>
</body>
</html>