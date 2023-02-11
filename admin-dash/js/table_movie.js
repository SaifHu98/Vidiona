$(document).ready(function(){
        $('#data_table').Tabledit({
        deleteButton: false,
        editButton: false,
        columns: {
        identifier: [0, 'mid'],
        editable: [[1, 'name'], [2, 'genre'], [3, 'rdate'], [4, 'decription'], [5, 'viewers']]
        },
        hideIdentifier: true,
        url: 'live-movie.php'
        });
        });