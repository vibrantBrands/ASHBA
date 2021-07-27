<?php require('elements/header.php'); ?>

<div class="page-header">
    <?php
       $page = Page::getCurrentPage();

           if($image = $c->getAttribute('header_image')):
               $image = $c->getAttribute('header_image');
               $image_src = $image->getRelativePath();
       ?>
           <img src='<?php echo $image_src; ?>'>
           
       <?php else: ?>
           <img src='<?php echo $this->getThemePath() ?>/img/placeholder.png' alt='ASHBA Header'>
           
       <?php endif; ?>
       
</div>

<section class="internal_content_wrapper horse-search">
  <div class="search-wrapper">
      <div class="container searchbox">
      <h1>Horse Search</h1>
      <div class="grid two">
       <div>
          <input type="text" placeholder="Horse Name" />
          <select name="registration">
            <option value="registration">Registration Type</option>
            <option value="dog">Choice A</option>
            <option value="cat">Choice B</option>
            <option value="hamster">Choice C</option>
            <option value="parrot">Choice D</option>
            <option value="spider">Choice E</option>
            <option value="goldfish">Choice F</option>
          </select>
           <input type="number" placeholder="Registration Number" />
        </div>
       <div>
        <select name="name">
          <option value="">Name Search Type</option>
          <option value="dog">Choice A</option>
        </select> 
        <select name="filter">
          <option value="">Sort By</option>
          <option value="dog">Choice A</option>
        </select> 
        <select name="name">
          <option value=""># Of Horses To Display</option>
          <option value="dog">Choice A</option>
        </select> 
        <input type="submit" class="submit" value="Search" />
       </div>
     </div>
    </div>
  </div>

  <div class="results-wrapper">
    <div class="container">
      <h1>Results</h1>
      <table class="results-table">
        <tr>
          <th>Reg. Number</th>
          <th>Horse Information</th>
          <th>Foal Date</th>
          <th>Deceased</th>
        </tr>
        <tr>
          <td>B78545S</td>
          <td>
            "A Magical Folly"<br />
            Current Owner(s): Roger E. White<br />
            Color: Chestnut<br />
            DNA: N/N<br />
            Markings: Stripe, both hind stockings, white
          </td>
          <td>07/24/21</td>
          <td>NO</td>
        </tr>
        <tr>
          <td>B78545S</td>
          <td>
            "A Magical Folly"<br />
            Current Owner(s): Roger E. White<br />
            Color: Chestnut<br />
            DNA: N/N<br />
            Markings: Stripe, both hind stockings, white
          </td>
          <td>07/24/21</td>
          <td>NO</td>
        </tr>
        <tr>
          <td>B78545S</td>
          <td>
            "A Magical Folly"<br />
            Current Owner(s): Roger E. White<br />
            Color: Chestnut<br />
            DNA: N/N<br />
            Markings: Stripe, both hind stockings, white
          </td>
          <td>07/24/21</td>
          <td>NO</td>
        </tr>
        <tr>
          <td>B78545S</td>
          <td>
            "A Magical Folly"<br />
            Current Owner(s): Roger E. White<br />
            Color: Chestnut<br />
            DNA: N/N<br />
            Markings: Stripe, both hind stockings, white
          </td>
          <td>07/24/21</td>
          <td>NO</td>
        </tr>
      </table>
    </div>
  </div>

  <img src="<?php echo $this->getThemePath(); ?>/img/internal/horseman.png" alt="horseman" class="horseman">
</section>

<?php require('elements/footer.php'); ?>
