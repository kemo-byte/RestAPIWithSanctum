<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>
    function enableTxt(elem) {
        $('#usermsg').val($('#usermsg').val() + $(elem).html());
    }        
</script>

<a id="smiley" title="smiley" href="#" onclick="enableTxt(this)" >&#128515;</a>
<a id="sadface" title="sadface" href="#" onclick="enableTxt(this)" >&#128530;</a>
<input id="usermsg">
