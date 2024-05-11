<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
	<title>Admin Dashboard</title>
	<link rel="stylesheet" href="design/admin.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <!-- Include FullCalendar CSS and JS -->
  <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css' rel='stylesheet' />
  <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js'></script>
	<script>
		$(document).ready(function(){
			$(".hamburger").click(function(){
			  $(".wrapper").toggleClass("active")
			})
		});

    //calendar
    $(document).ready(function() {
      $('#calendar').fullCalendar({
      });
    });
    
    //to do 
    function addTask() {
      var taskInput = document.getElementById("task-input");
      var taskText = taskInput.value.trim();
      if (taskText !== "") {
        var todoList = document.getElementById("todo-list");
        var todoItem = document.createElement("div");
        todoItem.classList.add("todo-item");
        var checkbox = document.createElement("input");
        checkbox.type = "checkbox";
        checkbox.classList.add("done-checkbox");
        var todoText = document.createElement("div");
        todoText.classList.add("todo-text");
        todoText.textContent = taskText;
        todoText.setAttribute("contenteditable", "true"); // Make text editable
        todoItem.appendChild(checkbox);
        todoItem.appendChild(todoText);
        todoList.appendChild(todoItem);
        taskInput.value = "";
      } else {
        alert("Please enter a task!");
      }
    }
	</script>
</head>
<body>

<div class="wrapper">

    <div class="wrapper">
        <div class="top_navbar">
            <div class="logo">
                <a href="#">West Neko to Inu</a>
            </div>
            <div class="top_menu">
                <div class="right_info">
                    <div class="icon_wrap">
                        <div class="icon">
                            <i class="fas fa-bell"></i>
                        </div>
                    </div>
                    <div class="icon_wrap dropdown">
                      <div class="icon" id="dropdownMenu">
                          <i class="fas fa-cog"></i>
                      </div>
                      <div class="dropdown-content">
                          <a href="admin_profile.php">View Profile</a>
                          <a href="logout.php">Log Out</a>
                      </div>
                  </div>
                </div>
            </div>
        </div>

    <div class="main_body">

      <div class="sidebar_menu">
        <div class="inner__sidebar_menu">
          <ul>
            <li>
              <a href="admin.php" class="active">
                <span class="icon">
                  <i class="fas fa-border-all"></i></span>
                <span class="list">Animal of the Week</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="icon"><i class="fas fa-chart-pie"></i></span>
                <span class="list">Charts</span>
              </a>
            </li>
            <li>
              <a href="animal.php">
                <span class="icon"><i class="fas fa-file-invoice"></i></span>
                <span class="list">Animal Submissions</span>
              </a>
            </li>
            <li>
              <a href="user.php">
                <span class="icon"><i class="fas fa-duotone fa-users"></i></span>
                <span class="list">User Approval</span>
              </a>
            </li>
            <li>
              <a href="profile.php">
                <span class="icon"><i class="fas fa-solid fa-paw"></i></span>
                <span class="list">Animal Profiles</span>
              </a>
            </li>
            <li>
              <a href="posts.php">
                <span class="icon"><i class="fas fa-solid fa-pen"></i></span>
                <span class="list">Content</span>
              </a>
            </li>
          </ul>

          <div class="hamburger">
            <div class="inner_hamburger">
              <span class="arrow">
                <i class="fas fa-long-arrow-alt-left"></i>
                <i class="fas fa-long-arrow-alt-right"></i>
              </span>
            </div>
          </div>

        </div>
      </div>

        <div class="container">
            <div class="left_container">
              <!-- Content for the left container -->
            </div>

            <div class="calendar_container">
              <div id="calendar"></div>
            </div>

            <div class="todo_container">
              <h2>To-Do List</h2>
              <div id="todo-list"></div>
              <input type="text" id="task-input" placeholder="Add a new task">
              <button class="add-task-button" onclick="addTask()">+</button>
            </div>

            <div class="item_wrap">
                <div class="item">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum omnis nihil aut aperiam adipisci suscipit ullam sunt saepe cupiditate quam distinctio officiis tempore laudantium, animi amet corrupti ratione est commodi! Sunt tempora quod magnam optio, reiciendis veritatis, necessitatibus eos molestias facilis reprehenderit maiores ipsum quaerat placeat laborum, a aspernatur corporis.</div>
                <div class="item">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum omnis nihil aut aperiam adipisci suscipit ullam sunt saepe cupiditate quam distinctio officiis tempore laudantium, animi amet corrupti ratione est commodi! Sunt tempora quod magnam optio, reiciendis veritatis, necessitatibus eos molestias facilis reprehenderit maiores ipsum quaerat placeat laborum, a aspernatur corporis.</div>
            </div>
            <div class="item_wrap">
                <div class="item">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum omnis nihil aut aperiam adipisci suscipit ullam sunt saepe cupiditate quam distinctio officiis tempore laudantium, animi amet corrupti ratione est commodi! Sunt tempora quod magnam optio, reiciendis veritatis, necessitatibus eos molestias facilis reprehenderit maiores ipsum quaerat placeat laborum, a aspernatur corporis.</div>
                <div class="item">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum omnis nihil aut aperiam adipisci suscipit ullam sunt saepe cupiditate quam distinctio officiis tempore laudantium, animi amet corrupti ratione est commodi! Sunt tempora quod magnam optio, reiciendis veritatis, necessitatibus eos molestias facilis reprehenderit maiores ipsum quaerat placeat laborum, a aspernatur corporis.</div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
