$(':submit').on('click', function(){
    var checkedValues = "";
    $(':checkbox').each(function(){
        if($(this).prop('checked'))
        {
            checkedValues+=$(this).attr('id') + ",";
        }
    });
    checkedValues = checkedValues.substring(0, checkedValues.length - 1);
    $('#checkedValues').val(checkedValues);
});

$(document).ready(function(){
    var selectedValues = $('#selectedValues').val();
    if(!(selectedValues === undefined))
    {
        selectedValues = selectedValues.split(',');
        $(':checkbox').each(function() {
            if(jQuery.inArray($(this).attr('id'), selectedValues)!='-1')
            {
                $(this).prop('checked', true);
            }
        });
    }
});