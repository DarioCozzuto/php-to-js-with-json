<?php
$array= ['a' => 10, 'b' => 20, 'c' => 30];
 $json= json_encode($array);

?>

<script>
var jsonObj= <?= $json ?>;
//alert(typeof jsonObj);

//alert(jsonObj.a);
//alert(jsonObj.b);
//alert(jsonObj.c);
//oppure
for(var i in jsonObj) {
    alert(jsonObj[i]);
}
</script>