<!DOCTYPE html>  
<html lang = "en">  
<head>  
<title>Laravel Calculator </title>
<style>  
body
{
    display: flex;
    background-color: #6DA5C0;
}
.calculator
{
    width: 70%;
}
.history
{
    width: auto;
}
#clear{  
width: 270px;  
border: 3px solid #05161A;  
    border-radius: 3px;  
    padding: 20px;
    background-color: #AE445A;
}  
.formstyle  
{  
width: 285px;  
height: 560px;  
margin: auto;  
border: 3px solid #072E33;  
background-color: #0F969C;
border-radius: 5px;  
padding: 20px;  
}
input  
{  
width: 22px;  
background-color: #05161A;  
color: white;  
border: 3px solid #072E33;  
    border-radius: 5px;  
    padding: 26px;  
    margin: 5px;  
    font-size: 15px;  
} 
#calc{  
width: 248px;  
border: 5px solid #072E33;  
    border-radius: 10px;  
    padding: 10px;
    margin: auto;
}
</style> 
</head>  
<body>
<div class="calculator">
<div class= "formstyle">
<form name = "form1" method= "post" action = "{{url('/')}}/ses">
@csrf
  <input id = "calc" type ="text" value= "{{$data['result'] ?? ''}}" name = "answer" style="font-size: 2.4rem; background-color: #6DA5C0;"> <br> <br>  
  <input type = "button" value = "7" onclick = "form1.answer.value += '7' ">  
  <input type = "button" value = "8" onclick = "form1.answer.value += '8' ">  
  <input type = "button" value = "9" onclick = "form1.answer.value += '9' ">  
  <input type = "button" value = "x" onclick = "form1.answer.value += '*' ">  
  <br> <br>  
  <input type = "button" value = "4" onclick = "form1.answer.value += '4' ">  
  <input type = "button" value = "5" onclick = "form1.answer.value += '5' ">  
  <input type = "button" value = "6" onclick = "form1.answer.value += '6' ">  
  <input type = "button" value = "-" onclick = "form1.answer.value += '-' ">  
  <br> <br>  
  <input type = "button" value = "1" onclick = "form1.answer.value += '1' ">  
  <input type = "button" value = "2" onclick = "form1.answer.value += '2' ">  
  <input type = "button" value = "3" onclick = "form1.answer.value += '3' ">  
  <input type = "button" value = "+" onclick = "form1.answer.value += '+' ">  
  <br> <br> 
  <input type = "button" value = "/" onclick = "form1.answer.value += '/' ">
  <input type = "button" value = "0" onclick = "form1.answer.value += '0' ">  
  <input type = "button" value = "." onclick = "form1.answer.value += '.' ">  
  <input value = "=" type="submit">
  <br>
  <input type = "button" value = "AC" onclick = "form1.answer.value = ' ' " id= "clear" >
  <br>
</form>  
</div> 
</div>
<div class="history">
    <h1>
        History
    </h1>
    <hr>
    @php
        foreach($data['equations'] as $a){
            echo "<h2> " . $a . "</h2>";
        }
    @endphp

</div>
</body>  
</html>