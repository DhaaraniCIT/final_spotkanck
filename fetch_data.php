<?php
if(isset($_POST['get_option']))
{
  $option = $_POST['get_option'];
  if($option == "0")
  {
    echo"#include <stdio.h>
#include <conio.h>
void main()
{
  //code
}

getch()";
  }
  elseif ($option == "1")
  {
    echo"#include <iostream>
using namespace std;
int main()
{
    // code
    return 0;
}";
  }
  elseif ($option == "2")
  {
    echo"print('Hello World')";
  }
  else
  {
    echo"<?php
      //code
?>";
  }
}
 ?>
