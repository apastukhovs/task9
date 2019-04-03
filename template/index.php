<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo TITLE; ?></title>
</head>
<body>
    <div class="checkBox">
        <h2>Checkboxes: </h2>
            <fieldset>
                <legend>Your favorite Sport is</legend>
                <?= $checkBox ?>
            </fieldset>
     </div>   
     <hr> 
     <div class="oList">  
        <h2>Ordered List:</h2>
        <?= $orderList ?>
     </div>
     <hr>   
     <div class="uList">
        <h2>Unordered List:</h2>
        <?= $unOrderList ?>
     </div>
     <hr>
     <div class="table"> 
        <h2>table:</h2>
        <?= $table  ?>
     </div>   
     <hr>
     <div class="radio">
        <h2>Choose Language:</h2>
        <?= $radioGroup  ?>
    </div>
    <hr>
    <div class="drop">
    <h2>Football Team:</h2>
        <?= $dropDown  ?>
    </div>    
    <hr>
    <div class="drop">
        <?= $dTerms  ?>
    </div>    
</body>
</html>