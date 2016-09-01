
<head>
  <link rel="stylesheet" href="./styles.css" charset="utf-8" type="text/css"/>
  <link/>
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
          <form action="login.php" method="post">

              <div class="articlePara emailInput">
              <label for="email">Email:</label><br />
              <input name="email" size="25" type="text" />
              </div>

              <div class="articlePara passwordInput">
              <label for="password">Password:</label><br />
              <input name="password" size="25" type="password" />
            </div>

              <div class="articlePara signinButton">
              <input name="submit" type="submit" value="Login" />
              </div>
          </form>
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
    <script type="text/javascript" src="./index.js"></script>
    <script type="text/javascript" src="./actions.js"></script>



  </body>
</div>
