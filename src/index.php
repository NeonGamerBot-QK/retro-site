<!DOCTYPE html>
<?php
// if its dev append src to front because thats how dev works
$front = getcwd();
if ($IS_DEV == 1) {
    $front = getcwd() . "/src";
}
function imgUri($path)
{
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path);
    $base64 = "data:image/" . $type . ";base64," . base64_encode($data);
    return $base64;
}
$commitId = file_get_contents($front . "/build_info/commit_id");
$buildId = file_get_contents($front . "/build_info/build_id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retro - saahild.com</title>
</head>

<style>
<?php
$css = fopen($front . "/style.css", "r");
while ($line = fgets($css)) {
    echo $line . "\n";
}
?>
</style>
<body>
    <div>
        <main>
            <h1>My portfolio </h1>
           <div class="inner">
            <p >
               This is a more rundown less fancy no-js version of my site. This exists because some people just dont want to read all the fancy content (or dont want to be seeing all the bloatware ive put in there) so this site exists. </p>
<br>
<div>
<p class="align-left">
'Some info about me<br />
Hi Everyone, I am Saahil dutta, from USA<br />
I am a <?php echo 13 - (2027 - date("Y")); ?>th grader in KCD.<br />
Apart from coding, some other activities that I love to do!<br />
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
<div class="align-right">
I started programming during the Covid Pandemic in 2020. I am fluent in new like programming languages such as CSS , HTML, Javascript and Typescript.
<br />
My field of Interest's are building new  Web Technologies and Products and also in areas related to Backend Services, CLI Services
Whenever possible, I also apply my passion for developing products with Node.js and Modern Javascript Library and Frameworks  like React.js
</div>
</div>
</div>
               <hr class="divider" />
                <div id="badges">
            <?php
            $json_data = json_decode(
                file_get_contents($front . "/badges.json"),
                true
            );
            foreach ($json_data as $badge) {
                $src = imgUri($front . "/badges" . "/" . $badge["name"]);
                echo "<a href='" . $badge["href"] . "'>";
                if ($IS_DEV == 1) {
                    echo "<!-- " . json_encode($badge) . "-->";
                }
                echo "<img src='" . $src . "' />";
                echo "</a>";
            }
            ?>        
            </div>
</main>
<footer>
    Made with PHP - CC <?php echo date("Y"); ?>
    <br />
    <?php echo "<a href='https://github.com/NeonGamerBot-QK/retro-site/commit/" .
        $commitId .
        "'>Commit " .
        $commitId .
        "</a>"; ?> -    <?php echo "<a href='https://github.com/NeonGamerBot-QK/retro-site/actions/run/" .
     $buildId .
     "'>Build #" .
     $buildId .
     "</a>"; ?>
    <?php if ($IS_DEV == 1) {
        echo "<br><strong style='color: yellow;'>Your on dev mode.</strong>";
    } ?>
        </footer>
</div>
</body>
</html>
<?php // at the end close all PHP files
fclose($css);
?>
