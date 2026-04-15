<style>
    .bg-white {
    background: white;
    color: black;
    }
    .text-justify {
    text-align: justify !important;
    }
    .font-weight-bold {
    font-weight: 700 !important;
    }
    .font-weight-bold {
    font-weight: 700 !important;
    }
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    }
    th, td {
    padding: 5px;
    text-align: left;
    }
    input[type=radio] {
    box-sizing: border-box;
    padding: 0;
    animation: blinker 2.9s linear infinite;
    }
    input[type='radio'] {
    -webkit-appearance: none;
    width: 20px;
    height: 20px;
    border-radius: 50% !important;
    outline: none;
    border: 3px solid #00246b;
    }
    input[type='radio']:before {
    content: '';
    display: block;
    width: 60%;
    height: 60%;
    margin: 20% auto;
    border-radius: 50%;
    }
</style>

<div class="small-business-operators" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-3">
        <h6 class="font-weight-bold">Small / Petty Food Business Operators Description:</h6>
        <span>
            Small / Petty Food Business Operator <b>(FBO)</b> are those who Manufactures or sells any kind of food by himself/herself. 
            <br>
            <b>Examples:</b>
            <table class="table table-bordered font-weight-bold text-center" style="font-size:13px;width: 100%;">
                <tbody>
                    <tr>
                        <td>Hawker</td>
                        <td>Pan Shop</td>
                        <td>Thela</td>
                        <td>Juice Stall</td>
                    </tr>
                    <tr>
                        <td>Temporary stall</td>
                        <td>Sweets Shop</td>
                        <td>Tea / Coffee Stall</td>
                        <td>Gol gappa stall</td>
                    </tr>
                    <tr>
                        <td>Fruit Vendors</td>
                        <td>Snacks Stall</td>
                        <td>Samosa Stall</td>
                        <td>Juice Stall</td>
                    </tr>
                    <tr>
                        <td>Chinese Stall</td>
                        <td>South Indian Stall</td>
                        <td>Jhalmuri Vendor</td>
                        <td>Milk Stall</td>
                    </tr>
                    <tr>
                        <td>Bread Pakoda Stall</td>
                        <td>Vegetable Vendors</td>
                        <td>Any Food Item Retailer </td>
                        <td>Ice Cream Stall</td>
                    </tr>
                    <tr>
                        <td>Fish Shop</td>
                        <td>Chicken Shop</td>
                        <td>Egg Shop</td>
                        <td>Other Small FBO</td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <p>
                <span style="font-weight:bold">Basic registration is only applicable for those businesses whose annual turnover(sales)  is less than 12 lac per annum.
                </span>
            </p>
            <p style="color:red;font-weight:bold">Do not apply under this category if your annual turnover(Sales) is more than 12 lacs. Applications violating FSSAI Law might get rejected.
            </p>
            <p>If your turnover exceeds Rs 12 lac Pa, please <a href="#" onclick="autoSelectLastOption()">click here </a> to apply under different category. Or select your category from above given <b>Kind Of Business dropdown menu</b>.</p>
        </span>
    </div>
    <table style="width: 100%; background: white; color: black;">
        <tbody>
            <tr>
                <td>
                    <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                    <select class="form-control choose_cerificate_value" name="choose_cerificate_value" >
                        <option selected="selected" value="">Select Certificate Validity</option>
                        <option value="1_Year" data-price="2899">certificate validity -  1 Year</option>
                        <option value="2_Year" data-price="3199">certificate validity -  2 Years</option>
                        <option value="3_Year" data-price="3799">certificate validity -  3 Years</option>
                        <option value="4_Year" data-price="4299">certificate validity -  4 Years</option>
                        <option value="5_Year" data-price="4799">certificate validity -  5 Years</option>
                    </select>
                </td>
                <td>
                    <span class="turnoverType" style="display:none">
                        Based on the selection of your inputs 
                        <h5 style="color:#00246B;font-weight:bold;font-size:14px">FSSAI Basic Registration</h5>
                        is applicable in your case
                    </span>
                    <div class="fav">
                        <label></label>
                        <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-price"></span>/-<br>Including Taxes &amp; Fees</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
            </tr>
        </tbody>
    </table>
</div>


<!--Dairy Units including Milk Chilling Units  -->
<div class="Dairy-Units" style="display:none;">
    <div class="container bg-white p-2 text-justify mb-3">
        <h6 class="font-weight-bold">Dairy Units including Milk Chilling Units:</h6>
        <span>Dairy processing means handling, processing, manufacturing, packing, storing, distribution &amp; transportation of milk and milk products.</span>
    </div>

    <div>
        <label class="font-weight-bold" id="exp">Select Production Capacity <span class=""> *</span></label>
        <table class="" style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td><input class="prodcution-radio" type="radio" name="turnover" value="upto-500" data-text="Based on the selection of your inputs FSSAI Basic Registration is applicable in your case"></td>
                    <td style="width:45%">
                        <div>
                            <label class="custom"> Upto 500 Ltrs of Milk per day <br> <b>OR</b> <br> Upto 2.5 MT Milk Solids per / yr</label>
                        </div>
                    </td>
                    <td rowspan="4" class="turnoverType option-daily-price-sidetext" style="text-align:center">Select Radio Button On <br> The Left Side To Display <br> The Kind Of Registration / <br> Licence Applicable In Your Case</td>
                </tr>
                <tr>
                    <td><input class="prodcution-radio other-price" type="radio" name="turnover" value="501–10000" data-price="7899" data-text="Based on the selection of your inputs FSSAI State Licence With Basic Capacity is applicable in your case">
                    </td>
                    <td style="width:45%">
                        <div>
                            <label class="custom"> 501 – 10,000 Ltrs of Milk  / day <br> <b>OR </b> <br> 2.5 MT – 500 MT Milk Solids / yr</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><input class="prodcution-radio other-price" type="radio" name="turnover"  value="10001–50000" data-price="9899" data-text="Based on the selection of your inputs FSSAI State Licence With Higher Capacity is applicable in your case."></td>
                    <td style="width:45%">
                        <div>
                            <label class="custom">10001 – 50,000 Ltrs of Milk / day <br> <b>OR</b> <br> 501 MT – 2500 MT Milk Solids / yr</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><input class="prodcution-radio other-price" type="radio" name="turnover"  value="More-than-50000" data-price="16899" data-text="Based on the selection of your inputs FSSAI Central Licence is applicable in your case"></td>
                    <td style="width:45%">
                        <div>
                            <label class="custom">More than 50,000 Ltrs of Milk / day <br> <b>OR</b> <br> More than 2500 MT Milk Solid / yr</label>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="dairy-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_dairy_value" name="choose_dairy_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="2899" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="3199">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="3799">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="4299">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="4799">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-daily-price"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="dairy-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                      <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_displayx"> </span>           
                      <span class="customx">Default Certificate Validity : 1 Year</span>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-daily-price-2"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Vegetable Oil Processing Units -->
