<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>
        </title>
        <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
        <link rel="stylesheet" href="css/my.css" />
        <link rel="stylesheet" href="css/mobiscroll-2.3.1.custom.min.css" />
        <style>
            /* App custom styles */
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js">
        </script>
        <script src="https://ajax.aspnetcdn.com/ajax/jquery.mobile/1.2.0/jquery.mobile-1.2.0.min.js">
        </script>
        <script src="js/jquery.validate.js">
        </script>
        <script src="js/mobiscroll-2.3.1.custom.min.js">
        </script>
        <script src="js/main.js">
        </script>         
        <script>
          $(document).ready(function(){
            $("#fullForm").validate();
            }); 
          $(document).ready(function(){
            showCalendar(next_pay_date);
            });

        </script>
    </head>
    <body>
        <!-- Home -->
        <div data-role="page" id="page1">
            <div data-theme="" data-role="header">
                <h3>
                    Get Cash
                </h3>
            </div>
            <div data-role="content">
              <form id="fullForm" onSubmit="update_paydates(next_pay_date)" action="process.php" method="post" data-ajax="false">
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup" data-mini="true">
                        <input name="requested_loan_amount" id="requested_loan_amount" value="<?php echo $_POST["requested_loan_amount"]; ?>" type="hidden" />
                        <input name="zip" id="zip"  value="<?php echo $_POST["zip"]; ?>" type="hidden" />
                        <input name="email" id="email" value="<?php echo $_POST["email"]; ?>" type="hidden" />
                        <input name="birth_date" id="birth_date" value="<?php echo $_POST["birth_date"]; ?>" type="hidden" />
                        <input name="active_military" id="active_military" value="<?php echo $_POST["active_military"]; ?>" type="hidden" />
                    </fieldset>
                </div>
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup" data-mini="true">
                        <label for="textinput3">
                            First Name
                        </label>
                        <input name="first_name" id="first_name" placeholder="" value="" type="text" class="required"/>
                    </fieldset>
                </div>
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup" data-mini="true">
                        <label for="textinput4">
                            Last Name
                        </label>
                        <input name="last_name" id="last_name" placeholder="" value="" type="text" class="required" />
                    </fieldset>
                </div>
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup" data-mini="true">
                        <label for="textinput5">
                            Street Address
                        </label>
                        <input name="address" id="address" placeholder="" value="" type="text" class="required"/>
                    </fieldset>
                </div>
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
                        <legend>
                            Own or Rent
                        </legend>
                        <input id="radio1" name="housing" value="own" type="radio" checked="checked" />
                        <label for="radio1">
                            Own
                        </label>
                        <input id="radio2" name="housing" value="rent" type="radio" />
                        <label for="radio2">
                            Rent
                        </label>
                    </fieldset>
                </div>
                <div data-role="fieldcontain">
                    <label for="selectmenu2">
                        Time at Address
                    </label>
                    <select name="months_at_residence" id="months_at_residence" data-mini="true">
                      <option value="12">1 Year or less</option>
                      <option value="24">2 Years</option>
                      <option value="36">3 Years</option>
                      <option value="48">4 Years</option>
                      <option value="60" selected="selected">5 Years</option>
                      <option value="72">6 Years</option>
                      <option value="84">7 Years</option>
                      <option value="96">8 Years</option>
                      <option value="108">9 Years</option>
                      <option value="120">10+ Years</option>
                    </select>
                </div>
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup" data-mini="true">
                        <label for="textinput6">
                            Home Phone
                        </label>
                        <div class="ui-grid-b">
                            <div class="ui-block-a">        
                              <input name="HomePhone1" id="HomePhone1" placeholder="###" class="required" size="3" maxlength="3" type="tel" onChange="combine_three(home_phone, HomePhone1, home_b, home_c);" class="required"/> 
                            </div>
                            <div class="ui-block-b">
                              <input name="HomePhone2" id="HomePhone2" placeholder="###" class="required" value="" size="3" maxlength="3" type="tel" onChange="combine_three(home_phone, HomePhone1, HomePhone2, home_c);" class="required"/>
                            </div>
                            <div class="ui-block-c">
                              <input name="HomePhone3" id="HomePhone3" placeholder="####" class="required" value="" size="4" maxlength="4" type="tel" onChange="combine_three(home_phone, HomePhone1, HomePhone2, HomePhone3);" class="required"/>        
                            </div>
                        </div>
                        <input type="hidden" id="home_phone" name="home_phone" />
                    </fieldset>
                </div>
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup">
                        <label for="textinput8">
                            SSN
                        </label>

                        <div class="ui-grid-b">
                            <div class="ui-block-a">        
                              <input name="ssn_a" id="ssn_a" placeholder="###" class="required" size="3" maxlength="3" type="text" onChange="combine_three(social_security_number, ssn_a, ssn_b, ssn_c);" class="required"/> 
                            </div>
                            <div class="ui-block-b">
                              <input name="ssn_b" id="ssn_b" placeholder="##" class="required" value="" size="2" maxlength="2" type="text" onChange="combine_three(social_security_number, ssn_a, ssn_b, ssn_c);" class="required"/>
                            </div>
                            <div class="ui-block-c">
                              <input name="ssn_c" id="ssn_c" placeholder="####" class="required" value="" size="4" maxlength="4" type="text" onChange="combine_three(social_security_number, ssn_a, ssn_b, ssn_c);" class="required"/>        
                            </div>
                        </div>
                        <input type="hidden" id="social_security_number" name="social_security_number" />


                    </fieldset>
                </div>
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup" data-mini="true">
                        <label for="textinput7">
                            Driver's License/ ID#
                        </label>
                        <input name="driving_license_number" id="driving_license_number" placeholder="" value="" type="text" class="required" />
                    </fieldset>
                </div>
                <div data-role="fieldcontain">
                    <label for="selectmenu3">
                        Issuing State
                    </label>
                    <select name="driving_license_state" id="driving_license_state" data-mini="true">
                      <option value="AL">Alabama</option>
                      <option value="AK">Alaska</option>
                      <option value="AZ">Arizona</option>
                      <option value="AR">Arkansas</option>
                      <option value="CA">California</option>
                      <option value="CO">Colorado</option>
                      <option value="CT">Connecticut</option>
                      <option value="DE">Delaware</option>
                      <option value="DC">Dist of Columbia</option>
                      <option value="FL">Florida</option>
                      <option value="GA">Georgia</option>
                      <option value="HI">Hawaii</option>
                      <option value="ID">Idaho</option>
                      <option value="IL">Illinois</option>
                      <option value="IN">Indiana</option>
                      <option value="IA">Iowa</option>
                      <option value="KS">Kansas</option>
                      <option value="KY">Kentucky</option>
                      <option value="LA">Louisiana</option>
                      <option value="ME">Maine</option>
                      <option value="MD">Maryland</option>
                      <option value="MA">Massachusetts</option>
                      <option value="MI">Michigan</option>
                      <option value="MN">Minnesota</option>
                      <option value="MS">Mississippi</option>
                      <option value="MO">Missouri</option>
                      <option value="MT">Montana</option>
                      <option value="NE">Nebraska</option>
                      <option value="NV">Nevada</option>
                      <option value="NH">New Hampshire</option>
                      <option value="NJ">New Jersey</option>
                      <option value="NM">New Mexico</option>
                      <option value="NY">New York</option>
                      <option value="NC">North Carolina</option>
                      <option value="ND">North Dakota</option>
                      <option value="OH">Ohio</option>
                      <option value="OK">Oklahoma</option>
                      <option value="OR">Oregon</option>
                      <option value="PA">Pennsylvania</option>
                      <option value="RI">Rhode Island</option>
                      <option value="SC">South Carolina</option>
                      <option value="SD">South Dakota</option>
                      <option value="TN">Tennessee</option>
                      <option value="TX">Texas</option>
                      <option value="UT">Utah</option>
                      <option value="VT">Vermont</option>
                      <option value="VA">Virginia</option>
                      <option value="WA">Washington</option>
                      <option value="WV">West Virginia</option>
                      <option value="WI">Wisconsin</option>
                      <option value="WY">Wyoming</option> 
                    </select>
                </div>

                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup">
                        <label for="textinput10">
                            Monthly Income
                        </label>
                        <select name="monthly_income" id="monthly_income" data-mini="true">
                <option value="750">Less than &#36;750</option>
            <option value="1000">&#36;751 - &#36;1000</option>
            <option value="1250">&#36;1001 - &#36;1250</option>
            <option value="1470">&#36;1251 - &#36;1470</option>
            <option value="1750">&#36;1471 - &#36;1750</option>
            <option value="2000">&#36;1751 - &#36;2000</option>
            <option value="2250">&#36;2001 - &#36;2250</option>
            <option value="2500">&#36;2251 - &#36;2500</option>
            <option value="2750" selected="selected">&#36;2501 - &#36;2750</option>
            <option value="3000">&#36;2751 - &#36;3000</option>
            <option value="3250">&#36;3001 - &#36;3250</option>
            <option value="3500">&#36;3251 - &#36;3500</option>
            <option value="3750">&#36;3501 - &#36;3750</option>
            <option value="4000">&#36;3751 - &#36;4000</option>
            <option value="4250">&#36;4001 - &#36;4250</option>
            <option value="4500">&#36;4251 - &#36;4500</option>
            <option value="4750">&#36;4501 - &#36;4750</option>
            <option value="5000">&#36;4751 - &#36;5000</option>
            <option value="5250">&#36;5001 - &#36;5250</option>
            <option value="5500">&#36;5251 - &#36;5500</option>
            <option value="5750">&#36;5501 - &#36;5750</option>
            <option value="6000">&#36;5751 - &#36;6000</option>
            <option value="6001">More than &#36;6000</option>
                        </select>


                    </fieldset>
                </div>
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
                        <legend>
                            Income Source
                        </legend>
                        <input id="radio3" name="income_type" value="employment" type="radio" checked="checked" />
                        <label for="radio3">
                            Employment
                        </label>
                        <input id="radio4" name="income_type" value="benefits" type="radio"/>
                        <label for="radio4">
                            Benefits
                        </label>
                    </fieldset>                    
                </div>
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup">
                        <label for="textinput12">
                            Pay Period
                        </label>
                        <select name="pay_period" id="pay_period" data-mini="true"/>
                          <option value="weekly" selected="selected">Weekly</option>
                          <option value="biweekly">Bi-Weekly</option>
                          <option value="twice_monthly">Twice Monthly</option>
                          <option value="monthly">Monthly</option>
                        </select>
                    </fieldset>
                </div>
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup">
                        <label for="textinput13">
                            Next Payday
                        </label>
                        <input name="next_pay_date" id="next_pay_date" placeholder="" value="" type="hidden" />
                        <input id="pd1m" class="ui-input-text ui-body-c ui-corner-all ui-shadow-inset" type="hidden" value="" placeholder="" name="pd1m">
                        <input id="pd1d" class="ui-input-text ui-body-c ui-corner-all ui-shadow-inset" type="hidden" value="" placeholder="" name="pd1d">
                        <input id="pd1y" class="ui-input-text ui-body-c ui-corner-all ui-shadow-inset" type="hidden" value="" placeholder="" name="pd1y">
                    </fieldset>
                </div>
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup">
                        <label for="textinput14">
                            Name of Employer
                        </label>
                        <input name="employer" id="employer" placeholder="" value="" type="text" class="required" />
                    </fieldset>
                </div>
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup" data-mini="true">
                        <label for="textinput22">
                            Time with Employer
                        </label>
                        <select name="months_employed" id="months_employed">
                          <option value="12">1 Year or less</option>
                          <option value="24">2 Years</option>
                          <option value="36">3 Years</option>
                          <option value="48">4 Years</option>
                          <option value="60" selected="selected">5 Years</option>
                          <option value="72">6 Years</option>
                          <option value="84">7 Years</option>
                          <option value="96">8 Years</option>
                          <option value="108">9 Years</option>
                          <option value="120">10+ Years</option>
                        </select>


                    </fieldset>
                </div>
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup" data-mini="true">
                        <label for="textinput15">
                            Work Phone
                        </label>

                        <div class="ui-grid-b">
                            <div class="ui-block-a">        
                              <input name="EmployerPhone1" id="EmployerPhone1" placeholder="###" class="required" size="3" maxlength="3" type="tel" onChange="combine_three(work_phone, EmployerPhone1, EmployerPhone2, EmployerPhone3);" class="required" /> 
                            </div>
                            <div class="ui-block-b">
                              <input name="EmployerPhone2" id="EmployerPhone2" placeholder="###" class="required" value="" size="3" maxlength="3" type="tel" onChange="combine_three(work_phone, EmployerPhone1, EmployerPhone2, EmployerPhone3);" class="required" />
                            </div>
                            <div class="ui-block-c">
                              <input name="EmployerPhone3" id="EmployerPhone3" placeholder="####" class="required" value="" size="4" maxlength="4" type="tel" onChange="combine_three(work_phone, EmployerPhone1, EmployerPhone2, EmployerPhone3);" class="required" />        
                            </div>
                        </div>
                        <input type="hidden" id="work_phone" name="work_phone" />


                    </fieldset>
                </div>
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup" data-mini="true">
                        <label for="textinput16">
                            Bank Name
                        </label>
                        <input name="bank_name" id="bank_name" placeholder="" value="" type="text" class="required" />
                    </fieldset>
                </div>
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup" data-mini="true">
                        <label for="textinput17">
                            Time with Bank
                        </label>
                        <select name="months_with_bank" id="months_with_bank">
                          <option value="12">1 Year or less</option>
                          <option value="24">2 Years</option>
                          <option value="36">3 Years</option>
                          <option value="48">4 Years</option>
                          <option value="60" selected="selected">5 Years</option>
                          <option value="72">6 Years</option>
                          <option value="84">7 Years</option>
                          <option value="96">8 Years</option>
                          <option value="108">9 Years</option>
                          <option value="120">10+ Years</option>
                        </select>                        
                    </fieldset>
                </div>
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
                        <legend for="textinput18">
                            Account Type
                        </legend>
                        <input id="radio5" name="account_type" value="checking" type="radio" checked="checked" />
                        <label for="radio5">
                            Checking
                        </label>
                        <input id="radio6" name="account_type" value="savings" type="radio"/>
                        <label for="radio6">
                            Saving
                        </label>
                    </fieldset>
                </div>
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
                        <legend for="textinput19">
                            Direct Deposit
                        </legend>
                        <input id="radio7" name="direct_deposit" value="true" type="radio" checked="checked" />
                        <label for="radio7">
                            Yes
                        </label>
                        <input id="radio8" name="direct_deposit" value="false" type="radio"/>
                        <label for="radio8">
                            No
                        </label>
                    </fieldset>
                </div>

                <p>Bank Account Number and Routing Number are on the bottom left corner of your checks.</p>

                <img src="img/check.png" alt="www.thepaydayhound.com" />

                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup">
                        <label for="textinput20">
                            Account Number
                        </label>
                        <input name="account_number" id="account_number" placeholder="" value="" type="text" class="required" />
                    </fieldset>
                </div>
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup">
                        <label for="textinput21">
                            Routing Number
                        </label>
                        <input name="routing_number" id="routing_number" placeholder="" value="" type="text" maxlenght="9" class="required" />
                    </fieldset>
                </div>



                <input type="submit" data-theme="e" value="Finished: Submit" />
              </form>  
            </div>
        </div>
        <script>
            //App custom javascript
        </script>
    </body>
</html>