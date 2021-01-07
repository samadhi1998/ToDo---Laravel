<!DOCTYPE html>
<html>
    <head>
        <title>
            Todo App Laravel
        </title>
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 75%;
                padding-top: 65px;
                margin-left: auto;
                margin-right: auto;
            }

            td, th {
                border: 3px solid #6C3483;
                text-align: left;
                padding: 8px;
                color: #6C3483;
            }

            tr:nth-child(even) {
                background-color: #C39BD3;
            }

            tr:nth-child(odd) {
                background-color: #E8DAEF;
            }

            th {
                text-align: center;
            }

            td {
                font-weight: 550;
            }

            h1 {
                text-align: center;
                color: white;
            }

            div {
                padding: 5px;
                margin-top: 20px;
                margin-right: 20px;
                margin-left: 20px;
                margin-bottom: 20px;
            }
        </style>
    </head>

    <body>

    <div style="background-color: #5B2C6F">
        <h1 >Todo App Laravel</h1>
    </div>

    <div>
        <button style="float: right; margin-right: 50px">Add Task</button>
    </div>
    
    <div>
        <table>
            <tr>
                <th>Task Description</th>
                <th>Due Date</th>
                <th>Task Status</th>
                <th></th>
            </tr>
            <tr>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>Germany</td>
                <td style="text-align: center">
                    <button>Update</button>
                    <button>Delete</button>
                </td>
            </tr>
        </table>
    </div>

    </body>

</html>