<!DOCTYPE html>
<html lang="en">
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
     <title>Jobs Page</title>
</head>
    <body>
        <form method="post" action="https://mercury.swin.edu.au/it000000/formtest.php"></form>
        <header>

        <nav>
    <?php
	    include_once "header.inc"; //include the header
        include_once "menu.inc";   //include the menu
        
    ?>
</nav> 

    </header>   
    <br> 
    <main class="main-content">
        <h1 class="h1-job">Position Descriptions</h1>
    <section class="position1">
        <h2 class="h2-job">Position: Web Developer</h2>
        <p><strong>Reference Number:</strong> WD123</p>
        <p><strong>Salary Range:</strong> $60,000 - $80,000 per year</p>
        <p><strong>Reporting To:</strong> IT Manager</p>

        <section>
            <h3>Key Responsibilities:</h3>
            <ul>
                <li>Design and develop responsive web applications</li>
                <li>Collaborate with cross-functional teams to define, design, and ship new features</li>
                <li>Ensure the technical feasibility of UI/UX designs</li>
                <li>Optimize application for maximum speed and scalability</li>
            </ul>
        </section>
            <aside>
                <h5>SwinTech sticky note:</h5>
                <h2><a href="apply.php">Apply Now!</a></h2>
                <p>If you are interested in any of these positions, click HERE.</p>
            </aside>
        <section>
            
            <h3>Required Qualifications:</h3>
            <ul>
                <li><strong>Essential:</strong> Bachelor's degree in Computer Science or related field</li>
                <li><strong>Essential:</strong> Proficient in HTML, CSS, JavaScript</li>
                <li><strong>Preferable:</strong> Experience with front-end frameworks (React, Angular, etc.)</li>
            </ul>
        </section>
    </section>

    <section class="position2">
        <h2 class="h2-job">Position: Cybersecurity Analyst</h2>
        <p><strong>Reference Number:</strong> CA456</p>
        <p><strong>Salary Range:</strong> $70,000 - $90,000 per year</p>
        <p><strong>Reporting To:</strong> Chief Information Security Officer</p>

        <section>
            <h3>Key Responsibilities:</h3>
            <ul>
                <li>Monitor and analyze security alerts and incidents</li>
                <li>Implement and maintain security controls</li>
                <li>Conduct vulnerability assessments and penetration testing</li>
                <li>Respond to and mitigate security incidents</li>
            </ul>
        </section>

        <section>
            <h3>Required Qualifications:</h3>
            <ul>
                <li><strong>Essential:</strong> Bachelor's degree in Cybersecurity or related field</li>
                <li><strong>Essential:</strong> Certified Information Systems Security Professional (CISSP)</li>
                <li><strong>Preferable:</strong> Experience with security tools (Firewalls, IDS/IPS, SIEM)</li>
            </ul>
        </section>
    </section>

    <section class="position3">
        <h2 class="h2-job">Position: Data Scientist</h2>
        <p><strong>Reference Number:</strong> DS789</p>
        <p><strong>Salary Range:</strong> $80,000 - $100,000 per year</p>
        <p><strong>Reporting To:</strong> Head of Data Science</p>

        <section>
            <h3>Key Responsibilities:</h3>
            <ul>
                <li>Analyze and interpret complex datasets</li>
                <li>Develop machine learning models for predictive analytics</li>
                <li>Collaborate with cross-functional teams to extract insights from data</li>
                <li>Present findings to non-technical stakeholders</li>
            </ul>
        </section>

        <section>
            <h3>Required Qualifications:</h3>
            <ul>
                <li><strong>Essential:</strong> Master's or Ph.D. in Data Science or related field</li>
                <li><strong>Essential:</strong> Proficient in Python and data visualization tools</li>
                <li><strong>Preferable:</strong> Experience with big data technologies (Hadoop, Spark)</li>
            </ul>
        </section>
    </section>

    <section class="position4">
        <h2 class="h2-job">Position: UX/UI Designer</h2>
        <p><strong>Reference Number:</strong> UD123</p>
        <p><strong>Salary Range:</strong> $70,000 - $90,000 per year</p>
        <p><strong>Reporting To:</strong> Creative Director</p>

        <section>
            <h3>Key Responsibilities:</h3>
            <ul>
                <li>Create wireframes, prototypes, and user flows for digital products</li>
                <li>Collaborate with stakeholders to understand user requirements</li>
                <li>Design and iterate on user interfaces for web and mobile applications</li>
                <li>Conduct usability testing and gather feedback</li>
            </ul>
        </section>
        <section>
            <h3>Required Qualifications:</h3>
            <ul>
                <li><strong>Essential:</strong> Bachelor's degree in Design or related field</li>
                <li><strong>Essential:</strong> Proficient in design tools like Sketch, Figma, or Adobe XD</li>
                <li><strong>Preferable:</strong> Experience with prototyping tools and understanding of front-end development</li>
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
