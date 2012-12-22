<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>
        </title>
        <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
        <link rel="stylesheet" href="css/my.css" />
        <style>
            /* App custom styles */
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js">
        </script>
        <script src="https://ajax.aspnetcdn.com/ajax/jquery.mobile/1.2.0/jquery.mobile-1.2.0.min.js">
        </script>
        <script src="js/jquery.validate.js">
        </script>
        <script src="js/main.js">
        </script>        
        <script>
          $(document).ready(function(){
            $("#initialForm").validate();
            });
        </script>
    </head>
    <body>
        <!-- Home -->
        <div data-role="page" id="page1">
            <div data-theme="" data-role="header">
                <h3>
                    Header
                </h3>
            </div>
            <div data-role="content">
              <form id="initialForm" method="post" action="topoffer2.php">
                <div data-role="fieldcontain">
                    <label for="selectmenu1">
                        Amount Requested
                    </label>
                    <select id="requested_loan_amount" name="requested_loan_amount"  data-mini="true">
                        <option value="100">$100</option>
                        <option value="200">$200</option>
                        <option value="300" selected="selected">$300</option>
                        <option value="400">$400</option>
                        <option value="500">$500</option>
                        <option value="600">$600</option>
                        <option value="700">$700</option>
                        <option value="800">$800</option>
                        <option value="900">$900</option>
                        <option value="1000">$1000</option>
                    </select>
                </div>
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup" data-mini="true">
                        <label for="textinput3">
                            Zip Code
                        </label>
                        <input name="zip" id="zip" maxlength=5  value="" type="text" class="required" />
                    </fieldset>
                </div>
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup" data-mini="true">
                        <label for="textinput4">
                            Email
                        </label>
                        <input name="email" maxlength="70" id="email" type="email" class="required email" />
                    </fieldset>
                </div>
                <div data-role="fieldcontain">
                    <label for="textinput5">
                        Birthday
                    </label>
                    <fieldset data-role="controlgroup" data-mini="true" data-type="horizontal">
                      <select name="birthMonth" onChange="update_birth_date();" id="birthMonth" class="required">
                        <option value="">&nbsp;</option>
                        <option value="01">Jan</option>
                        <option value="02">Feb</option>
                        <option value="03">Mar</option>
                        <option value="04">Apr</option>
                        <option value="05">May</option>
                        <option value="06">Jun</option>
                        <option value="07">Jul</option>
                        <option value="08">Aug</option>
                        <option value="09">Sep</option>
                        <option value="10">Oct</option>
                        <option value="11">Nov</option>
                        <option value="12">Dec</option>
                      </select>
                      <select name="birthDay" onChange="update_birth_date();" id="birthDay" class="required">
                        <option value="">&nbsp;</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                      </select>
                      <select name="birthYear" onChange="update_birth_date();" id="birthYear" class="required">
                        <option value="">&nbsp;</option>
                        <option value="1994">1994</option>
                        <option value="1993">1993</option>
                        <option value="1992">1992</option>
                        <option value="1991">1991</option>
                        <option value="1990">1990</option>
                        <option value="1989">1989</option>
                        <option value="1988">1988</option>
                        <option value="1987">1987</option>
                        <option value="1986">1986</option>
                        <option value="1985">1985</option>
                        <option value="1984">1984</option>
                        <option value="1983">1983</option>
                        <option value="1982">1982</option>
                        <option value="1981">1981</option>
                        <option value="1980">1980</option>
                        <option value="1979">1979</option>
                        <option value="1978">1978</option>
                        <option value="1977">1977</option>
                        <option value="1976">1976</option>
                        <option value="1975">1975</option>
                        <option value="1974">1974</option>
                        <option value="1973">1973</option>
                        <option value="1972">1972</option>
                        <option value="1971">1971</option>
                        <option value="1970">1970</option>
                        <option value="1969">1969</option>
                        <option value="1968">1968</option>
                        <option value="1967">1967</option>
                        <option value="1966">1966</option>
                        <option value="1965">1965</option>
                        <option value="1964">1964</option>
                        <option value="1963">1963</option>
                        <option value="1962">1962</option>
                        <option value="1961">1961</option>
                        <option value="1960">1960</option>
                        <option value="1959">1959</option>
                        <option value="1958">1958</option>
                        <option value="1957">1957</option>
                        <option value="1956">1956</option>
                        <option value="1955">1955</option>
                        <option value="1954">1954</option>
                        <option value="1953">1953</option>
                        <option value="1952">1952</option>
                        <option value="1951">1951</option>
                        <option value="1950">1950</option>
                        <option value="1949">1949</option>
                        <option value="1948">1948</option>
                        <option value="1947">1947</option>
                        <option value="1946">1946</option>
                        <option value="1945">1945</option>
                        <option value="1944">1944</option>
                        <option value="1943">1943</option>
                        <option value="1942">1942</option>
                        <option value="1941">1941</option>
                        <option value="1940">1940</option>
                        <option value="1939">1939</option>
                        <option value="1938">1938</option>
                        <option value="1937">1937</option>
                        <option value="1936">1936</option>
                        <option value="1935">1935</option>
                        <option value="1934">1934</option>
                        <option value="1933">1933</option>
                        <option value="1932">1932</option>
                        <option value="1931">1931</option>
                        <option value="1930">1930</option>
                        <option value="1929">1929</option>
                        <option value="1928">1928</option>
                        <option value="1927">1927</option>
                        <option value="1926">1926</option>
                        <option value="1925">1925</option>
                        <option value="1924">1924</option>
                        <option value="1923">1923</option>
                        <option value="1922">1922</option>
                        <option value="1921">1921</option>
                        <option value="1920">1920</option>
                        <option value="1919">1919</option>
                        <option value="1918">1918</option>
                        <option value="1917">1917</option>
                        <option value="1916">1916</option>
                        <option value="1915">1915</option>
                        <option value="1914">1914</option>
                        <option value="1913">1913</option>
                      </select>
                      <input type="hidden" id="birth_date" name="birth_date" />
                    </fieldset>
                </div>
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
                        <legend>
                            US Military or Dependent
                        </legend>
                        <input id="radio1" name="active_military" value="true" type="radio" />
                        <label for="radio1">
                            Yes
                        </label>
                        <input id="radio2" name="active_military" value="false" type="radio" checked="checked"/>
                        <label for="radio2">
                            No
                        </label>
                    </fieldset>
                </div>
                <input type="submit" data-theme="e" value="Submit" />
              </form>  
            </div>
        </div>
        <script>
            //App custom javascript
        </script>
    </body>
</html>