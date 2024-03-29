function createTask() {
  var query = location.search.substring(1);
  var vars = query.split("&");
  var name = vars[0].split("=")[1].replace(/%20/g, "_"); 
  localStorage.setItem(name, String(document.getElementById('taskTable').innerHTML));
  var taskName = document.getElementById('task_name').value;
  var taskDes = document.getElementById('task_descrip').value;
  //var taskPerson = document.getElementById('task_person').value;
  var dueDate = document.getElementById('task_date').value;
  var taskContents = `
        <tr>
          <td id="taskBox" onclick="displayDetails(this)">
            <h2>
              <span>${taskName}</span> <span style="float:right; padding-right: 10px">${dueDate.toLocaleDateString("en-US")}</span>
            </h2>
            <p>
              ${taskDes}
            </p>
          </td>
        </tr>`
  localStorage.setItem(name, localStorage.getItem(name) + taskContents);
  loadTasks();
}

function loadTasks()  {
  var query = location.search.substring(1);
  var vars = query.split("&");
  var name = vars[0].split("=")[1].replace(/%20/g, "_");
  document.getElementById('taskTable').innerHTML = localStorage.getItem(name);
}


function createProject() {
  localStorage.setItem('projects', String(document.getElementById('projectTable').innerHTML));
  var name = document.getElementById('project_name').value;
  var des = document.getElementById('project_descrip').value;
  //var taskPerson = document.getElementById('task_person').value;
  var date = document.getElementById('project_date').value;
  //document.getElementById("taskDone").preventDefault()
  var projectContents = `
        <li>
            <div class="projectBox" onclick="projectRedirect(this)">
                <h2>
                  ${name}
                </h2>
                <h3>
                    ${date}
                </h3>
                <p>
                  ${des}
                </p>
            </div>
        </li>`;
  localStorage.setItem('projects', localStorage.getItem("projects") + projectContents);
  loadProjects();
}

function loadProjects()  {
  console.log(localStorage.projects);
  document.getElementById('projectTable').innerHTML = localStorage.getItem('projects');
}

function displayDetails(task)  {
    var taskName = task.children[0].innerHTML.split(/<\/?span>/)[1];
    var dueDate = task.children[0].innerHTML.split(/<\/?span>/)[2];
    var taskDescription = task.children[1].innerText;
    var taskCont = `
        <span id="close-button" onclick="closeWindow2()">&times;</span>
        <h2>Task: ${taskName}</h2>
        <h3>Due: ${dueDate}</h3>
        <p>${taskDescription}</p>
        <span id="complete-button" onclick="completeTask(task)">Completed</span>
    `
    console.log(taskCont);
    document.getElementById("detailContent").innerHTML = taskCont;
    var x = document.getElementById("taskDetails");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}

function projectRedirect(project)  {
    var name = project.children[0].textContent;
    window.open('/collabcove/tasks.php?name=' + name, '_self');
    writeProject(project);
}

function writeProject(project){
    var name = project.children[0].textContent;
    var dueDate = project.children[1].textContent;
    var projectDescription = project.children[2].textContent;
    /*var projectCont = `
        <h3>${name}</h3>
        <h4>Due Date: ${dueDate}</h4>
        <h5>${projectDescription}</h5>
    `
    console.log(projectCont);*/
    console.log(name);
    document.getElementById("task-heading-h3").innerHTML = name;
    document.getElementById("task-heading-h4").innerHTML = "Due Date: " + dueDate;
    document.getElementById("task-heading-h5").innerHTML = projectDescription;
    
}

function completeTask(task){
    closeWindow2();
    task.style.color="#cdd7f0";
    task.style.backgroundColor= "#F9FAFD";
    task.disabled = true;
}