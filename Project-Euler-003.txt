#include <stdio.h>
#include <inttypes.h> 

int main()
{
  uint64_t current = 600851475143LL;
  for(uint64_t i = 1; i < current; i++){
    if(current % i == 0){
      current = current / i; 
    }
  }

  printf("%d\n", current);

  return 1;
}
