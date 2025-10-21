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
<!-- sk-tQXQ68dd53901347212624 -->
<body>
      <div id="contener" class="w-[25%] bg-gray-900 h-full text-white">
            <div class="px-5 py-4 bg-amber-600 flex justify-between items-center">
                <img src="../images/logo.png"  alt="">
                <button id="bars" class="block">
                <i class="fas fa-bars text-white text-3xl"></i>
                </button>
                <button id="times" class="hidden">
                <i class="fas fa-times text-white text-3xl"></i>
                </button>
            </div>
            <!-- logo ended -->
             <div id="dir" class="h-full w-full">
             <div id="click" class=" bg-slate-800 py-4 px-6 flex hover:cursor-pointer border-b border-slate-950 justify-between items-center">
                <div class="flex items-center space-x-6 ">
                    <i class="fa fa-tachometer-alt text-xl text-amber-600"></i>
                    <span class="text-gray-300 text-xl">Dashbord</span>
                </div>
                <i class="fas fa-chevron-right text-xl"></i>
                <button class="hidden icone">
                    <i class="fa fa-tachometer-alt text-xl text-amber-600"></i>
                </button>
             </div>
             <div id="div" class=" transform-fill transition-all duration-700 ease-linear hidden flex-col text-gray-400 items-center my-2 w-full ">
                <div class="flex items-center py-3 px-24 hover:bg-slate-800  space-x-2  w-full">
                    <i class="fas fa-chevron-right text-sm"></i>
                    <span><a href="dashbord.php"> Admin</a></span>
                </div>
                <div class="flex items-center py-3 pl-24 hover:bg-slate-800  space-x-2  w-full">
                    <i class="fas fa-chevron-right text-sm"></i>
                    <span>Student</span>
                </div>
                <div class="flex items-center py-3 px-24 hover:bg-slate-800  space-x-2  w-full">
                    <i class="fas fa-chevron-right text-sm"></i>
                    <span><a href=""></a> Teacher</span>
                </div>
             </div>
             <!-- div1 endedd -->
                <div id="click2" class=" bg-slate-800 py-4 px-6 flex hover:cursor-pointer border-b border-slate-950 justify-between items-center">
                <div class="flex items-center space-x-6 ">
                    <i class="fa fa-user-graduate text-xl text-amber-600"></i>
                    <span class="text-gray-300 text-xl"><a href="AllStudent.php">Students</a> </span>
                </div>
                <i class="fas fa-chevron-right text-xl"></i>
                <button class="hidden icone">
                    <i class="fa fa-user-graduate text-xl text-amber-600"></i>
                </button>
             </div>
             <div id="div2" class=" transform-fill transition-all duration-700 ease-linear hidden flex-col text-gray-400 items-center my-2 w-full ">
                <div class="flex items-center py-3 pl-24 hover:bg-slate-800  space-x-2  w-full">
                    <i class="fas fa-chevron-right text-sm"></i>
                    <span><a href="AllStudent.php">All Student</a></span>
                </div>
                <div class="flex items-center py-3 pl-24 hover:bg-slate-800  space-x-2  w-full">
                    <i class="fas fa-chevron-right text-sm"></i>
                    <span>Students Details</span>
                </div>
                <div class="flex items-center py-3 pl-24 hover:bg-slate-800  space-x-2  w-full">
                    <i class="fas fa-chevron-right text-sm"></i>
                    <span><a href="buttonSt.php">Student Form</a></span>
                </div>
                <div class="flex items-center py-3 pl-24 hover:bg-slate-800  space-x-2  w-full">
                    <i class="fas fa-chevron-right text-sm"></i>
                    <span>Student Promotion</span>
                </div>
             </div>
             <!-- div2 ended -->
                     <div id="click3" class=" bg-slate-800 py-4 px-6 flex hover:cursor-pointer border-b border-slate-950 justify-between items-center">
                <div class="flex items-center space-x-6 ">
                    <i class="fa fa-chalkboard-teacher text-xl text-amber-600"></i>
                    <span class="text-gray-300 text-xl">Teacher</span>
                </div>
                <i class="fas fa-chevron-right text-xl"></i>
                  <button class="hidden icone">
                    <i class="fa fa-chalkboard-teacher text-xl text-amber-600"></i>
                </button>
             </div>
             <div id="div3" class=" transform-fill transition-all duration-700 ease-linear hidden flex-col text-gray-400 items-center my-2 w-full ">
                <div class="flex items-center py-3 pl-24 hover:bg-slate-800  space-x-2  w-full">
                    <i class="fas fa-chevron-right text-sm"></i>
                    <span> <a href="AllTeacher.php"> All Teacher</a></span>
                </div>
                <div class="flex items-center py-3 pl-24 hover:bg-slate-800  space-x-2  w-full">
                    <i class="fas fa-chevron-right text-sm"></i>
                    <span>Teacher Details</span>
                </div>
                <div class="flex items-center py-3 pl-24 hover:bg-slate-800  space-x-2  w-full">
                    <i class="fas fa-chevron-right text-sm"></i>
                    <span><a href="AllinsertInstractor.php">Add Teacher</a></span>
                </div>
                <div class="flex items-center py-3 pl-24 hover:bg-slate-800  space-x-2  w-full">
                    <i class="fas fa-chevron-right text-sm"></i>
                    <span>Payment</span>
                </div>
             </div>
             <!--  -->
                           <div id="click5" class=" bg-slate-800 py-4 px-6 flex hover:cursor-pointer border-b border-slate-950 justify-between items-center">
                <div class="flex items-center space-x-6 ">
                    <i class=" fa fa-school text-xl text-amber-600"></i>
                    <span class="text-gray-300 text-xl">Course</span>
                </div>
                <i class="fas fa-chevron-right text-xl"></i>
                 <button class="hidden icone">
                    <i class="fa fa-school text-xl text-amber-600"></i>
                </button>
             </div>
             <div id="div5" class=" transform-fill transition-all duration-700 ease-linear hidden flex-col text-gray-400 items-center my-2 w-full ">
                <div class="flex items-center py-3 pl-24 hover:bg-slate-800  space-x-2  w-full">
                    <i class="fas fa-chevron-right text-sm"></i>
                    <span><a href="AllCourse.php">All Course</a></span>
                </div>
                <div class="flex items-center py-3 pl-24 hover:bg-slate-800  space-x-2  w-full">
                    <i class="fas fa-chevron-right text-sm"></i>
                    <span><a href="insertCourse.php">Add course</a></span>
                </div>
             </div>
             <!-- div 3 enddedd -->
                       <div id="click4" class=" bg-slate-800 py-4 px-6 flex hover:cursor-pointer border-b border-slate-950 justify-between items-center">
                <div class="flex items-center space-x-6 ">
                    <i class="fa fa-wallet text-xl text-amber-600"></i>
                    <span class="text-gray-300 text-xl">Acount</span>
                </div>
                <i class="fas fa-chevron-right text-xl"></i>
                 <button class="hidden icone">
                    <i class="fa fa-wallet text-xl text-amber-600"></i>
                </button>
             </div>
             <div id="div4" class=" transform-fill transition-all duration-700 ease-linear hidden flex-col text-gray-400 items-center my-2 w-full ">
                <div class="flex items-center py-3 pl-24 hover:bg-slate-800  space-x-2  w-full">
                    <i class="fas fa-chevron-right text-sm"></i>
                    <span>All Fees Collection</span>
                </div>
                <div class="flex items-center py-3 px-24 hover:bg-slate-800  space-x-2  w-full">
                    <i class="fas fa-chevron-right text-sm"></i>
                    <span>Expenses</span>
                </div>
                <div class="flex items-center py-3 px-24 hover:bg-slate-800  space-x-2  w-full">
                    <i class="fas fa-chevron-right text-sm"></i>
                    <span><a href="insertpayment.php">Add Fee</a></span>
                </div>
             </div>
             <!-- div 4 ended -->
          
             <!-- div endded -->
                         <div id="click6" class=" bg-slate-800 py-4 px-6 flex hover:cursor-pointer border-b border-slate-950 justify-between items-center">
                <div class="flex items-center space-x-6 ">
                    <i class=" fa fa-user-friends text-xl text-amber-600"></i>
                    <span class="text-gray-300 text-xl">Parents</span>
                </div>
                <i class="fas fa-chevron-right text-xl"></i>
                  <button class="hidden icone">
                    <i class="fa fa-user-friends text-xl text-amber-600"></i>
                </button>
             </div>
             <div id="div6" class=" transform-fill transition-all duration-700 ease-linear hidden flex-col text-gray-400 items-center my-2 w-full ">
                <div class="flex items-center py-3 pl-24 hover:bg-slate-800  space-x-2  w-full">
                    <i class="fas fa-chevron-right text-sm"></i>
                    <span>All Parent</span>
                </div>
                <div class="flex items-center py-3 px-24 hover:bg-slate-800  space-x-2  w-full">
                    <i class="fas fa-chevron-right text-sm"></i>
                    <span>Parent Details</span>
                </div>
                <div class="flex items-center py-3 px-24 hover:bg-slate-800  space-x-2  w-full">
                    <i class="fas fa-chevron-right text-sm"></i>
                    <span>Add Parent</span>
                </div>
             </div>
             <!-- div 5 endded -->
                          <div class=" bg-slate-800 py-4 px-6 flex hover:cursor-pointer border-b border-slate-950 justify-between items-center">
                <div class="flex items-center space-x-6 ">
                    <i class=" fa fa-book-open text-xl text-amber-600"></i>
                    <span class="text-gray-300 text-xl">Subject</span>
                </div>
                 <button class="hidden icone">
                    <i class="fa fa-book-open text-xl text-amber-600"></i>
                </button>
             </div>
             <!-- div 6 endded -->
                          <div class=" bg-slate-800 py-4 px-6 flex hover:cursor-pointer border-b border-slate-950 justify-between items-center">
                <div class="flex items-center space-x-6 ">
                    <i class=" fa fa-calendar-alt text-xl text-amber-600"></i>
                    <span class="text-gray-300 text-xl">Class Routine</span>
                </div>
                  <button class="hidden icone">
                    <i class="fa fa-calendar-alt text-xl text-amber-600"></i>
                </button>
             </div>
             <!-- div 7 endedd -->
                           <div class=" bg-slate-800 py-4 px-6 flex hover:cursor-pointer border-b border-slate-950 justify-between items-center">
                <div class="flex items-center space-x-6 ">
                    <i class="fas fa-clipboard-list text-xl text-amber-600"></i>
                    <span class="text-gray-300 text-xl">Attendence</span>
                </div>
                <button class="hidden icone">
                    <i class="fas fa-clipboard-list text-xl text-amber-600"></i>
                </button>
             </div>
        </div>
        </div>
</body>
</html>