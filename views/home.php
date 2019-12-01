<!-- HEADER -->
<div class="top-header">
  <br /><br />
  <center>
    <h1>TF2-Automatic | Command Generator</h1>
  </center>
  <hr />
  <center>
    <h2>Generate your commands</h2>
    <br />
  </center>
</div>

<center>
  <!-- AUTOPRICER -->
  <label>Autopricer</label>

  <br />
  <input id="autopricer" type="button" class="btn btn-primary" value="Disable Autopricer" onclick="autopricer()" />
</center>


<!-- FORM -->
<form id="form" class="container" method="post" action="./models/process_data.php">
  <center>

    <br />

    <!-- OPTION -->
    <label>Choose if you want to add items or update items:</label>
    <select name="option">
      <option value="add">Add</option>
      <option value="update">Update</option>
      <option value="remove">Remove</option>
    </select>

    <!--
      If the autopricer is disabled,
    show form to manualy insert the prices 
    -->

    <!-- USER INPUT TEXT -->
    <br />
    <label>Insert each item name on a new line down here: </label>
    <br />
    <textarea name="items" cols=60 rows=7></textarea>

    <!-- INTENT -->
    <br />
    <label>Intent: </label>
    <select name="intent">
      <option value="bank">Bank (Buy and Sell)</option>
      <option value="buy">Buy</option>
      <option value="sell">Sell</option>
    </select>

    <!-- LIMIT -->
    <br />
    <label>Limit: </label>
    <input name="limit" type="number" value="1" />

    <!-- AUTOPRICER FORM -->
    <div id="autoprice_form">
        <br />
        <h3>Set Price</h3>
  
        <br />
  
        <label>Sell Keys</label>
        <input type="text" name="sell_keys" />
  
        <br />
  
        <label>Sell Metal</label>
        <input type="text" name="sell_metal" />
  
        <br />
  
        <label>Buy Keys</label>
        <input type="text" name="buy_keys" />
  
        <br />
  
        <label>Buy Metal</label>
        <input type="text" name="buy_metal" />
      </div>

    <!-- SUBMIT -->
    <br /><br />
    <input type="submit" value="Generate Commands" class="btn btn-primary" />

    <!-- OUTPUT -->
    <br /><br />
      <label>Output</label>
      <br />
    <textarea id="output" cols=60 rows=7></textarea>
    <br /><br /><br /><br />

    
  </center>
</form>

<script>
  $(document).ready(function () {
    $("#form").submit(function(e) {
      e.preventDefault();

      var form = $(this);
      var url = form.attr('action');

      $.ajax({
        type: "POST",
        url: url,
        data: form.serialize(),
        success: function (data) {
          $('#output').text("");
          $('#output').append(data);
        }
      });
    });
  })
</script>