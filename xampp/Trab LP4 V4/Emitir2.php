<?php 
          include("Conexao.php");
          $sql="SELECT  SUM(Valor) FROM despesa  WHERE ID_Despesa=1 ";
          if($result = mysqli_query($conexao, $sql))
    {
        while($fetch = mysqli_fetch_row($result))
        {
            $n1=$fetch[0] ;
        }
    }   
          $sql2="SELECT SUM(Valor) FROM despesa  WHERE ID_Despesa=2 ";
          if($result = mysqli_query($conexao, $sql2))
          {
              while($fetch = mysqli_fetch_row($result))
              {
                  $n2=$fetch[0] ;
              }
          }   
          $sql3="SELECT SUM(Valor) FROM despesa  WHERE ID_Despesa=3 ";
          if($result = mysqli_query($conexao, $sql3))
          {
              while($fetch = mysqli_fetch_row($result))
              {
                  $n3=$fetch[0] ;
              }
          }   
          $sql4="SELECT SUM(Valor) FROM despesa  WHERE ID_Despesa=4 ";
          if($result = mysqli_query($conexao, $sql4))
          {
              while($fetch = mysqli_fetch_row($result))
              {
                  $n4=$fetch[0] ;
              }
          }   
          $sql5="SELECT SUM(Valor) FROM despesa  WHERE ID_Despesa=5 ";
          if($result = mysqli_query($conexao, $sql5))
          {
              while($fetch = mysqli_fetch_row($result))
              {
                  $n5=$fetch[0] ;
              }
          }   
          $sql6="SELECT SUM(Valor) FROM despesa  WHERE ID_Despesa=6 ";
          if($result = mysqli_query($conexao, $sql6))
          {
              while($fetch = mysqli_fetch_row($result))
              {
                  $n6=$fetch[0] ;
              }
          }   
          $sql7="SELECT SUM(Valor) FROM despesa  WHERE ID_Despesa=7 ";
          if($result = mysqli_query($conexao, $sql7))
          {
              while($fetch = mysqli_fetch_row($result))
              {
                  $n7=$fetch[0] ;
              }
          }   
        
          ?> 
<html>
<style>.button{background: #fff;
	font-size: 14px;
	margin-top: 30px;
	padding: 16px 20px;
	border-radius: 26px;
	border: 1px solid #D4D3E8;
	text-transform: uppercase;
	font-weight: 700;
	display: flex;
	align-items: center;
	width: 100%;
	color: #4C489D;
	box-shadow: 0px 2px 2px #5C5696;
	cursor: pointer;
	transition: .2s;
  text-align: center;}</style>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Descricao', 'Valor'],
          ['Água', <?php echo $n1?>   ],
          ['Luz', <?php echo $n2?>   ],
          ['Gás', <?php echo $n3?>   ],
          ['Internet', <?php echo $n4?>   ],
          ['Aluguel', <?php echo $n5?>   ],
          ['TV', <?php echo $n6?>   ],
          ['Netflix', <?php echo $n7?>   ],  
        ]);
        var options = {
          title: 'Relatório de Despesas'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
  <button type ="button" class="button"  onclick="window.location.href = 'Index.html'">
					<span class="button__text">Voltar</span>
				</button>	
</html>
