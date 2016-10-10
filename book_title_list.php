<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Typography</title>
    <style>

        table, tr, td, th{border: 1px solid #000;
        }
        tr,td{
            padding:5px 10px;
        }
    </style>
</head>
<body>
<h2>Book Title- List</h2>
<table>
    <thead>
        <tr>
            <th>Serial</th>
            <th>ID</th>
            <th>Book Title</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>5</td>
            <td>PHP - Book TITLE #1</td>
            <td>
                <form action="" method="" >
                    <input type="submit" value="View">
                    <input type="submit" value="Edit">
                    <input type="submit" value="Delete">
                    <input type="submit" value="Trash">
                </form>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>6</td>
            <td>PHP - Book TITLE #2</td>
            <td>
                <form action="" method="" >
                    <input type="submit" value="View">
                    <input type="submit" value="Edit">
                    <input type="submit" value="Delete">
                    <input type="submit" value="Trash">
                </form>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>7</td>
            <td>PHP - Book TITLE #3</td>
            <td>
                <form action="" method="" >
                    <input type="submit" value="View">
                    <input type="submit" value="Edit">
                    <input type="submit" value="Delete">
                    <input type="submit" value="Trash">
                </form>
            </td>
        </tr>
    <tr>
        <td colspan="4"> page <1. 2. 3. 4. 5. 6. 7> </td>
    </tr>
    <tr>
        <td colspan="4">
        <form action="" method="" >
            <input type="submit" value="Add New Book Title">
            <input type="submit" value="View Trash Items">
            <input type="submit" value="Download as PDf">
            <input type="submit" value="Download as Excel file">
        </form>
        </td>
    </tr>
    </tbody>
</table>
</body>
</html>