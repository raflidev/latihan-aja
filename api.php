<?php
$api = file_get_contents('https://api.kawalcorona.com/indonesia/');
$data = json_decode($api,true);

echo "Negara : ".$data[0]['name']."<br>";
echo "Positif : ".$data[0]['positif']."<br>";
echo "Sembuh : ".$data[0]['sembuh']."<br>";
echo "Meninggal : ".$data[0]['meninggal']."<br>";
?>

<script>
// function getFullName(firstName="Bapa", lastName= "Pucci"){
//     return `${firstName} ${lastName}`;
// }

// const fullName = getFullName("Dio", undefined);

const jojo = {
    name: "Kujo Jotaro",
    origin: "japan",
    enemy: "DIO"
};

let {enemy} = jojo;
enemy = "Kira";
console.log(jojo.enemy);

</script>
