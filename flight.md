### Title: Sql Flight Assignment
### Name: Ankur Patel

#### Question 1:
Print a passenger list for flight 3 on 4-1.

SQL:
```
SELECT name
FROM passengers JOIN pass_ticketed ON ( pass_ticketed.passid = passengers.passid ) 
WHERE fltno =3
AND DATE =  '4-1'
```

#### Answer:
```
name
Duck, Donald
Lamour, Dorothy
Marvin, Lee
Mazurki, Mike
Romero, Cesar
Wayne, John
```


#### Question 2:
Print a passenger list for flight 5 on 4-2.

SQL:
```
SELECT name
FROM passengers JOIN pass_ticketed ON ( pass_ticketed.passid = passengers.passid ) 
WHERE fltno =5
AND DATE =  '4-2'
```
#### Answer:
```
name
Mouse, Mickey
Moose, Bullwinkle
```

#### Question 3:
Print a list of all overbooked flights.

SQL: 
```

```

#### Answer:
```

```


#### Question 4:
Print a list of passengers with more than one ticket.

SQL: 
```
SELECT name 
FROM passengers JOIN pass_ticketed ON ( pass_ticketed.passid = passengers.passid )
GROUP BY pass_ticketed.passid, name 
HAVING (count(*) > 1)
```

#### Answer:
```
name
Simpson, Richard
Halverson, Ranette
Carpenter, Stewart
Wayne, John
Mazurki, Mike
Marvin, Lee
Lamour, Dorothy
Mouse, Mickey
Duck, Donald
Moose, Bullwinkle
```

#### Question 5:
Print a list of passengers with more than one ticket on the same day.

SQL: 
```
SELECT name 
FROM passengers JOIN pass_ticketed ON ( pass_ticketed.passid = passengers.passid )
GROUP BY pass_ticketed.passid, date
HAVING (count(*) > 1)
```

#### Answer:
```
name
Simpson, Richard
Carpenter, Stewart
Wayne, John
Marvin, Lee
Lamour, Dorothy
Duck, Donald

```

#### Question 6:
Print a list of flights that use aircraft N173WY.

SQL: 
```
SELECT fltno
FROM aircraft_assignments
WHERE acno =  'N173WY'
```

#### Answer:
```
fltno
2
5
1
4
```


#### Question 7:
Print a list of pilots who fly on April 1.

SQL: 
```
SELECT DISTINCT name
FROM pilots
JOIN pilot_assignments ON ( pilots.pilotid = pilot_assignments.pilotid ) 
WHERE DATE =  '4-1'
```

#### Answer:
```
name
Wright, Orville
Post, Wiley
Lindergh, Charles
Yeager, Chuck
```

#### Question 8:
Print a list of pilots who fly on both days.

SQL: 
```
SELECT DISTINCT name
FROM pilots
JOIN pilot_assignments ON ( pilots.pilotid = pilot_assignments.pilotid ) 
WHERE DATE >=  '4-1'
AND DATE <=  '4-2'
```

#### Answer:
```
name
Wright, Orville
Post, Wiley
Lindergh, Charles
Yeager, Chuck
Lovell, James
Wittman. Steve
Boyington, Greg
Hoover, Bob
```

#### Question 9:
Print a list of pilots who have two flights on the same day.

SQL: 
```

```

#### Answer:
```

```

#### Question 10:
Print a List of flights that do not have a complete crew.

SQL: 
```

```

#### Answer:
```

```


#### Question 11:
Print of list of flights where destination is DFW.

SQL: 
```
SELECT fltno, DATE
FROM flights
WHERE destination =  'DFW'
```

#### Answer:

fltno | date
-------|------
  4  |4-1
  5  |4-1
  6  |4-2
  4  |4-2
  5  |4-2





















