import sys

n = 10001

primes = [2]
i = 1
while len(primes) < n:
  i += 1
  for prime in primes:
    if i % prime == 0:
      break
  else:
    primes.append(i)

print(primes[len(primes) - 1])

