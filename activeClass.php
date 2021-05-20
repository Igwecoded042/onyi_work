<div id="myDIV">
    <button class="btn1" id="size1">XS</button>
    <button class="btn1 active1" id="size1">S</button>
    <button class="btn1" id="size1">M</button>
    <button class="btn1" id="size1">L</button>
    <button class="btn1" id="size1">XL</button>
</div>

<script>
    // Add active class to the current button (highlight it)
    var header = document.getElementById("myDIV");
    var btns = header.getElementsByClassName("btn1");
    for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active1");
    current[0].className = current[0].className.replace(" active1", "");
    this.className += " active1";
    });
    }
</script>