<div class="Vegetable-Oil" style="display:none;">
    <div class="container bg-white p-2 text-justify mb-3">
        <h6 class="font-weight-bold">Vegetable Oil Processing Units:</h6>
        <span>Vegetable oil processing means processing of vegetables to produce vegetable oils by the process of solvent extraction/expeller and refining including oil expeller units.</span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select Turnover Or Production Capacity  
        <span class=""> *</span></label>
        <table class="" style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td><input class="vegitable-radio" type="radio" name="turnover"  value="upto 12 Lacs" data-text="Based on the selection of your inputs FSSAI Basic Registration is applicable in your case">
                    </td>
                    <td style="width:45%">
                        <div>
                            <label class="custom"> Turnover upto Rs. 12 Lacs / annum</label>
                        </div>
                    </td>
                    <td rowspan="4" class="turnoverType option-vegitable-price-sidetext" style="text-align:center">Select Radio Button On <br> The Left Side To Display <br> The Kind Of Registration / <br> Licence Applicable In Your Case</td>
                </tr>
                <tr>
                    <td><input class="vegitable-radio other-price-22" type="radio" name="turnover"  value="Below 1 MT / day" data-price="7899" data-text="Based on the selection of your inputs FSSAI State Licence With Basic Capacity is applicable in your case"></td>
                    <td style="width:45%">
                        <div>
                            <label class="custom"> Production Capacity Below 1 MT / day</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><input class="vegitable-radio other-price-22" type="radio" name="turnover"  value="1-2 MT / day" data-price="9899" data-text="Based on the selection of your inputs FSSAI State Licence With Higher Capacity is applicable in your case."></td>
                    <td style="width:45%">
                        <div>
                            <label class="custom">Production Capacity Between 1-2 MT / day</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><input class="vegitable-radio other-price-22" type="radio" name="turnover"  value="More than 2 MT / day" data-price="16899" data-text="Based on the selection of your inputs FSSAI Central Licence is applicable in your case"></td>
                    <td style="width:45%">
                        <div>
                            <label class="custom">Production Capacity More than 2 MT / day</label>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="vegitable-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_vegitable_value" name="choose_vegitable_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                            <option value="1_Year" data-price="2899" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="3199">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="3799">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="4299">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="4799">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="vegitable_pricing_display">Applicable Price ₹ <span class="option-vegitable-price"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="vegitable-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                      <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_displayx"> </span>           
                      <span class="customx">Default Certificate Validity : 1 Year</span>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="vegitable_pricing_display">Applicable Price ₹ <span class="option-vegitable-price-2"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Slaughtering House: -->
<div class="Slaughtering-House" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">Slaughtering House:</h6>
        <span>Slaughtering means a process of transporting, stunning, butchering, dressing, processing, storing &amp; distribution of live animal/poultry birds . </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select The Turnover Production Capacity/ टर्नओवर का चयन करें <span class=""> *</span></label>
        <table class="" style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td><input class="slaughtering-radio" type="radio" name="turnover"  value="Large Animals: 2" data-text="Based on the selection of your inputs FSSAI Basic Registration is applicable in your case"></td>
                    <td style="width:45%">
                        <div>
                            <label class="custom"> Large Animals: 2<br>Small Animals: 10<br>Poultry Birds: 50
                            </label>
                        </div>
                    </td>
                    <td rowspan="4&quot;" class="turnoverType option-slaughtering-price-sidetext" style="text-align:center">Select Radio Button On <br> The Left Side To Display <br> The Kind Of Registration / <br> Licence Applicable In Your Case</td>
                </tr>
                <tr>
                    <td><input class="slaughtering-radio other-price-33" type="radio" name="turnover" value="Large Animals: 3  to 50  Small  Animals: 11 to  150 Poultry  Birds: 51 - 1000" data-price="6899" data-text="Based on the selection of your inputs FSSAI State Licence With Basic Capacity is applicable in your case"></td>
                    <td style="width:45%">
                        <div>
                            <label class="custom"> Large Animals: 3  to 50<br> Small  Animals: 11 to  150<br>Poultry  Birds: 51 - 1000
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><input class="slaughtering-radio other-price-33" type="radio" name="turnover" value="Large  Animals: More than 50<br>Small Animals:  More than 150<br>Poultry Birds: More than 1000" data-price="16899" data-text="Based on the selection of your inputs FSSAI Center Licence With Basic Capacity is applicable in your case"></td>
                    <td style="width:45%">
                        <div>
                            <label class="custom">Large  Animals: More than 50<br>Small Animals:  More than 150<br>Poultry Birds: More than 1000</label>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="slaughtering-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_slaughtering_value" name="choose_slaughtering_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="2899" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="3199">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="3799">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="4299">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="4799">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-slaughtering-price"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="slaughtering-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                      <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_displayx"> </span>           
                      <span class="customx">Default Certificate Validity : 1 Year</span>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-slaughtering-price-2"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<!-- Fish Poultry Farm -->
<div class="Fish-Poultry-Farm" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">Fish Seller /  Poultry Products Seller:</h6>
        <span>
        <b>Fish Seller</b> : specializes in providing a variety of fresh and high-quality fish, sourced directly from aquaculture farms or fisheries. Offering diverse options, they cater to consumer preferences for popular seafood choices.
        <br><br>
        <b>Poultry Products Seller</b> : focuses on providing fresh and responsibly-raised poultry products, including chicken and eggs. Ensuring quality through careful breeding and farming practices, they offer a range of poultry options to meet customer needs.
        </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select The Turnover / टर्नओवर का चयन करें <span class=""> *</span></label>
        <table class="" style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td><input class="fish-radio"  type="radio" name="turnover" value="Turnover upto Rs. 12 Lacs per annum" data-text="Based on the selection of your inputs FSSAI Basic Registration is applicable in your case">
                    </td>
                    <td style="width:auto">
                        <div>
                            <label class="custom"> Turnover upto Rs. 12 Lacs per annum</label>
                            <div id="turnoverx2" style="font-size:12px"></div>
                        </div>
                    </td>
                    <td rowspan="4" class="turnoverType option-fish-price-sidetext" style="text-align:center">Select Radio Button On <br> The Left Side To Display <br> The Kind Of Registration / <br> Licence Applicable In Your Case</td>
                </tr>
                <tr>
                    <td><input class="fish-radio other-price-44" type="radio" name="turnover" value="Turnover upto Rs. 20 crores per annum" data-price="6899" data-text="Based on the selection of your inputs FSSAI State Licence With Basic Capacity is applicable in your case"></td>
                    <td style="width:auto">
                        <div>
                            <label class="custom"> Turnover upto Rs. 20 crores per annum</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><input class="fish-radio other-price-44" type="radio" name="turnover" value="Turnover More than Rs. 20 crores per annum" data-price="16899" data-text="Based on the selection of your inputs FSSAI Center Licence With Basic Capacity is applicable in your case"></td>
                    <td style="width:auto">
                        <div>
                            <label class="custom">Turnover More than Rs. 20 crores per annum</label>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="fish-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_fish_value" name="choose_fish_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="2899" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="3199">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="3799">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="4299">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="4799">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-fish-price"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="fish-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                      <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_displayx"> </span>           
                      <span class="customx">Default Certificate Validity : 1 Year</span>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-fish-price-2"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- meat processinfg -->
<div class="Meat-Processing" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">Meat Processing:</h6>
        <span>Meat processing means further processing of slaughtered animals/poultry birds into meat &amp; meat products, packaging, storing &amp; transportation of meat &amp; meat products.
        Fish processing means handling, processing of fish, manufacturing of fish products, packing, storing, distribution &amp; transportation of fish and fish products.</span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select The Turnover Or Capacity / टर्नओवर का चयन करें <span class=""> *</span></label>
        <table class="" style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td><input class="meat-radio" type="radio" name="turnover"  value="Turnover upto Rs. 12 Lacs per annum" data-text="Based on the selection of your inputs FSSAI Basic Registration is applicable in your case">
                    </td>
                    <td style="width:45%">
                        <div>
                            <label class="custom"> Turnover upto Rs. 12 Lacs per annum</label>
                            <div id="turnoverx2" style="font-size:12px"></div>
                        </div>
                    </td>
                    <td rowspan="4" class="turnoverType option-meat-price-sidetext" style="text-align:center">Select Radio Button On <br> The Left Side To Display <br> The Kind Of Registration / <br> Licence Applicable In Your Case</td>
                </tr>
                <tr>
                    <td><input class="meat-radio other-price-55" type="radio" name="turnover"  value="Upto 500 KG meat per day or upto 150 / MT meat per day" data-price="7899" data-text="Based on the selection of your inputs FSSAI State Licence With Basic Capacity is applicable in your case"></td>
                    <td style="width:45%">
                        <div>
                            <label class="custom"> Upto 500 KG meat per day <br><b>or</b><br> upto 150 / MT meat per annum</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><input class="meat-radio other-price-55" type="radio" name="turnover"  value="More than 500 KG meat per day or more than 150 / MT meat per annum" data-price="16899" data-text="Based on the selection of your inputs FSSAI Center Licence With Basic Capacity is applicable in your case"></td>
                    <td style="width:45%">
                        <div>
                            <label class="custom">More than 500 KG meat per day <br><b>or</b><br> more than 150 / MT meat per annum</label>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="meat-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_meat_value" name="choose_meat_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="2899" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="3199">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="3799">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="4299">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="4799">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-meat-price"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="meat-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                      <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_displayx"> </span>           
                      <span class="customx">Default Certificate Validity : 1 Year</span>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-meat-price-2"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- Manufacturer -->
