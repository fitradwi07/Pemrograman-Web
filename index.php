<?php
	include("header.php");
?>
	<section>
		<h1 style="margin-left: 0%"><u>Data Pribadi</u></h1>
		<div class="content-table">
			<table width="60%" style="font-size:14px; border-radius: 8px; border:1px solid #64abff">
	        <tr>
	            <td rowspan="7"><img src="img/foto-copy.png" class="img-foto-profil" alt="" style="width: 180px; height: 220px; margin-left:7%"/></td>
	        </tr>    
	          <tr>
	            <td>Nama&emsp;&emsp;&emsp;&emsp;&emsp;:</td>
	            <td>Bagus Eko Prasetyo</td>  
	                      
	          </tr>
	          <tr>
	            <td>NPM&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;:</td>
	            <td>06.2016.1.06628</td>          
	          </tr>
	          <tr>
	            <td>Jurusan&emsp;&emsp;&emsp;&emsp;&nbsp;:</td>
	            <td>Teknik Informatika</td>          
	          </tr>
	          <tr>
	            <td>Tanggal Lahir&emsp;&nbsp;&nbsp; :</td>
	            <td>23 - Agustus - 1997</td>          
	          </tr>
	          <tr>
	           <td><button><a href="#popup" class="popup-link">Info Lebih Lanjut</a></button></td>  
	           <td><button><a href ="index2.php">Biodata Lainnya</a></button></td>          
	          </tr>
	         
	      	</table>		
		</div>
		<div class="popup-wrapper" id="popup">
			<div class="popup-container">
				<table width="100%" style="font-size:14px; border-radius: 8px; border:1px solid #64abff">
			        <tr>
			            <td rowspan="10"><img src="img/foto-copy.png" class="img-foto-profil" alt="" style="width: 180px; height: 220px; margin-left:7%"/></td>
			        </tr>    
			          <tr>
			            <td class="font-popup">Nama&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
			            <td class="font-popup">Bagus Eko Prasetyo</td>  
			                      
			          </tr>
			          <tr>
			            <td class="font-popup">NPM&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;:</td>
			            <td class="font-popup">06.2016.1.06628</td>          
			          </tr>
			          <tr>
			            <td class="font-popup">Jurusan&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
			            <td class="font-popup">Informatika</td>          
			          </tr>
			          <tr>
			            <td class="font-popup">Tanggal Lahir&emsp; :</td>
			            <td class="font-popup">23 - Agustus - 1997</td>          
			          </tr> 
			          <tr>
			            <td class="font-popup">Jenis Kelamin&emsp;:</td>
			            <td class="font-popup">Laki - Laki </td>          
			          </tr>  
			          <tr>
			            <td class="font-popup">Alamat&emsp;&emsp;&emsp;&emsp;:</td>
			            <td class="font-popup">JL. Mleto 1/12C</td>          
			          </tr>  
			          <tr>
			            <td class="font-popup">NO. Telp&emsp;&emsp;&emsp;&nbsp;:</td>
			            <td class="font-popup">083857465006</td>          
			          </tr>  
			          <tr>
			            <td class="font-popup">Hobby&emsp;&emsp;&emsp;&emsp;&nbsp;:</td>
			            <td class="font-popup">Nge Game</td>          
			          </tr>  
			           
	      	</table>	
				<a class="popup-close" href="#closed">X</a>
			</div>
		</div>
		
	</section>
<?php
 include("footer.php");
?>