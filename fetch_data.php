<?php
if(isset($_POST['get_option']))
{
  $option = $_POST['get_option'];
  if($option == "c")
  {
    echo"#include <stdio.h>
#include <conio.h>
void main()
{
  //code
}

getch()";
  }
  elseif ($option == "c++")
  {
    echo"#include <iostream>
using namespace std;
int main()
{
    // code
    return 0;
}";
  }
  elseif ($option == "python")
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
