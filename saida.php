<!DOCTYPE html>

<html>
	<head>
		<meta charset= 'utf-8'>
    <title> Construindo Pagina </title>
    
    <?php
      $CorFundo = $_POST['corFundo'];
      $CorTexto = $_POST['corTexto'];
      $NomeBanda = $_POST['nomeBanda'];
      $LinkImagem = $_POST['linkImagem'];
	  $Int_Nome1 = $_POST['int1_nome'];
	  $Int_Data1 = $_POST['int1_data'];
	  $Int_Intru1 = $_POST['int1_intr'];  
	  $Int_Nome2 = $_POST['int2_nome'];
	  $Int_Data2 = $_POST['int2_data'];
	  $Int_Intru2 = $_POST['int2_intr'];  
	  $Int_Nome3 = $_POST['int3_nome'];
	  $Int_Data3 = $_POST['int3_data'];
	  $Int_Intru3 = $_POST['int3_intr'];  
	  $Biografia = $_POST['biografia']
    ?>
    
    <style type='text/css'>
      .NomeBanda{
        
        text-align: center;
      }
      
      body{
        
        background-color: <?php echo $CorFundo;?>;
        color: <?php echo $CorTexto;?>;
      }
	  
	  img{
			display: block;
			width: 600px;
			height: 500px;
			margin-left: auto;
			margin-right: auto;
	  }
	  table{
			
			
			margin-left: auto;
			margin-right: auto;
	  }
      
      
    </style>
	</head>
  
	<body>
    		
	<h1 class='NomeBanda'> <?php echo $NomeBanda;?></h1>
		
	<img src="<?php echo $LinkImagem ?>" alt="<?php echo $NomeBanda ?>" title="<?php echo $NomeBanda ?>" >

	<hr>
	
    <h3> Biografia</h3>
    <p><?php echo $Biografia?></p>
    
	<hr>
	
    <h3> Integrantes</h3>
    
    <table border='1'>
      <tr>
        <th>Nome</th>
        <th>Data de nascimento</th>
        <th>Instrumento</th>
      </tr>
      
      <tr>
        <td><?php echo $Int_Nome1 ?></td>
        <td><?php echo $Int_Data1?></td>
        <td><?php echo $Int_Intru1?></td>
       
      </tr>
      
      <tr>
        <td><?php echo $Int_Nome2 ?></td>
        <td><?php echo $Int_Data2?></td>
        <td><?php echo $Int_Intru2?></td>
       
      </tr>
      
      <tr>
        <td><?php echo $Int_Nome3 ?></td>
        <td><?php echo $Int_Data3?></td>
        <td><?php echo $Int_Intru3?></td>    
      </tr>
    </table>
  </body>
</html>