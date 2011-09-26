import sys

def gcb(a, b):
 # Euclidean algorithm
 if b > a: a, b = b, a
 if b == 0: return a
 while 1: 
   c = a % b
   if c == 0 : return b
   a = b
   b = c 

def lcm(a, b):
  return (a * b) / gcb(a, b)

n = 1
for i in range(1, 21):
  n = lcm(n, i) 

print(n)

