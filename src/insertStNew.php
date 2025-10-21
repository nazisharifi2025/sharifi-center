<?php
include "connection.php";
 $SlectCours = $connect->query("SELECT * from course");
if($_SERVER["REQUEST_METHOD"] =="POST"){
    $stName = $_POST["stName"];
    $stFathername = $_POST["stFathername"];
    $stLastName = $_POST["stLastName"];
    $stIdCard = $_POST["stIdCard"];
    $stPhone = $_POST["stPhoneNum"];
    $amount = $_POST["amount"];
    $course = $_POST["Course"];
    $fileimg = $_FILES['image']['name'];
    $taimp_name = $_FILES['image']['tmp_name'];
    $folderImages = "../images/". $fileimg;
    $Result = $connect->query("SELECT st_name,st_fatherName,st_lastName,tazkira_num FROM student where st_name = '$stName' and st_lastName= '$stLastName' and tazkira_num = '$stIdCard'");
    if($Result->num_rows > 0){
        echo "<script>alert('Sorrey the student is alredy')</script>";
}
else{
      if( Move_uploaded_file($taimp_name,$folderImages)){
        $resultinsert =("INSERT INTO student(st_name,st_fatherName,st_lastName,tazkira_num,phone_number,imgUrl) VALUES('$stName','$stFathername','$stLastName','$stIdCard','$stPhone','$folderImages') ");
     if($connect->query($resultinsert)){
        $insetPayment=("INSERT into payment(amount , course_id , st_id)VALUE ('$amount','$course',LAST_INSERT_ID())");
        if($connect->query($insetPayment)){
            header("location: dashbord.php?Messege=200");
        }
        else{
       header("location:dashbord.php?messege=404");
       };
     };
    
   }
};
};
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
    <script src="insertstu.js" defer></script>
    <script src="app.js" defer></script>
</head>
<body>
    <div class="h-screen overflow-y-hidden w-full bg-stone-50 flex">
        <?php
        include "SideBAr.php";
        ?>
        <!-- sideBar endded -->
        <div class="h-screen overflow-y-scroll w-full ">
           <?php
           include "navbar.php";
           ?>
            <!-- navbar endded -->
             <!-- content start -->
              <div class="w-full  p-12  font-medium">
                <h1 class="text-2xl">Admin Dashbord</h1>
                <h1 class=" text-base">Dashbord <i class="fas fa-chevron-right text-sm"></i>Students </h1>
                <div class="w-full mx-auto flex flex-col gap-4 items-center justify-center ">
                <h1 class="text-4xl mb-5 font-medium">Add Students</h1>
                <form id="newForm" action=<?php echo $_SERVER["PHP_SELF"]; ?> method="post" enctype = "multipart/form-data" class="w-[80%] grid grid-cols-2 px-3 py-12 border rounded-md gap-6 " >
                    <input name="stName" type="text" placeholder="Plase Inter A Valid Student Name" class="p-3 border border-gray-500 rounded-md outline-0">
                    <input name="stFathername" type="text" placeholder="Plase Inter A Valid student Fathe Name " class="p-3 border border-gray-500 rounded-md outline-0">
                    <input name="stLastName" type="text" placeholder="Plase Inter A Valid Student LastName " class="p-3 h-14 border border-gray-500 rounded-md outline-0">
                    <input name="stIdCard" type="text" placeholder="Plase Inter A Valid Student Tazkira Number" class="p-3 border border-gray-500 rounded-md outline-0">
                    <input name="stPhoneNum" type="text" placeholder="Plase Inter A Valid Student Phone Number" class="p-3 border border-gray-500 rounded-md outline-0">
                    <input name="image" type="file" placeholder="Plase Inter A Valid Student pictar" class="p-3 border border-gray-500 rounded-md outline-0">
                    <input name="amount" type="text" placeholder="Plase Enter A Valid Student Amount" class="p-3 border border-gray-500 rounded-md outline-0">
                    <select name="Course" class="p-3 border border-gray-500 rounded-md outline-0">
                        <?php while($row = $SlectCours->fetch_assoc()) {?>
                            <option value="<?php echo $row["course_id"]; ?>">
                                <?php  echo $row["course_name"];  ?>
                            </option>
                       <?php } ?>
                   </select>
                   <button class=" py-1 h-14 px-12 text-white rounded-md bg-amber-600">Save</button>
                </form>
            </div>
              </div>
              <!-- content endded -->
        </div>
    </div>
</body>
</html>