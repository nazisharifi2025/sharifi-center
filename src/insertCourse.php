<?php
include "connection.php";
if(isset($_POST["courseFee"])){
    $CourseName= $_POST["courseName"];
    $CourseFee= $_POST["courseFee"];
    $Dep_id= $_POST["dep_id"];
    $result = $connect->query("SELECT course_name FROM course WHERE course_name = '$CourseName'");
    if($result->num_rows === 0){
        $coursegit = $connect->query("INSERT INTO course(course_name,fees,dep_id) VALUES('$CourseName','$CourseFee','$Dep_id')");
    }
    else{
       echo "<script>alert('Sorre Alredey Exwst')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../public/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="app.js" defer></script>
</head>
<body>
    <div class="h-screen overflow-y-hidden w-full bg-stone-50 flex">
        <?php
        include "SideBAr.php";
        ?>
        <!-- sideBar endded -->
        <div class="h-screen w-full ">
           <?php
           include "navbar.php";
           ?>
            <!-- navbar endded -->
             <!-- content start -->
              <div class="w-full  p-12  font-medium">
                <h1 class="text-2xl">Admin Dashbord</h1>
                <h1 class=" text-base">Dashbord <i class="fas fa-chevron-right text-sm"></i>Course </h1>
                <div class="w-full mx-auto flex flex-col gap-4 items-center justify-center ">
                <h1 class="text-4xl mb-5 font-medium">Add Course</h1>
                <form action=<?php echo $_SERVER["PHP_SELF"]; ?> method="post" class="w-[80%] grid grid-cols-2 px-3 py-12 border rounded-md gap-6 ">
                    <input name="courseName" type="text" placeholder="Plase Inter A Valid Course Name" class="p-3 border border-gray-500 rounded-md  outline-0">
                    <input name="courseFee" type="number" placeholder="Plase Inter A Valid Course LastName " class="p-3 h-14 border border-gray-500 rounded-md outline-0">
                    <input name="dep_id" type="number" placeholder="Plase Inter A Valid Course LastName " class="p-3 border border-gray-500 rounded-md outline-0">
                    <input type="submit" value="Save" class=" py-2 h-14 px-12 w-fit rounded-md bg-amber-600">
                </form>
            </div>
              </div>
              <!-- content endded -->
        </div>
    </div>
</body>
</html>