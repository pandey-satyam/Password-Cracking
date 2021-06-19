<html>
<!--Using the format already given in Sample Solution-->
<head>
<title> Satyam Pandey MD5 Cracker</title>
</head>
<body>
<h2> Hey!! Lets start Cracking Pin</h1>
<h3> Satyam MD5 Cracker(4 letter pin)</h3>
<h4 align="center"> <font color="black" size="25" face="Constantia"><u><marquee> Just a Brute force Hash Cracking</marquee></h4> </u></b></font>

<pre>
<!--Using the format already given in Sample Solution-->
Debug Output:
<?php
$goodtext = "Not found";
// If there is no parameter, this code is all skipped
if ( isset($_GET['md5']) ) {//if you have parameter
    $time_pre = microtime(true);
    $md5 = $_GET['md5'];//code

    $txt = "0123456789";//10 possiblities for each character, so 10000 pin combinations possbile
    $show = 15;//15 attempts we ought to show
//Brute force
    for($i=0; $i<strlen($txt); $i++ ) {
        $ch1 = $txt[$i];
        for($j=0; $j<strlen($txt); $j++ ) {
            $ch2 = $txt[$j];
              for($k=0;$k<strlen($txt);$k++){
              $ch3=$txt[$k];
                for($a=0;$a<strlen($txt);$a++){
                $ch4=$txt[$a];
                        $try = $ch1.$ch2.$ch3.$ch4;

            // Run the hash and then check to see if we match
            $check = hash('md5', $try);//$try kisko match kr rha that we are checking
            if ( $check == $md5 ) {
                $goodtext = $try;
                break;   // Exit the inner loop
            }

            // Debug output until $show hits 0
            if ( $show > 0 ) {
                print "$check $try\n";
                $show = $show - 1;
            }
        }

    }
  }
}
    // Compute elapsed time
    $time_post = microtime(true);
    print "Elapsed time: ";
    print $time_post-$time_pre;
    print "\n";
}
?>
</pre>
<!-- Use the very short syntax and call htmlentities() -->
<p>Original Text: <?= htmlentities($goodtext); ?></p>
<form>
<input type="text" name="md5" size="60" />
<input type="submit" value="Crack MD5"/>
</form>
<ul>
<li><a href="index.php">Reset here</a></li>
<li><a href="md5.php">MD5 Encoder</a></li>
<li><a href="makecode.php">MD5 Code Maker</a></li>
<li><a
href="https://github.com/csev/wa4e/tree/master/code/crack"
target="_blank">Reference Source code Used for this application suggested on Coursera</a></li>
</ul>
</body>
</html>
