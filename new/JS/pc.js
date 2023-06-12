const MV=document.querySelector('model-viewer#mod');
CO=[
    '180deg 90deg',
    '-90deg 90deg',
    '-90deg 90deg',
    '-90deg 90deg',
    '-90deg 90deg',
    '-90deg 90deg',
    '0deg 90deg',
    '0deg 90deg',
    '0deg 90deg',
    '0deg 90deg',
    '0deg 90deg',
    '0deg 90deg',
    '90deg 90deg',
    '90deg 90deg',
    '90deg 90deg',
    '90deg 90deg',
    '90deg 90deg',
    '90deg 90deg',
    '90deg 90deg',
    '90deg 90deg'
];
CT=[
 '0m 3m 125m',
'125m 3m 13m',
'125m 3m 8.5m',
'125m 3m 2m',
'125m 3m -4m',
'125m 3m -10m',
'14m 3m -125m',
'8.5m 3m -125m',
'3m 3m -125m',
'-2m 3m -125m',
'-8m 3m -125m',
'-13m 3m -125m',
'-130m 3m -15m',
'-130m 3m -10.5m',
'-130m 3m -6m',
'-130m 3m -1m',
'-130m 3m 4m',
'-130m 3m 8.5m',
'-130m 3m 13m',
'-130m 3m 17.5m'
];
function position(pc){
MV.cameraOrbit=CO[pc];
MV.cameraTarget=CT[pc];
MV.removeAttribute("camera-controls")
}
function reset(){
MV.cameraOrbit="0deg 90deg";
MV.cameraTarget='auto auto auto';
MV.cameraControl=true;
MV.setAttribute("camera-controls","")
}

function Pcs() {

for (let i = 1; i <=20; i++) {
    let pcs=MV.model.getMaterialByName('PC_M'+i);

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
           pcs.pbrMetallicRoughness.setBaseColorFactor(JSON.parse(this.responseText));
      }
    };
    xhr.open("GET", "model perview/pc check.php?pc=" +i, true);
    xhr.send();
  }
}

start_check=setInterval(()=>{},10000);
MV.addEventListener('load',()=>{
  Pcs();
    start_check=setInterval(Pcs,10000);
});