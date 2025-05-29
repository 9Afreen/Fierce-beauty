let editingRow = null; // Track if we are editing

function openForm() {
  document.getElementById("form-popup").style.display = "flex";
  document.getElementById("formTitle").innerText = "Add New Student";
  document.getElementById("submitBtn").innerText = "Add Student";
  document.getElementById("studentForm").reset();
  editingRow = null;
}

function closeForm() {
  document.getElementById("form-popup").style.display = "none";
}

function handleSubmit(event) {
  event.preventDefault();

  // Validate form inputs
  const name = document.getElementById("name").value.trim();
  const email = document.getElementById("email").value.trim();
  const phone = document.getElementById("phone").value.trim();
  const course = document.getElementById("course").value.trim();

  if (!name || !email || !phone || !course) {
    alert("Please fill out all fields.");
    return;
  }

  const phonePattern = /^\+?[0-9\s]{7,20}$/; // basic phone validation
  if (!phonePattern.test(phone)) {
    alert("Please enter a valid phone number.");
    return;
  }

  if (editingRow) {
    // If editing, update existing row
    editingRow.cells[0].innerText = name;
    editingRow.cells[1].innerText = email;
    editingRow.cells[2].innerText = phone;
    editingRow.cells[3].innerText = course;
    alert("Student updated successfully!");
  } else {
    // Else, add a new student
    addStudent(name, email, phone, course);
  }

  closeForm();
}

function addStudent(name, email, phone, course) {
  const table = document.getElementById("studentsTable").getElementsByTagName('tbody')[0];
  const newRow = table.insertRow();

  newRow.innerHTML = `
    <td>${name}</td>
    <td>${email}</td>
    <td>${phone}</td>
    <td>${course}</td>
    <td><span class="status active">Active</span></td>
    <td>
      <button class="edit-btn" onclick="editStudent(this)">Edit</button>
      <button class="delete-btn" onclick="deleteStudent(this)">Delete</button>
    </td>
  `;
}

function editStudent(button) {
  const row = button.parentNode.parentNode;
  editingRow = row;

  document.getElementById("name").value = row.cells[0].innerText;
  document.getElementById("email").value = row.cells[1].innerText;
  document.getElementById("phone").value = row.cells[2].innerText;
  document.getElementById("course").value = row.cells[3].innerText;

  document.getElementById("formTitle").innerText = "Edit Student";
  document.getElementById("submitBtn").innerText = "Update Student";
  document.getElementById("form-popup").style.display = "flex";
}

function deleteStudent(button) {
  if (confirm("Are you sure you want to delete this student?")) {
    const row = button.parentNode.parentNode;
    row.remove();
  }
}
