<?php
// total 49
echo "<h1>Maths function in PHP  </h1>";
//Return the absolute value of different numbers:
echo "<h2>1:abs() </h2>";
echo(abs(6.7) . "<br>");
echo(abs(-6.7) . "<br>");
echo(abs(-3) . "<br>");
echo(abs(3));
//Return the arc cosine of different numbers:
echo "<h2>2:acos() </h2>";  
echo(acos(0.64) . "<br>");
echo(acos(-0.4) . "<br>");
echo(acos(0) . "<br>");
echo(acos(-1) . "<br>");
echo(acos(1) . "<br>");
echo(acos(2));
//Return the inverse hyperbolic cosine of different numbers
echo "<h2>3:acosh() </h2>";  
echo(acosh(7) . "<br>");
echo(acosh(56) . "<br>");
echo(acosh(2.45));
//Return the arc sine of different numbers:
echo "<h2>4:asin() </h2>";    
echo(asin(0.64) . "<br>");
echo(asin(-0.4) . "<br>");
echo(asin(0) . "<br>");
echo(asin(-1) . "<br>");
echo(asin(1) . "<br>");
echo(asin(2));
//Return the inverse hyperbolic sine of different numbers:
echo "<h2>5:asinh() </h2>";     
echo(asinh(7) . "<br>");
echo(asinh(56) . "<br>");
echo(asinh(2.45));
//Return the arc tangent of different numbers with the atan() function:
echo "<h2>6:atan() </h2>";        
echo(atan(0.50) . "<br>");
echo(atan(-0.50) . "<br>");
echo(atan(5) . "<br>");
echo(atan(-5) . "<br>");
echo(atan(100) . "<br>");
echo(atan(-100));
//Return the arc tangent of two variables with the atan2() function:
echo "<h2>7:atan2() </h2>";        
echo(atan2(0.50,0.50) . "<br>");
echo(atan2(-0.50,-0.50) . "<br>");
echo(atan2(5,5) . "<br>");
echo(atan2(10,20) . "<br>");
echo(atan2(-5,-5) . "<br>");
echo(atan2(-10,10));
//Return the inverse hyperbolic tangent of different numbers:
echo "<h2>8:atanh() </h2>";        
 echo(atanh(M_PI_4) . "<br>");
echo(atanh(0.50) . "<br>");
echo(atanh(-0.50) . "<br>");
echo(atanh(1) . "<br>");
echo(atanh(-1));
//Convert a hexadecimal number to octal number:
echo "<h2>9:base_convert </h2>";        
$hex = "E196";
echo base_convert($hex,16,8);
//Convert binary to decimal:
echo "<h2>10:bindec </h2>";        
echo bindec("0011") . "<br>";
echo bindec("01") . "<br>";
echo bindec("11000110011") . "<br>";
echo bindec("111");
//Round numbers up to the nearest integer:
// maths function ceil returns the rounded value for positive decimal and returns value in negative decimal point value
echo "<h2>11:ceil() </h2>";        
echo(ceil(0.60) . "<br>");
echo(ceil(0.40) . "<br>");
echo(ceil(5) . "<br>");
echo(ceil(5.1) . "<br>");
echo(ceil(-5.1) . "<br>");
echo(ceil(-5.9));
//Return the cosine of different numbers:
 echo "<h2>12:cos() </h2>";
 echo(cos(3) . "<br>");
