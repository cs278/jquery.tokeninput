<html>
  <head>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script type="text/javascript" src="src/jquery.tokeninput.js"></script>

    <link rel="stylesheet" href="styles/token-input.css" type="text/css" />
    <link rel="stylesheet" href="styles/token-input-facebook.css" type="text/css" />

    <script type="text/javascript">
      $(document).ready(function() {
        $("#tokenize").tokenInput('data.php');

        $("#tokenize-suggested").tokenInput("data.php", {
          hintText: "Type in the names of your favorite TV shows",
          noResultsText: "No results",
          searchingText: "Searching...",
          requiresMatch: false,
          suggestedTags: [{id: 'tag1', name: 'tag1', size: 1}, {id: 'tag2', name: 'tag2', size: 2}],
          focusHint: false
        });

        $("#tokenize-facebook").tokenInput("data.php", {
          classes: {
            tokenList: "token-input-list-facebook",
            token: "token-input-token-facebook",
            tokenDelete: "token-input-delete-token-facebook",
            selectedToken: "token-input-selected-token-facebook",
            highlightedToken: "token-input-highlighted-token-facebook",
            dropdown: "token-input-dropdown-facebook",
            dropdownItem: "token-input-dropdown-item-facebook",
            dropdownItem2: "token-input-dropdown-item2-facebook",
            selectedDropdownItem: "token-input-selected-dropdown-item-facebook",
            inputToken: "token-input-input-token-facebook"
          }
        });
      });
</script>
</head>

<body>
  <h1>Jquery Tokenizing Autocomplete Input</h1>

<? if($_POST) : ?>
  <h2>Submitted data (<a href="">clear</a>)</h2>
    <pre>
<? print_r($_POST); ?>
    </pre>
<? endif; ?>

  <form method="post">
    <fieldset>
      <legend>Vanilla example</legend>
      <input type="text" id="tokenize" name="tokenize" />
    </fieldset>

    <fieldset>
      <legend>Suggested tags</legend>
      <input type="text" id="tokenize-suggested" name="tokenize-suggested" />
    </fieldset>

    <fieldset>
      <legend>Facebook style</legend>
      <input type="text" id="tokenize-facebook" name="tokenize-facebook" />
    </fieldset>
  </form>

</body>
</html>
