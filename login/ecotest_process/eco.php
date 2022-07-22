
<?php
    include('ecouser.php');
?>            
 <form action="ecoreg.php" method="POST">
                <div class="row g-2">
                    <div class="col-md">
                      <div class="form-floating">
                        <input type="text" class="form-control" type="text" name="vehicleno" id="vehicleno"required>
                        <label for="vehicleno">VEHICLE NO</label>
                      </div>
                    </div>
                    <div class="col-md">
                      <div class="form-floating">
                            <div class="form-floating">
                                <input type="date" class="form-control"  name="validdate" id="validdate">
                                <label for="validdate">VALID TILL</label>
                              </div>
                      </div>
                    </div>
                  </div>
                  <div class="row g-2">
                    <div class="col-md">
                      <div class="form-floating">
                        <input type="text" class="form-control" name="center" id="center" required>
                        <label for="engineno">CENTER</label>
                      </div>
                    </div>
                    <div class="col-md">
                      <div class="form-floating">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="testfee" id="testfee" required>
                            <label for="testfee">TEST FEE</label>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="row g-2">
                    <div class="col-md">
                      <div class="form-floating">
                        <input type="text" class="form-control" name="sysno" id="sysno" >
                        <label for="sysno">SYSYTEM NO</label>
                      </div>
                    </div>
                    <div class="col-md">
                      <div class="form-floating">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="odo" id="odo" required>
                            <label for="testfee">ODOMEETER</label>
                          </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row g-2">
                    <div class="col-md">
                        <div class="form-floating">
                          <select class="form-select" name="ovstatus" id="ovstatus" required>
                            <option selected hidden value="">---Chose option---</option>
                            <option value="PASS">PASS</option>
                            <option value="FAIL">FAIL</option>
                          </select>
                          <label for="ovstatus">OVERALL STATUS</label>
                        </div>
                      </div>
                    
                    <div class="col-md">
                        <div class="col-md">
                            <div class="form-floating">
                              <input type="date" class="form-control" name="doi" id="doi" required>
                              <label for="doi">ISSUE DATE</label>
                            </div>
                          </div>                       
                  </div>            

		<div class="d-grid gap-2 col-6 mx-auto">
            <br>
            <button class="btn btn-primary" input class="sub" type="submit" value="APPLY" id="submit" name="submit">Submit</button>
        </div>



		</p>



	</div>
	
	</form>
	</div>
	<script src="../script.js"></script>

</body>
</html>