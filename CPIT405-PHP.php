<!DOCTYPE html>
<html>

<head>
    <title>Ahmad's CV</title>
    <style type="text/css">
        body {
            background-color: green
        }

        /* The container <div> - needed to position the dropdown content */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 120px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }
            /* Links inside the dropdown */

            /* Change color of dropdown links on hover */
            .dropdown-content a:hover {
                background-color: #ddd;
            }

        /* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
        .show {
            display: block;
        }
    </style>
    <script>
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function (event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>
</head>
<body>
    <button type="button" href="CPIT405-Lab1.html">Home</button>
    <button type="button">Homework</button>
    <button type="button">Semester Project</button>
    <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn">Courses</button>
        <div id="myDropdown" class="dropdown-content">
            <a href="CPIT405H.html">CPIT405</a>
            <a>CPIS428</a>
            <a>CPIT499</a>
        </div>
    </div>
    <h1>CV</h1>
    <?php echo "HeLLLOOOOOOO"; ?>
    <p>
        <a href="https://computing.kau.edu.sa/Default-611-AR">FCIT</a>
        <img src="picture.jpg" width="128 height = " 128" alt="Picture Placeholder" align="right">
    </p>
    <p><a href="https://www.dropbox.com/s/hutmprb67j4oud2/my%20CV.pdf?dl=0">My CV</a></p>
    <pre><strong>This is my first
			Semester
For
			CPIT405</pre>
    <pre>&copy; Copyright for
	CPIT405</pre>
    <h1>My Current Courses:</h1>
    <ul>
        <li>CPIT499</li>
        <li>CPIT405</li>
        <li>CPIS428</li>
        <li>CPIT440</li>
    </ul>
    <h2>My Future Plan</h2>
    <p>
        <table border="1">
            <thead>
                <tr>
                    <th colspan="2">Work Plan</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th colspan="2"> Thanks </th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>Training</td>
                    <td>Search Job</td>
                </tr>
                <tr>
                    <td colspan="2" align="middle">Travel Plan</td>
                </tr>
                <tr>
                    <td>Visit Countries</td>
                    <td>Get Experience</td>
                </tr>
            </tbody>
        </table>
    </p>
    <h1>Feedback Form</h1>
    <form method="post">
        <p>
            <label>
                Name:
                <input name="Name" type="text" size="25">
            </label>
        </p>
        <p>
            <label>Comments:<br> <textarea name="comments" rows="4" cols="36">Enter Comments Here.</textarea></label>
        </p>
        <p>
            <a href="mailto:aalahmary0032@stu.kau.edu.sa">Contact Email</a>
        </p>
        <p>
            Design Rating: </br>
            <label>Good <input type="radio" value=1 checked></label>
            <label>Very Good <input type="radio" value=2></label>
            <label>Excellent <input type="radio" value=3></label>
            <label>Satisfied <input type="radio" value=4></label>
        </p>
        <p>
            <label>
                Rating Survey:
                <select name="rating">
                    <option selected>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                </select>
            </label>
        </p>
    </form>
    <!--Make background green and h1 red, p in a text box and blink-->
    <h1 style="color: red;">WARNING</h1> <!-- text bold, red color, size = 16, -->
    <p id="blink" style="color: white; font-weight: bold; font-size: 16pt; background-color: black; border-width: 8px; border-style: solid;
			border-color: red;">
        You should complete all requirements to graduate!
    </p>
    <script type="text/javascript">
        var blink =
            document.getElementById('blink');

        setInterval(function () {
            blink.style.opacity =
                (blink.style.opacity == 0 ? 1 : 0);
        }, 1000);
    </script>
</body>

</html>