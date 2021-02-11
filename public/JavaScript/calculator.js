document.getElementById("add-form").addEventListener("click", function() {
    let table = document.getElementById("input-table");
    let row = table.insertRow(table.rows.length);
    let cell1 = row.insertCell(0);
    cell1.innerHTML = '<div class="input-form">' +
        '<input type="number" name="credit1" placeholder="Credits" step="0.5" min="1" required>' +
        '<select name="gpa1" id="combo-box" required>' +
        '<option value="4.00">A+</option>' +
        '<option value="3.75">A</option>' +
        '<option value="3.50">A-</option>' +
        '<option value="3.25">B+</option>' +
        '<option value="3.00">B</option>' +
        '<option value="2.75">B-</option>' +
        '<option value="2.50">C+</option>' +
        '<option value="2.25">C</option>' +
        '<option value="2.00">D</option>' +
        '<option value="0.00">F</option>' +
        '</select>'
    '</div>';
});

document.getElementById("del-form").addEventListener("click", function() {
    let table = document.getElementById("input-table");
    table.deleteRow(table.rows.length - 1);
});