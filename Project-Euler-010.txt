import sys

n = 2000000

primes = [2]
i = 1
while i < n:
  if i % 1000 == 0 : print(i)
  i += 1
  for prime in primes:
    if i % prime == 0:
      break
  else:
    primes.append(i)

print(sum(primes))

