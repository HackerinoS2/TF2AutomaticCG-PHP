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
<form id="form" class="container" method="post" action="./controllers/process_data.php">
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

    <!-- QUALITY -->
    <br />
    <label>Quality: </label>
    <select name="quality">
      <option value="Unique">Unique</option>
      <option value="Strange">Strange</option>
      <option value="Vintage">Vintage</option>
      <option value="Genuine">Genuine</option>
      <option value="Haunted">Haunted</option>
      <option value="Unusual">Unusual</option>
    </select>

    <!-- CRAFTABLE -->
    <br />
    <label>Craftable: </label>
    <select name="craftable">
      <option value="true">True</option>
      <option value="false">False</option>
    </select>

    <!-- AUSTRALIUM -->
    <br />
    <label>Australium: </label>
    <select name="australium">
      <option value="false">False</option>
      <option value="true">True</option>
    </select>

    <!-- KILLSTREAK -->
    <br />
    <label>Killstreak: </label>
    <select name="killstreak">
      <option value="0">No Killstreak</option>
      <option value="1">Killstreak</option>
      <option value="2">Spec Killstreak</option>
      <option value="3">Prof Killstreak</option>
    </select>

    <!-- UNUSUAL EFFECT -->
    <br />
    Effect (For Unusuals):
    <input name="effects" list="effects" type="search" value="" />

    <datalist id="effects">
      <option value="'72"></option>
      <option value="Abduction"></option>
      <option value="Aces High"></option>
      <option value="Acidic Bubbles of Envy"></option>
      <option value="Amaranthine"></option>
      <option value="Ancient Codex"></option>
      <option value="Ancient Eldritch"></option>
      <option value="Anti-Freeze"></option>
      <option value="Arcana"></option>
      <option value="Atomic"></option>
      <option value="Blizzardy Storm"></option>
      <option value="Bonzo The All-Gnawing"></option>
      <option value="Brain Drain"></option>
      <option value="Bubbling"></option>
      <option value="Burning Flames"></option>
      <option value="Cauldron Bubbles"></option>
      <option value="Chiroptera Venenata"></option>
      <option value="Circling Heart"></option>
      <option value="Circling Peace Sign"></option>
      <option value="Circling TF Logo"></option>
      <option value="Clairvoyance"></option>
      <option value="Cloud 9"></option>
      <option value="Cloudy Moon"></option>
      <option value="Community Sparkle"></option>
      <option value="Darkblaze"></option>
      <option value="Dead Presidents"></option>
      <option value="Death at Dusk"></option>
      <option value="Death by Disco"></option>
      <option value="Demonflame"></option>
      <option value="Disco Beat Down"></option>
      <option value="Eerie Orbiting Fire"></option>
      <option value="Eldritch Flame"></option>
      <option value="Electric Hat Protector"></option>
      <option value="Electrostatic"></option>
      <option value="Ether Trail"></option>
      <option value="Flaming Lantern"></option>
      <option value="Flammable Bubbles of Attraction"></option>
      <option value="Fountain of Delight"></option>
      <option value="Frostbite"></option>
      <option value="Galactic Codex"></option>
      <option value="Galactic Gateway"></option>
      <option value="Ghastly Ghosts"></option>
      <option value="Ghastly Ghosts Jr"></option>
      <option value="Green Black Hole"></option>
      <option value="Green Confetti"></option>
      <option value="Green Energy"></option>
      <option value="Harvest Moon"></option>
      <option value="Haunted Ghosts"></option>
      <option value="Haunted Phantasm"></option>
      <option value="Haunted Phantasm Jr"></option>
      <option value="Head of Steam"></option>
      <option value="Hellfire"></option>
      <option value="Hellish Inferno"></option>
      <option value="Holy Glow"></option>
      <option value="Holy Grail"></option>
      <option value="Infernal Flames"></option>
      <option value="Infernal Smoke"></option>
      <option value="It's A Secret To Everybody"></option>
      <option value="It's a mystery to everyone"></option>
      <option value="It's a puzzle to me"></option>
      <option value="Kill-a-Watt"></option>
      <option value="Knifestorm"></option>
      <option value="Magnetic Hat Protector"></option>
      <option value="Map Stamps"></option>
      <option value="Massed Flies"></option>
      <option value="Mega Strike"></option>
      <option value="Memory Leak"></option>
      <option value="Miami Nights"></option>
      <option value="Midnight Whirlwind"></option>
      <option value="Misty Skull"></option>
      <option value="Molten Mallard"></option>
      <option value="Morning Glory"></option>
      <option value="Nebula"></option>
      <option value="Nether Trail"></option>
      <option value="Neutron Star"></option>
      <option value="Nuts n' Bolts"></option>
      <option value="Ominous Night"></option>
      <option value="Omniscient Orb"></option>
      <option value="Open Mind"></option>
      <option value="Orbiting Fire"></option>
      <option value="Orbiting Planets"></option>
      <option value="Overclocked"></option>
      <option value="Phosphorous"></option>
      <option value="Poisoned Shadows"></option>
      <option value="Poisonous Bubbles of Regret"></option>
      <option value="Power Surge"></option>
      <option value="Purple Confetti"></option>
      <option value="Purple Energy"></option>
      <option value="Ring of Fire"></option>
      <option value="Roaring Rockets"></option>
      <option value="Roboactive"></option>
      <option value="Scorching Flames"></option>
      <option value="Screaming Tiger"></option>
      <option value="Searing Plasma"></option>
      <option value="Showstopper"></option>
      <option value="Silver Cyclone"></option>
      <option value="Skill Gotten Gains"></option>
      <option value="Smoking"></option>
      <option value="Something Burning This Way Comes"></option>
      <option value="Spectral Swirl"></option>
      <option value="Spellbound"></option>
      <option value="Spooky Night"></option>
      <option value="Stare From Beyond"></option>
      <option value="Starstorm Insomnia"></option>
      <option value="Starstorm Slumber"></option>
      <option value="Steaming"></option>
      <option value="Stormy 13th Hour"></option>
      <option value="Stormy Storm"></option>
      <option value="Subatomic"></option>
      <option value="Sulphurous"></option>
      <option value="Sunbeams"></option>
      <option value="Terror-Watt"></option>
      <option value="Tesla Coil"></option>
      <option value="The Dark Doorway"></option>
      <option value="The Eldritch Opening"></option>
      <option value="The Ooze"></option>
      <option value="Time Warp"></option>
      <option value="Vicious Circle"></option>
      <option value="Vivid Plasma"></option>
      <option value="Voltaic Hat Protector"></option>
      <option value="White Lightning"></option>
    </datalist>

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
        <h3>Insert Price</h3>
  
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