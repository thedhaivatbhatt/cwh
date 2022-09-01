<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<body>
    <form action="ex3.php" method="post" enctype="multipart/form-data">
                                <table class="table table-hover inquiryform">
                                    <!-- Minimum 25 M.T. -->
                                    <tr>
                                        <td><label for="quantity">Quantity</label></td>
                                        <td><input type="text" class="form-control" name="quantity" id="quantity"
                                                placeholder="Minimum 25 M.T."></td>
                                    </tr>
                                    <tr>
                                        <td><label for="length">Length</label></td>
                                        <td><input type="text" class="form-control" name="length" id="length"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="micronaite">fiber fineness (mic)</label></td>
                                        <td><input type="text" class="form-control" name="micronaite" id="micronaite">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="strength">Strength</label></td>
                                        <td><input type="text" class="form-control" name="strength" id="strength"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="txtother">Other</label></td>
                                        <td><input type="text" class="form-control" name="txtother" id="txtother"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="shipment">Select Shipment</label></td>
                                        <td>
                                            <select name="shipment" id="shipment" class="form-control">
                                                <option value="">Select Shipment</option>
                                                <option value="FOB">FOB</option>
                                                <option value="CIF">CIF</option>
                                                <option value="DAP">DAP</option>
                                                <option value="DDP">DDP</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="payment">Payment Type</label></td>
                                        <td>
                                            <select name="payment" id="payment" class="form-control">
                                                <option value="">Select Payment Type</option>
                                                <option value="Advance Payment">Advance Payment</option>
                                                <option value="L/C at Sight From Payment Bank">L/C at Sight From Premium
                                                    Bank</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="schedule">Delivery Schedule</label></td>
                                        <td><input type="text" class="form-control" name="schedule" id="schedule"
                                                placeholder="Delivery Schedule"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center"><b>Contact Information</b></td>
                                    </tr>
                                    <tr>
                                        <td><label for="comname">Company Name</label></td>
                                        <td><input type="text" class="form-control" name="comname" id="comname"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="conperson">Contact Person</label></td>
                                        <td><input type="text" class="form-control" name="conperson" id="conperson">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="position">Designation/Position</label></td>
                                        <td><input type="text" class="form-control" name="position" id="position"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="busnature">Business Nature</label></td>
                                        <td>
                                            <select name="busnature" id="busnature" class="form-control" required>
                                                <option value="">Select Business Nature</option>
                                                <option value="Manufacturing">Manufacturing</option>
                                                <option value="Agent">Agent</option>
                                                <option value="Traders">Traders</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="address">Address</label></td>
                                        <td><textarea name="address" id="address" cols="3"
                                                class="form-control"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td><label for="txtcity">City</label></td>
                                        <td><input type="text" class="form-control" name="txtcity" id="txtcity"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="pincode">Pincode</label></td>
                                        <td><input type="text" class="form-control" name="pincode" id="pincode"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="txtstate">State</label></td>
                                        <td><input type="text" class="form-control" name="txtstate" id="txtstate"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="txtcountry">Country</label></td>
                                        <td><input type="text" class="form-control" name="txtcountry" id="txtcountry">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="txtphone">Mobile</label></td>
                                        <td><input type="text" class="form-control" name="txtphone" id="txtphone"
                                                placeholder="Include country/area code" required></td>
                                    </tr>
                                    <tr>
                                        <td><label for="txtemail">Email Address</label></td>
                                        <td><input type="email" class="form-control" name="txtemail" id="txtemail"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="anywebsite">Website</label></td>
                                        <td><input type="text" class="form-control" name="anywebsite" id="anywebsite">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="document">Documents Attachments</label></td>
                                        <td><input type="file" class="form-control" name="filfile1" id="filfile1"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="specitications">Other Specifications</label></td>
                                        <td><textarea name="specitications" id="specitications" class="form-control"
                                                cols="3"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td><label for="findus">How you find us</label></td>
                                        <td>
                                            <select name="findus" id="findus" class="form-control" required>
                                                <option value="">How you find us</option>
                                                <option value="Internet Search">Internet Search</option>
                                                <option value="Trade Show">Trade Show</option>
                                                <option value="Magazine">Magazine</option>
                                                <option value="Business Directory">Business Directory</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="g-recaptcha"
                                                data-sitekey="6LeVhIMfAAAAAMXYWNBslH1awyVD2lR4ab9a3yKl"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="float-right"><input type="submit" name="submit"
                                                class="btn btn-primary" value="submit"></td>
                                    </tr>
                                </table>
                            </form>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>