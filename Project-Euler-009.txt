import sys

total = 1000 

for i in range(1, total):
  for j in range(i + 1, total - i):
    k = total - i - j
    if j > k : break
    if i ** 2 + j ** 2 == k ** 2:
      print( i * j * k )