<div class="Manufacturer-of-any-food" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">Manufacturer / Processor of any food other than Dairy Units, Vegetable Oil, Meat Processing, and Slaughtering Houses:</h6>
        <span><b>Manufacturing / Processing  Unit</b>  means  a  person/entity  which  owns  or operates   an   establishment   that   manufactures   or   processes   a   food product.
        <br><br>
        This   term   includes,   but   is   not   limited   to   contract   manufacturers, contract  packers  and  other  entities  that  manufactures  or  processes  a food product.
        <br><br>
        <b>Manufacturing  or  processing</b>  means  each  step  in  conversion  of  raw material  derived  from  livestock  and  agricultural  produce  into  products for    intermediate    or    final    consumption.    The    process    includes procurement,       receipt,       preparation,       Manufacturing/processing, packaging, storage, distribution &amp; transportation of food products.
        <br><br>
        <b>Repacking</b>  means  packing  of  food  product  into  different  sizes  with labelling after doing minimal processing as required like sorting, grading, sieving   etc.   from   wholesale   packages.   The   food   product   is   not manipulated   &amp;   the   composition   or   formulation   is   not   affected   or changed. 
        <br><br>
        Repackers &amp; Relabellers will also apply under manufacturing / processing units.
        </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select Production Capacity  <span class=""> *</span></label>
        <table  style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td><input class="manufacturer-radio" type="radio" name="turnover"  value="Production capacity upto 100 kgs / LTR / DAY" data-text="Based on the selection of your inputs FSSAI Basic Registration is applicable in your case">
                    </td>
                    <td style="width:45%">
                        <div>
                            <label class="custom"> Production capacity upto 100 kgs / LTR / DAY <br> <b>OR</b><br> Turnover upto 12 lacs</label>
                            <div id="turnoverx2" style="font-size:12px"></div>
                        </div>
                    </td>
                    <td rowspan="4" class="turnoverType option-manufacturer-price-sidetext" style="text-align:center">Select Radio Button On <br> The Left Side To Display <br> The Kind Of Registration / <br> Licence Applicable In Your Case</td>
                </tr>
                <tr>
                    <td><input class="manufacturer-radio other-price-66" type="radio" name="turnover"  value="Production capacity 101 KGS/LTR  - 1MT / DAY" data-price="7899" data-text="Based on the selection of your inputs FSSAI State Licence With Basic Capacity is applicable in your case"></td>
                    <td style="width:45%">
                        <div>
                            <label class="custom">Production capacity 101 KGS/LTR  - 1MT / DAY <br> <b>Note</b>: All grains, cereals, pulses milling units shall apply under this category without any limit on production capacity.</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><input class="manufacturer-radio other-price-66" type="radio" name="turnover"  value="Productions capacity 1MT - 2MT / DAY" data-price="9899" data-text="Based on the selection of your inputs FSSAI State Licence With Higher Capacity is applicable in your case."></td>
                    <td style="width:45%">
                        <div>
                            <label class="custom"> Production capacity 1MT - 2MT / DAY <br> <b>OR</b><br> Turnover upto 12 lacs pa</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><input class="manufacturer-radio other-price-66" type="radio" name="turnover"  value="Production capacity More than 2MT / DAY" data-price="16899" data-text="Based on the selection of your inputs FSSAI Central Licence is applicable in your case"></td>
                    <td style="width:45%">
                        <div>
                            <label class="custom">Production capacity More than 2MT / DAY <br> <b>NOTE</b>: NO GRAINS, CEREALS, PULSES MILLING UNITS SHALL APPLY UNDER THIS CATEGORY. THEY SHALL APPLY FOR STATE LICENCE ON ABOVE CATEGORY.</label>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="manufacturer-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_manufacturer_value" name="choose_manufacturer_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="2899" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="3199">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="3799">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="4299">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="4799">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-manufacturer-price"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="manufacturer-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                      <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_displayx"> </span>           
                      <span class="customx">Default Certificate Validity : 1 Year</span>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-manufacturer-price-2"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Proprietary-Food -->
<div class="Proprietary-Food" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-3">
        <h6 class="font-weight-bold">Proprietary Food:</h6>
        <span>Proprietary Foods are those which are not standardized under regulations and may contain primary ingredients and some generic additives.
        </span>
    </div>
    <table style="width: 100%; background: white; color: black;">
        <tbody>
            <tr>
                <td>
                    <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_displayx"> </span>           
                    <span class="customx">Default Certificate Validity : 1 Year</span>
                </td>
                <td>
                    <span class="turnoverType" style="display:none"></span>
                    <div class="fav">
                        <label></label>
                        <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹16799/-<br>Including Taxes &amp; Fees</span>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>


<!-- Food-or-Health -->
<div class="Food-or-Health" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-3">
        <h6 class="font-weight-bold">Food or Health Supplements and Nutraceuticals etc.:</h6>
        <span>As   per   Food   Safety   and   Standards   (Food   or   Health   Supplements, Nutraceuticals, Foods for Special Dietary Uses, Foods for Special Medical
        Purpose, Functional Foods, and Novel Food) Regulations, 2016].
        </span>
    </div>
    <table style="width: 100%; background: white; color: black;">
        <tbody>
            <tr>
                <td>
                    <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_displayx"> </span>           
                    <span class="customx">Default Certificate Validity : 1 Year</span>
                </td>
                <td>
                    <span class="turnoverType" style="display:none"></span>
                    <div class="fav">
                        <label></label>
                        <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹16799/-<br>Including Taxes &amp; Fees</span>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<!-- Radiation processing of food -->
<div class="Radiation-processing" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-3">
        <h6 class="font-weight-bold">Radiation processing of food:</h6>
        <span>Radiation processing of food or food irradiation is a physical process in which   food   commodities,   bulk   or   pre-packaged   are   exposed    to controlled doses of energy of ionizing radiation such as gamma rays or
        X-rays to achieve different technological objectives.
        </span>
    </div>
    <table style="width: 100%; background: white; color: black;">
        <tbody>
            <tr>
                <td>
                    <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_displayx"> </span>           
                    <span class="customx">Default Certificate Validity : 1 Year</span>
                </td>
                <td>
                    <span class="turnoverType" style="display:none"></span>
                    <div class="fav">
                        <label></label>
                        <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹16799/-<br>Including Taxes &amp; Fees</span>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<!-- Substances added to Food: -->
