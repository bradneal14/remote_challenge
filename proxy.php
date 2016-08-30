<?php header('Access-Control-Allow-Origin: *'); ?>
<head>
  <link rel="stylesheet" href="./css/styles.css" charset="utf-8" type="text/css"/>
</head>

<div id="signin-page" class="signin page visi">
  <div class='background'>
    <div class="leftSideSignin">
      <div class="signinBox">
        <div class="signinTopHalf">
          <a class="expensifyLogo" href="#">
          </a>
        </div>
        <div class="signinBottomHalf">
          <input class="emailInput" type="email" name="name" value="">
          <input class="passwordInput" type="password" name="name" value="">
          <input id="signinButton" class="signinButton" type="button" name="name" value="Sign In">
          <div class="">
          </div>
        </div>
      </div>

    </div>
    <div class="rightSideSignin">
      <div class="linkBarSignin">
        <a class="topLinkItem" href="#">Item</a>
        <a class="topLinkItem" href="#">Item</a>
        <a class="topLinkItem" href="#">Item</a>
        <a class="topLinkItem" href="#">Item</a>
        <a class="topLinkItem" href="#">Item</a>
      </div>
    </div>
  </div>
</div>
<div id="main-page" class="mainPage page hide">
  <body class='body'>
    <nav class="navBar">

    </nav>
    <div class='container'>
      <aside class="leftPanel">
        <div id="myBtn">
          <div class="buttonTextBox">
            <text>Add Transaction</text>
          </div>
        </div>
      </aside>

      <section class="mainEvent">
        <heading>
          <h3>Behold, the data!:</h3>
        </heading>
        <article class=tableContainer>
          <div class="headerDivContainer">
            <div class="headerDivElement"><text>COL TITLE</text></div>
            <div class="headerDivElement"><text>COL TITLE</text></div>
            <div class="headerDivElement"><text>COL TITLE</text></div>
            <div class="headerDivElement"><text>COL TITLE</text></div>
            <div class="headerDivElement"><text>COL TITLE</text></div>
          </div>
          <div class="bodyDivContainer">
            <table class='table'>
              <tbody class="scrollableTable">
                <tr>
                  <td id="testBox">Something</td>
                  <td>Something</td>
                  <td>Something</td>
                  <td>Something</td>
                  <td>Something</td>
                </tr>
                <tr>
                  <td>Something</td>
                  <td>Something</td>
                  <td>Something</td>
                  <td>Something</td>
                  <td>Something</td>
                </tr>
                <tr>
                  <td>Something</td>
                  <td>Something</td>
                  <td>Something</td>
                  <td>Something</td>
                  <td>Something</td>
                </tr>
                <tr>
                  <td>Something</td>
                  <td>Something</td>
                  <td>Something</td>
                  <td>Something</td>
                  <td>Something</td>
                </tr>
                <tr>
                  <td>Something</td>
                  <td>Something</td>
                  <td>Something</td>
                  <td>Something</td>
                  <td>Something</td>
                </tr>
                <tr>
                  <td>Something</td>
                  <td>Something</td>
                  <td>Something</td>
                  <td>Something</td>
                  <td>Something</td>
                </tr>
                <tr>
                  <td>Something</td>
                  <td>Something</td>
                  <td>Something</td>
                  <td>Something</td>
                  <td>Something</td>
                </tr>

                <tr>
                  <td>Something</td>
                  <td>Something</td>
                  <td>Something</td>
                  <td>Something</td>
                  <td>Something</td>
                </tr>
                <tr class="tableBottomButtonBox">
                  <td><a href="">Load More.....</a></td>
                </tr>


              </tbody>


            </table>
          </div>
          <div>
          </div>
        </article>
      </section>
      <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
          <span class="close">x</span>
          <p>Some text in the Modal..</p>
          <div class="modal-input-div">
            <input class="modal-input"/>
            <input class="modal-input"/>
            <input class="modal-input"/>
            <input class="modal-input"/>
          </div>
        </div>

      </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="./js/index.js"></script>
    <script type="text/javascript" src="./js/actions.js"></script>



  </body>
</div>
