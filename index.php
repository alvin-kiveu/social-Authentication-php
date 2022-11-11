<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  body {
    font-family: Popins !important;
    background-color: #f1f1f1;
  }

  * {
    box-sizing: border-box;
  }

  /* style the container */
  .container {
    position: relative;
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px 0 30px 0;
  }

  .btn {
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 4px;
    margin: 5px 0;
    opacity: 0.85;
    display: inline-block;
    font-size: 17px;
    line-height: 20px;
    text-decoration: none;
    text-align: center;
    /* remove underline from anchors */
  }

  input:hover,
  .btn:hover {
    opacity: 1;
  }

  /* add appropriate colors to fb, twitter and google buttons */
  .gh {
    background-color: #21262d;
    color: white;
  }

  .fb {
    background-color: #3B5998;
    color: white;
  }


  .google {
    background-color: #dd4b39;
    color: white;
  }

  /* style the submit button */
  input[type=submit] {
    background-color: #04AA6D;
    color: white;
    cursor: pointer;
  }

  input[type=submit]:hover {
    background-color: #45a049;
  }

  /* Two-column layout */
  .col {
    width: 50%;
    margin: auto;
    padding: 0 50px;
    margin-top: 6px;
  }

  /* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }

  /* vertical line */
  .vl {
    position: absolute;
    left: 50%;
    transform: translate(-50%);
    border: 2px solid #ddd;
    height: 175px;
  }

  /* text inside the vertical line */
  .vl-innertext {
    position: absolute;
    top: 50%;
    transform: translate(-50%, -50%);
    background-color: #f1f1f1;
    border: 1px solid #ccc;
    border-radius: 50%;
    padding: 8px 10px;
  }

  /* hide some text on medium and large screens */
  .hide-md-lg {
    display: none;
  }

  /* bottom container */
  .bottom-container {
    text-align: center;
    background-color: #666;
    border-radius: 0px 0px 4px 4px;
  }

  /* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
  @media screen and (max-width: 650px) {
    .col {
      width: 100%;
      margin-top: 0;
    }

    /* hide the vertical line */
    .vl {
      display: none;
    }

    /* show the hidden text on small screens */
    .hide-md-lg {
      display: block;
      text-align: center;
    }
  }
  </style>
</head>

<body>

  <div class="container">
    <form action="/action_page.php">
      <div class="row">
        <h2 style="text-align:center"> Social Authentication WITH PHP</h2>
        <div class="col">
          <a href="#" class="google btn"><i class="fa fa-google fa-fw">
            </i> Login with Google+
          </a>
          <a href="https://github.com/login/oauth/authorize?client_id=e28bd2788eb2f55aabde" class="gh btn">
            <i class="fa fa-github fa-fw"></i> Login with Github</a>
          </a>
          <a href="#" class="fb btn">
            <i class="fa fa-facebook fa-fw"></i> Login with Facebook
          </a>

        </div>

      </div>
    </form>
  </div>

</body>

</html>