function autopricer() {
    var autoprice = document.getElementById('autopricer').value;

    if (autoprice == 'Enable Autopricer') {
        document.getElementById('autoprice_form').style.display = 'none';
        document.getElementById('autopricer').value = 'Disable Autopricer';
    } else if (autoprice == 'Disable Autopricer') {
        document.getElementById('autoprice_form').style.display = 'block';
        document.getElementById('autopricer').value = 'Enable Autopricer';
    }
}