<div class="Substances-added" style="display:none;">
    <div class="container bg-white p-2 text-justify mb-3">
        <h6 class="font-weight-bold">Substances added to Food:</h6>
        <span>Substances  added  to  Food  means  Food  Additives,  Enzymes  and  their preparations,    Source,    Flavouring    agents    and    their    preparations, Processing  Aids,  Nutrients  and  their  preparations,  Microorganisms  and Microbial   Preparations   &amp;   Functional   Ingredients   added   to   food   as specified  under  Food  Safety  and  Standards  (Food  Products  Standards
        and Food Additives) Regulations.</span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select Turnover  <span class=""> *</span></label>
        <table class="" style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td><input class="substances-radio" type="radio" name="turnover" value="Turnover  upto  Rs. 12 Lacs / annum" data-text="Based on the selection of your inputs FSSAI Basic Registration is applicable in your case">
                    </td>
                    <td style="width:45%">
                        <div>
                            <label class="custom"> Turnover  upto  Rs. 12 Lacs / annum</label>
                            <div id="turnoverx2" style="font-size:12px"></div>
                        </div>
                    </td>
                    <td rowspan="4" class="turnoverType option-substances-price-sidetext" style="text-align:center">Select Radio Button On <br> The Left Side To Display <br> The Kind Of Registration / <br> Licence Applicable In Your Case</td>
                </tr>
                <tr>
                    <td><input class="substances-radio other-price-77" type="radio" name="turnover" value="Production  Capacity: Upto  2  MT / day" data-price="9899" data-text="Based on the selection of your inputs FSSAI State Licence With Basic Capacity is applicable in your case"></td>
                    <td style="width:45%">
                        <div>
                            <label class="custom"> Production  Capacity: Upto  2  MT / day</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><input class="substances-radio other-price-77" type="radio" name="turnover" value="Production  Capacity: More  than  2  MT  / Day" data-price="16899" data-text="Based on the selection of your inputs FSSAI Center Licence With Basic Capacity is applicable in your case"></td>
                    <td style="width:45%">
                        <div>
                            <label class="custom">Production  Capacity: More  than  2  MT  / Day</label>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="substances-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_substances_value" name="choose_substances_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="2899" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="3199">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="3799">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="4299">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="4799">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-substances-price"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="substances-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                      <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_displayx"> </span>           
                      <span class="customx">Default Certificate Validity : 1 Year</span>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-substances-price-2"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!--warehouse Storage - Cold/Refrigerated: -->
<div class="warehouse" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">Storage - Cold/Refrigerated:</h6>
        <span>Storage is an activity where refrigerated/ frozen food products in packed or unpacked condition is stored for further distribution in refrigeration/ freezing storage facilities. </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select Turnover  <span class=""> *</span></label>
        <table class="" style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td><input class="warehouse-radio"  type="radio" name="turnover" value="Turnover  upto  Rs. 12 Lacs / annum" data-text="Based on the selection of your inputs FSSAI Basic Registration is applicable in your case">
                    </td>
                    <td style="width:45%">
                        <div>
                            <label class="custom"> Turnover  upto  Rs. 12 Lacs / annum</label>
                        </div>
                    </td>
                    <td rowspan="4" class="turnoverType option-warehouse-price-sidetext" style="text-align:center">Select Radio Button On <br> The Left Side To Display <br> The Kind Of Registration / <br> Licence Applicable In Your Case</td>
                </tr>
                <tr>
                    <td><input class="warehouse-radio other-price-88" type="radio" name="turnover" value="Storage Capacity Upto 10,000 MT" data-price="6899" data-text="Based on the selection of your inputs FSSAI State Licence With Basic Capacity is applicable in your case"></td>
                    <td style="width:45%">
                        <div>
                            <label class="custom"> Storage Capacity Upto 10,000 MT</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><input class="warehouse-radio other-price-88" type="radio" name="turnover" value="Storage Capacity of More than 10,000" data-price="16899" data-text="Based on the selection of your inputs FSSAI Center Licence With Basic Capacity is applicable in your case"></td>
                    <td style="width:45%">
                        <div>
                            <label class="custom">Storage Capacity of More than 10,000</label>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="warehouse-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_warehouse_value" name="choose_warehouse_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="2899" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="3199">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="3799">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="4299">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="4799">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-warehouse-price"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="warehouse-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                      <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_displayx"> </span>           
                      <span class="customx">Default Certificate Validity : 1 Year</span>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-warehouse-price-2"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- ---Storage – Atmospheric Controlled + Cold: -->
<div class="Atmospheric-Controlled" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">Storage – Atmospheric Controlled + Cold:</h6>
        <span>Storage  is  an  activity  where  food  products  in  packed  or  unpacked condition is stored for further distribution in storage facilities, also called warehouses, godowns, etc. </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select Turnover  <span class=""> *</span></label>
        <table class="" style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td><input class="atmospheric_controlled-radio" type="radio" name="turnover"  value="Turnover  upto  Rs. 12 Lacs / annum" data-text="Based on the selection of your inputs FSSAI Basic Registration is applicable in your case">
                    </td>
                    <td style="width:45%">
                        <div>
                            <label class="custom"> Turnover  upto  Rs. 12 Lacs / annum</label>
                            <div id="turnoverx2" style="font-size:12px"></div>
                        </div>
                    </td>
                    <td rowspan="4" class="turnoverType option-atmospheric_controlled-price-sidetext" style="text-align:center">Select Radio Button On <br> The Left Side To Display <br> The Kind Of Registration / <br> Licence Applicable In Your Case</td>
                </tr>
                <tr>
                    <td><input class="atmospheric_controlled-radio other-price-99" type="radio" name="turnover"  value="Storage Capacity Upto 1000 MT" data-price="6899" data-text="Based on the selection of your inputs FSSAI State Licence With Basic Capacity is applicable in your case"></td>
                    <td style="width:45%">
                        <div>
                            <label class="custom"> Storage Capacity Upto 1000 MT</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><input class="atmospheric_controlled-radio other-price-99" type="radio" name="turnover"  value="Storage Capacity of More than 1000" data-price="16799" data-text="Based on the selection of your inputs FSSAI Center Licence With Basic Capacity is applicable in your case"></td>
                    <td style="width:45%">
                        <div>
                            <label class="custom">Storage Capacity of More than 1000 MT</label>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="atmospheric_controlled-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_atmospheric_controlled_value" name="choose_atmospheric_controlled_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="2899" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="3199">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="3799">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="4299">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="4799">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-atmospheric_controlled-price"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="atmospheric_controlled-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                      <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_displayx"> </span>           
                      <span class="customx">Default Certificate Validity : 1 Year</span>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-atmospheric_controlled-price-2"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- --Storage Without Atmospheric Controlled + Cold: -->
<div class="Atmospheric-Controlled-without" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">Storage Without Atmospheric Controlled + Cold:</h6>
        <span>Storage  is  an  activity  where  food  products  in  packed  or  unpacked condition  is  stored  for  further  distribution  in  controlled  atmosphere storage facilities. A controlled atmosphere, generally used for storage of dry commodities &amp; agricultural produce in which the concentrations of oxygen,  carbon  dioxide  and  nitrogen,  as  well  as  the  temperature  and
        humidity of a storage room are regulated. </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select Turnover  <span class=""> *</span></label>
        <table class="" style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td><input class="atmospheric_controlled_without-radio" type="radio" name="turnover" value="Turnover  upto  Rs. 12 Lacs / annum" data-text="Based on the selection of your inputs FSSAI Basic Registration is applicable in your case">
                    </td>
                    <td style="width:45%;">
                        <div>
                            <label class="custom"> Turnover  upto  Rs. 12 Lacs / annum</label>
                            <div id="turnoverx2" style="font-size:12px"></div>
                        </div>
                    </td>
                    <td rowspan="4" class="turnoverType option-atmospheric_controlled_without-price-sidetext" style="text-align:center">Select Radio Button On <br> The Left Side To Display <br> The Kind Of Registration / <br> Licence Applicable In Your Case</td>
                </tr>
                <tr>
                    <td><input class="atmospheric_controlled_without-radio other-price-1010" type="radio" name="turnover" value="Storage Capacity Upto 50,000 MT" data-price="6899" data-text="Based on the selection of your inputs FSSAI State Licence With Basic Capacity is applicable in your case"></td>
                    <td style="width:45%;">
                        <div>
                            <label class="custom"> Storage Capacity Upto 50,000 MT</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><input class="atmospheric_controlled_without-radio other-price-1010" type="radio" name="turnover" value="Storage Capacity of More than 50,000" data-price="16899" data-text="Based on the selection of your inputs FSSAI Center Licence With Basic Capacity is applicable in your case"></td>
                    <td style="width:45%;">
                        <div>
                            <label class="custom">Storage Capacity of More than 50,000 MT</label>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="atmospheric_controlled_without-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_atmospheric_controlled_without_value" name="choose_atmospheric_controlled_without_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="2899" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="3199">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="3799">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="4299">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="4799">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-atmospheric_controlled_without-price"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="atmospheric_controlled-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                      <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_displayx"> </span>           
                      <span class="customx">Default Certificate Validity : 1 Year</span>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-atmospheric_controlled-price-2"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Transporter -->
