
<!DOCTYPE html>
<html>
<head>
    <title>ExoClasse1</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="fond1.css" />
  <head/>
  <body>
  <?php $tab=array(
          'Nom'=>'Diagne',
          'Prenom'=>"Ahmadou Bamba",                                 
          'Tel'=>'779449628',
          'Adresse'=>'Hlm Hann Maristes',
           'Profession'=>'Aucune',
                 
          );
      ?> 
  <center>
    <caption><h3>Fiche etudiant</h3></caption>
  
  <table class="tableau" border >
    
   
    <th>Informations</th>
    <th>     <img   src="photo_etudiant" /> </th>
    <tr>
        <?php foreach($tab  as  $cle=> $element)
        {
            if($cle!='Tel')
            {
                
            
            echo "<tr>";
                  
               echo  '<td>'.$cle.'<br />'.'</td>'; 
                                 
           echo"<td>";
                      echo  $element . '<br />';
               echo"</td>";
            }   
            elseif($cle='Tel')
            {
                echo "<tr>";
         
            echo"<td>";
             echo'Telephone'; 
                 echo"</td>";
                 echo"<td>";
                   echo $tab['Tel'];
                 echo"</td>";
            }
            
          }
       ?> 
    </tr>u
    
    </table>
    
  </center>
  </body>
    </html>
