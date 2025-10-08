<?php
include "connection.php";
if(isset($_POST["amount"])){
$amount = $_POST["amount"];
$courseid = $_POST["courseid"];
$st_id = $_POST["st_id"];
$commend = "SELECT amount,course_id, st_id FROM payment WHERE course_id = '$courseid' and st_id = '$st_id'";
$result = $connect->query($commend);
if($result->num_rows === 0 ){
    $insert = "INSERT INTO payment(amount,course_id,st_id) VALUES('$amount','$courseid','$st_id')";
    $nateja = $connect->query($insert);
}
else{
    echo "<script>alert('Sorrey this department already exists')</script>";
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
        include "SideBar.php";
        ?>
        <div class="h-screen w-full">
            <?php
            include "navbar.php"
            ?>
            <div class="w-full text-2xl p-12  font-medium">
                <h1>Admin Dashbord</h1>
                <h1 class=" text-base">Dashbord <i class="fas fa-chevron-right text-sm"></i>Insert payment </h1>
            </div>
            <div class="w-[60%] mx-auto flex flex-col gap-4 items-center justify-center ">
                <h1 class="text-4xl mb-5 font-medium">Add Fee_paid</h1>
                <form action=<?php echo $_SERVER["PHP_SELF"]; ?> method="post" class="w-full flex px-3 py-12 border rounded-md flex-col gap-4 justify-center items-center">
                    <input name="amount" type="number" placeholder="Added amount" class="p-3 border border-gray-500 rounded-md w-[90%] outline-0">
                    <input name="courseid" type="number" placeholder="Added course_id" class="p-3 border border-gray-500 rounded-md w-[90%] outline-0">
                    <input name="st_id" type="number" placeholder="Added student_id" class="p-3 border border-gray-500 rounded-md w-[90%] outline-0">
                    <input type="submit" value="Save" class="border border-gray-500 py-2 px-6 rounded-md hover:bg-stone-300 hover:border-0">
                </form>
            </div>
        </div>
    </div>
</body>
</html>