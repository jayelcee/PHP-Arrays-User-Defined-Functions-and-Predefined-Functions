<!DOCTYPE html>
<html>
<head>
    <title>Volume of Shapes</title>
    <style>
        table {
            margin: 0 auto;
            margin-top: 50px;
            border-collapse: collapse;
            background-color: #f2f2f2;
            background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
        }
        table, th, td {
            border: 1px solid black;
            padding: 5px;
        }
        .button-container {
            text-align: center;
            margin-top: 10px;
        }
        .button-container button {
            margin: 0 5px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th colspan="4" style="text-align: center;">VOLUME OF SHAPES</th>
        </tr>
        <tr>
            <th>Shape Name</th>
            <th>Values</th>
            <th>Formula</th>
            <th>Answer</th>
        </tr>
        <tr>
            <td style="text-align: center;">Cube</td>
            <td>s = <input type="number" name="cube_side" step="any" value="0"></td>
            <td>V = s<sup>3</sup></td>
            <td id="cube_answer"></td>
        </tr>
        <tr>
            <td style="text-align: center;">Right Rectangular Prism</td>
            <td>l = <input type="number" name="prism_length" step="any" value="0"> w = <input type="number" name="prism_width" step="any" value="0"> h = <input type="number" name="prism_height" step="any" value="0"></td>
            <td>V = lwh</td>
            <td id="prism_answer"></td>
        </tr>
        <tr>
            <td style="text-align: center;">Cylindrical Prism</td>
            <td>r = <input type="number" name="cylinder_radius" step="any" value="0"> h = <input type="number" name="cylinder_height" step="any" value="0"></td>
            <td>V = π r<sup>2</sup>h</td>
            <td id="cylinder_answer"></td>
        </tr>
        <tr>
            <td style="text-align: center;">Pyramid</td>
            <td>l = <input type="number" name="pyramid_length" step="any" value="0"> w = <input type="number" name="pyramid_width" step="any" value="0"> h = <input type="number" name="pyramid_height" step="any" value="0"></td>
            <td>V = (1/3) lwh</td>
            <td id="pyramid_answer"></td>
        </tr>
        <tr>
            <td style="text-align: center;">Cone</td>
            <td>r = <input type="number" name="cone_radius" step="any" value="0"> h = <input type="number" name="cone_height" step="any" value="0"></td>
            <td>V = (1/3) π r<sup>2</sup>h</td>
            <td id="cone_answer"></td>
        </tr>
        <tr>
            <td style="text-align: center;">Sphere</td>
            <td>r = <input type="number" name="sphere_radius" step="any" value="0"></td>
            <td>V = (4/3) π r<sup>3</sup></td>
            <td id="sphere_answer"></td>
        </tr>
    </table>
    <div class="button-container">
        <button onclick="calculateVolumes()">Calculate</button>
        <button onclick="resetValues()">Reset</button>
    </div>

    <script>
        function calculateVolumes() {
            var cubeSide = parseFloat(document.getElementsByName("cube_side")[0].value);
            var prismLength = parseFloat(document.getElementsByName("prism_length")[0].value);
            var prismWidth = parseFloat(document.getElementsByName("prism_width")[0].value);
            var prismHeight = parseFloat(document.getElementsByName("prism_height")[0].value);
            var cylinderRadius = parseFloat(document.getElementsByName("cylinder_radius")[0].value);
            var cylinderHeight = parseFloat(document.getElementsByName("cylinder_height")[0].value);
            var pyramidLength = parseFloat(document.getElementsByName("pyramid_length")[0].value);
            var pyramidWidth = parseFloat(document.getElementsByName("pyramid_width")[0].value);
            var pyramidHeight = parseFloat(document.getElementsByName("pyramid_height")[0].value);
            var coneRadius = parseFloat(document.getElementsByName("cone_radius")[0].value);
            var coneHeight = parseFloat(document.getElementsByName("cone_height")[0].value);
            var sphereRadius = parseFloat(document.getElementsByName("sphere_radius")[0].value);

            var cubeVolume = cubeSide * cubeSide * cubeSide;
            var prismVolume = prismLength * prismWidth * prismHeight;
            var cylinderVolume = Math.PI * cylinderRadius * cylinderRadius * cylinderHeight;
            var pyramidVolume = (pyramidLength * pyramidWidth * pyramidHeight) / 3;
            var coneVolume = (1 / 3) * Math.PI * coneRadius * coneRadius * coneHeight;
            var sphereVolume = (4 / 3) * Math.PI * sphereRadius * sphereRadius * sphereRadius;

            document.getElementById("cube_answer").textContent = cubeVolume.toFixed(2);
            document.getElementById("prism_answer").textContent = prismVolume.toFixed(2);
            document.getElementById("cylinder_answer").textContent = cylinderVolume.toFixed(2);
            document.getElementById("pyramid_answer").textContent = pyramidVolume.toFixed(2);
            document.getElementById("cone_answer").textContent = coneVolume.toFixed(2);
            document.getElementById("sphere_answer").textContent = sphereVolume.toFixed(2);
        }

        function resetValues() {
            var inputElements = document.getElementsByTagName("input");
            for (var i = 0; i < inputElements.length; i++) {
                inputElements[i].value = "0";
            }

            var answerElements = document.querySelectorAll("[id$='_answer']");
            for (var j = 0; j < answerElements.length; j++) {
                answerElements[j].textContent = "";
            }
        }
    </script>
</body>
</html>
