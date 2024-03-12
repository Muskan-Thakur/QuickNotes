<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="slideshow"> </div>
    <style>
        .slideshow{
    background-position: center;
    background-repeat: no-repeat;
    position: absolute;
    top: 95%;
    height: 70ch; /* Set the height */
    width: 50em;
    left: 25%;
    background-size: 100% 100%;
    animation: slider 9s infinite linear ;
    box-shadow:0 0 50px rgba(27, 21, 21, 0.941); /* Add box-shadow for the slideshow */

}
@keyframes slider{
0%{background-image: url("b.jpeg");}
20%{background-image: url("a.jpeg");}
30%{background-image: url("c.jpeg");}
65%{background-image: url("z.jpeg");}
75%{background-image: url('d.jpeg');}
85%{background-image: url("e.jpeg");}
100%{background-image: url("y.jpeg");}


 }
    </style>

</body>
</html>
