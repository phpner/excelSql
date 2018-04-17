<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bootstrap.css">
	<title>backbone</title>
</head>
<body>
<table class="inn">

</table>
     <div class="container">
     <h2 class="text-center">Таблица exel</h2>
         <table  class="table">
             <thead >
             <tr>
                 <th class="text-center">Имя</th>
                 <th class="text-center">Возраст</th>
                 <th class="text-center">Изменить</th>
             </tr>
             </thead>
             <tbody class="innerTable">
             <div id="innerTable" >
                 <?php $v=1; for ($t=0; $t <= 3; $t++) :?>
                     <tr>
                         <?php for ($i=0; $i <= 2 ; $i++) {?>
                             <td class="col-md-2 colectionTr"><?= $v++ ?></td>
                         <?php }?>
                     </tr>
                 <?php endfor?>
             </div>
             </tbody>
         </table>
        <span>сумма: </span>
        <div class="btn-primary btn allSum">0</div>
    </div>
<!-- <script type="text/template"  class="viewExelTabel">

         <% _.each(artists, function(artist, index, artists) { %>
            <li><%= artist.value%></li>
            <h>3</h>
         <% }); %>
         <tr><td><h1>in!!!</h1></td></tr>

 </script>
-->
<script type="x-tmpl" id="list_tmpl">
<div class='container'>
<tr>
<% for(var i = 0; i < mods.length; i++){ %>
    <% var mod = mods[i]; %>
    <td><%= mod.value%></td>
<% }; %>
</tr>
</div>
</script>
	<script src="assets/js/main.js"></script>
</body>
</html>