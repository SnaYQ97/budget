$(document).ready(function() {
    $('#expensesTable').DataTable({
        responsive: true,
        ajax: {
            url: 'expenses/getExpenses',
            dataSrc: '',
            type: "GET",
        },

        columns: [
            { data: 'id' },
            { data: 'category_id' },
            { data: 'name' },
            { data: 'value' },
            { data: 'created_date' },
            { data: 'planed' },
            { data: 'edition_date' }
        ]
    });
});

//MODALS

//Edit modal
var myModal = document.getElementById('AddModal')
var myInput = document.getElementById('myInput')

/* myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})
 */