<div class="Transporter" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">Transporter:</h6>
        <span>Transporter  (having  a  number  of  specialised  vehicles  like  insulated refrigerated van/wagon, milk tankers etc.)
        Transportation is an activity of transporting food products (both packed and bulk) from one location to another in vehicles/containers including specialized   vehicles   like   insulated   Refrigerated  Van/Wagon,   oil/milk tankers etc. Food Trucks are also covered in this category. </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select Turnover  <span class=""> *</span></label>
        <table class="" style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td><input class="transporter-radio"  type="radio" name="turnover" value="Single Vehicle and Turnover  upto  Rs. 12 Lacs / annum" data-text="Based on the selection of your inputs FSSAI Basic Registration is applicable in your case">
                    </td>
                    <td style="width:auto">
                        <div>
                            <label class="custom"> Single Vehicle and Turnover upto  Rs. 12 Lacs / annum</label>
                            <div id="turnoverx2" style="font-size:12px"></div>
                        </div>
                    </td>
                    <td rowspan="4" class="turnoverType" style="text-align:center">Select Radio Button On <br> The Left Side To Display <br> The Kind Of Registration / <br> Licence Applicable In Your Case</td>
                </tr>
                <tr>
                    <td><input class="transporter-radio other-price-1111" type="radio" name="turnover" value="Upto 100  Vehicles and  Turnover upto Rs.  30  Crores  / annum" data-price="6899" data-text="Based on the selection of your inputs FSSAI State Licence With Basic Capacity is applicable in your case"></td>
                    <td style="width:auto">
                        <div>
                            <label class="custom"> Upto 100  Vehicles and  Turnover upto Rs.  30  Crores  / annum</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><input class="transporter-radio other-price-1111"  type="radio" name="turnover" value="More than 100 Vehicles and Turnover more than Rs.  30  Crores / annum" data-price="16899" data-text="Based on the selection of your inputs FSSAI Center Licence With Basic Capacity is applicable in your case"></td>
                    <td style="width:auto">
                        <div>
                            <label class="custom">More than 100 Vehicles and Turnover more than Rs.  30  Crores / annum</label>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="transporter-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_transporter_value" name="choose_transporter_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="2899" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="3199">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="3799">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="4299">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="4799">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-transporter-price"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="transporter-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                      <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_displayx"> </span>           
                      <span class="customx">Default Certificate Validity : 1 Year</span>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-transporter-price-2"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Wholesaler -->
<div class="Wholesaler" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">Wholesaler:</h6>
        <span>Wholesale is an activity in the distribution channel where food product is  procured  in  bulk  and  then  sold  to  resellers/retailers  rather  than  to consumers. </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select Turnover  <span class=""> *</span></label>
        <table class="" style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td><input class="Wholesaler-radio" type="radio" name="turnover" value="Turnover  upto  Rs. 12 Lacs / annum" data-text="Based on the selection of your inputs FSSAI Basic Registration is applicable in your case">
                    </td>
                    <td style="width:auto">
                        <div>
                            <label class="custom"> Turnover  upto  Rs. 12 Lacs / annum</label>

                        </div>
                    </td>
                    <td rowspan="4" class="turnoverType option-Wholesaler-price-sidetext" style="text-align:center">Select Radio Button On <br> The Left Side To Display <br> The Kind Of Registration / <br> Licence Applicable In Your Case</td>
                </tr>
                <tr>
                    <td><input class="Wholesaler-radio other-price-1212" type="radio" name="turnover" value="Turnover upto Rs. 30 crores per annum" data-price="6899" data-text="Based on the selection of your inputs FSSAI State Licence With Basic Capacity is applicable in your case"></td>
                    <td style="width:auto">
                        <div>
                            <label class="custom"> Turnover more than 12 lacs but less than Rs. 30 crores per annum</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><input class="Wholesaler-radio other-price-1212" type="radio" name="turnover" value="Turnover More than Rs. 30 crores per annum" data-price="16899" data-text="Based on the selection of your inputs FSSAI Center Licence With Basic Capacity is applicable in your case"></td>
                    <td style="width:auto">
                        <div>
                            <label class="custom">Turnover More than Rs. 30 crores per annum</label>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="Wholesaler-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Wholesaler_value" name="choose_Wholesaler_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="2899" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="3199">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="3799">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="4299">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="4799">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Wholesaler-price"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="Wholesaler-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                      <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_displayx"> </span>           
                      <span class="customx">Default Certificate Validity : 1 Year</span>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Wholesaler-price-2"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- Distributor -->
<div class="Distributor" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">Distributor:</h6>
        <span>Distribution is an activity in the distribution channel where food product is distributed from the original place of manufacture to the person who makes  the  final  delivery  or  sale  of  the  food  product  to  the  ultimate consumer. </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select The Turnover / टर्नओवर का चयन करें <span class=""> *</span></label>
        <table class="" style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td><input class="Distributor-radio" type="radio" name="turnover" value="Turnover upto Rs. 12 Lacs per annum" data-text="Based on the selection of your inputs FSSAI Basic Registration is applicable in your case">
                    </td>
                    <td style="width:auto">
                        <div>
                            <label class="custom"> Turnover upto Rs. 12 Lacs per annum</label>
                            <div id="turnoverx2" style="font-size:12px"></div>
                        </div>
                    </td>
                    <td rowspan="4" class="turnoverType option-Distributor-price-sidetext" style="text-align:center">Select Radio Button On <br> The Left Side To Display <br> The Kind Of Registration / <br> Licence Applicable In Your Case</td>
                </tr>
                <tr>
                    <td><input class="Distributor-radio other-price-1313" type="radio" name="turnover" value="Turnover upto Rs. 20 crores per annum" data-price="6899" data-text="Based on the selection of your inputs FSSAI State Licence With Basic Capacity is applicable in your case"></td>
                    <td style="width:auto">
                        <div>
                            <label class="custom"> Turnover more than 12 lacs but less than Rs. 20 crores per annum</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><input class="Distributor-radio other-price-1313" type="radio" name="turnover" value="Turnover More than Rs. 20 crores per annum" data-price="16899" data-text="Based on the selection of your inputs FSSAI Center Licence With Basic Capacity is applicable in your case"></td>
                    <td style="width:auto">
                        <div>
                            <label class="custom">Turnover More than Rs. 20 crores per annum</label>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="Distributor-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Distributor_value" name="choose_Distributor_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="2899" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="3199">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="3799">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="4299">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="4799">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Distributor-price"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="Distributor-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                      <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_displayx"> </span>           
                      <span class="customx">Default Certificate Validity : 1 Year</span>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Distributor-price-2"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- Retailer -->
