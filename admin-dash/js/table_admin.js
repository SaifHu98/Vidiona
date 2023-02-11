$(document).ready(function(){
    $('#data_table').Tabledit({
    deleteButton: false,
    editButton: false,
    columns: {
    identifier: [0, 'id'],
    editable: [[1, 'user'], [2, 'name'], [3, 'email'], [4, 'dob']]
    },
    hideIdentifier: true,
    url: 'live-admin.php'
    });
    });