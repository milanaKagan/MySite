<?php
/*
Template Name: Milana Kagan Home
*/
get_header();
?>
<main>
    <div id="home-page">Milana Kagan
        <h2>BSc Software Engineer</h2>
    </div>
    <div id="about">
    <div id="about-image"></div>   
        <section class="homepage-section">
        <h2>Full Stack Developer</h2>
            <p>Full Stack Student INT College. As part of the course expiriensed in various of projects using HTML, CSS, JavaScript, Wordpress, PHP, Angular, React, REST API, MySQL,
                NodeJS, MongoDB. Impressive and versatile portfolio was created that includes client libraries, 
                pure CSS and JavaScript based games, Web Applications, E - commercial web stores.</p>
        </section>
        <section class="homepage-section">
        <h2>Senior Automation Engineer</h2>
            <p>Senior automation developer, was involved in a variaty of projects. 
                Took an active part in automation tests infrastructure design and implementation, CI/CD exstation and maitanance, 
                junior trainings. Throught her automation developer career expirienced in UI, 
                API and unitest design and implementation using C#, Selenium, RESTSharp.</p>
        </section>
        <section  class="homepage-section">
        <h2>Senior Verification Engineer</h2>
            <p>Senior ISTQB certified Verification Engineer leads verification strategy, 
                impact anlysys executions and formal release activities. 
                Familiar with Sub-system, System, Infrastructure, Client, Server, Black Box, White Box, Gray Box, 
                Regression, sanity, Clinical work flow, inhouse and customer testing. Led FDA documentation activities and processes.
            </p>
        </section>
    </div>
       <section  class="homepage-section">
       <h2>Experience</h2>
         <p>Through the career was experience a lot of different and activities, 
             therefore have excellent understanding of R&D and regulatory processes, 
             have excellent adaptation skills, familiar with large assortment of technologies and programing languages. 
             This stack can be useful in any domain.</p>
         <button id="roles-btn">Read More</button>
       </section>
        <section class="homepage-section">
        <h2>Portfolio</h2>
          <p>As a part of development course rich portfolio was created that includes client libraries, 
                pure CSS and JavaScript based games, Web Applications, E - commercial web stores.</p>
          <button id="portfolio">View Portfolio</button>
        </section>
</main>
<script type="text/javascript">
    document.getElementById("portfolio").onclick = () => { 
        location.href = "http://localhost:8080/milanakagan/portfolio";
    };
    document.getElementById("roles-btn").onclick = () => { 
        location.href = "http://localhost:8080/milanakagan/roles/";
    };
</script>
<?php
get_footer();
?>