
max_c = 0
max_i = 0
for i in range(1, 1000000):
  print(i)
  n = i
  c = 1 
  while n != 1 :
    if n % 2 == 0:
      n = n / 2
    else:
      n = 3 * n + 1
    c += 1
  if c > max_c:
    max_c = c
    max_i = i

print("max", max_i, max_c)
