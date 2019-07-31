<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CSS Grid</title>
    <link rel="stylesheet" href="dist/ca.flex.min.css">



</head>

<body>
    <!-- containter -->
    <div id="container">



            <div class="section">
                <div class="column dev">
                    <p>Column</p>
                </div>

                <div class="column dev">
                    <p>Column</p>
                </div>
       
            </div>







            <div class="ca-section">
                <div class="column dev">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                </div>
            </div>





            <!-- "row" -->
            <div class="ca-section">

                <div class="column ">
                    <!--			<p>Column 1</p>-->
                    <a href="#" class="btn uppercase">Im A Button</a>
                </div>

                <div class="column">
                    <!--<p>Column 2</p>-->
                    <a href="#" class="btn uppercase">Im A Button</a>
                </div>

                <div class="column">
                    <!--			<p>Column 3</p>-->
                    <a href="#" class="btn uppercase">Im A Button</a>
                </div>

                <div class="column ">
                    <!--			<p>Column 4</p>-->
                    <a href="#" class="btn uppercase">Im A Button</a>
                </div>
                <div class="column ">
                    <!--			<p>Column 4</p>-->
                    <a href="#" class="btn uppercase">Im A Button</a>
                </div>

            </div>
            <!-- "row" -->


            <!-- "row" -->
            <form action="">
                <div class="ca-section">
                    <div class="column">
                        <label for="first">First Name</label>
                        <input type="text" name="first" id="first" required placeholder="First Name">
                    </div>


                    <div class="column">
                        <label for="last">Last Name</label>
                        <input type="text" name="last" id="last" required placeholder="Last Name">
                    </div>
                </div>


                <div class="ca-section">
                    <div class="column">
                        <label for="email">Email Address</label>
                        <input type="text" name="email" id="email" required placeholder="Email Address">
                        <input type="hidden" name="emailhoney" id="emailhoney" placeholder="Email Address">
                    </div>
                </div>
                <div class="ca-section">
                    <div class="column">
                        <label for="phone">Phone Number</label>
                        <input type="text" name="phone" id="phone" required placeholder="XXX-XXX-XXXX">
                    </div>
                </div>

                <div class="ca-section">
                    <div class="column">
                        <label for="contact">Select Box</label>
                        <select name="contact" id="contact">
                            <option value="Options">Options</option>
                            <option value="Options">Options</option>
                            <option value="Options">Options</option>
                        </select>
                    </div>
                </div>
                <div class="ca-section">
                    <div class="column">
                        <label for="comments">Comments</label>
                        <textarea type="text" name="comments" id="comments" placeholder="Comments"></textarea>
                    </div>
                </div>

                <div class="ca-section">

                    <div class="column">
                        <button type="submit" id="submit" name="submit" class="btn">Submit</button>
                    </div>
                </div>
            </form>
            <!-- "row" -->




    </div>
    <!-- containter -->

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <!--<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>-->



</body>
<script type="text/javascript">




</script>

</html>