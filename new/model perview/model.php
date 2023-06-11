

<div id="model">
    <model-viewer id='mod' disable-tap camera-orbit="0deg 90deg" style="width: 100%; height: 100%;" src="model perview/room A206.glb" camera-controls>
    <select id='pc' onchange='position(this.value)'>
        <?php 
        for($i=0;$i<20;$i++){
            if($i==0){
                echo "<option value='$i'>Main PC</option>";
            }else{
                echo "<option value='$i'>PC ".$i ."</option>";
            }
            
        }
        ?>
    </select>
    <button id='Default' onclick='reset()'> Default </button>

</model-viewer>
 </div>
 <script src='JS/pc.js'></script>