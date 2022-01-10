$(function (){
    $('.table').dataTable({
        responsive: true,
        dom: 'B<"clear">lfrtip',
        buttons: ['copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
            'print'],
        language: {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
        }
    });
});

