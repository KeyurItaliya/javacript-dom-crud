<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="container">
    <nav class="navbar navbar-light bg-primary">
        <h3>Status Master</h3>
        <ul>
        <span>| Add</span>
        <span id="edit_nav">| Edit </span>
        <span id="delete_all">| Delete</span>  
        </ul>
    </nav>
    <div> Total Row <span id="total_row_show"><span> </div>
    <button type="submit" id="total_row" onclick="total_row()" class="btn btn-primary">Count</button>
    <form>
        <table class="table shadow" id="table_count">
            <thead>
                <tr class="table-primary">
                    <th scope="col"><input type="checkbox" id="allselect" onclick="allCheck()" /></th>
                    <th scope="col">Status</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Roll No</th>
                    <th scope="col">Class</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody id="table_row_remove">
                <tr class="row_selected">
                    <th><input type="checkbox" name="checkbox"/></th>
                    <td>Pending</td>
                    <td>Otto</td>
                    <td>1</td>
                    <td>10</td>
                    <td>
                        <span class="edit_row" onclick="editsingle(this)" title="Edit"><i class="fa fa-edit" ></i></span>
                        <span class="delete_row" onclick="delete_row(this)" title="Delete" ><i class="fa fa-trash"></i></span>
                        <span class="txt" onclick="duplicate_row(this)" title="Duplicate"><i class="fa fa-clone " ></i></span>
                    </td>
                </tr>
                <tr class="row_selected">
                    <th><input type="checkbox" name="checkbox"/></th>
                    <td>Pending</td>
                    <td>Thornton</td>
                    <td>2</td>
                    <td>12</td>
                    <td>
                        <span class="edit_row" title="Edit"><i class="fa fa-edit" ></i></span> 
                        <span class="delete_row" onclick="delete_row(this)" title="Delete"><i class="fa fa-trash "></i></span>
                        <span class="txt" onclick="duplicate_row(this)" title="Duplicate"><i class="fa fa-clone " ></i></span>
                    </td>
                </tr>
                <tr class="row_selected">
                    <th><input type="checkbox" name="checkbox"/></th>
                    <td>Pending</td>
                    <td>the Bird</td>
                    <td>3</td>
                    <td>10</td>
                    <td>
                    <span class="edit_row" title="Edit"><i class="fa fa-edit" ></i></span> 
                    <span class="delete_row" onclick="delete_row(this)" title="Delete"><i class="fa fa-trash "></i></span>
                    <span class="txt" onclick="duplicate_row(this)" title="Duplicate"><i class="fa fa-clone " ></i></span>
                    </td>
                </tr>
            </tbody>
        </table>    
    </form>
    <br>
    <div class="select shadow">
        <lable>Maximam 20 characters</lable><br>
        <textarea id="textarea"  maxlength="20"></textarea><br>
        <span id="remainChar">20 </span>Character(s) Remaining
    </div>
    <br>
    <div class="select shadow">
        <h2>Select Subject</h2>
        <select id="subject" >
            <option selected>select subject</option>
            <option value="Computer">Computer</option>
            <option value="English">English</option>
            <option value="Maths">Maths</option>
            <option value="Social_Science">Social Science</option>
            <option value="Science">Science</option>
        </select>
    
        <table class="add_value">
            <tr>
                <td>Name</td>
                <td><input type="text" id="current_Name" value="" /></td>
            </tr>
            <tr>
                <td>Operation</td>
                <td><input type="button" onclick="add_option()" id="add" value="Add" /></td>
            </tr>
        </table>
    </div>
</div>
    <script src="js/all.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>