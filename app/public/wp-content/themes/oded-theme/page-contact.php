<?php get_header(); ?>

<section style="padding: 2rem;">
  <div style="max-width: 80%; margin-inline: auto; text-align: center; margin-bottom: 2rem;">
    <h1 style="font-size: 55px; font-weight: bold;">SEND AN EMAIL BY CLICKING ONE OF THE TOPIC BUBBLES BELOW</h1>
  </div>
  <div class="button-container"
    style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center; margin-bottom: 2rem;">
    <a href="mailto:odedwebstudio@gmail.com?subject=Inquiry: UX/UI Design" target="_blank" class="contact-button">UX/UI
      DESIGN</a>
    <a href="mailto:odedwebstudio@gmail.com?subject=Inquiry: WordPress Development" class="contact-button">WORDPRESS
      DEVELOPMENT</a>
    <a href="mailto:odedwebstudio@gmail.com?subject=Inquiry: Front End Development" class="contact-button">FRONT END
      DEVELOPMENT</a>
    <a href="mailto:odedwebstudio@gmail.com?subject=Inquiry: Digital Consultant" class="contact-button">DIGITAL
      CONSULTANT</a>
    <a href="mailto:odedwebstudio@gmail.com?subject=Inquiry: HTML/CSS" class="contact-button">HTML/CSS</a>
    <a href="mailto:odedwebstudio@gmail.com?subject=Inquiry: CMS Development" class="contact-button">CMS DEVELOPMENT</a>
    <a href="mailto:odedwebstudio@gmail.com?subject=Inquiry: Branding" class="contact-button">BRANDING</a>
    <a href="mailto:odedwebstudio@gmail.com?subject=Inquiry: Full Stack Development" class="contact-button">FULL STACK
      DEVELOPMENT</a>
    <a href="mailto:odedwebstudio@gmail.com?subject=Inquiry: SEO Strategy" class="contact-button">SEO STRATEGY</a>
    <a href="mailto:odedwebstudio@gmail.com?subject=Inquiry: Feature Build" class="contact-button">FEATURE BUILD</a>
    <a href="mailto:odedwebstudio@gmail.com?subject=Inquiry: JavaScript" class="contact-button">JAVASCRIPT</a>
    <a href="mailto:odedwebstudio@gmail.com?subject=Inquiry: Next.js" class="contact-button">NEXT.JS</a>
    <a href="mailto:odedwebstudio@gmail.com?subject=Inquiry: Website Makeover" class="contact-button">WEBSITE
      MAKEOVER</a>
  </div>
  <div style="text-align: right; margin-top: 5rem; font-size: 1rem;">
    <p>IF NOT SHOOT AN EMAIL: <a href="mailto:odedwebstudio@gmail.com" style="color: green;">ODEDWEBSTUDIO@GMAIL.COM</a>
    </p>
  </div>
</section>

<style>
.contact-button {
  display: inline-block;
  padding: 0.75rem 2rem;
  /* Increased padding for a wider button */
  font-size: 30px;
  /* Adjusted font size for better proportionality */
  font-weight: 500;
  /* Medium weight */
  border: 2px solid #000;
  border-radius: 50px;
  /* Keeps the rounded appearance */
  text-decoration: none;
  color: #000;
  text-align: center;
  transition: all 0.3s ease-in-out;
  min-width: 200px;
  /* Ensures a minimum width for all buttons */
}

.contact-button:hover {
  background-color: #000;
  color: #fff;
}

.button-container {
  display: flex;
  flex-wrap: wrap;
  gap: 2rem;
  /* Adjusted spacing between bubbles */
  justify-content: center;
}
</style>

<?php get_footer(); ?>