<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <link rel="stylesheet" href="form.css">
</head>

<body>



  <div class="container1">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="anish"
      enctype="multipart/form-data">
      <center>
        <h1 >
          HOLISTIC LIVING PROGRAM
        </h1>
<div class="sec1">
        Venue: <input type="text" name="venue">
        from: <input type="date" name="from">
        to: <input type="date" name="to">
        time: <input type="time" name="timefrom">
        to: <input type="time" name="timeto">
        No of Days: <input type="number" name="noofdays">
        </div>

        <div class="sect1">
          <p>Conducted By: Dr. T. K. Maiti & Mrs Mitali Maiti, of Holistic Yog Management Nest(hymn) <br>
            Yogananda Arogya Bhaban. Hijli Co-Operative, Kharagpur-721306 <br>
            Govt. Regn No: IV/235/2010. Estd:20-10-2010 Mob:9434056321/9564138104 <br>
            WhatsApp: 8637869921 E-Mail: <i><b>tkm.hymn@gmail.com</b></i> Website: www.holisticyol
            .com
          </p>
        </div>
      </center>
      <center>
      <h2>
        <center>Registration Form
      </h2>
     <div class="sec2">
      Name: <input type="text" name="name" placeholder="Enter your Name">&nbsp;&nbsp;
      age: <input type="number" name="age" class="age"> yrs &nbsp;&nbsp;

      <label for="gender">Gender:</label>
      <select name="gender" id="languages">
        <option value="" name="gender">Options</option>
        <option value="" name="gender">Male</option>
        <option value="" name="gender">Female</option>
      
      </select>&nbsp;&nbsp;
      <label for="occu">Occupation:</label>
      <select name="occupation" id="languages" class="ocup">
        <option value="" name="occupation">Options</option>
        <option value="" name="occupation">Student</option>
        <option value="" name="occupation">Service</option>
        <option value="" name="occupation">H-Wife</option>
     
      </select><br><br>
      </div>
      <div class="sec3">
      Mob No: <input type="text" name="phone" placeholder="Enter your Phone No">&nbsp;&nbsp;
      Email Id: <input type="email" name="email" placeholder="Enter your Email Id" class="email">&nbsp;&nbsp;
      Willing to join google group:
      <input type="radio" name="vendor">
      <label for="html">YES</label>
      <input type="radio" name="vendor">
      <label for="css">NO</label>
      <br>
      </div>
      <div class="sec4">
      <p>Purpose of practicing holisticyog (Holistic Health Information).</p><br>
      <strong>Physical:</strong>
      <input type="checkbox" name="Wcontrol">
      <label for="html">Weight control</label>
      <input type="checkbox" name="fit">
      <label for="css">fitness</label>
      <input type="checkbox" name="digestion">
      <label for="css">digestion disorder</label>
      <input type="checkbox" name="rest">
      <label for="css">respiratory trouble</label>
      <input type="checkbox" name="joint">
      <label for="css">joint pain </label>
      <input type="checkbox" name="backp">
      <label for="css">back pain</label>
      <input type="checkbox" name="Thyroid">
      <label for="css">Thyroid</label>
      <input type="checkbox" name="Blood">
      <label for="css">B.P</label>
      <input type="checkbox" name="sug">
      <label for="css">sugar</label>
      <input type="checkbox" name="tiredf">
      <label for="css">tired feeling </label>
      <input type="checkbox" name="aller">
      <label for="css">allergies</label>&nbsp;&nbsp;
      other if any: <input type="text" name="other" id=""><br><br>
      </div>
      <div class="sec5">
      <select name="phem" id="languages" class="phem">
        <option value="" name="phem">Options</option>
        <option value="" name="phem">Psychological</option>
        <option value="" name="phem"> Emotional</option>
        // ...
      </select>: <input type="checkbox" name="Inso">
      <label for="html">Insomnia</label>
      <input type="checkbox" name="moods">
      <label for="css">Mood Swing</label>
      <input type="checkbox" name="lackingmotivation">
      <label for="css">Lacking Motivation</label>
      <input type="checkbox" name="respiratorytrouble">
      <label for="css">Respiratory trouble</label>
      <input type="checkbox" name="poorconcentration">
      <label for="css"> Poor Concentration </label>
      <input type="checkbox" name="fear">
      <label for="css"> Fear</label>
      <input type="checkbox" name="anger">
      <label for="css">Anger</label>
      <input type="checkbox" name="anxiety">
      <label for="css"> Anxiety</label>
      <input type="checkbox" name="Restlessness">
      <label for="css">Restlessness</label>
      <input type="checkbox" name="stress">
      <label for="css">Stress </label>
      <input type="checkbox" name="loneliness">
      <label for="css">Loneliness</label>
      <input type="checkbox" name="boredom">
      <label for="css">Boredom </label>
      <input type="checkbox" name="depression">
      <label for="css">Depression </label>
      <input type="checkbox" name="lowselfesteem">
      <label for="css">Low Self Esteem </label>&nbsp;&nbsp;<br>
      other : <input type="text" name="other2" id=""><br><br>
      </div>
      <div class="sec6">
      <strong>Spiritual:</strong> <input type="checkbox" name="Wantofinnerpeace">
      <label for="css">Want of inner peace </label>
      <input type="checkbox" name="unabletoenjoylifeandwork">
      <label for="css">Unable to enjoy life and work</label>
      <input type="checkbox" name="difficultrelationship">
      <label for="css">Difficult relationship </label>
      <input type="checkbox" name="failedaffairs">
      <label for="css">Failed affairs </label>&nbsp;&nbsp;
      Any other specific issues and concerns: <input type="text" name="otherissue" id=""><br><br>
      </div>
      
      <div class="sec7">
      Doctor's diagnosis for chronic disease (if any): <input type="text" name="other3" id=""><br><br>
      Any recent surgery (if any): <input type="text" name="other4" id=""><br><br>
      Are you currently any type of medication?: <input type="text" name="other5" id=""><br><br>
      <p>I declare that, all relevant information given by me on this form is correct to my belief and take <br>

        the responsibility for myself in attending holistic-yog workshop and any consequences thereof.</p>
      date: <input type="date" name="date2">&nbsp;&nbsp;
      
      <p>Note: If one has any doubt whether 'holisticyog' can be practiced with a particular health <br>
        conditions, consult beforehand and inform any ill feeling to the instructor during practice.</p>
      Registration: Rs&nbsp;<input type="number" name="registration">
      Remuneration: Rs&nbsp;<input type="number" name="remuneration">
      <p>+For On Line Payment - Arch. No: 10224422221 Name Tapas Kumar Maili IFSC-SBIN0000202</p>
      <br>
      </div>


      <!-- Signature.... -->

      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>E-Signature</h2>
            <p>Sign in the canvas below and save your signature as an image!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <canvas id="sig-canvas" width="620" height="160" style="background-color: white;">
              Get a better browser, bro.
            </canvas>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <button class="button" id="sig-submitBtn" type="button"><span>Submit Signature</span></button>
            <button class="button" id="sig-clearBtn" type="button"><span>Clear Signature</span></button>
          </div>
        </div>
        <br />

        <br />
        <div class="row">
          <div class="col-md-12">
            <img id="sig-image" src="" alt="Your signature will go here!" name="sigImage" />
          </div>
        </div>
      </div>


      <!-- End Content -->
      <div class="buttons">
    <button class="btn-hover color-1">SUBMIT</button>
      

    </form>
  </div>
  </center>
