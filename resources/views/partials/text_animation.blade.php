<script>
    var text = ['căţea', 'labă', 'capră', 'lebădă', 'merge', 'la', 'pe', 'unde', 'muie', 'ciuci'];
    i = 0,
            $div = $('#myDivGreen, #myDivOrange, #myDivPurple, #myDivPink, #myDivOrchid, #myDivMarigold, #myDivViolet, #myDivKelly');

    setInterval(function () {
        $div.text(text[i++ % text.length]);
    }, 100);
</script>