<div class="Retailer" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">Retailer:</h6>
        <span>Retail   is   an   activity   where   food   products   is   procured   from   a manufacturer,  distributor  or  wholesaler  and  sold  to  the  ultimate  end user.    E.g.    Retail  Shop / Kirana  Shop /    Fish Shop / Meat Shop /  Poultry shop /  Sweet Shop / Snacks Outlet / Confectionery or Bakery Shop. </span>
    </div>
    <label class="font-weight-bold" id="exp">Select The Turnover / टर्नओवर का चयन करें <span class=""> *</span></label>
    <table class="" style="background:white;color:black;width:100%">
        <tbody>
            <tr>
                <td><input class="Retailer-radio" type="radio" name="turnover"  value="Turnover upto Rs. 12 Lacs per annum" data-text="Based on the selection of your inputs FSSAI Basic Registration is applicable in your case">
                </td>
                <td style="width:auto">
                    <div>
                        <label class="custom"> Turnover upto Rs. 12 Lacs per annum</label>
                        <div id="turnoverx2" style="font-size:12px"></div>
                    </div>
                </td>
                <td rowspan="4" class="turnoverType option-Retailer-price-sidetext" style="text-align:center">Select Radio Button On <br> The Left Side To Display <br> The Kind Of Registration / <br> Licence Applicable In Your Case</td>
            </tr>
            <tr>
                <td><input class="Retailer-radio other-price-1414" type="radio" name="turnover"  value="Turnover upto Rs. 20 crores per annum" data-price="6899" data-text="Based on the selection of your inputs FSSAI State Licence With Basic Capacity is applicable in your case"></td>
                <td style="width:auto">
                    <div>
                        <label class="custom"> Turnover more than 12 lacs but less than Rs. 20 crores per annum</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td><input class="Retailer-radio other-price-1414" type="radio" name="turnover"  value="Turnover More than Rs. 20 crores per annum" data-price="16899" data-text="Based on the selection of your inputs FSSAI Center Licence With Basic Capacity is applicable in your case"></td>
                <td style="width:auto">
                    <div>
                        <label class="custom">Turnover More than Rs. 20 crores per annum</label>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="Retailer-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Retailer_value" name="choose_Retailer_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="2899" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="3199">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="3799">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="4299">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="4799">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Retailer-price"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="Retailer-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                      <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_displayx"> </span>           
                      <span class="customx">Default Certificate Validity : 1 Year</span>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Retailer-price-2"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- Hotel -->
<div class="Hotel" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">Hotel:</h6>
        <span>Hotel is a commercial establishment providing lodging, meals, and other guest  services.  In  general,  to  be  called  a  hotel,  an  establishment  must have  a minimum  of six letting  bedrooms, at  least  three  of which must have attached (ensuite) private bathroom facilities. </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select Production Capacity <span class=""> *</span></label>
        <table class="" style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td><input class="Hotel-radio" type="radio" name="turnover"  value="Turnover upto Rs. 12 Lacs per annum" data-text="Based on the selection of your inputs FSSAI Basic Registration is applicable in your case">
                    </td>
                    <td style="width:45%">
                        <div>
                            <label class="custom"> Turnover upto Rs. 12 Lacs per annum</label>
                            <div id="turnoverx2" style="font-size:12px"></div>
                        </div>
                    </td>
                    <td rowspan="4" class="turnoverType option-Hotel-price-sidetext" style="text-align:center">Select Radio Button On <br> The Left Side To Display <br> The Kind Of Registration / <br> Licence Applicable In Your Case</td>
                </tr>
                <tr>
                    <td><input class="Hotel-radio other-price-1515" type="radio" name="turnover"  value="One Star, Two Star or Hotel without Star Rating by Ministry of Tourism (HRACC)" data-price="6899" data-text="Based on the selection of your inputs FSSAI State Licence With Basic Capacity is applicable in your case"></td>
                    <td style="width:45%">
                        <div>
                            <label class="custom"> One Star, Two Star Hotel <br><b>or</b><br> Hotel without Star Rating by Ministry of Tourism (HRACC)</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><input class="Hotel-radio other-price-1515" type="radio" name="turnover"  value="Three Star and Four Star" data-price="9899" data-text="Based on the selection of your inputs FSSAI State Licence With Higher Capacity is applicable in your case."></td>
                    <td style="width:45%">
                        <div>
                            <label class="custom">Three Star and Four Star Hotel</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><input class="Hotel-radio other-price-1515" type="radio" name="turnover"  value="Five Star and Above" data-price="16899" data-text="Based on the selection of your inputs FSSAI Central Licence is applicable in your case"></td>
                    <td style="width:45%">
                        <div>
                            <label class="custom">Five Star Hotel and Above</label>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="Hotel-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Hotel_value" name="choose_Hotel_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="2899" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="3199">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="3799">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="4299">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="4799">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Hotel-price"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="Hotel-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                      <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_displayx"> </span>           
                      <span class="customx">Default Certificate Validity : 1 Year</span>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Hotel-price-2"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- Restaurants -->
<div class="Restaurants" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">Restaurants:</h6>
        <span>Restaurant  is  a  type  of  food  service  operation  which  prepares,  serves food   and   drinks   to   customers   in   exchange   for   money.   Meals   are generally served and eaten on the premises, but many restaurants also offer take-out and food delivery services, and some offer only take-out and delivery. </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select The Turnover / टर्नओवर का चयन करें <span class=""> *</span></label>
        <table class="" style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td><input class="Restaurants-radio" type="radio" name="turnover" value="Turnover upto Rs. 12 Lacs per annum" data-text="Based on the selection of your inputs FSSAI Basic Registration is applicable in your case">
                    </td>
                    <td style="width:auto">
                        <div>
                            <label class="custom"> Turnover upto Rs. 12 Lacs per annum</label>
                            <div id="turnoverx2" style="font-size:12px"></div>
                        </div>
                    </td>
                    <td rowspan="4" class="turnoverType option-Restaurants-price-sidetext" style="text-align:center">Select Radio Button On <br> The Left Side To Display <br> The Kind Of Registration / <br> Licence Applicable In Your Case</td>
                </tr>
                <tr>
                    <td><input class="Restaurants-radio other-price-1616" type="radio" name="turnover" value="Turnover upto Rs. 20 crores per annum" data-price="6899" data-text="Based on the selection of your inputs FSSAI State Licence With Basic Capacity is applicable in your case"></td>
                    <td style="width:auto">
                        <div>
                            <label class="custom"> Turnover upto Rs. 20 crores per annum</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><input class="Restaurants-radio other-price-1616" type="radio" name="turnover" value="Turnover More than Rs. 20 crores per annum" data-price="16899" data-text="Based on the selection of your inputs FSSAI Center Licence With Basic Capacity is applicable in your case"></td>
                    <td style="width:auto">
                        <div>
                            <label class="custom">Turnover More than Rs. 20 crores per annum</label>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="Restaurants-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Restaurants_value" name="choose_Restaurants_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="2899" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="3199">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="3799">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="4299">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="4799">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Restaurants-price"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="Restaurants-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                      <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_displayx"> </span>           
                      <span class="customx">Default Certificate Validity : 1 Year</span>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Restaurants-price-2"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- Club/Canteen -->
