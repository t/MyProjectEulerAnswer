import sys

n = 100

a = 0; b = 0
for i in range(1, n + 1):
  a += i ** 2
  b += i
b = b ** 2

print(b - a)

