<?php
// if its dev append src to front because thats how dev works
$front = getcwd();
if ($IS_DEV == 1) {
    $front = getcwd() . "/src";
}
if($IS_DEV == 0) {
    $front = getcwd() . "/build";
}
?>
<head>
    <title>QR</title>
</head>
<style>
<?php
$css = fopen($front . "/style.css", "r");
while ($line = fgets($css)) {
    echo $line . "\n";
}
?>
</style>
<b>
    <!-- <b> -->
        <main>
            <h1>My portfolio</h1>
           <b id="i">
            <p>This is just my retro site but on a QR code.</p>
<p id="al">
'Some info about me<br />
I am Saahil dutta, from USA<br />
I am a <?php echo 13 - (2027 - date("Y")); ?>th grader in KCD. 
Apart from coding, some other activities that I love to do:<br />
<ul> 
<li>
Playing Games
</li>
<li>
Eating different types of food
</li>
<li>
Robotics
</li>
</ul>
</p>
<b id="ar">
I started programming during the Covid Pandemic in 2020. I am fluent in new like programming languages such as CSS , HTML, Javascript and Typescript.
My field of Interest's are building new  Web Technologies and Products and also in areas related to Backend Services, CLI Services
Whenever possible, I also apply my passion for developing products with Node.js and Modern Javascript Library and Frameworks  like React.js
</b>
</main>
<footer>
    CC <?php echo date("Y"); ?> - 
     Generated @ <?php echo date("Y-m-d"); ?>
    <?php if ($IS_DEV == 1) {
        echo "<br><strong style='color: yellow;'>Your on dev mode.</strong>";
    } ?>
        </footer>
</b>
<?php // at the end close all PHP files
fclose($css);
?>
