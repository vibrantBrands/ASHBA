<?php defined('C5_EXECUTE') or die("Access Denied.");

$this->inc('elements/header_top.php');

$as = new GlobalArea('Header Search');
$blocks = $as->getTotalBlocksInArea();
$displayThirdColumn = $blocks > 0 || $c->isEditMode();
?>

  <header class="ashba-header">
    <div class="navigation">
      <div class="toggle-wrapper">
        <div class="menu-toggle inactive">
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
          <span class="bg"></span>
        </div>
        <p>MENU</p>
      </div>
      <div class="topbar">
        <ul>
          <li><a href="/about-us">About Us</a></li>
          <li><a href="/contact-us">Contact Us</a></li>
          <li class="searchbox"><a href="/"><i class="fas fa-search"></i></a></li>
          <li class="social"><a href="/"><i class="fab fa-facebook"></i></a></li>
          <li class="social"><a href="/"><i class="fab fa-twitter"></i></a></li>
          <li class="social"><a href="/"><i class="fab fa-youtube"></i></a></li>
          <li class="social"><a href="/"><i class="fab fa-instagram"></i></a></li>
          <li class="social"><a href="/"><i class="fab fa-pinterest"></i></a></li>
          <li class="donate"><a href="/donate"><i class="fas fa-donate"></i> Donate</a></li>
          <li class="members"><a href="/member-login"><i class="fas fa-user-lock"></i> Member Login</a></li>
        </ul>
      </div>
      <div class="logo">
        <a href="/"><img src="<?php echo $this->getThemePath(); ?>/img/home/asha-logo.png" alt="ASHBA Logo" class="logo"></a>
      </div>
      <div class="nav-wrapper">
       <!-- <?php   
              $bt = BlockType::getByHandle('autonav');
              $bt->controller->displayPages = 'top'; // 'top', 'above', 'below', 'second_level', 'third_level', 'custom', 'current'
              //$bt->controller->displayPagesCID = ''; // if display pages is set ‘custom’
              $bt->controller->orderBy = 'display_asc';  // 'chrono_desc', 'chrono_asc', 'alpha_asc', 'alpha_desc', 'display_desc','display_asc'             
              $bt->controller->displaySubPages = 'none';  //none', 'all, 'relevant_breadcrumb', 'relevant'
              $bt->controller->displaySubPageLevels = 'all'; // 'enough', 'enough_plus1', 'all', 'custom'
              $bt->controller->displaySubPageLevelsNum = '0'; // if displaySubPages is set 'custom'
              $bt->render('templates/main_nav'); // for template 'templates/template_name';
              ?>  -->
             <ul class="nav">
              <li class="nav-item">
                <a class="nav-link">Membership <i class="fas fa-angle-down"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link">Safe Sport <i class="fas fa-angle-down"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link">Registry <i class="fas fa-angle-down"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link">Events <i class="fas fa-angle-down"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link">Youth <i class="fas fa-angle-down"></i></a>
              </li>
            </ul>
        </div>
    </div>
  </header>
  <div class="menu-tray">
      <div class="container">

        <!-- 2nd menu -->

          <div class="submenu">
              <ul class="subnav">
                <li>
                <span class="header">MY MEMBERSHIP</span>
                  <ul class="third">
                      <li>
                          <a href="/members/main">My Profile Page</a>
                              </li><li><a href="/BecomeAMember/Register/">Join</a></li>

                          <li><a href="/searches/members">Member Search</a></li>
                          <li><a href="/searches/horses">Horse Search</a></li>
                          <li><a href="/application/files/3716/2497/9932/asha_tutorial_searchonline.pdf" target="_blank"><b>Horse Search Tutorial</b></a></li>
                          <li><a href="/application/files/4316/2497/9928/asha_tutorial_searchmembers.pdf" target="_blank"><b>Member Search Tutorial</b></a></li>
                      </ul>
                  </li>

                  <li>
                      <span class="header">RESULTS &amp; STATISTICS</span>
                      <ul class="third">
                          <li><a href="/medianevents/showresults/">Show Results</a></li>
                          <li><a href="/medianevents/horseshows/ksfqualifying/2021">All Points KSF Qualifying Rankings</a></li>
                          <li><a href="/medianevents/horseshows/ksfprequalified/2021">Pre-Qualified KSF Rankings</a></li>
                          <li><a href="/medianevents/highpointstandings/2021">2021 High Point Standings</a></li>
                      </ul>
                  </li>
                  <li>
                      <span class="header">SAFE SPORT</span>
                      <ul class="third">
                          <li><a href="/usef/usef-safe-sport/">About Safe Sport</a>
                      </li></ul>
                  </li>
                  <li>
                      <span class="header">RESOURCES</span>
                      <ul class="third">
                          <li><a href="/searches/youthclub/">Youth Club Search</a></li>
                          <li><a href="/searches/charterclub/">Charter Club Search</a></li>
                          <li><a href="/media/1244/horseshowmanual_med.pdf" target="_blank">Horse Show Manager Manual</a></li>
                          <li><a href="/usef/usef-safe-sport/">Safe Sport</a>
                          </li><li><a href="https://www.usef.org/search/officials">USEF Licensed Offical Search</a>
                          </li><li><a href="https://www.usef.org/compete/resources-forms/rules-regulations/rulebook">USEF Rule Book</a>
                          </li><li><a href="/aboutus/asha/merger/">ASHA/ASR Merger</a></li>
                          <li><a href="https://asha.net/media/679707/fill-the-stands-report.pdf">Fill The Stands</a> <b>PDF</b></li>
                          <li><a href="/medianevents/promotional-flyers">Promotional Flyers</a></li>
                      </ul>
                  </li>
                  <li>
                      <span class="header">LISTINGS</span>
                      <ul class="third">
                          <li><a href="/searches/stables/">Stable Search</a></li>
                          <li><a href="/searches/services/">Service Search</a></li>
                          <li><a href="/medianevents/links/">Links &amp; Additional Resources</a></li>
                      </ul>
                  </li>
              </ul>
          </div>

          <!-- 3rd menu -->

          <div class="submenu">
            <ul class="subnav">
                <li>
                    <a href="/safe-sport/about-safe-sport">About Safe Sport</a>
                </li>
            </ul>
          </div>

          <!-- 4th menu -->

          <div class="submenu">
            <ul class="subnav">
                <li>
                    <span class="header">Horse Services</span>
                    <ul class="third">
                        <li><a href="/aboutus/registry/asrforms/">ASR Forms</a></li>
                        <li><a href="/aboutus/registry/asrgovernance/">Rules &amp; Regulations</a></li>
                    </ul>
                </li>
                <li>
                    <span class="header">Horse Reports</span>
                    <ul class="third">
                        <li><a href="/registry/horsereports/searchpedigrees/">Pedigree Search</a></li>
                        <li><a href="/registry/horsereports/progeny/">Progeny Search</a></li>
                        <li><a href="/registry/hypotheticalmating/">Hypothetical Mating</a></li>
                        <li><a href="/registry/horsereports/geldingreport/">Gelding Report</a></li>
                        <li><a href="/registry/horsereports/deceasedhorsessearch/">Deceased Horses</a></li>
                        
                    </ul>
                </li>
                <li>
                    <span class="header">Horse Searches</span>
                    <ul class="third">
                        <li><a href="/searches/horses">Horse Search</a></li>
                        <li><a href="/registry/horselookup/pendingtransfers/">Search Pending Transfers</a></li>
                        <li><a href="/registry/horselookup/pendingregistrations/">Search Pending Registrations</a></li>
                        <li><a href="/registry/horselookup/namechangesearch/">Name Changes Search</a></li>
                        <li><a href="/medianevents/showresults/">Show Results</a></li>
                        <li><a href="/media/1930/asha_tutorial_searchonline.pdf" target="_blank"><b>Horse Search Tutorial</b></a></li>
                        <li><a href="/media/2648/asha_tutorial_pedigreeprinting.pdf"><b>Pedigree Search Tutorial</b></a></li>
                    </ul>
                </li>
                <li>
                    <span class="header">Prize Programs</span>
                    <ul class="third">
                        <li><a href="/registry/prizeprogramsfut/">Futurity</a></li>
                        <li><a href="/registry/prizeprogramsweeps/">Sweepstakes</a></li>
                    </ul>

                    <span class="header">CH/CH-EQ/CH-SH</span>
                    <ul class="third">
                        <li><a href="/registry/ch-cheq/">Enrollment</a></li>
                        <li><a href="/registry/ch-cheq/chpoints/">Listings</a></li>
                    </ul>
                </li>
                <li>
                    <span class="header">Programs</span>
                    <ul class="third">
                        <li><a href="/registry/mymeadows/">My Meadows</a><a></a></li><a>
                        </a><li><a></a><a href="/registry/firsttimebreeder/">First Time Breeder</a><a></a></li><a>
                        </a><li><a></a><a href="https://faithfulfriends.asha.net/" target="_blank">Faithful Friends</a></li>
                        <li><a href="/registry/asrdiplomatofthebreed/">ASR Diplomat of the Breed</a>
                        </li><li>
                        </li><li><a href="/registry/asr-breeders-award/">ASR Breeders'Award</a></li>
                    </ul>
                </li>
                <li>
                    <span class="header">Half Saddlebreds</span>
                    <ul class="third">
                        <li><a href="/registry/halfsaddlebreds/">Information</a></li>
                        <li><a href="/registry/halfsaddlebreds/halfsaddlebreddisciplines/">Disciplines</a></li>
                        <li><a href="/aboutus/sporthorse/">Awards Program</a></li>
                    </ul>
                </li>
            </ul>
          </div>

          <!-- 5th menu -->

          <div class="submenu">
            <ul class="subnav" style="visibility: visible;">
                  <li>
                      <span class="header">ASHA Feeds</span>
                      <ul class="third">
                          <li><a href="/medianevents/watch/">Watch Live</a></li>
                          <li><a href="/medianevents/social-feed/">Social Feed</a></li>
                          <li><a href="/News">News Feed</a></li>
                          <li><a href="/medianevents/videos/">Video Archives</a></li>
                      </ul>
                  </li>
                  <li>
                      <span class="header">Horse Shows &amp; Awards</span>
                      <ul class="third">
                          <li><a href="/medianevents/horseshows/">Competition Information</a></li>
                          <li><a href="/medianevents/competitions">Competition Calendar</a></li>
                          <li><a href="/medianevents/wchs/ksf-wchs2019">KSF - WCHS</a></li>
                          <li><a href="/medianevents/horseshows/ksfqualifying/2021">All Points KSF Qualifying Rankings</a></li>
                          <li><a href="/medianevents/horseshows/ksfprequalified/2021">Pre-Qualified KSF Rankings</a></li>
                          
                          <li><a href="/medianevents/showresults/">Show Results</a></li>
                          <li><a href="/medianevents/highpoint/">ASHA High Point Program</a></li>
                          
                          <li><a href="/medianevents/highpointstandings/2021">2021 High Point Standings</a></li>
                          <li><a href="/medianevents/asha-national-select-series/">National Select Series</a>
                      </li></ul>
                  </li>
                  <li>
                      <span class="header">Annual Convention</span>
                      <ul class="third">
                          <li><a href="/medianevents/annualconvention/">Information</a></li>
                      </ul>
                  </li>
                  <li>
                      <span class="header">Publications</span>
                      <ul class="third">
                          <li><a href="/medianevents/journal/">Journal</a></li>
                          <li><a href="/medianevents/ezines/">eZine</a></li>
                          <li><a href="/medianevents/juniorjunctions/">Junior Junction</a></li>
                      </ul>
                  </li>

                  <li>
                      <span class="header">Promotions &amp; Media</span>
                      <ul class="third">
                          <li><a href="/medianevents/photos">ASHA Photo Gallery</a></li>
                          <li><a href="/medianevents/videos/">ASHA Video Archives</a></li>
                          <li><a href="/medianevents/printmedia/">Brochures &amp; Media</a>
                          </li><li><a href="/medianevents/breedambassador/">Breed Ambassador Program</a></li>
                          <li><a href="/aboutus/asha125anniversary/">ASHA 125<sup>th</sup> Anniversary</a></li>
                          <li><a href="/medianevents/breedpromotion/">ASHA Breed Promotion</a></li>
                          <li><a href="/registry/asrdiplomatofthebreed/">ASR Diplomat of the Breed</a>
                          </li><li>
                      </li></ul>
                  </li>

                  <li>
                      <span class="header">Listings</span>
                      <ul class="third">
                          <li><a href="/searches/stables/">Stable Search</a></li>
                          <li><a href="/searches/services/">Service Search</a></li>
                          <li><a href="/medianevents/links/">Links &amp; Additional Resources</a></li>
                      </ul>
                  </li>
              </ul>
            </div>

            <!-- 6th menu -->
            <div class="submenu">
                <ul class="subnav">
                  <li>
                      <span class="header">Youth Activtities</span>
                      <ul class="third">
                          <li><a href="/clubs/youthawards/">Youth Awards</a></li>
                          <li><a href="/clubs/youthscholarships/">Youth Scholarships</a></li>
                          <li><a href="/medianevents/juniorjunctions/">Junior Junction</a></li>
                          <li><a href="/clubs/juniorjudging/">Junior Judging</a></li>
                          <li><a href="/clubs/drivingchallenge/">Driving Challenge</a></li>
                          <li><a href="/clubs/youthsaddletime/">Saddle Time</a></li>
                          <li><a href="/clubs/youthphoto/">Youth Photo Contest</a></li>
                          <li><a href="/clubs/youthinternational/">International Youth Program</a></li>
                      </ul>
                  </li>
                  <li>
                      <span class="header">Youth Club Programs</span>
                      <ul class="third">
                          <li><a href="/clubs/youthclub/">ASHA Youth Clubs</a></li>
                          <li><a href="/medianevents/annualconvention/">Youth Conference</a></li>
                          <li><a href="/searches/youthclub/">Youth Club Search</a></li>
                      </ul>
                  </li>
              </ul>
            </div>
      </div>
    </div>
