<?php

$received= array($_POST["1"],$_POST["2"],$_POST["4"],$_POST["5"],
$_POST["6"],$_POST["7"],$_POST["8"],$_POST["9"],$_POST["10"],
$_POST["11"],$_POST["12"],$_POST["14"],$_POST["15"],
$_POST["16"],$_POST["17"],$_POST["18"],$_POST["19"],$_POST["20"],
$_POST["21"],$_POST["22"],$_POST["23"],$_POST["24"],$_POST["25"],$_POST["25"]);
$answer=array(1,4,2,2,3,5,1,1,5,4,3,4,5,1,5,1,5,5,1,2,2,3,3,4);
$baejum=array(3,4);

$answer1= array('4','5');

for($i=0; $i<count($_POST['3']); $i++){
$position = $_POST['3'];}




$answer2= array('2','4');
for($i=0; $i<count($_POST['13']); $i++){
$position1 = $_POST['13'];
}




function jumsu($left,$right,$bae) {
  if ($left==$right){
   return $bae;
 } else {return 0;}}


 // echo jumsu ($received[0],$answer[0],$baejum[0]) ; 함수 호출
 // echo count($baejum); 배열 숫자
 // echo array_sum($baejum);배열합계

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>영어 2017년 2학년 1학기 답안</title>
  </head>
  <body>

