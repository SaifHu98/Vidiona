$(document).ready(function(){
    $('#data_table').Tabledit({
    deleteButton: false,
    editButton: false,
    columns: {
    identifier: [0, 'id'],
    editable: [[1, 'username'], [2, 'name'], [3, 'email'], [4, 'DOB']]
    },
    hideIdentifier: true,
    url: 'live.php'
    });
    });