// select all row
function allCheck(){
    const allselect = document.getElementById("allselect");
    const c = document.getElementsByClassName("row_selected");
    const x = document.getElementsByTagName("input");
    if(allselect.checked==true){
        var i;
        for (i = 0; i < x.length; i++) {
            x[i].checked = true;
        }
    } else {
        var i;
        for (i = 0; i < x.length; i++) {
            x[i].checked = false;
        }
    }  
    // all row selected color
    for (i = 0; i < c.length; i++) {
        c[i].classList.toggle("add_row_color");
    }
}

// Delete all row And Selected
var delete_all = document.getElementById("delete_all");
    delete_all.addEventListener("click", () =>{
        const allselect = document.querySelectorAll('input[name="checkbox"]:checked');
        var total = allselect.length;
        if(total>0){
            var ret = false;
            var respons = confirm(`Delete Rows ${total}`);
            if(respons == true){
                ret = true;
                document.getElementById("table_row_remove").remove();
            }
            return ret;
        } else {
            alert("Select atlist one row");
        }
    });

// Single row delete 
function delete_row(source){   
    const closestElement = source.closest("tr");
    closestElement.classList.toggle("add_row_color");
    const delete_checked = closestElement.querySelector('input[name="checkbox"]');
    delete_checked.checked = true;
    setTimeout(function(){
        var sel = false;
        var c = confirm('Continue delete?');
        if(c) {
            sel = true; 
            closestElement.remove(); 
            if(!sel) alert('No data selected');
        }else {
            closestElement.classList.remove("add_row_color");
            delete_checked.checked = false;
        }
        return false;
    }, 500);
}

// Total Row count
function total_row(){
    var targetElement = document.getElementById('table_count');
    var row = targetElement.rows.length - 1;
    document.getElementById('total_row_show').innerHTML = row;

}

// Edit row  And Selected
var edit = document.getElementById("edit_nav");
edit.addEventListener("click", edit_select_data);
    function edit_select_data(){
        // var allselect = document.getElementsByName("checkbox");
        var allselect = document.querySelectorAll('input[name="checkbox"]:checked');
        var total = allselect.length;
        if(total==0){
            alert(`You can not select ${total}`);
        } else if(total==1){
            alert(`You Edit ${total} row`);
        } else{
            alert("Edit at a time one row");
        }
    }

// duplicate row add
function duplicate_row(source){
    const closestElement = source.closest("tr");
    let table = document.getElementById('table_count'); 
    var clones = closestElement.cloneNode(true);
    table.appendChild(clones);   
}

//Add div
function editsingle(curent){
    const table_row = document.getElementById("table_count");
    const creat_div = document.createElement("div");
    const tabless = "<input type='text' value=''/>";
    const clones = tabless.cloneNode(true);
    table_row.appendChild(clones);
}

// cout charecter
var charecter_data = document.getElementById("textarea");
    charecter_data.addEventListener("keyup", () =>{
        const cho = charecter_data.value;
        var valus = cho.length;
        var show_valus = 20 - valus; 
        document.getElementById("remainChar").innerHTML = show_valus;
    });

// selected disabled
document.getElementById("subject").onchange = function () {
    var op = document.getElementsByTagName("option");
    var values = document.getElementById("subject").value;
    for (var i = 0; i < op.length; i++) {
        if (op[i].value == values) {
            op[i].disabled = false;
        } else if(op[i].value !== values){
            op[i].disabled = true;
        }
    }
};

// add select pption 
function add_option(){
    var x = document.getElementById("subject");
    var option = document.createElement("option");
    var datat = document.getElementById("current_Name").value;
    option.text = datat;
    x.add(option);
}

