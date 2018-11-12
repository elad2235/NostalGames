''' Elad Pezarker 311534234'''

def CheckDate(day,month,year):
    '''Function Checks if Date entered is valid'''
    if year>=0 and 1<=month<=12 and 1<=day<=31: 
        if month ==1 or month ==3 or month ==7 or month ==8 or month ==10 or month ==12:
            return True
        elif month ==4 or month ==6 or month==9 or month== 11:
            if day <=30:
                return True
        elif day <= 28:
            return True
    return False
        
        
def RemoveMaxDigit(num):
   
    '''function removes largest digit from  the entire number.'''

    temp =num
    num =0
    maxV = temp %10
    temp//=10
    
    while(temp!=0):
        dig = temp%10
        if dig > maxV:
            maxV = dig
        temp= temp//10
        num*=10
        num += dig
     
    newnum=0
    
    while num!=0:
        dig = num%10
        if dig != maxV:
            newnum*=10
            newnum+=dig
        num= num//10
        
    return newnum
        
def CalculateIntegral(x,n):
    '''function calculates integral of function F(x)=e^-x^2''' 
    res = x
    hezka = x
    atzeret =1
    for i in range(1,n):
        atzeret*=i
        hezka*=x*x
        res += (1/atzeret)*(hezka/(2*i+1))*(-1)**(i)
        
    return res
        
        
def AreAmicableNumbers(num1,num2):
    '''function checks if sum of divisors equals to the other number for each one'''
    sumMehalkim1=0
    sumMehalkim2=0
    lim =max(num1,num2)
    
    for i in range(1,lim):
        if(i<num1 and num1%i==0):
            sumMehalkim1+=i
            
        if(i<num2 and num2%i==0):
            sumMehalkim2+=i
    
    return (sumMehalkim1==num2) and (sumMehalkim2==num1)

def CheckArithmeticSeries(number,d):
    '''function cheks if number given is arithmetic series with d given'''
    if number//10 == 0:
        return True
    
    dig = number%10
    
    number = number//10
    if(dig-d == number%10):
        return CheckArithmeticSeries(number, d)
    
    
    return False
    
    
        

def PrintX(n,x):
    '''function prints X using recursion and no loops'''
    if n==0 : return
    if x<n :
        PrintSpace(x)
    else:
        PrintSpace(n-1)
        
    print('*',end="")
    if x<n: 
        PrintSpace(abs(n-x-2))
    else:
        PrintSpace(abs(x-n))
    if x!=n-1:
        print('*',end="")
        
    print()
    
    n-=1
    x+=1
        
    PrintX(n,x)
    
    
def PrintSpace(x):
    '''function prints x amount of spaces in the same line recursively'''
    if x==0: return
    
    
    print (' ',end='')
    x-=1
    PrintSpace(x)