<div class="Club-Canteen" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">Club/Canteen:</h6>
        <span>Canteen  or  Cafeteria  is  a  dining  area  in  an  institution /  establishment serving  food  (being  prepared  in  the  premises  or  procured  from  other location  or  source)  to  individuals  associated  with  or  visiting  the
        institution. </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select The Turnover / टर्नओवर का चयन करें <span class=""> *</span></label>
        <table class="" style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td><input class="Club-radio"  type="radio" name="turnover" value="Turnover upto Rs. 12 Lacs per annum" data-text="Based on the selection of your inputs FSSAI Basic Registration is applicable in your case">
                    </td>
                    <td style="width:auto">
                        <div>
                            <label class="custom"> Turnover upto Rs. 12 Lacs per annum</label>
                            <div id="turnoverx2" style="font-size:12px"></div>
                        </div>
                    </td>
                    <td rowspan="4" class="turnoverType option-Club-price-sidetext" style="text-align:center">Select Radio Button On <br> The Left Side To Display <br> The Kind Of Registration / <br> Licence Applicable In Your Case</td>
                </tr>
                <tr>
                    <td><input class="Club-radio other-price-1717"  type="radio" name="turnover" value="Turnover upto Rs. 20 crores per annum" data-price="6899" data-text="Based on the selection of your inputs FSSAI State Licence With Basic Capacity is applicable in your case"></td>
                    <td style="width:auto">
                        <div>
                            <label class="custom"> Turnover upto Rs. 20 crores per annum</label>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="Club-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Club_value" name="choose_Club_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="2899" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="3199">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="3799">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="4299">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="4799">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Club-price"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="Club-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                      <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_displayx"> </span>           
                      <span class="customx">Default Certificate Validity : 1 Year</span>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Club-price-2"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Caterar -->
<div class="Caterar" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">Caterar:</h6>
        <span>Food Service Establishment involved in preparation, storage, serving and
        / or transport  of  food  for  consumption of  a  group  at  a  venue of ceremony / celebration / ritual / institution. </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select The Turnover / टर्नओवर का चयन करें <span class=""> *</span></label>
        <table class="" style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td>
                        <input class="Caterar-radio"  type="radio" name="turnover" value="Turnover upto Rs. 20 crores per annum" data-text="Based on the selection of your inputs FSSAI Basic Registration is applicable in your case">
                    </td>
                    <td style="width:auto">
                        <div>
                            <label class="custom">Turnover upto Rs. 20 crores per annum</label>
                        </div>
                    </td>
                    <td rowspan="4" class="turnoverType option-Caterar-price-sidetext" style="text-align:center">Select Radio Button On <br> The Left Side To Display <br> The Kind Of Registration / <br> Licence Applicable In Your Case</td>
                </tr>
                <tr>
                    <td>
                        <input class="Caterar-radio other-price-1818" type="radio" name="turnover" value="Turnover More than Rs. 20 crores per annum" data-price="6899" data-text="Based on the selection of your inputs FSSAI State Licence With Basic Capacity is applicable in your case">
                    </td>
                    <td style="width:auto">
                        <div>
                            <label class="custom">Turnover More than Rs. 20 crores per annum</label>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="Caterar-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Caterar_value" name="choose_Caterar_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="2899" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="3199">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="3799">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="4299">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="4799">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Caterar-price"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="Caterar-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                      <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_displayx"> </span>           
                      <span class="customx">Default Certificate Validity : 1 Year</span>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Caterar-price-2"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- Food Vending Agencies:
    -->
<div class="Food-Vending-Agencies" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-3">
        <h6 class="font-weight-bold">Food Vending Agencies:</h6>
        <span>Sale  of  Packaged / Fresh  food  from  a  temporary  or  fixed  stall/cart/ machine by an individual or by automation.
        </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select The Turnover / टर्नओवर का चयन करें <span class=""> *</span></label>
        <table class="" style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td><input class="food_veding-radio"  type="radio" name="turnover" value="Turnover upto Rs. 12 Lacs per annum" data-text="Based on the selection of your inputs FSSAI Basic Registration is applicable in your case"></td>
                    <td style="width:auto">
                        <div>
                            <label class="custom"> Turnover upto Rs. 12 Lacs per annum</label>
                        </div>
                    </td>
                    <td rowspan="4" class="turnoverType option-food_veding-price-sidetext" style="text-align:center">Select Radio Button On <br> The Left Side To Display <br> The Kind Of Registration / <br> Licence Applicable In Your Case</td>
                </tr>
                <tr>
                    <td><input class="food_veding-radio other-price-1919"  type="radio" name="turnover" value="Upto 100 Vending Machines in only one state/ut" data-price="6899" data-text="Based on the selection of your inputs FSSAI State Licence With Basic Capacity is applicable in your case"></td>
                    <td style="width:auto">
                        <div>
                            <label class="custom"> Upto 100 Vending Machines in only one state / ut</label>
                            <div id="turnoverx2" style="font-size:12px"></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><input class="food_veding-radio other-price-1919"  type="radio" name="turnover" value="More than 100 Vending Machines and / or located in two or more states / UTS" data-price="16899" data-text="Based on the selection of your inputs FSSAI Center Licence With Basic Capacity is applicable in your case"></td>
                    <td style="width:auto">
                        <div>
                            <label class="custom">More than 100 Vending Machines and / or located <br> in two or more states / UTS</label>
                            <div id="turnoverz2" style="font-size:12px"></div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="food_veding-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_food_veding_value" name="choose_food_veding_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="2899" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="3199">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="3799">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="4299">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="4799">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-food_veding-price"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="food_veding-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                      <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_displayx"> </span>           
                      <span class="customx">Default Certificate Validity : 1 Year</span>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-food_veding-price-2"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Dhaba -->
<div class="Dhaba" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <table style="width:100%;font-size:13px">
            <tbody>
                <tr>
                    <td colspan="2" style="font-weight:bold">If your business belongs to any one of the following categories, apply under this heading:</td>
                </tr>
                <tr>
                    <th>Dhaba</th>
                    <td>Food service establishment generally located near roadside/highway involved in processing, storing, packaging and selling of food to customers for consumption.</td>
                </tr>
                <tr>
                    <th>Boarding houses serving food</th>
                    <td>A building providing food and lodging for paying guest.</td>
                </tr>
                <tr>
                    <th>Banquet halls with food catering arrangements</th>
                    <td>A specified area such as hall which is used for the purpose of hosting parties/ ceremonies involved in preparation and serving of food to customers for consumption..</td>
                </tr>
                <tr>
                    <th>Home Based Canteens/ Dabba Wallas</th>
                    <td>An individual or establishment involved in distribution of packed meals (usually packed lunch) from food service establishments such as home based caterer or Restaurants to customers..</td>
                </tr>
                <tr>
                    <th>Permanent/ Temporary stall Holder</th>
                    <td>A stand/booth/compartment/small covered area being used for preparation and /or sale of freshly prepared or packaged food for consumption. This structure maybe temporary or permanent (fixed)..</td>
                </tr>
                <tr>
                    <th>Food stalls/ Arrangements in religious gatherings/ fairs etc</th>
                    <td>A stand/booth/compartment/small covered area being used for preparation and /or sale or distribution of freshly prepared or packaged food being offered as Prasad in a religious institution.</td>
                </tr>
            </tbody>
        </table>
        <div>
            <label class="font-weight-bold" id="exp">Select The Turnover / टर्नओवर का चयन करें <span class=""> *</span></label>
            <table class="" style="background:white;color:black;width:100%">
                <tbody>
                    <tr>
                        <td><input class="Dhaba-radio" type="radio" name="turnover" value="Turnover upto Rs. 12 Lacs per annum" data-text="Based on the selection of your inputs FSSAI Basic Registration is applicable in your case">
                        </td>
                        <td style="width:auto">
                            <div>
                                <label class="custom"> Turnover upto Rs. 12 Lacs per annum</label>
                                <div id="turnoverx2" style="font-size:12px"></div>
                            </div>
                        </td>
                        <td rowspan="4" class="turnoverType option-Dhaba-price-sidetext" style="text-align:center">Select Radio Button On <br> The Left Side To Display <br> The Kind Of Registration / <br> Licence Applicable In Your Case</td>
                    </tr>
                    <tr>
                        <td><input class="Dhaba-radio other-price-2020" type="radio" name="turnover" value="Turnover more than Rs. 12 Lacs per annum" data-price="6899" data-text="Based on the selection of your inputs FSSAI State Licence With Basic Capacity is applicable in your case"></td>
                        <td style="width:auto">
                            <div>
                                <label class="custom"> Turnover more than Rs. 12 Lacs per annum</label>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="Dhaba-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Dhaba_value" name="choose_Dhaba_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="2899" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="3199">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="3799">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="4299">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="4799">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Dhaba-price"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="Dhaba-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                      <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_displayx"> </span>           
                      <span class="customx">Default Certificate Validity : 1 Year</span>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Dhaba-price-2"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- Importers -->
