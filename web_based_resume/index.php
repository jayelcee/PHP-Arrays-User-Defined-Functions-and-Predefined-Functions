<!DOCTYPE html>
<html>
<head>
    <title>Student Resume</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Calibri, sans-serif;
        }

        table {
            width: 800px;
            border-collapse: collapse;
            margin: auto;
            margin-bottom: 100px;
            background: linear-gradient(to bottom right, #ffffff 0%, #ccffcc 100%);
        }

        td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #66ff66 ;
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        img {
            max-width: 325px;
            margin-left: 15px; 
            margin-right: auto;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th colspan="2" style="text-align: center; font-size: 24px;">STUDENT RESUME</th>
        </tr>
        <tr>
            <td rowspan="2"><img src="picture.jpg" alt="Profile Picture"></td>
            <td><?php require('personal_information.php'); ?></td>
        </tr>
        <tr>
            <td><?php require('career_objective.php'); ?></td>
        </tr>
        <tr>
            <th>Educational Attainment</th>
            <th>Skills</th>
        </tr>
        <tr>
            <td><?php include('educational_attainment.php'); ?></td>
            <td><?php require('skills.php'); ?></td>
        </tr>
        <tr>
            <th>Affiliation</th>
            <th>Work Experience</th>
        </tr>
        <tr>
            <td><?php include('affiliation.php'); ?></td>
            <td><?php include('work_experience.php'); ?></td>
        </tr>
    </table>
</body>
</html>