echo(cos(-3) . "<br>");
echo(cos(0) . "<br>");
echo(cos(M_PI) . "<br>");
echo(cos(2*M_PI));         
//Return the hyperbolic cosine of different numbers
echo "<h2>13:cosh() </h2>";
echo(cosh(3) . "<br>");
echo(cosh(-3) . "<br>");
echo(cosh(0) . "<br>");
echo(cosh(M_PI) . "<br>");
echo(cosh(2*M_PI));         
//Convert decimal to binary:
echo "<h2>14:decbin() </h2>";
echo decbin("3") . "<br>";
echo decbin("1") . "<br>";
echo decbin("1587") . "<br>";
echo decbin("7");
//Convert decimal to hexadecimal:
echo "<h2>15:dechex() </h2>";
echo dechex("30") . "<br>";
echo dechex("10") . "<br>";
echo dechex("1587") . "<br>";
echo dechex("70");
//Convert decimal to octal:
echo "<h2>16:decoct() </h2>";
echo decoct("30") . "<br>";
echo decoct("10") . "<br>";
echo decoct("1587") . "<br>";
echo decoct("70");
//Convert degrees to radians:
echo "<h2>17:deg2rad() </h2>";
echo deg2rad("45") . "<br>";
echo deg2rad("90") . "<br>";
echo deg2rad("360");
//Return 'E' raised to the power of different numbers:
echo "<h2>18:exp() </h2>";
echo(exp(0) . "<br>");
echo(exp(1) . "<br>");
echo(exp(10) . "<br>");
echo(exp(4.8)); 
//Return exp() - 1:
echo "<h2>19:expm1() </h2>";
echo(expm1(0) . "<br>");
echo(expm1(1) . "<br>");
echo(expm1(10) . "<br>");
echo(expm1(4.8));
//Round numbers down to the nearest integer:
echo "<h2>20:floor() </h2>";
echo(floor(0.60) . "<br>");
echo(floor(0.40) . "<br>");
echo(floor(5) . "<br>");
echo(floor(5.1) . "<br>");
echo(floor(-5.1) . "<br>");
echo(floor(-5.9));
//Return the remainder of x/y:
echo "<h2>21:fmod() </h2>";
echo(fmod(20, 4) . "<br>");
echo(fmod(20, 3) . "<br>");
echo(fmod(15, 6) . "<br>");
echo(fmod(-10, 3) . "<br>");
echo(fmod(0, 0));
//Return largest possible random value that can be returned by rand()
echo "<h2>22:getrandmax() </h2>";
echo(getrandmax());
//Convert hexadecimal to decimal:
echo "<h2>23:hexdec() </h2>";
echo hexdec("1e") . "<br>";
echo hexdec("a") . "<br>";
echo hexdec("11ff") . "<br>";
echo hexdec("cceeff");
//Calculate the hypotenuse of different right-angle triangles:
echo "<h2>24:hypot() </h2>";
echo hypot(3,4) . "<br>";
echo hypot(4,6) . "<br>";
echo hypot(1,3) . "<br>";
echo sqrt(3*3+4*4);
//used for integer division.
echo "<h2>25:intdiv() </h2>";
echo intdiv(8, 4) . "<br>";
echo intdiv(5, 2) . "<br>";
echo intdiv(-5, -2);
//checks whether a value is finite or not.
//returns true (1) if the specified value is a finite number, otherwise it returns false/nothing
echo "<h2>26:is_finite() </h2>";
echo is_finite(2) . "<br>";
echo is_finite(log(0)) . "<br>";
echo is_finite(2000);
//Check whether a value is infinite or not:
//returns true (1) if the specified value is a finite number, otherwise it returns false/nothing
echo "<h2>27:is_infinite() </h2>";
echo is_infinite(2) . "<br>";
echo is_infinite(log(0)) . "<br>";
echo is_infinite(2000);
//Check whether a value is 'not-a-number':
echo "<h2>28:is_nan() </h2>";
echo is_nan(200) . "<br>";
echo is_nan(acos(1.01));
//Return a pseudo random number in a range between 0 and 1:
echo "<h2>29:lcg_value() </h2>";
echo lcg_value();
//returns the natural logarithm of a number, or the logarithm of number to base.
echo "<h2>30:log() </h2>";
echo(log(2.7183) . "<br>");
echo(log(2) . "<br>");
echo(log(1) . "<br>");
echo(log(0));
//Return the base-10 logarithm of different numbers:
echo "<h2>31:log10() </h2>";
echo(log10(2.7183) . "<br>");
echo(log10(2) . "<br>");
echo(log10(1) . "<br>");
echo(log10(0));
//Return log(1+number) for different numbers:
echo "<h2>32:log1p() </h2>";
echo(log1p(2.7183) . "<br>");
echo(log1p(2) . "<br>");
echo(log1p(1) . "<br>");
echo(log1p(0));
//returns the highest value in an array, or the highest value of several specified values.
echo "<h2>33:max() </h2>";
echo(max(2,4,6,8,10) . "<br>");
echo(max(22,14,68,18,15) . "<br>");
echo(max(array(4,6,8,10)) . "<br>");
echo(max(array(44,16,81,12)));
// returns the lowest value in an array, or the lowest value of several specified values.
echo "<h2>34:min() </h2>";
echo(min(2,4,6,8,10) . "<br>");
echo(min(22,14,68,18,15) . "<br>");
echo(min(array(4,6,8,10)) . "<br>");
echo(min(array(44,16,81,12)));
//Return largest possible random value that can be returned by mt_rand():
echo "<h2>35:mt_getrandmax() </h2>";
echo(mt_getrandmax());
//Generate random numbers:
echo "<h2>36:mt_rand() </h2>";
echo(mt_rand() . "<br>");
echo(mt_rand() . "<br>");
echo(mt_rand(10,100));
//Convert octal to decimal:
echo "<h2>37:octdec() </h2>";
echo octdec("36") . "<br>";
echo octdec("12") . "<br>";
echo octdec("3063") . "<br>";
echo octdec("106");
//Return the value of PI:
echo "<h2>38:pi() </h2>";
echo(pi());
//returns x raised to the power of y.
echo "<h2>39:pow() </h2>";
echo(pow(2,4) . "<br>");
echo(pow(-2,4) . "<br>");
echo(pow(-2,-4) . "<br>");
echo(pow(-2,-3.2));
//Convert radians to degrees:
echo "<h2>40:rad2deg() </h2>";
echo rad2deg(pi()) . "<br>";
echo rad2deg(pi()/4);
//Generate random numbers:
echo "<h2>41:rand() </h2>";
echo(rand() . "<br>");
echo(rand() . "<br>");
echo(rand(10,100));
//rounds a floating-point number.
echo "<h2>42:round() </h2>";
echo(round(0.60) . "<br>");
echo(round(0.50) . "<br>");
echo(round(0.49) . "<br>");
echo(round(-4.40) . "<br>");
echo(round(-4.60));
//returns the sine of a number.
echo "<h2>43:sin() </h2>";
echo(sin(3) . "<br>");
echo(sin(-3) . "<br>");
echo(sin(0) . "<br>");
echo(sin(M_PI) . "<br>");
echo(sin(M_PI_2));
//Return the hyperbolic sine of different numbers:
echo "<h2>44:sinh() </h2>";
echo(sinh(3) . "<br>");
echo(sinh(-3) . "<br>");
echo(sinh(0) . "<br>");
echo(sinh(M_PI) . "<br>");
echo(sinh(M_PI_2));
//Return the square root of different numbers
echo "<h2>45:sqrt() </h2>";
echo(sqrt(0) . "<br>");
echo(sqrt(1) . "<br>");
echo(sqrt(9) . "<br>");
echo(sqrt(0.64) . "<br>");
echo(sqrt(-9));
//Return the tangent of different numbers:
echo "<h2>46:tan() </h2>";
echo(tan(M_PI_4) . "<br>");
echo(tan(0.50) . "<br>");
echo(tan(-0.50) . "<br>");
echo(tan(5) . "<br>");
echo(tan(10) . "<br>");
echo(tan(-5) . "<br>");
echo(tan(-10));
//Return the hyperbolic tangent of different numbers:
echo "<h2>47:tanh() </h2>";
echo(tanh(M_PI_4) . "<br>");
echo(tanh(0.50) . "<br>");
echo(tanh(-0.50) . "<br>");
echo(tanh(5) . "<br>");
echo(tanh(10) . "<br>");
echo(tanh(-5) . "<br>");
echo(tanh(-10));

?>