</body>
<script>$("#anish").on('submit', function (e) {
    e.preventDefault();

    var formData = new FormData(this);



    $.ajax({
      url: "redirect.php",
      type: "POST",
      data: formData,
      contentType: false, cache: false, processData: false,
      success: function (data) {
        alert("Form submited sucessfully");
      },
      error: function () { }
    });
  });

  (function () {
    window.requestAnimFrame = (function (callback) {
      return window.requestAnimationFrame ||
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame ||
        window.oRequestAnimationFrame ||
        window.msRequestAnimaitonFrame ||
        function (callback) {
          window.setTimeout(callback, 1000 / 60);
        };
    })();

    var canvas = document.getElementById("sig-canvas");
    var ctx = canvas.getContext("2d");
    ctx.strokeStyle = "#222222";
    ctx.lineWidth = 4;

    var drawing = false;
    var mousePos = {
      x: 0,
      y: 0
    };
    var lastPos = mousePos;

    canvas.addEventListener("mousedown", function (e) {
      drawing = true;
      lastPos = getMousePos(canvas, e);
    }, false);

    canvas.addEventListener("mouseup", function (e) {
      drawing = false;
    }, false);

    canvas.addEventListener("mousemove", function (e) {
      mousePos = getMousePos(canvas, e);
    }, false);

    // Add touch event support for mobile
    canvas.addEventListener("touchstart", function (e) {

    }, false);

    canvas.addEventListener("touchmove", function (e) {
      var touch = e.touches[0];
      var me = new MouseEvent("mousemove", {
        clientX: touch.clientX,
        clientY: touch.clientY
      });
      canvas.dispatchEvent(me);
    }, false);

    canvas.addEventListener("touchstart", function (e) {
      mousePos = getTouchPos(canvas, e);
      var touch = e.touches[0];
      var me = new MouseEvent("mousedown", {
        clientX: touch.clientX,
        clientY: touch.clientY
      });
      canvas.dispatchEvent(me);
    }, false);

    canvas.addEventListener("touchend", function (e) {
      var me = new MouseEvent("mouseup", {});
      canvas.dispatchEvent(me);
    }, false);

    function getMousePos(canvasDom, mouseEvent) {
      var rect = canvasDom.getBoundingClientRect();
      return {
        x: mouseEvent.clientX - rect.left,
        y: mouseEvent.clientY - rect.top
      }
    }

    function getTouchPos(canvasDom, touchEvent) {
      var rect = canvasDom.getBoundingClientRect();
      return {
        x: touchEvent.touches[0].clientX - rect.left,
        y: touchEvent.touches[0].clientY - rect.top
      }
    }

    function renderCanvas() {
      if (drawing) {
        ctx.moveTo(lastPos.x, lastPos.y);
        ctx.lineTo(mousePos.x, mousePos.y);
        ctx.stroke();
        lastPos = mousePos;
      }
    }

    // Prevent scrolling when touching the canvas
    document.body.addEventListener("touchstart", function (e) {
      if (e.target == canvas) {
        e.preventDefault();
      }
    }, false);
    document.body.addEventListener("touchend", function (e) {
      if (e.target == canvas) {
        e.preventDefault();
      }
    }, false);
    document.body.addEventListener("touchmove", function (e) {
      if (e.target == canvas) {
        e.preventDefault();
      }
    }, false);

    (function drawLoop() {
      requestAnimFrame(drawLoop);
      renderCanvas();
    })();

    function clearCanvas() {
      canvas.width = canvas.width;
    }

    // Set up the UI

    var sigImage = document.getElementById("sig-image");
    var clearBtn = document.getElementById("sig-clearBtn");
    var submitBtn = document.getElementById("sig-submitBtn");
    clearBtn.addEventListener("click", function (e) {
      clearCanvas();
      sigText.innerHTML = "Data URL for your signature will go here!";
      sigImage.setAttribute("src", "");
    }, false);
    submitBtn.addEventListener("click", function (e) {
      var dataUrl = canvas.toDataURL();

      sigImage.setAttribute("src", dataUrl);
    }, false);

  })();




</script>

</html>