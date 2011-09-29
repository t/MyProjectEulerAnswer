import sys

def integer_factorization(n):
  ret = {}
  i = 2
  while n != 1:
    if n % i == 0:
      if i not in ret : ret[i] = 0
      ret[i] += 1
      n /= i
    else:
      i += 1
  return ret

def count_divisor(n):
  ret = 1
  fac = integer_factorization(n)
  for i in fac:
    ret *= fac[i] + 1
  return ret

i = 0
n = 0
while 1:
  i += 1
  n += i
  c = count_divisor(n)
  print(n, c)
  if c > 500: break
