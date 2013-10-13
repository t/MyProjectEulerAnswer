

def f(total, coins)
  ret = 0
  coins.each_with_index{|coin, i|
    sum = total + coin
    #p sum
    if sum > 200
    elsif sum == 200
      ret += 1
    else
      ret += f(sum, coins[i..(coins.length - 1)])
    end
  }
  return ret
end

coins = [1, 2, 5, 10, 20, 50, 100, 200]
coins.reverse!

ret = f(0, coins)

p ret