<h2>객관식 답안(26문제/80점)</h2>

  <table id="myTable" border="1">
   <thead>
     <th>문 항</th> <th>입력값</th> <th>정답</th>  <th>정답 여부</th>  <th>배점</th> <th> 비고</th>
   </thead>
   <tbody >
     <tr>
       <td>1</td>
       <td> <?php echo $received[0];?></td>
       <td> <?php echo $answer[0];?></td>
       <td><?php if ($received[0]==$answer[0]){ echo "O";} else {echo "X";}?></td>
       <td class="sum"><?php echo jumsu($received[0],$answer[0],$baejum[0]);?></td>
       <td>liquefy : 액체로 되다</td>
     </tr>

     <tr>
       <td>2</td>
       <td> <?php echo $received[1];?></td>
       <td> <?php echo $answer[1];?></td>
       <td><?php if ($received[1]==$answer[1]){ echo "O";} else {echo "X";}?></td>
        <td class="sum"><?php if ($received[1]==$answer[1]){ echo $baejum[0];} else {echo 0;}?></td>
       <td>leftover : 잉여, 남는 것, 초과된 것의 의미로 trash와 동의어가 될 수 없음</td>
     </tr>

     <tr>
       <td>3</td>
       <td> <?php echo $position[0].",".$position[1];?></td>
       <td> <?php echo $answer1[0];echo ","; echo $answer1[1];?></td>
       <td><?php if($answer1[0]==$position[0] && $answer1[1]==$position[1]) {
          echo "O";}
          else {echo "X";
       }?></td>
       <td class="sum"><?php if($answer1[0]==$position[0] && $answer1[1]==$position[1]) {
          echo "3";}
          else {echo "0";
       };?></td>
      <td> grow up = be raised</td>
     </tr>

     <tr>
       <td>4</td>
       <td> <?php echo $received[2];?></td>
       <td> <?php echo $answer[2];?></td>
       <td><?php if ($received[2]==$answer[2]){ echo "O";} else {echo "X";}?></td>
       <td class="sum"><?php echo jumsu($received[2],$answer[2],$baejum[1]);?></td>
      <td>action-driven way :  행동에 주안점을 둔 표현( ex: I ride a bike to go to school.) , vehicle-driven way : 교통수단에 주안점을 둔 표현(ex. I go to school by bus.)</td>
     </tr>

     <tr>
       <td>5</td>
       <td> <?php echo $received[3];?></td>
       <td> <?php echo $answer[3];?></td>
       <td><?php if ($received[3]==$answer[3]){ echo "O";} else {echo "X";}?></td>
       <td class="sum"><?php echo jumsu($received[3],$answer[3],$baejum[0]);?></td>
      <td>	reminder의 표현으로 사용할 수 있는 것 : Don’t forget to = make sure that~=remember to ~</td>
     </tr>

     <tr>
       <td>6</td>
       <td> <?php echo $received[4];?></td>
       <td> <?php echo $answer[4];?></td>
       <td><?php if ($received[4]==$answer[4]){ echo "O";} else {echo "X";}?></td>
       <td class="sum"><?php echo jumsu($received[4],$answer[4],$baejum[0]);?></td>
      <td>3	love를 표현하기 위해 사용된 metaphor에 my memories는 해당되지 않음</td>
     </tr>

     <tr>
       <td>7</td>
       <td> <?php echo $received[5];?></td>
       <td> <?php echo $answer[5];?></td>
       <td><?php if ($received[5]==$answer[5]){ echo "O";} else {echo "X";}?></td>
       <td class="sum"><?php echo jumsu($received[5],$answer[5],$baejum[0]);?></td>
      <td>	5번의 경우 날씨를 표현할 때 사용하는 비인칭주어, 나머지는 지시대명사임 </td>
     </tr>

     <tr>
       <td>8</td>
       <td> <?php echo $received[6];?></td>
       <td> <?php echo $answer[6];?></td>
       <td><?php if ($received[6]==$answer[6]){ echo "O";} else {echo "X";}?></td>
       <td class="sum"><?php echo jumsu($received[6],$answer[6],$baejum[0]);?></td>
      <td> 1번의 it을 제외한 나머지는 모두 computer를 의미함 </td>
     </tr>

     <tr>
       <td>9</td>
       <td> <?php echo $received[7];?></td>
       <td> <?php echo $answer[7];?></td>
       <td><?php if ($received[7]==$answer[7]){ echo "O";} else {echo "X";}?></td>
       <td class="sum"><?php echo jumsu($received[7],$answer[7],$baejum[0]);?></td>
      <td>	선행사가 사람일 경우 주격관계대명사는 who, 선행사가 사물일 경우 주격관계대명사는 which를 사용함 </td>
     </tr>

     <tr>
       <td>10</td>
       <td> <?php echo $received[8];?></td>
       <td> <?php echo $answer[8];?></td>
       <td><?php if ($received[8]==$answer[8]){ echo "O";} else {echo "X";}?></td>
       <td class="sum"><?php echo jumsu($received[8],$answer[8],$baejum[0]);?></td>
      <td> 문맥상 제시된 문장이 위치할 가장 자연스러운 곳은 5번임. 수업이 매우 재미있어 시간이 빨리 지난다는 의미임 </td>
     </tr>

     <tr>
       <td>11</td>
       <td> <?php echo $received[9];?></td>
       <td> <?php echo $answer[9];?></td>
       <td><?php if ($received[9]==$answer[9]){ echo "O";} else {echo "X";}?></td>
       <td class="sum"><?php echo jumsu($received[9],$answer[9],$baejum[0]);?></td>
      <td>	제시된 글에 의하면 모하메드는 작년에 몇주간 학교를 갈수 없었다 라고 되어있음. absent from : ~결석하다 </td>
     </tr>

     <tr>
       <td>12</td>
       <td> <?php echo $received[10];?></td>
       <td> <?php echo $answer[10];?></td>
       <td><?php if ($received[10]==$answer[10]){ echo "O";} else {echo "X";}?></td>
       <td class="sum"><?php echo jumsu($received[10],$answer[10],$baejum[0]);?></td>
      <td> Capital : 수도, 위글에는 수도가 어디인지 제시되어 있지 않음</td>
     </tr>

     <tr>
       <td>13</td>
       <td> <?php echo $position1[0].",".$position1[1];?></td>
       <td> <?php echo $answer2[0];echo ","; echo $answer2[1];?></td>
       <td><?php if($answer2[0]==$position1[0] && $answer2[1]==$position1[1]) {
          echo "O";}
          else {echo "X";
       }?></td>
       <td class="sum"><?php if($answer2[0]==$position1[0] && $answer2[1]==$position1[1]) {
          echo "3";}
          else {echo "0";
       };?></td>
      <td>	제시된 소문장의 가장 적절한 제목으로 적절한 것 찾기</td>
     </tr>

     <tr>
       <td>14</td>
       <td> <?php echo $received[11];?></td>
       <td> <?php echo $answer[11];?></td>
       <td><?php if ($received[11]==$answer[11]){ echo "O";} else {echo "X";}?></td>
       <td class="sum"><?php echo jumsu($received[11],$answer[11],$baejum[0]);?></td>
      <td>1,2,3,5번에 사용된 it은 비인칭주어로서, 날씨, 요일, 거리, 시간을 의미할 때 사용할 수 있는 주어임 </td>
     </tr>

     <tr>
       <td>15</td>
       <td> <?php echo $received[12];?></td>
       <td> <?php echo $answer[12];?></td>
       <td><?php if ($received[12]==$answer[12]){ echo "O";} else {echo "X";}?></td>
       <td class="sum"><?php echo jumsu($received[12],$answer[12],$baejum[0]);?></td>
      <td>	문맥의 흐름상, 이유(because) 와 역접(but, however)의 접속사가 사용되어야 함 </td>
     </tr>

     <tr>
       <td>16</td>
       <td> <?php echo $received[13];?></td>
       <td> <?php echo $answer[13];?></td>
       <td><?php if ($received[13]==$answer[13]){ echo "O";} else {echo "X";}?></td>
       <td class="sum"><?php echo jumsu($received[13],$answer[13],$baejum[0]);?></td>
      <td> 환경을 보호하기 위해 글쓴이가 결심한 내용에 대해 답할 수 있음 </td>
     </tr>

     <tr>
       <td>17</td>
       <td> <?php echo $received[14];?></td>
       <td> <?php echo $answer[14];?></td>
       <td><?php if ($received[14]==$answer[14]){ echo "O";} else {echo "X";}?></td>
       <td class="sum"><?php echo jumsu($received[14],$answer[14],$baejum[0]);?></td>
      <td> ⓐwhich-> who, ⓑtake -> to take , ⓒheavy -> heavier 로 수정되어야 함 </td>
     </tr>

     <tr>
       <td>18</td>
       <td> <?php echo $received[15];?></td>
       <td> <?php echo $answer[15];?></td>
       <td><?php if ($received[15]==$answer[15]){ echo "O";} else {echo "X";}?></td>
       <td class="sum"><?php echo jumsu($received[15],$answer[15],$baejum[0]);?></td>
      <td> 문맥상 제시된 문장이 위치할 가장 자연스러운 곳은 1번임 </td>
     </tr>

     <tr>
       <td>19</td>
       <td> <?php echo $received[16];?></td>
       <td> <?php echo $answer[16];?></td>
       <td><?php if ($received[16]==$answer[4]){ echo "O";} else {echo "X";}?></td>
       <td class="sum"><?php echo jumsu($received[16],$answer[16],$baejum[0]);?></td>
      <td> ①shower , ②water ③paper cups and plates ④picnic 로 수정되어야 함 </td>
     </tr>


          <tr>
            <td>20</td>
            <td> <?php echo $received[17];?></td>
            <td> <?php echo $answer[17];?></td>
            <td><?php if ($received[17]==$answer[17]){ echo "O";} else {echo "X";}?></td>
            <td class="sum"><?php echo jumsu($received[17],$answer[17],$baejum[0]);?></td>
           <td> 일회용품을 사용하지 않음으로서 나무를 절약할 수 있다는 내용이 들어가야 함 </td>
          </tr>

          <tr>
            <td>21</td>
            <td> <?php echo $received[18];?></td>
            <td> <?php echo $answer[18];?></td>
            <td><?php if ($received[18]==$answer[18]){ echo "O";} else {echo "X";}?></td>
            <td class="sum"><?php echo jumsu($received[18],$answer[18],$baejum[0]);?></td>
           <td>	자연환경을 보호하자는 글을 읽고 유추할 수 있는 문장은 1번임 </td>
          </tr>

          <tr>
            <td>22</td>
            <td> <?php echo $received[19];?></td>
            <td> <?php echo $answer[19];?></td>
            <td><?php if ($received[19]==$answer[19]){ echo "O";} else {echo "X";}?></td>
            <td class="sum"><?php echo jumsu($received[19],$answer[19],$baejum[0]);?></td>
           <td> 나무를 아끼는 것과 물을 절약하자는 글을 모두 포함하는 제목으로 적절한 것은 2번임 </td>
          </tr>

          <tr>
            <td>23</td>
            <td> <?php echo $received[20];?></td>
            <td> <?php echo $answer[20];?></td>
            <td><?php if ($received[20]==$answer[20]){ echo "O";} else {echo "X";}?></td>
            <td class="sum"><?php echo jumsu($received[20],$answer[20],$baejum[0]);?></td>
           <td>	earrings : 귀걸이, bracelets : 팔찌 </td>
          </tr>

          <tr>
            <td>24</td>
            <td> <?php echo $received[21];?></td>
            <td> <?php echo $answer[21];?></td>
            <td><?php if ($received[21]==$answer[21]){ echo "O";} else {echo "X";}?></td>
            <td class="sum"><?php echo jumsu($received[21],$answer[21],$baejum[1]);?></td>
           <td>	제시된 표를 정확하게 문장으로 표현하지 않은 것 찾기 </td>
          </tr>

          <tr>
            <td>25</td>
            <td> <?php echo $received[22];?></td>
            <td> <?php echo $answer[22];?></td>
            <td><?php if ($received[22]==$answer[22]){ echo "O";} else {echo "X";}?></td>
            <td class="sum"><?php echo jumsu($received[22],$answer[22],$baejum[0]);?></td>
           <td>	자연환경과 관련된 글에 가장 적합한 제목 찾기 </td>
          </tr>

          <tr>
            <td>26</td>
            <td> <?php echo $received[23];?></td>
            <td> <?php echo $answer[23];?></td>
            <td><?php if ($received[23]==$answer[23]){ echo "O";} else {echo "X";}?></td>
            <td class="sum"><?php echo jumsu($received[23],$answer[23],$baejum[0]);?></td>
           <td>	99th : ninety-ninth </td>
          </tr>




   </tbody>
   <tfoot>
     <td>합계</td>
     <td> </td>
     <td> </td>
     <td> </td>
     <td><script>var sum = 0,
         sumElements = document.querySelectorAll('#myTable .sum');

     Array.prototype.forEach.call(sumElements, function (el) {
         sum += parseInt(el.innerText);
     });

       document.write(sum); </script></td>
   </tfoot>
 </table>
