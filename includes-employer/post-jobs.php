
<br><br><br><br><br>
	<div class="site-main" id="main">
		<header class="page-header">
			<h1 class="page-title">Post A Job</h1>
		</header>
		<?php echo post_job(); ?>
		<div class="content-area container" id="primary" role="main">
			<div class="row">
				<div class="col-sm-12 col-md-10 col-md-offset-1">
					<article class="post-14 page type-page status-publish hentry" id="post-14">
						<div class="entry-content">
							<form  class=""  method="post">
								<fieldset class="fieldset-ads_info">
									<label for="ads_info">Information about your search</label>
									<div class="field">
										<h2 class="jmfe-header-field header-ads_info" id="ads_info" style=""></h2>
										<div id="description-ads_info">
											<small class="description header-ads_info-description">Please fill accurate information to quickly get candidates.</small>
										</div>
									</div>
								</fieldset>
								<fieldset class="fieldset-job_title">
									<label for="job_title">Job Title *</label>
									<div class="field required-field">
										<input class="jmfe-text-field jmfe-input-text input-text text-job_title" id="job_title" name="j_jobtitle" placeholder="e.g &quot;Western family is looking for Helper&quot;" required="" title="" type="text" value="">
									</div>
								</fieldset>
								<fieldset class="fieldset-company_name">
									<label for="company_name">You are *</label>
									<div class="field required-field">
										<select class="jmfe-select-field jmfe-input-select input-select select-company_name" id="company_name" name="j_employertype" required>
											<option value="" selected disabled>
												Select category
											</option>
											<option value="Direct Employer">
												Direct Employer
											</option>
											<option value="Agency">
												Agency
											</option>
											<option value="Other">
												Other
											</option>
										</select>
									</div>
								</fieldset>
								<fieldset class="fieldset-job_region">
									<label for="job_region">Job Region *</label>
									<div class="field required-field">
										<select class='postform' id='job_region' name='j_country' required>
											<option value="" selected disabled>
												Select Country
											</option>
											<option class="level-0" value="Hong Kong">
												Hong Kong
											</option>
											<option class="level-0" value="Macau">
												Macau
											</option>
											<option class="level-0" value="Qatar">
												Qatar
											</option>
											<option class="level-0" value="Saudi Arabia">
												Saudi Arabia
											</option>
											<option class="level-0" value="Singapore">
												Singapore
											</option>
											<option class="level-0" value="State of Kuwait">
												State of Kuwait
											</option>
											<option class="level-0" value="United Arab Emirates">
												United Arab Emirates
											</option>
										</select>
									</div>
								</fieldset>
								<fieldset class="fieldset-job_location">
									<label for="job_location">City * <small></small></label>
									<div class="field">
										<input class="jmfe-text-field jmfe-input-text input-text text-job_location" id="job_location" name="j_districtlocation" placeholder="e.g. &quot;Wan Chai&quot;" title="" type="text" value=""> <small class="description text-job_location-description">As your location is important for the candidates, we recommend you to fill your district location.</small>
									</div>
								</fieldset>
								<fieldset class="fieldset-job_type">
									<label for="job_type">Job type * 	</label>
									<div class="field required-field">
										<select class='postform' id='job_type' name='j_type' required="">
											
											<option value="" selected disabled>
												Select job type
											</option>
											<option class="level-0" selected="selected" value="Full Time">
												Full Time
											</option>
											<option class="level-0" value="Part Time">
												Part Time
											</option>
											<option class="level-0" value="Temporary">
												Temporary
											</option>
										</select>
									</div>
								</fieldset>
								<fieldset class="fieldset-job_category">
									<label for="job_category">Job category <small>(optional)</small></label>
									<div class="field">
										<select class='postform' id='job_category' name='j_category' required="">
											<option  value="" selected disabled>
												Select job category
											</option>
											<option class="level-0" value="Domestic Helper">
												Domestic Helper
											</option>
											<option class="level-0" value="Driver">
												Driver
											</option>
											<option class="level-0" value="Other">
												Other
											</option>
											<option class="level-1" value="Babysitter">
												&nbsp;&nbsp;&nbsp;Babysitter
											</option>
											<option class="level-1" value="Gardener">
												&nbsp;&nbsp;&nbsp;Gardener
											</option>
											<option class="level-1" value="Handyman">
												&nbsp;&nbsp;&nbsp;Handyman
											</option>
											<option class="level-1" value="Marternity Specialist">
												&nbsp;&nbsp;&nbsp;Marternity Specialist
											</option>
										</select>
									</div>
								</fieldset>
								
								<fieldset class="fieldset-job_description">
									<label for="job_description">Job Description *	</label>
									<div class="field required-field">
										<div class="wp-core-ui wp-editor-wrap html-active" id="wp-job_description-wrap">
											<link href='wp-includes/css/dashicons.min4a41.css?ver=4.8.2' id='dashicons-css' media='all' rel='stylesheet' type='text/css'>
											<link href='wp-includes/css/editor.min4a41.css?ver=4.8.2' id='editor-buttons-css' media='all' rel='stylesheet' type='text/css'>
											<div class="wp-editor-container" id="wp-job_description-editor-container">
												<textarea class="wp-editor-area" cols="40" id="job_description" name="j_description" required="" minlength="30" maxlength="150" rows="8"></textarea rw>
											</div>
										</div><small class="description"><i> &nbsp; &nbsp; &nbsp; Please give some information about the job position and about your family.</small></i>
									</div>
								</fieldset>
								<fieldset class="fieldset-working_statuts">
									<label for="working_statuts">Preferred Working Status *</label>
									<div class="field required-field">
										<select class='postform' id='working_statuts' name='j_workingstatus' required="">
											
											<option value="" selected disabled>
												Select status
											</option>
											<option  value="Break Contract">
												Break Contract
											</option>
											<option  value="Finished Contract">
												Finished Contract
											</option>
											<option  value="Terminated Due to Relocation/Financial">
												Terminated Due to Relocation/Financial
											</option>
											<option  value="Terminated for Other Reasons">
												Terminated for Other Reasons
											</option>
											<option  value="Transfer">
												Transfer
											</option>
											<option  value="Unemployed">
												Unemployed
											</option>
										</select>
									</div>
								</fieldset>
								<fieldset class="fieldset-helper_requirements">
									<label for="helper_requirements">Main Duties <small>(optional)</small></label>
									<div class="field">
										<ul class="job-manager-term-checklist job-manager-term-checklist-helper_requirements">
											<li class="popular-category" id='helper_requirement-57'><label class="selectit"><input id="in-helper_requirement-57" name="j_mainduties[]" type="checkbox" value="Baby Care"> Baby Care</label></li>
											<li class="popular-category" id='helper_requirement-56'><label class="selectit"><input id="in-helper_requirement-56" name="j_mainduties[]" type="checkbox" value="Child Care"> Child Care</label></li>
											<li class="popular-category" id='helper_requirement-54'><label class="selectit"><input id="in-helper_requirement-54" name="j_mainduties[]" type="checkbox" value="Elder Care"> Elder Care</label></li>
											<li class="popular-category" id='helper_requirement-180'><label class="selectit"><input id="in-helper_requirement-180" name="j_mainduties[]" type="checkbox" value="Groceries"> Groceries</label></li>
											<li class="popular-category" id='helper_requirement-79'><label class="selectit"><input id="in-helper_requirement-79" name="j_mainduties[]" type="checkbox" value="Housekeeping"> Housekeeping</label></li>
											<li class="popular-category" id='helper_requirement-53'><label class="selectit"><input id="in-helper_requirement-53" name="j_mainduties[]" type="checkbox" value="Pet Care"> Pet Care</label></li>
											<li class="popular-category" id='helper_requirement-91'><label class="selectit"><input id="in-helper_requirement-91" name="j_mainduties[]" type="checkbox" value="Professional Driver"> Professional Driver</label></li>
											<li class="popular-category" id='helper_requirement-55'><label class="selectit"><input id="in-helper_requirement-55" name="j_mainduties[]" type="checkbox" value="Teen Care"> Teen Care</label></li>
										</ul>
									</div>
								</fieldset>
								
								<fieldset class="fieldset-helper_requirements">
									<label for="helper_requirements">Cooking Skills <small>(optional)</small></label>
									<div class="field">
										<ul class="job-manager-term-checklist job-manager-term-checklist-helper_requirements">
											<li class="popular-category" id='helper_requirement-57'><label class="selectit"><input id="in-helper_requirement-57" name="j_cookingskills[]" type="checkbox" value="Arabic"> Arabic</label></li>
											<li class="popular-category" id='helper_requirement-56'><label class="selectit"><input id="in-helper_requirement-56" name="j_cookingskills[]" type="checkbox" value="Chinese"> Child Care</label></li>
											<li class="popular-category" id='helper_requirement-54'><label class="selectit"><input id="in-helper_requirement-54" name="j_cookingskills[]" type="checkbox" value="Indian"> Elder Care</label></li>
											<li class="popular-category" id='helper_requirement-180'><label class="selectit"><input id="in-helper_requirement-180" name="j_cookingskills[]" type="checkbox" value="Japanese"> Japanese</label></li>
											<li class="popular-category" id='helper_requirement-79'><label class="selectit"><input id="in-helper_requirement-79" name="j_cookingskills[]" type="checkbox" value="Vegetarian"> Vegetarian</label></li>
											<li class="popular-category" id='helper_requirement-91'><label class="selectit"><input id="in-helper_requirement-91" name="j_cookingskills[]" type="checkbox" value="Western"> Western</label></li>
										</ul>
									</div>
								</fieldset>
								<fieldset class="fieldset-other_skills">
									<label for="other_skills">Other Required Skills <small>(optional)</small></label>
									<div class="field">
										<ul class="job-manager-term-checklist job-manager-term-checklist-other_skills">
											<li class="popular-category" id='other_skill-199'><label class="selectit"><input id="in-other_skill-199" 	name="j_otherskills[]" type="checkbox" value="Baking"> Baking</label></li>
											<li class="popular-category" id='other_skill-84'><label class="selectit"><input id="in-other_skill-84" 		name="j_otherskills[]" type="checkbox" value="Car Wash"> Car Wash</label></li>
											<li class="popular-category" id='other_skill-245'><label class="selectit"><input id="in-other_skill-245" 	name="j_otherskills[]" type="checkbox" value="Driving Licence"> Driving Licence</label></li>
											<li class="popular-category" id='other_skill-189'><label class="selectit"><input id="in-other_skill-189" 	name="j_otherskills[]" type="checkbox" value="First Aid Certificate"> First Aid Certificate</label></li>
											<li class="popular-category" id='other_skill-85'><label class="selectit"><input id="in-other_skill-85" 		name="j_otherskills[]" type="checkbox" value="Gardening"> Gardening</label></li>
											<li id='other_skill-89'><label class="selectit"><input id="in-other_skill-89" 								name="j_otherskills[]" type="checkbox" value="Handyman"> Handyman</label></li>
											<li class="popular-category" id='other_skill-86'><label class="selectit"><input id="in-other_skill-86" 		name="j_otherskills[]" type="checkbox" value="Housework"> Housework</label></li>
											<li class="popular-category" id='other_skill-87'><label class="selectit"><input id="in-other_skill-87" 		name="j_otherskills[]" type="checkbox" value="Sewing"> Sewing</label></li>
											<li class="popular-category" id='other_skill-200'><label class="selectit"><input id="in-other_skill-200" 	name="j_otherskills[]" type="checkbox" value="Swimming"> Swimming</label></li>
											<li class="popular-category" id='other_skill-201'><label class="selectit"><input id="in-other_skill-201" 	name="j_otherskills[]" type="checkbox" value="Tutoring"> Tutoring</label></li>
										</ul>
									</div>
								</fieldset>
								<fieldset class="fieldset-candidate_languages2">
									<label for="candidate_languages2">Required Languages *</label>
									<div class="field required-field">
										<ul class="job-manager-term-checklist job-manager-term-checklist-candidate_languages2" required >
											<li class="popular-category" id='candidate_language2-149'><label class="selectit"><input id="in-candidate_language2-149"  name="j_requiredlanguages[]" type="checkbox" value="Cantonese"> Cantonese</label></li>
											<li class="popular-category" id='candidate_language2-148'><label class="selectit"><input id="in-candidate_language2-148" name="j_requiredlanguages[]" type="checkbox" value="English"> English</label></li>
											<li class="popular-category" id='candidate_language2-152'><label class="selectit"><input id="in-candidate_language2-152" name="j_requiredlanguages[]" type="checkbox" value="Filipino"> Filipino</label></li>
											<li class="popular-category" id='candidate_language2-153'><label class="selectit"><input id="in-candidate_language2-153" name="j_requiredlanguages[]" type="checkbox" value="Indonesian"> Indonesian</label></li>
											<li id='candidate_language2-154'><label class="selectit"><input id="in-candidate_language2-154" 						 name="j_requiredlanguages[]" type="checkbox" value="Japanese"> Japanese</label></li>
											<li class="popular-category" id='candidate_language2-150'><label class="selectit"><input id="in-candidate_language2-150" name="j_requiredlanguages[]" type="checkbox" value="Mandarin"> Mandarin</label></li>
											<li id='candidate_language2-168'><label class="selectit"><input id="in-candidate_language2-168" 						 name="j_requiredlanguages[]" type="checkbox" value="Modern Arabic"> Modern Arabic</label></li>
											<li id='candidate_language2-151'><label class="selectit"><input id="in-candidate_language2-151"							 name="j_requiredlanguages[]" type="checkbox" value="Thai"> Thai</label></li>
										</ul>
									</div>
								</fieldset>
								<fieldset class="fieldset-application">
									<label for="application">Application Email *</label>
									<div class="field required-field">
										<input class="jmfe-text-field jmfe-input-text input-text text-application" id="application" name="j_applicationemail" placeholder="Enter your email address" required="" title="" type="text" value="">
									</div>
								</fieldset>
								<h2>Family Details</h2>
								
								<fieldset class="fieldset-employer_nationalities">
									<label for="employer_nationalities">Nationality *</label>
									<div class="field required-field">
										<select class='postform' id='employer_nationalities' name='j_nationality' required="">
											<option value="" selected disabled>
												Select family type
											</option><option class="level-0" value="American Family">
												American Family
											</option>
											<option class="level-0" value="Australian Family">
												Australian Family
											</option>
											<option class="level-0" value="Belgian Family">
												Belgian Family
											</option>
											<option class="level-0" value="British Family">
												British Family
											</option>
											<option class="level-0" value="Canadian Family">
												Canadian Family
											</option>
											<option class="level-0" value="Chinese Family">
												Chinese Family
											</option>
											<option class="level-0" value="Dutch Family">
												Dutch Family
											</option>
											<option class="level-0" value="Filipino Family">
												Filipino Family
											</option>
											<option class="level-0" value="French Family">
												French Family
											</option>
											<option class="level-0" value="German Family">
												German Family
											</option>
											<option class="level-0" value="Hong Kong Family">
												Hong Kong Family
											</option>
											<option class="level-0" value="Indian Family">
												Indian Family
											</option>
											<option class="level-0" value="Italian Family">
												Italian Family
											</option>
											<option class="level-0" value="Japanese Family">
												Japanese Family
											</option>
											<option class="level-0" value="Korean Family">
												Korean Family
											</option>
											<option class="level-0" value="Middle East Family">
												Middle East Family
											</option>
											<option class="level-0" value="Pakistani Family">
												Pakistani Family
											</option>
											<option class="level-0" value="Russian Family">
												Russian Family
											</option>
											<option class="level-0" value="Singaporean family">
												Singaporean family
											</option>
											<option class="level-0" value="South African Family">
												South African Family
											</option>
											<option class="level-0" value="Spanish Family">
												Spanish Family
											</option>
											<option class="level-0" value="Taiwanese Family">
												Taiwanese Family
											</option>
											<option class="level-0" value="Turkish Family">
												Turkish Family
											</option>
											<option class="level-0" value="Western Family">
												Western Family
											</option>
										</select>
									</div>
								</fieldset>
								<fieldset class="fieldset-family_types">
									<label for="family_types">Family Type *</label>
									<div class="field required-field">
										<select class='postform' id='family_types' name='j_familytype' required="">
											<option value="" selected disabled>
												Select family type
											</option>
											<option class="level-0" value="Couple">
												Couple
											</option>
											<option class="level-0" value="Couple + 1 kid">
												Couple + 1 kid
											</option>
											<option class="level-0" value="Couple + 2 kids">
												Couple + 2 kids
											</option>
											<option class="level-0" value="Couple + 3 kids">
												Couple + 3 kids
											</option>
											<option class="level-0" value="Couple + 4 kids">
												Couple + 4 kids
											</option>
											<option class="level-0" value="Couple + 5 kids">
												Couple + 5 kids
											</option>
											<option class="level-0" value="Couple + Parents">
												Couple + Parents
											</option>
											<option class="level-0" value="Couple with Parents">
												Couple with Parents
											</option>
											<option class="level-0" value="Large Family (&gt; 6)">
												Large Family (&gt; 6)
											</option>
											<option class="level-0" value="Large Family (&gt;6)">
												Large Family (&gt;6)
											</option>
											<option class="level-0" value="Other">
												Other
											</option>
											<option class="level-0" value="Single">
												Single
											</option>
											<option class="level-0" value="Single + 1 kid">
												Single + 1 kid
											</option>
											<option class="level-0" value="Single + 2 kids">
												Single + 2 kids
											</option>
										</select>
									</div>
								</fieldset>
								<fieldset class="fieldset-start_date">
									<label for="start_date">Start Date *</label>
									<div class="field required-field">
										<input class="jmfe-date-field jmfe-input-date input-date input-text jmfe-date-picker date-picker-start_date" id="start_date" maxlength="" name="j_startdate" placeholder="" required="" type="date" value=""> <span class="description date-picker-start_date-description"><small class="description">Deadline for applicants to start to work for your family.</small></span>
									</div><span class="description date-picker-start_date-description"></span>
								</fieldset>
								<fieldset class="fieldset-salary_range">
									<span class="description date-picker-start_date-description"><label for="salary_range">Monthly Salary * <small>(optional)</small></label></span>
									<div class="field">
										<span class="description date-picker-start_date-description"><input class="jmfe-text-field jmfe-input-text input-text text-salary_range" id="salary_range" required="" name="j_monthlysalary" placeholder="e.g. &quot;HK$5,000&quot;, &quot;Based on experience&quot;..." title="" type="text" value=""></span>
									</div><span class="description date-picker-start_date-description"></span>
								</fieldset>
								<fieldset class="fieldset-company_logo">
									<span class="description date-picker-start_date-description"><label for="company_logo">Specific Logo <small>(optional)</small></label></span>
									<div class="field v_originalfield">
										<span class="description date-picker-start_date-description"><label class="file-field-label" for="company_logo"></label></span>
										<div class="job-manager-uploaded-files">
											<span class="description date-picker-start_date-description"><label class="file-field-label" for="company_logo"></label></span>
										</div><span class="description date-picker-start_date-description"><label class="file-field-label" for="company_logo"><input class="input-text file-company_logo wp-job-manager-file-upload ajax-file-company_logo" data-file_types="jpg|jpeg|png" id="company_logo" name="j_specificlogo" placeholder="" type="file"> <span class="button button--size-medium">Choose Image</span></label> <small class="description file-field-description">A nice logo will be automatically added by your support team - Not required to upload your own logo.</small></span>
									</div>
									<div class="field v_customfield">
										<div class="" style="width:20% !important;">
											<input id="myCropper" name="slim" type="file">
										</div><span class="button button--size-medium uploadbutton" style="margin-top: 1em; cursor:pointer;">Choose Image</span> <input class="input-text" name="current_company_logo" type="hidden" value=""> <input class="input-text company_logo" name="company_logo" type="hidden" value=""> <span id="imagename"></span><br>
										<small class="description">A nice logo will be automatically added by your support team - Not required to upload your own logo.</small>
									</div>
								</fieldset>
								<p><input name="job_manager_form" type="hidden" value="submit-job"> <input name="job_id" type="hidden" value="0"> <input name="step" type="hidden" value="0"> 

								
								<button name="submit" type="submit">SUBMIT JOB</button>
								</p>
								<p class="p1"><em><span class="s1">Don’t forget! A nice description of your family will increase your chances to connect with the best profiles. To check if you like your post, just click on the Submit Job button.&nbsp;</span></em></p>
							</form>
							<script type="text/javascript">
							jQuery(document).ready(function(){
							jQuery(".uploadbutton").on("click",function(){
							     jQuery( ".slim-file-hopper" ).trigger( "click" );
							});

							var supported = Slim.supported;    
							 
							 if(supported){
							      jQuery('.v_originalfield').remove();   
							jQuery('#myCropper').slim({
							       crop: {
							           x: 0,
							           y: 0,
							           width: 100,
							           height: 100
							       },
							       size:{
							         width: 320,
							         height: 320,  
							       },
							       push: "true",
							       service: ajaxurl,
							       download: false,
							       label: '',
							       buttonConfirmLabel: 'Ok',
							       ratio:'1:1',
							       didUpload:function(err, data, res) {
							           if(res.status === "success" ){
							             jQuery('.slim').show();
							             jQuery('#imagename').attr("data-imagename",res.name);
							             jQuery('input[name="current_company_logo"]').val(res.url);
							             jQuery('input[name="company_logo"]').val(res.url);
							             jQuery('.uploadbutton').hide();
							           }
							        },
							        didRemove:function(data){
							           var name = jQuery('#imagename').attr('data-imagename'); 
							           jQuery('input[name="current_company_logo"]').val("");
							           jQuery('input[name="company_logo"]').val("");
							           jQuery('#imagename').attr("data-imagename",'');
							             var url = ajaxurl;
							             var xhr = new XMLHttpRequest();
							             xhr.open('GET.html', url+ '?action=custom_file_remove&name=' + name, true);
							             xhr.send();
							             jQuery('.uploadbutton').show();
							             jQuery('.slim').hide();
							        },
							        willSave:function(data, ready){
							           var name = jQuery('#imagename').attr('data-imagename'); 
							           if(name != "" && name != null && name != 'undefined'){
							             jQuery('#imagename').attr("data-imagename",'');
							             var url = ajaxurl;
							             var xhr = new XMLHttpRequest();
							             xhr.open('GET.html', url+ '?action=custom_file_remove&name=' + name, true);
							             xhr.send();
							         }
							         ready(data);
							        }
							     }); 
							 }else{
							    jQuery('.v_customfield').remove();
							 }
							 jQuery('.slim').hide();
							});
							</script>
						</div>
					</article>
				</div>
			</div>
		</div>
	</div>