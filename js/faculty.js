$('#department').change(function(){
    fetchfacultycode($(this).val());
});
function fetchfacultycode(department_name){
    var inputValue = department_name;
    $.post('fetchfacultycode.php', { department: inputValue }, function(data){
        data =  JSON.parse(data);
        var htmlOptions = "<option selected value=''>Select faculty code</option>";
        for(var i=0;i<data.length;i++){
            htmlOptions+=`<option value='${data[i]}'>${data[i]}</option>`;
        }
        $("#faculty_code").html(htmlOptions);
    });
    $("#faculty_name").val("");
    
}
function fetchSubjects(department_name){
    var inputValue = department_name;
    $.post('fetchsubjects.php', { department: inputValue }, function(data){
        data =  JSON.parse(data);
        var htmlOptions = "<option selected value=''>Select Subject code</option>";
        for(var i=0;i<data.length;i++){
            htmlOptions+=`<option value='${data[i]}'>${data[i]}</option>`;
        }
        $("#subject_code").html(htmlOptions);
    });
    
}
function fetchFacultyName(faculty_code){
    var inputValue = faculty_code;
    $.post('fetchfacultyname.php', { faculty_code: inputValue }, function(data){
        data =  JSON.parse(data);
        $("#faculty_name").val(data[0]);
    });
}
$('#faculty_code').change(function(){
    fetchFacultyName($(this).val());
});
$('#department_main').change(function(){
    fetchSubjects($(this).val());
});