<br><br><br><br><br>
    <div class="site-main" id="main">
        <header class="page-header">
            <h1 class="page-title">Search &#038; Find A Job</h1>
        </header>
        <div class="content-area container" id="primary" role="main">
            <article class="post-3940 page type-page status-publish hentry" id="post-3940">
                <div class="entry-content has-jobs">
                    <p style="text-align: center;"><strong>Choose your region and get full access to all job offers.</strong> Find a job close to you and connect with Employers!</p>
                    <div class="job_listings" data-categories="" data-keywords="" data-location="" data-order="DESC" data-orderby="featured" data-per_page="20" data-show_filters="true" data-show_pagination="false">
                        <form class="job_filters">
                            <div class="search_jobs">
                                <div class="search_keywords">
                                    <label for="start_date">Startdate</label> <input id="start_date" name="start_date" placeholder="Job Title" type="text" name="j_jobtitle">
                                </div>
                                <div class="search_location">
                                    <label for="search_location">Location</label> <input id="search_location" name="search_location" placeholder="Location" type="text" name="j_country">
                                </div>
                                <div class="search_categories">
                                    <label for="search_categories">Category</label> <select class='job-manager-category-dropdown' data-multiple_text='Select Some Options' data-no_results_text='No results match' data-placeholder='Choose a category&hellip;' id='search_categories' name='search_categories[]'>
                                        <option value="">
                                            Any category
                                        </option>
                                        <option class="level-0" value="36">
                                            Domestic Helper
                                        </option>
                                        <option class="level-0" value="37">
                                            Driver
                                        </option>
                                    </select>
                                </div>
                                <div class="search_submit">
                                    <input name="submit" type="submit" value="Search">
                                </div>
                               
                            </div>
                            <ul class="job_types">
                                <li><label class="full-time" for="job_type_full-time"><input checked='checked' id="job_type_full-time" name="filter_job_type[]" type="checkbox" value="full-time"> Full Time</label></li>
                                <li><label class="part-time" for="job_type_part-time"><input checked='checked' id="job_type_part-time" name="filter_job_type[]" type="checkbox" value="part-time"> Part Time</label></li>
                                <li><label class="temporary" for="job_type_temporary"><input checked='checked' id="job_type_temporary" name="filter_job_type[]" type="checkbox" value="temporary"> Temporary</label></li>
                            </ul><input name="filter_job_type[]" type="hidden" value="">
                            <div class="showing_jobs"></div>
                        </form><noscript>Your browser does not support JavaScript, or it is disabled. JavaScript must be enabled in order to view listings.</noscript> 
                        <script>
                        jQuery(document).ready(function(){

                          jQuery( "input[name='start_date']" ).datepicker({ 
                              numberOfMonths: 1,           
                          }); 
                          jQuery( '#start_date' ).on( 'change', function() {
                                  var target = jQuery(this).closest( 'div.job_listings' );
                                  target.trigger( 'update_results', [ 1, false ] );
                                  return false;
                          });

                        });
                        </script>


                    <ul class="job_listings">
                        <?php 

                            echo search_job();

                         ?>
                    </ul>
           


                    </div>
                    <p>&nbsp;</p>
                    <p><strong>HelperPlace</strong> has listed for you a lot of new positions (Domestic Helper, Driver, Full Time&#8230;). You are currently looking for a job and you want to find the best employers? You have now the possibility to connect with employers close to you and you will find a job!</p>
                    <p>Don&#8217;t forget to <a href="http://www.helperplace.com/submit-your-profile/">submit your profile</a> on HelperPlace, you will get more chance to connect with employers. Create a resume and apply to the latest opportunities in Hong Kong, Singapore, Dubai&#8230;</p>
                    <p><img alt="Search and find a job" class=" wp-image-99991925 aligncenter" data-attachment-id="99991925" data-comments-opened="1" data-image-description="" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="Find a job &#8211; helper" data-large-file="https://i0.wp.com/www.helperplace.com/wp-content/uploads/2014/08/Find-a-job-helper.png?fit=680%2C272&amp;ssl=1" data-medium-file="https://i0.wp.com/www.helperplace.com/wp-content/uploads/2014/08/Find-a-job-helper.png?fit=300%2C120&amp;ssl=1" data-orig-file="https://i0.wp.com/www.helperplace.com/wp-content/uploads/2014/08/Find-a-job-helper.png?fit=1000%2C400&amp;ssl=1" data-orig-size="1000,400" data-permalink="https://www.helperplace.com/find-a-job/find-a-job-helper" data-recalc-dims="1" sizes="(max-width: 360px) 100vw, 360px" src="https://i1.wp.com/www.helperplace.com/wp-content/uploads/2014/08/Find-a-job-helper-300x120.png?resize=360%2C144" srcset="https://i0.wp.com/www.helperplace.com/wp-content/uploads/2014/08/Find-a-job-helper.png?resize=300%2C120&amp;ssl=1 300w, https://i0.wp.com/www.helperplace.com/wp-content/uploads/2014/08/Find-a-job-helper.png?resize=768%2C307&amp;ssl=1 768w, https://i0.wp.com/www.helperplace.com/wp-content/uploads/2014/08/Find-a-job-helper.png?w=1000&amp;ssl=1 1000w"></p>
                    <p>HelperPlace is also available on <a href="https://www.facebook.com/helperplace/">Facebook</a>, we share with you the best job offers but also news &amp; tips to find a job. Join us and spread the word to your friends.</p>
                </div>
            </article>
        </div>
    </div>