<div class="Importers" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-3">
        <h6 class="font-weight-bold">Importers:</h6>
        <span>An importer is a person, company, or country that buys goods or services from another country and sells them in their own country.</span>
    </div>
    <table style="width: 100%; background: white; color: black;">
        <tbody>
            <tr>
                <td>
                    <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_displayx"> </span>           
                    <span class="customx">Default Certificate Validity : 1 Year</span>
                </td>
                <td>
                    <span class="turnoverType" style="display:none"></span>
                    <div class="fav">
                        <label></label>
                        <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹16799/-<br>Including Taxes &amp; Fees</span>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<!-- Exporters -->
<div class="Exporters" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-3">
        <h6 class="font-weight-bold">Exporters: Businesses having Import / Export Licence:</h6>
        <span>
             <b>Manufacturer Exporter</b> <br>A person who is manufacturing himself &amp; exporting<br><br>
             <b>Merchant / Trader Exporter</b> <br> A person who is buying from manufacturer and exporting.
        </span>
    </div>
    <table style="width: 100%; background: white; color: black;">
        <tbody>
            <tr>
                <td>
                    <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_displayx"> </span>           
                    <span class="customx">Default Certificate Validity : 1 Year</span>
                </td>
                <td>
                    <span class="turnoverType" style="display:none"></span>
                    <div class="fav">
                        <label></label>
                        <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹16799/-<br>Including Taxes &amp; Fees</span>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<!-- E-commerce -->
<div class="E-commerce" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-3">
        <h6 class="font-weight-bold">E-commerce:</h6>
        <span>E-commerce also known as electronic commerce or internet commerce, refers to the buying and selling of goods or services using the internet, and  the  transfer  of  money  and  data  to  execute  these  transactions. Ecommerce is often used to refer to the sale of physical products online, but it can also describe any kind of commercial transaction that is </span>
    </div>
    <table style="width: 100%; background: white; color: black;">
        <tbody>
            <tr>
                <td>
                    <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_displayx"> </span>           
                    <span class="customx">Default Certificate Validity : 1 Year</span>
                </td>
                <td>
                    <span class="turnoverType" style="display:none"></span>
                    <div class="fav">
                        <label></label>
                        <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹16799/-<br>Including Taxes &amp; Fees</span>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<!-- Head Office/Registered Office -->
<div class="Head-Office" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-3">
        <h6 class="font-weight-bold">Head Office/Registered Office:</h6>
        <span>Food Business Operators having food business activities in two or more States/UTs    have    to    declare    one    Head    Office/Registered    Office &amp; rest offices as branch offices.</span>
    </div>
    <table style="width: 100%; background: white; color: black;">
        <tbody>
            <tr>
                <td>
                    <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_displayx"> </span>           
                    <span class="customx">Default Certificate Validity : 1 Year</span>
                </td>
                <td>
                    <span class="turnoverType" style="display:none"></span>
                    <div class="fav">
                        <label></label>
                        <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹16799/-<br>Including Taxes &amp; Fees</span>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<!-- Relabellers & Repackers -->
<div class="Relabellers-Repackers" style="display:none;">
    <div class="container bg-white p-2 text-justify mb-3">
        <h6 class="font-weight-bold">Relabellers &amp; Repackers:</h6>
        <span><b>Relabellers</b> : A relabellers is a food business operator who buys products from manufacturers and repackages them under their own brand. A relabeler is required to obtain noc from the manufacturer to get relabellers licence.
        <br><br>
        <b>Repackers</b> : A repackager is a business that takes products from manufacturing units in bigger packs sizes and repacks them in smaller packages as per the prevaling market demand.
        </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select Turnover  <span class=""> *</span></label>
        <div class="form-group">
            <input class="Relabellers-radio other-price-2121" type="radio" name="turnover"  value="Turnover  upto  Rs. 20 Cr / annum" data-price="9899" data-text="Based on the selection of your inputs FSSAI State Licence With Basic Capacity is applicable in your case">
            <label class="custom">Turnover  upto  Rs. 20 Cr / annum"</label>
        </div>
        <div class="form-group">
            <input class="Relabellers-radio other-price-2121" type="radio" name="turnover"  value="Turnover  more than  Rs. 20 Cr / annum" data-price="16899" data-text="Based on the selection of your inputs FSSAI Center Licence With Basic Capacity is applicable in your case">
            <label class="custom">Turnover  more than  Rs. 20 Cr / annum</label>
            <div id="vegi1" style="font-size:12px"></div>
        </div>
    </div>
    <div class="Relabellers-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                      <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_displayx"> </span>           
                      <span class="customx">Default Certificate Validity : 1 Year</span>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Relabellers-price-2"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- Any Other Food Business not mentioned above: -->
<div class="Any-Other" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">Any Other Food Business not mentioned above:</h6>
        <span>If none of the options mentioned above matches your requirements for the food business, please select this option and proceed. </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select The Turnover / टर्नओवर का चयन करें <span class=""> *</span></label>
        <table class="" style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td><input class="any_other-radio" type="radio" name="turnover" value="Turnover upto Rs. 12 Lacs per annum" data-text="Based on the selection of your inputs FSSAI Basic Registration is applicable in your case">
                    </td>
                    <td style="width:45%">
                        <div>
                            <label class="custom"> Turnover upto Rs. 12 Lacs per annum</label>
                            <div id="turnoverx2" style="font-size:12px"></div>
                        </div>
                    </td>
                    <td rowspan="4" class="turnoverType option-any_other-price-sidetext" style="text-align:center">Select Radio Button On <br> The Left Side To Display <br> The Kind Of Registration / <br> Licence Applicable In Your Case</td>
                </tr>
                <tr>
                    <td><input class="any_other-radio other-price-2222" type="radio" name="turnover" value="Turnover upto Rs. 20 crores per annum" data-price="6899" data-text="Based on the selection of your inputs FSSAI State Licence With Basic Capacity is applicable in your case"></td>
                    <td style="width:45%">
                        <div>
                            <label class="custom"> Turnover upto Rs. 20 crores per annum</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><input class="any_other-radio other-price-2222" type="radio" name="turnover" value="Turnover More than Rs. 20 crores per annum" data-price="16899" data-text="Based on the selection of your inputs FSSAI Center Licence With Basic Capacity is applicable in your case"></td>
                    <td style="width:45%">
                        <div>
                            <label class="custom">Turnover More than Rs. 20 crores per annum</label>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="form-group txt mt-3">
            <label for="mobile-number">Provide Details About Nature Of Bussiness : <span class="required"> *</span></label>
            <textarea class="form-control" name="other_description" cols="10" row="5"></textarea>
        </div>
    </div>
    <div class="any_other-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_any_other_value" name="choose_any_other_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="2899" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="3199">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="3799">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="4299">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="4799">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-any_other-price"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="any_other-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                      <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_displayx"> </span>           
                      <span class="customx">Default Certificate Validity : 1 Year</span>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-any_other-price-2"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>