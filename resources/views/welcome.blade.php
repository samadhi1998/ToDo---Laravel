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
                width: 50%;
                padding-top: 65px;
                margin-left: auto;
                margin-right: auto;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }

            th {
                text-align: center;
            }

            h1 {
                text-align: center;
            }

            div {
                padding: 5px;
                margin-top: 20px;
            }
        </style>
    </head>

    <body>

    <div style="background-color: #bfff00">
        <h1>Todo App Laravel</h1>
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