# Algorithm
A set of steps or instruction for completing a task.

 understanding algorithms is not just
knowing that an algorithm exists but
understanding
when to apply it understanding when to
apply an algorithm requires
properly understanding the problem at
hand 

> it's pretty hard
to define an
instruction set when you don't have a
clear idea of what problem you're trying
to solve

> algorithms should produce a result if it didn't
how would we know whether the algorithm
works or not
to be able to verify that our algorithm
works correctly


## Algorithm Guidelines
* cleary defined problem statment, what is the input, target look like(result|output)
* the steps in the algorithm needs to be in a very specific order
* the steps need to be distinct, you should not be able to break it down
* the algorithm should produce a result
* the algorithm should in a finite amount of time.
* executing the same steps for a given input must result the same output every time.
  
> there's no one single way to measure whether an
algorithm is the right solution
because it is all about context

## What makes a good algorithm?
1. **Correctness of the algorithm**
is deemed correct if on every run of the algorithm against all possible values in the input data we always get the output we expect. part of correctness means that for any
possible input the algorithm should always terminate or end
if these two are not true then our
algorithm isn't correct

2. **Efficiency** 
    * Time complexity: how much time algorithm to run, the less the efficient
    * Space complexity: it deals with the amount of memory required.


**How to figure out how efficient each algorithm is, and which aglorithm more suited to our purposes?** <br>
if we consider the number of tries to gues and number or search of a value as an indicator of the time they take to run through the app, this a good indicator for how long the algorithm runs, this called **running time of algorithm**, used to define time complexity

* Measure how well an algorithm does against the worst case<br>
  analysis the worst case quite useful, because it indicates algorthim will never perform wors than the worst case.






# Linear Search
for linear search the input can be generally described as a sorted series
of values and the output is a value matching the one we're looking for against order list or unorder list.

1. starts at teh beginning
2. compare the current value to the target
3. if not the target, move sequentially
4. repeat until target is found

# Binary Search
to make binary search works, the list must be sorted.<br>
**input**: sorted list <br>
**output**: the position of the target, or flag target not exits

1. starts in the middle point 
2. ask is the middle point(gues) equal to the target 
3. if not equal
4. ask middle is greater or less than the target
5. if middle > target, eleminate the right side of the list.
6. if middle < target, eleminate the left side of the list
7. repeat until middle is equal to target, if not flag not found
   

## comparison between linear and binary search in terms of time complexity

` (number of tries, number of values in list)`<br>
* linear search as the values get really large the number of tries gets large as well
  
  when n is 1000 the runtime
of linear search
measured by the number of operations is 1000
* for binary search it takes just 10



| Binary | Linear | 
| :---: | :---: | 
|<img width="437" alt="binary1" src="https://user-images.githubusercontent.com/40498170/143900527-925dcde0-9b0a-4515-a8f6-7588bd2b681f.png"> | <img width="437" alt="linear1" src="https://user-images.githubusercontent.com/40498170/143900600-ecce218a-d727-45ad-b54a-59f06a1a5e6b.png">
 | 

 | #1 | #2  | 
| :---:   | :-: | 
| <img width="430" alt="linearvsbinary1" src="https://user-images.githubusercontent.com/40498170/143901466-99f5d1fd-d830-4118-9957-1fb587b70e37.png"> | <img width="464" alt="linearvsbinary2" src="https://user-images.githubusercontent.com/40498170/143901737-14954ff8-33e0-4ee1-8f6f-022a45716c50.png"> | 

---
## Big O Notation
### logarithms
are a way of looking differently at exponential notation or indicies
````
2^5= 2*2*2*2*2= 32
base 2: is growth rate
exponential 5:  How big of the growth rate(how long u are doing it for a result)
32: the result 
````
````
2^0=1 How much did you grow for? 
exp 0 i haven't grown at all 
1 result: im the same size since you started

````
```
2^-1 =0.5
i have grown backwards, i lost weight
```

````
log2 32 = 5 --> logbase 2 of 32 is equal to 5

5 is number of tries it take to gues or search for values as indicator of the time it takes to run through the exercise.
this a good indicator of how long the Algorithm run for a give set of values 
Define Time Complexity

2 How fast you are growing

32 How big you ended up growing

Another explanation: 
If you know how fast your are growing and you know how big you end up growing, can you tell
me how long did it take?


````

````
log2 1 = 0
2 if you are Doubling, and you ended up 1 exact as the original size, you didn't grow
````

```
log2 0.5 = -1
if you are growing at doubling rate and you end up half size of the original, the the result is go back in time, it in the past. 
```

```
log3 81 = 4   

here im trebling rate and ended up at 81 it took me 4 tries to get the result.  
```
---
 <b>Big O </b>
 it measures the complexity as the number of inputs size grows O(n)   