<br>
<h2>서술형 답안(4 문제/20점)</h2>
<br>

<table border="1">
  <tr>
    <td>문항</td>   <td>입력값</td> <td>정답</td> <td>해설</td>
  </tr>
  <tr>
    <td>서술형 1 </td>   <td> <?php echo $_POST['s1']?> </td> <td> 1) worried <br> 2) excited <br> 3) happy</td> <td>제시된 글의 주인공의 감정변화를 나타내는 형용사 찾기</td>
  </tr>
  <tr>
    <td>서술형 2</td>   <td><?php  echo $_POST['s2']?> </td> <td>A) without <br> B) leftover</td> <td> without : ~없이 , leftover : 남은</td>
  </tr>
  <tr>
    <td>서술형 3</td>   <td><?php  echo $_POST['s3']?> </td> <td>3-A) stand <br> 3-B) miss <br>  3-C) care</td> <td>stand : 참다, 일어서다. miss : 놓치다. 그리워하다. care :  관심을 갖다  take care of : ~를 돌보다</td>
  </tr>
  <tr>
    <td>서술형 4</td>   <td><?php  echo $_POST['s4']?> </td> <td>You’d better stop</td> <td>had better : ~하는게 낫다</td>
  </tr>

</table>

  <button class="button" type="button" onclick="window.open('http://127.0.0.1/jw/eng20171mid.php','ot')">문제로 돌아가기</button><br>


