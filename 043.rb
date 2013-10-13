
numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
checks  = [2, 3, 5, 7, 11, 13, 17]
sum     = 0
numbers.permutation(10) {|d0, d1, d2, d3, d4, d5, d6, d7, d8, d9| 
  d = d0.to_s + d1.to_s + d2.to_s + d3.to_s + d4.to_s + d5.to_s + d6.to_s + d7.to_s + d8.to_s + d9.to_s
  ok = true
  checks.each_with_index{|c, i|
    j = d[(i + 1)..(i + 3)].to_i
    if j % c != 0
      ok = false
      break
    end
  }
  if ok
    sum += d.to_i
  end
}
p sum

