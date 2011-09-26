#include <stdio.h>

int main()
{
  int first  = 1;
  int second = 2;
  int total  = 0;
  while(second < 4000000){
    if(second % 2 == 0){
      total += second; 
    }  
    int third = first + second;
    first  = second;
    second = third;
  }

  printf("%d\n", total);
  return 1;
}
