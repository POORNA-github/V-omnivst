<?php
include('../admindashpanel.php');
?>
                <link rel="stylesheet" href="../../style.css">
                <form action="connection.php" method="POST">
                    <p></p>
                    
                    
                     <div class="row g-2">
                        <div class="col-md">
                          <div class="form-floating">
                            <input type="text" class="form-control" name="vehicleno" id="vehicleno" required>
                            <label for="floatingInputGrid">VEHICLE NO</label>
                          </div>
                        </div>
                        <div class="col-md">
                          <div class="form-floating">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="chassino" id="chassino" required>
                                    <label for="chassino">CHASSI NUMBER</label>
                                  </div>
                          </div>
                        </div>
                      </div>
                      <div class="row g-2">
                        <div class="col-md">
                          <div class="form-floating">
                            <input type="text" class="form-control" name="engineno" id="engineno" required>
                            <label for="engineno">ENGINE NUMBER</label>
                          </div>
                        </div>
                        <div class="col-md">
                          <div class="form-floating">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="serialno" id="serialno" required>
                                <label for="serialno">SERIAL NUMBER</label>
                              </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating">
                              <select class="form-select" name="vehiclemake" id="vehiclemake" required>
                                <option selected hidden value="">---Chose option---</option>
                                <option value="AUDI">AUDI</option>
                                <option value="BAJAJ">BAJAJ</option>
                                <option value="BMW">BMW</option>
                                <option value="DAIHATSU">DAIHATSU</option>
                                <option value="TOYOTA">TOYOTA</option>
                                <option value="TVS">TVS</option>
                                <option value="TATA">TATA</option>
                                <option value="SUZUKI">SUZUKI</option>
                                <option value="NISSAN">NISSAN</option>
                                <option value="HONDA">HONDA</option>
                                <option value="MITSUBISHI">MITSUBISHI</option>
                                <option value="SUZUKI">SUZUKI</option>
                                <option value="MERCEDES-BENZ">MERCEDES BENZ</option>
                                <option value="MICRO">MICRO</option>
                                <option value="MAZDA">MAZDA</option>
                                <option value="MARUTI-SUZUKI">MARUTI SUZUKI</option>
                                <option value="HYUNDAI">HYUNDAI</option>
                                <option value="KIA">KIA</option>
                                <option value="LAND ROVER">LAND ROVER</option>
                                <option value="VOLKSWAGON">VOLKSWAGON</option>
                                <option value="SUBARU">SUBARU</option>
                                <option value="OTHER MAKE">OTHER MAKE</option>
                              </select>
                              <label for="vehiclemake">Vehicle Make</label>
                            </div>
                          </div>
                        
                        <div class="col-md">
                          <div class="form-floating">
                            <select class="form-select" name="vehicletype" id="vehicletype" required>
                                <option selected hidden value="">---Chose option---</option>
                                <option value="CAR">CAR</option>
                                <option value="MOTORBIKE">MOTORBIKE</option>
                                <option value="THREE-WHEELER">THREE-WHEELER</option>
                                <option value="VAN">VAN</option>
                                <option value="BUS">BUS</option>
                                <option value="LORRY">LORRY</option>
                                <option value="TRUCK">TRUCK</option>
                                <option value="HEAVY-DUTY">HEAVY-DUTY</option>
                                <option value="TRACTOR">TRACTOR</option>
                                <option value="BOAT">BOAT</option>
                                <option value="OTHER TYPE">OTHER TYPE</option>
                            </select>
                            <label for="vehicletype">VEHICLE TYPE</label>
                          </div>
                        </div>
                      </div>
                      <div class="row g-2">
                        <div class="col-md">
                          <div class="form-floating">
                            <input type="text" class="form-control" name="submodel" id="submodel" required>
                            <label for="submodel">SUB MODEL</label>
                          </div>
                        </div>
                        <div class="col-md">
                          <div class="form-floating">
                            <select class="form-select" name="rpurpose" id="rpurpose" required>
                                <option selected hidden value="">---Chose option---</option>
                              <option value="DUAL PURPOSE">DUAL PURPOSE</option>
                              <option value="PASSENGER-TRANSPORT">PASSENGER-TRANSPORT</option>
                              <option value="COMMERCIAL">COMMERCIAL</option>
                            </select>
                            <label for="rpurpose">REGISTORING PURPOSE</label>
                          </div>
                        </div>
                      </div>
                      <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating">
                              <select class="form-select" name="wsize" id="wsize" required>
                                <option selected hidden value="">---Chose option---</option>
                                <option value="145/80R10">145/80R10</option>
                                <option value="135/80R12">135/80R12</option>
                                <option value="125/80R13">125/80R13</option>
                                <option value="115/70R14">115/70R14</option>
                                <option value="135/80R15">135/80R15</option>
                                <option value="135/80R16">135/80R16</option>
                                <option value="155/70R17">155/70R17</option>
                                <option value="205/35R18">205/35R18</option>
                                <option value="225/35R19">225/35R19</option>
                                <option value="235/45R20">235/45R20</option>
                                <option value="265/40R21">265/40R21</option>
                                <option value="265/35R22">265/35R22</option>
                                <option value="305/35R23Z">305/35R23</option>
                                <option value="285/40R24">285/40R24</option>
                                <option value="315/40R25">315/40R25</option>
                                <option value="305/30R26">305/30R26</option>
                                <option value="325/35R28">325/35R28</option>
                                <option value="315/35R30">315/35R30</option>
                                <option value="305/25R32">305/25R32</option>
                                <option value="NO-WHEELS">NO-WHEELS</option>
                              </select>
                              <label for="wsize">WHEEL-SIZE</label>
                            </div>
                          </div>
                        
                        <div class="col-md">
                          <div class="form-floating">
                            <select class="form-select" name="seats" id="seats" required>
                                <option selected hidden value="">---Chose option---</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="40">40</option>
                                <option value="50">50</option>
                            </select>
                            <label for="seats">NUMBER OF SEATS</label>
                          </div>
                        </div>
                      </div>
                      <div class="row g-2">
                        <div class="col-md">
                          <div class="form-floating">
                            <input type="text" class="form-control" name="capacity" id="capacity" required>
                            <label for="capacity">CYLINDER CAPACITY</label>
                          </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                              <select class="form-select" name="status" id="status" required >
                                <option selected hidden value="">---Chose option---</option>
                                <option value="BRAND-NEW">BRAND-NEW</option>
                                <option value="RECONDITIONED">RECONDITIONED</option>
                              </select>
                              <label for="status">STATUS WHEN REGISTER</label>
                            </div>
                          </div>                        
                      </div>
                      <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating">
                              <select class="form-select" name="colour" id="colour" required>
                                <option selected hidden value="">---Chose option---</option>
                                <option value="BLACK">BLACK</option>
                                <option value="WHITE">WHITE</option>
                                <option value="RED">RED</option>
                                <option value="Gray">Gray</option>
                                <option value="Blue">Blue</option>
                                <option value="Brown">Brown</option>
                                <option value="Green">Green</option>
                                <option value="Beige">Beige</option>
                                <option value="Orange">Orange</option>
                                <option value="Purple">Purple</option>
                                <option value="Yellow">Yellow</option>
                              </select>
                              <label for="colour">COLOUR</label>
                            </div>
                          </div>
                        
                        <div class="col-md">
                          <div class="form-floating">
                            <select class="form-select" name="bodytype" id="bodytype" required>
                                <option selected hidden value="">---Chose option---</option>
                                <option value="CLOSED">CLOSED</option>
                                <option value="SUV">SUV</option>
                                <option value="SALOON">SALOON</option>
                                <option value="SUPER-SALOON">SUPER SALOON</option>
                                <option value="HATCH-BACK">HATCH-BACK</option>
                                <option value="-">-</option>
                            </select>
                            <label for="bodytype">TYPE OF BODY</label>
                          </div>
                        </div>
                      </div>
                      <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating">
                              <select class="form-select" name="fuel" id="fuel" required>
                                <option selected hidden value="">---Chose option---</option>
                                <option value="PETROL">PETROL</option>
                                <option value="DIESEL">DIESEL</option>
                                <option value="ELECTRIC">ELECTRIC</option>
                              </select>
                              <label for="fuel">FUEL-TYPE</label>
                            </div>
                          </div>
                        <div class="col-md">
                          <div class="form-floating">
                            <select class="form-select" name="country" id="country" required>
                                <option selected hidden value="">---Chose option---</option>
                                <option value="EUROPE">EUROPE</option>
                                <option value="JAPAN">JAPAN</option>
                                <option value="CHINA">CHINA</option>
                                <option value="INDIA">INDIA</option>
                            </select>
                            <label for="country">COUNTRY OF ORIGIN</label>
                          </div>
                        </div>
                      </div>
                      <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating">
                              <select class="form-select" name="owners" id="owners" required>
                                <option selected hidden value="">---Chose option---</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                              </select>
                              <label for="owners">TOTAL NUMBER OF OWNERS</label>
                            </div>
                          </div>
                        
                          <div class="col-md">
                            <div class="form-floating">
                              <div class="form-floating">
                                  <input type="text" class="form-control" name="owner" id="owner" required>
                                  <label for="owner">REGISTERING OWNER</label>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-2">
                          <div class="col-md">
                            <div class="form-floating">
                              <input type="text" class="form-control" name="idc" id="idc" required>
                              <label for="idc">ID NUMBER</label>
                            </div>
                          </div>
                          <div class="col-md">
                            <div class="form-floating">
                                  <div class="form-floating">
                                      <input type="phone" class="form-control" name="tel" id="tel" required>
                                      <label for="tel">TELPHONE NUMBER</label>
                                    </div>
                            </div>
                          </div>
                        </div>
                      <div class="row g-2">
                        <div class="col-md">
                          <div class="form-floating">
                            <input type="date" class="form-control" name="manufacdate" id="manufacdate" required>
                            <label for="manufacdate">MANUFACTURE DATE</label>
                          </div>
                        </div>
                        <div class="col-md">
                            <div class="col-md">
                                <div class="form-floating">
                                  <input type="date" class="form-control" name="registerdate" id="registerdate" required>
                                  <label for="registerdate ">REGISTER DATE</label>
                                </div>
                              </div>                       
                      </div>
                      <div class="d-grid gap-2 d-md-block">
                        <button class="btn btn-primary" type="submit" value="APPLY" id="submit" name="submit">APPLY</button>
                      </div>
                
                  </form>
	</div>
	<script src="../../script.js"></script>

</body>
</html>