import sys

total = 0
for i in range(999, 99, -1):
  for j in range(999, 99, -1):
    n  = i * j
    nstr = str(n)
    rstr = nstr[::-1]
    if nstr == rstr:
      if n > total:
        total = n

print(total)

