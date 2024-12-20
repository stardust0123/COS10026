<!DOCTYPE html>
<html lang="en">
<head>
<head>
<meta charset ="UTF-8">
    <meta name ="description" content="creating a website">
    <meta name="keywords" content="HTML, CSS, Website, Tech">
    <meta name="author" content="Nguyen Thanh Hung, Tran Thien Thao Vy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Recursive:wght@300..1000&family=Sixtyfour&family=Sora:wght@100..800&display=swap" rel="stylesheet">    
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Recursive:wght@300..1000&family=Sixtyfour&family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Recursive:wght@300..1000&family=Sixtyfour&family=Sora:wght@100..800&display=swap" rel="stylesheet">
  <title>Enhancements Page </title>
</head>
<body>
    <header>
        <nav>
        <?php
            include_once "header.inc";
	        include_once "menu.inc"; //include the footer
        ?>
        </nav>
    </header>   
    <br> 
    <main class="main-content">
        <br>
        <br>
        <h1 class="h1-enhancement">Enhancements</h1>


        <section class="enhancement1">
            <h2>Enhancement 1: Responsiveness</h2>
                <p>These adjustments enhance the responsiveness of the website on mobile devices and smaller screens,
                     providing an improved user experience and ensuring the logical layout of the website interface across various screen sizes.</p>
    
            <section>
                <ul>
                    <li>@media Code for Table:<br>
                        - When the screen width decreases below 800px, the font size within the table is reduced, and the padding of the cells (`th` and `td`) is adjusted to maintain a visually reasonable table on smaller screens.
                     </li>
                     <li>@media Code for Box and Container:<br>
                        - As the screen width shrinks below 750px, the boxes (`box`) switch to a flexible display mode, stacking into a column layout when horizontal space is insufficient. Simultaneously, the width of the `.container` is also reduced to better adapt to smaller screens.
                     </li>
                     <li>@media Code for Navbar and Menu:<br>
                        - Adjustments for the navbar and menu are implemented when the screen width decreases below 750px. This includes changes in width, height, font size, padding, and hover effects.
                     </li>
                </ul>
            </section>
        </section>

        <section class="enhancement2">
            <h2>Enhancement 2: Hover </h2>
               <p>Hover enhancements include increased font weight for menu items, emphasizing and improving recognition.
                 Changes to font weight and navbar background color introduce dynamic and appealing hover experiences, collectively elevating interactivity and user experience.</p>
        
            <section>
                <ul>
                    <li>Menu Items Hover Effect:<br>
                        -When users hover over items in the menu (menu-items li a), the font weight increases (font-weight: bolder;). This enhances emphasis when hovering over menu items.</li>
                    <li>Navbar Background Change on Hover:<br>
                        -The font weight of text in the navbar (navbar .nav-container a) also increases on hover.<br>
                        -The background color of the menu (navbar .menu-items) changes from one color to another when users hover over it.</li>

                </ul>
            </section>
        </section>

        <section class="enhancement3">
            <h2>Enhancement 3: Toggle Navbar </h2>
               <p>
                Toggle navbar improvements: Checkbox control for visibility,
                 smooth menu transition, and animated hamburger icon. Enhances flexibility for user-friendly mobile navigation.</p>
        
            <section>
                <ul>
                    <li>Controlling Navbar Visibility:<br>
                        -Utilizing a checkbox to control the display/hide functionality of the navbar.<br>
                        -When clicking the hamburger icon, the checkbox state (:checked) toggles to open and close the navbar.</li>
                    <li>Navbar Menu Transition:<br>
                        -Smooth transition effect for the menu when opening and closing.<br>
                        -When the checkbox is checked, the menu is displayed (transform: translateX(0)); when unchecked,
                         the menu moves off-screen (transform: translate(-150%)).</li>
                    <li>Hamburger Icon Animation:<br>
                        -The hamburger icon undergoes shape and position changes when the checkbox is checked, creating an appealing opening and closing animation.<br>
                        -These improvements contribute to creating a flexible and user-friendly toggle navbar across various mobile devices.</li>    

                </ul>
            </section>
        </section>
        

    </main>

    <footer class="footer">
<?php
	include_once "footer.inc"; //include the footer
  ?>
</footer>
</body>
</html>