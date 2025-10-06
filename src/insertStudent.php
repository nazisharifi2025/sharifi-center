<?php
include "connection.php";
if(isset($_POST["stIdCard"])){
    $stName = $_POST["stName"];
    $stFathername = $_POST["stFathername"];
    $stLastName = $_POST["stLastName"];
    $stIdCard = $_POST["stIdCard"];
    $stPhone = $_POST["stPhoneNum"];
    $fileimg = $_FILES['image']['name'];
    $taimp_name = $_FILES['image']['tmp_name'];
    $folderImages = "images/". $fileimg;
    $Result = $connect->query("SELECT st_name,st_fatherName,st_lastName,tazkira_num FROM student where st_name = '$stName' and st_lastName= '$stLastName' and tazkira_num = '$stIdCard'");
    if($Result->num_rows > 0){
        echo "<script>alert('Sorrey the student is alredy')</script>";
}
else{
     $resultinsert =("INSERT INTO student(st_name,st_fatherName,st_lastName,tazkira_num,phone_number,imgUrl) VALUES('$stName','$stFathername','$stLastName','$stIdCard','$stPhone','$folderImages') ");
     $result= $connect->query($resultinsert);
      if( Move_uploaded_file($taimp_name,$folderImages)){
    header("location:insertpayment.php");
   }else{
    header("location:insertpayment.php");
   };
};
};
// شاگردان از فبل موجوده
$commintName = "SELECT st_id, st_name, st_fatherName FROM student";
$resultstudent = $connect->query($commintName);

$commintCourse = "SELECT course_id, course_name FROM course";
$resultCourse = $connect->query($commintCourse);

// وقتی فرم ارسال شود
if(isset($_POST["Name"])) {
    $st_id = $_POST["Name"];
    $course_id = $_POST["Course"];
    $amount = $_POST["amount"];

    // بررسی تکراری نبودن پرداخت
    $commentAmount = $connect->query("SELECT amount FROM payment WHERE st_id = '$st_id' AND course_id = '$course_id'");
    if($commentAmount->num_rows > 0){
        echo "<script>alert(' این شاگرد در این کورس قبلاً فیس پرداخت کرده است');</script>";
    } else {
        $insert = $connect->query("INSERT INTO payment (amount, course_id, st_id) VALUES ('$amount', '$course_id', '$st_id')");
        if($insert){
            echo "<script>alert(' فیس با موفقیت ثبت شد');</script>";
        } else {
            echo "<script>alert(' خطا در ثبت فیس!');</script>";
        }
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
    <script src="insertstu.js" defer></script>
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
                <h1 class=" text-base">Dashbord <i class="fas fa-chevron-right text-sm"></i>Students </h1>
                <div class="w-full mx-auto flex flex-col gap-4 items-center justify-center ">
                <h1 class="text-4xl mb-5 font-medium">Add Students</h1>
                <div class="h-[80%] w-full flex justify-center space-x-6 items-center">
                    <button class="p-4 rounded-md bg-gray-400 text-white text-xl hover:bg-transparent hover:border hover:text-gray-500 transition-all duration-500" id="btnNew">Registation New Student</button>
                    <button class="p-4 rounded-md bg-gray-400 text-white text-xl hover:bg-transparent hover:border hover:text-gray-500 transition-all duration-500" id="btnOld">Registation Old Student</button>
                </div>
                <form id="newForm" action=<?php echo $_SERVER["PHP_SELF"]; ?> method="post" enctype = "multipart/form-data" class="w-[80%] hidden  grid-cols-2 px-3 py-12 border rounded-md gap-6 " >
                    <input name="stName" type="text" placeholder="Plase Inter A Valid Student Name" class="p-3 border border-gray-500 rounded-md outline-0">
                    <input name="stFathername" type="text" placeholder="Plase Inter A Valid student Fathe Name " class="p-3 border border-gray-500 rounded-md outline-0">
                    <input name="stLastName" type="text" placeholder="Plase Inter A Valid Student LastName " class="p-3 h-14 border border-gray-500 rounded-md outline-0">
                    <input name="stIdCard" type="text" placeholder="Plase Inter A Valid Student Tazkira Number" class="p-3 border border-gray-500 rounded-md outline-0">
                    <input name="stPhoneNum" type="text" placeholder="Plase Inter A Valid Student Phone Number" class="p-3 border border-gray-500 rounded-md outline-0">
                    <input name="image" type="file" placeholder="Plase Inter A Valid Student pictar" class="p-3 border border-gray-500 rounded-md outline-0">
                    <input type="submit" value="Save" class=" py-1 h-14 px-12 mx-auto w-fit rounded-md bg-amber-600">
                </form>
               
                <form id="OldForm" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post"
      class="w-[80%] grid grid-cols-2 px-3 py-12 border rounded-md gap-6">

    <!-- select شاگرد -->
    <select name="Name" class="p-3 border border-gray-500 rounded-md outline-0">
        <?php while($row = $resultstudent->fetch_assoc()){ ?>
            <option value="<?php echo $row["st_id"]; ?>">
                <?php echo $row["st_name"]; ?>
            </option>
        <?php } ?>
    </select>

    <!-- select کورس -->
    <select name="Course" class="p-3 border border-gray-500 rounded-md outline-0">
        <?php while($row = $resultCourse->fetch_assoc()){ ?>
            <option value="<?php echo $row["course_id"]; ?>">
                <?php echo $row["course_name"]; ?>
            </option>
        <?php } ?>
    </select>

    <!-- فیلد مبلغ -->
    <input name="amount" type="text" placeholder="Plase Enter A Valid Student Amount"
           class="p-3 border border-gray-500 rounded-md outline-0">

    <!-- دکمه ثبت -->
    <input type="submit" value="Save"
           class="py-1 h-14 px-12 mx-auto w-fit rounded-md bg-amber-600 text-white cursor-pointer">
</form>
            </div>
              </div>
              <!-- content endded -->
        </div>
    </div>
</body>
</html>