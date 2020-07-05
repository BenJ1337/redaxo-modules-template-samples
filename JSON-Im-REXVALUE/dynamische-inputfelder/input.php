<?php
$value1 = rex_var::toArray("REX_VALUE[1]");
$rexValueKey = "meinText";

echo '<div id="block-content">';
foreach($value1 as $key => $value) {
    echo '<div id="'.$key.'" class="block">
            <div class="move-controls">
                <input type="button" id="up" value="up" onclick="moveBlockUp(event);">
                <input type="button" id="down" value="down" onclick="moveBlockDown(event);">
                <div style="clear: both;"></div>
            </div>
            <div class="content">
                <input type="text" id="text1" class="rex-input" data-name="REX_INPUT_VALUE[1][id]['.$rexValueKey.']" name="REX_INPUT_VALUE[1]['.$key.']['.$rexValueKey.']" value="'.$value[$rexValueKey].'" />
            </div>
            <div class="add-controls">
                <input type="button" id="1-add" value="add-below" onclick="addBlockBelow(event);">
                <input type="button" id="1-remove" value="remove" onclick="removeBlock(event);">
                <div style="clear: both;"></div>
            </div>
        </div>';

}
echo '</div>';
?>
<input type="button" id="add-new" value="add-new" onclick="addBlock();">
<script>
    var wrapper = document.getElementById("block-content");

    function updateRexValues(block) {
        console.log(block.id);
        var content = block.querySelector('.content');
        var inputs = content.querySelectorAll('.rex-input');
        for(input of inputs) {
            var name = input.dataset.name;
            input.name = name.replace("id", block.id);
        }
    }

    function addBlock() {
        console.log("addBlock");
        var el = wrapper.lastElementChild;
        var nxtEl = el.cloneNode(true);
        nxtEl.id = Number(el.id) + 1;
        document.getElementById("block-content").appendChild(nxtEl);
        refreshIds();
    }
    function addBlockBelow(event) {
        console.log("addBlockBelow");
        var el = event.target.closest('div[class="block"]');
        var nxtEl = el.cloneNode(true);
        nxtEl.id = Number(el.id) + 1;
        wrapper.insertBefore(nxtEl, el.nextSibling);
        refreshIds();
    }
    function removeBlock(event) {
        console.log("removeBlock");
        var el = event.target.closest('div[class="block"]');
        if(Number(el.id) != 1 || wrapper.childElementCount > 1) {
            el.remove();
        }
    }
    function moveBlockUp(event) {
        console.log("moveBlockUp");
        var el = event.target.closest('div[class="block"]');
        if(Number(el.id) > 1) {
            var prevNode = el.previousSibling;
            var curNode = el.cloneNode(true);
            el.remove();
            wrapper.insertBefore(curNode, prevNode);
            refreshIds();
        }
    }
    function moveBlockDown(event) {
        console.log("moveBlockDown");
        var el = event.target.closest('div[class="block"]');
        if(Number(el.id) < wrapper.childElementCount) {
            var nextNode = el.nextSibling.nextSibling;
            var curNode = el.cloneNode(true);
            el.remove();
            if(nextNode != undefined) {
                wrapper.insertBefore(curNode, nextNode);
            } else {
                wrapper.appendChild(curNode);
            }
            refreshIds();
        }
    }
    function refreshIds() {
        var blocks = wrapper.children;
        for(var i = 0; i < blocks.length; i++) {
            blocks[i].id = i + 1;
            updateRexValues(blocks[i]);
        }
    }


    var blockContentWrapper = document.getElementById("block-content");
    var blocks = blockContentWrapper.children;

    for(block of blocks) {
        console.log(block.id);
    }
</script>
<style>
    #block-content {
        width: 500px;
    }
    .block {
        width: 100%;
        border: 2px solid #222;
        padding: 2px;
        display: inline-block;
        margin-top: 15px;
    }
    .move-controls {
        width: 100%;
        border-bottom: 2px solid #222;
    }
    .move-controls input {
        width: 50%;
        display: block;
        float: left;
    }
    .add-controls {
        width: 100%;
        border-top: 2px solid #222;
    }
    .add-controls input {
        width: 50%;
        display: block;
        float: left;
    }
    .content {
        width: 100%;
        padding: 15px 0;
        min-height: 100px;
    }
    #add-new {
        margin-top: 15px;
    }
</style>
