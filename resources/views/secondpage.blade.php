<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Second Page</title>
    <style>
        * {
            margin: 0px;
        }

        body {
            padding: 30px;
            text-align: center;
            align-items: center;
        }

        p {
            font-size: 40px;
        }

        table {
            margin-top: 20px;
            margin-bottom: 20px;
            margin-left: 220px;
            border-collapse: collapse;
            text-align: left;
            font-weight: 600;
        }

        td {
            width: 150px;
            padding: 10px;
            border-top: .5px solid rgb(196, 194, 194);
        }

        input {
            border-radius: 5px;
        }

        .v {
            background-color: rgb(19, 189, 19);
        }

        .e {
            background-color: rgb(75, 75, 192);
        }

        .d {
            background-color: red;
        }

        .fr,
        .fc {
            font-weight: bold;
        }

        tr:hover {
            background-color: rgb(70, 68, 68);
            color: white;
        }

        td:hover {
            background-color: rgb(57, 168, 168);
            color: rgb(114, 81, 81);
        }

        /* th:hover{
            background-color: rgb(70, 68, 68);
            color: white;
        } */
        /* tr:nth-child(even) {background-color: #f2f2f2} */

    </style>
</head>

<body>
    <p>
        This is the second page in this website.
    </p>

    <form action="welcom.blade.php" method="POST">
        <table>
            <tr class="fr">
                <td class="fc">
                    ID
                </td>
                <td>
                    Title
                </td>
                <td>Posted By</td>
                <td>
                    Posted Date
                </td>
                <td>
                    Action
                </td>
            </tr>
            <tr>
                <td class="fc">
                    1
                </td>
                <td>
                    C++
                </td>
                <td>
                    Ahmed
                </td>
                <td>
                    21/3/2021
                </td>
                <td class="btn">
                    <input type="button" value="View" class="v">
                    <input type="button" value="Edit" class="e">
                    <input type="button" value="Delete" class="d">
                </td>
            </tr>
            <tr>
                <td class="fc">
                    2
                </td>
                <td>
                    Java
                </td>
                <td>
                    Ali
                </td>
                <td>
                    30/7/2021
                </td>
                <td class="btn">
                    <input type="button" value="View" class="v">
                    <input type="button" value="Edit" class="e">
                    <input type="button" value="Delete" class="d">
                </td>
            </tr>
            <tr>
                <td class="fc">
                    3
                </td>
                <td>
                    C#
                </td>
                <td>
                    Ameer
                </td>
                <td>
                    3/1/2022
                </td>
                <td class="btn">
                    <input type="button" value="View" class="v">
                    <input type="button" value="Edit" class="e">
                    <input type="button" value="Delete" class="d">
                </td>
            </tr>
            <tr>
                <td class="fc">
                    4
                </td>
                <td>
                    Python
                </td>
                <td>
                    Nour
                </td>
                <td>
                    22/6/2020
                </td>
                <td class="btn">
                    <input type="button" value="View" class="v">
                    <input type="button" value="Edit" class="e">
                    <input type="button" value="Delete" class="d">
                </td>
            </tr>
            <tr>
                <td class="fc">
                    5
                </td>
                <td>
                    Laravel
                </td>
                <td>
                    Osama
                </td>
                <td>
                    30/7/2018
                </td>
                <td class="btn">
                    <input type="button" value="View" class="v">
                    <input type="button" value="Edit" class="e">
                    <input type="button" value="Delete" class="d">
                </td>
            </tr>
            <tr>
                <td class="fc">
                    6
                </td>
                <td>
                    HTML
                </td>
                <td>
                    Ahmed
                </td>
                <td>
                    6/8/2019
                </td>
                <td class="btn">
                    <input type="button" value="View" class="v">
                    <input type="button" value="Edit" class="e">
                    <input type="button" value="Delete" class="d">
                </td>
            </tr>
            <tr>
                <td class="fc">
                    7
                </td>
                <td>
                    CSS
                </td>
                <td>
                    Ahmed
                </td>
                <td>
                    30/7/2020
                </td>
                <td class="btn">
                    <input type="button" value="View" class="v">
                    <input type="button" value="Edit" class="e">
                    <input type="button" value="Delete" class="d">
                </td>
            </tr>
            <tr>
                <td class="fc">
                    8
                </td>
                <td>
                    PHP
                </td>
                <td>
                    Ahmed
                </td>
                <td>
                    30/7/2021
                </td>
                <td class="btn">
                    <input type="button" value="View" class="v">
                    <input type="button" value="Edit" class="e">
                    <input type="button" value="Delete" class="d">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
