<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>University_Department</title>

    <link rel="stylesheet" href="css/styles12.css">


    <!--Bootstrap-->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JavaScript Bootstrap -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  </head>
  <body>



    <div class="elecout">
      <h2>Outcomes</h2>
      <form class="unit_values" action="index.html" method="post">

        <div class="inputElecOut">

          <select id="select" onchange="getSelectedValue();">
            <option value="View">View</option>
            <option value="Insert">Insert</option>
            <option value="Update">Update</option>
            <option value="Delete">Delete</option>

          </select>
          <label for="Choice">What do you want to do?</label>
        </div>



        <div class="inputElecOut">
          <input type="text" name="" required=""  />
          <label for="ElecOut_id">Elective ID</label>
        </div>



        <div class="inputElecOut">
          <input type="text" name="" required=""  />
          <label for="ElecOutNo">CO No.</label>
        </div>


        <div class="inputElecOut">
          <input type="text" name="" required=""  />
          <label for="ElecCOInfo">CO Info</label>
        </div>

        <div class="inputElecOut">
          <input type="text" name="" required=""  />
          <label for="ElecBloomTax">Blooms Taxanomy</label>
        </div>


        <button type="button" class="btn btn-light myBtn btn-md" id="db-btn" >View</button>

      </form>

    </div>
    <script type="text/javascript">
      function getSelectedValue()
      {
        var selectedValue=document.getElementById("select").value;
        var mybtn=document.getElementById("db-btn");
        var btnval=document.getElementById("db-btn").value;
        mybtn.value="View";
        console.log(selectedValue);
        if(selectedValue=="Insert")
        {
          console.log("Inside insert-if");
          mybtn.value="Insert";
          btnval=mybtn.value;
          mybtn.innerHTML="Insert";
          console.log(btnval);
        }
        else if(selectedValue=="Update")
        {
          console.log("Inside update-if");
          mybtn.value="Update";
          btnval=mybtn.value;
          mybtn.innerHTML="Update";
          console.log(btnval);
        }
        else if(selectedValue=="Delete")
        {
          console.log("Inside delete-if");
          mybtn.value="Delete";
          btnval=mybtn.value;
          mybtn.innerHTML="Delete";
          console.log(btnval);
        }
        else{
          console.log("Inside view-if");
          mybtn.value="View";
          btnval=mybtn.value;
          mybtn.innerHTML="View";
          console.log(btnval);
        }
      }
    </script>

  </body>
</html>