<!--
 문항 번호	정답	비 고
 1	1	liquefy : 액체로 되다
 2	4	leftover : 잉여, 남는 것, 초과된 것의 의미로 trash와 동의어가 될 수 없음
 3	4 and 5	성장하다 :  grow up = be raised
 4	2	action-driven way :  행동에 주안점을 둔 표현( ex: I ride a bike to go to school.) , vehicle-driven way : 교통수단에 주안점을 둔 표현(ex. I go to school by bus.)
 5	2	reminder의 표현으로 사용할 수 있는 것 : Don’t forget to = make sure that~=remember to ~
 6	3	love를 표현하기 위해 사용된 metaphor에 my memories는 해당되지 않음
 7	5	5번의 경우 날씨를 표현할 때 사용하는 비인칭주어, 나머지는 지시대명사임
 8	1	1번의 it을 제외한 나머지는 모두 computer를 의미함
 9	1	선행사가 사람일 경우 주격관계대명사는 who, 선행사가 사물일 경우 주격관계대명사는 which를 사용함
 10	5	문맥상 제시된 문장이 위치할 가장 자연스러운 곳은 5번임. 수업이 매우 재미있어 시간이 빨리 지난다는 의미임
 11	4	제시된 글에 의하면 모하메드는 작년에 몇주간 학교를 갈수 없었다 라고 되어있음. absent from : ~결석하다
 12	3	Capital : 수도, 위글에는 수도가 어디인지 제시되어 있지 앖음
 13	2 and 4	제시된 소문장의 가장 적절한 제목으로 적절한 것 찾기
 14	4	1,2,3,5번에 사용된 it은 비인칭주어로서, 날씨, 요일, 거리, 시간을 의미할 때 사용할 수 있는 주어임
 15	5	문맥의 흐름상, 이유(because) 와 역접(but, however)의 접속사가 사용되어야 함
 16	2	환경을 보호하기 위해 글쓴이가 결심한 내용에 대해 답할 수 있음
 17	5	ⓐwhich-> who, ⓑtake -> to take , ⓒheavy -> heavier 로 수정되어야 함
 18	1	문맥상 제시된 문장이 위치할 가장 자연스러운 곳은 1번임
 19	5	①shower , ②water ③paper cups and plates ④picnic 로 수정되어야 함
 20	5	일회용품을 사용하지 않음으로서 나무를 절약할 수 있다는 내용이 들어가야 함
 21	1	자연환경을 보호하자는 글을 읽고 유추할 수 있는 문장은 1번임
 22	2	나무를 아끼는 것과 물을 절약하자는 글을 모두 포함하는 제목으로 적절한 것은 2번임
 23	2	earrings : 귀걸이, bracelets : 팔찌
 24	3	제시된 표를 정확하게 문장으로 표현하지 않은 것 찾기
 25	3	자연환경과 관련된 글에 가장 적합한 제목 찾기
 26	4	99th : ninety-ninth
 서술형
 1	 1) worried
  2) excited
  3) happy	제시된 글의 주인공의 감정변화를 나타내는 형용사 찾기
 서술형2	 A) without
  B) leftover	without : ~없이 leftover : 남은
 서술형3	 3-A) stand
  3-B) miss
  3-C) care	stand : 참다, 일어서다.
 miss : 놓치다. 그리워하다.
 care :  관심을 갖다  take care of : ~를 돌보다
 서술형4	 You’d better stop	had better : ~하는게 낫다
-->

  </body>
</html>
