<?php
    include('insudashboard.php');
?>
      <form action="insu.php" method="POST">
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
                            <input type="date" class="form-control"  name="validtill" id="validtill">
                            <label for="validtill">VALID TILL</label>
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
                        <label for="testfee">INSUARANCE FEE</label>
                      </div>
                  </div>
                </div>
              </div>
              <div class="row g-2">
                <div class="col-md">
                  <div class="form-floating">
                    <input type="text" class="form-control" name="syn" id="syn" >
                    <label for="syn">SYSYTEM NO</label>
                  </div>
                </div>
                <div class="col-md">
                  <div class="form-floating">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="comments" id="comments">
                        <label for="comments">SPECIAL STATUS</label>
                      </div>
                  </div>
                </div>
              </div>
              
              <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating">
                      <select class="form-select" name="type" id="type" required>
                        <option selected hidden value="">---Chose option---</option>
                        <option value="THIRD-PARTY">THIRD-PARTY</option>
                        <option value="FULL-INSUARANCE">FULL-INSUARANCE</option>
                      </select>
                      <label for="type">INSUARANCE TYPE</label>
                    </div>
                  </div>
                
                <div class="col-md">
                    <div class="col-md">
                        <div class="form-floating">
                          <input type="date" class="form-control" name="issue" id="issue" required>
                          <label for="issue">ISSUE DATE</label>
                        </div>
                      </div>                       
              </div>      
</from>      

    <div class="d-grid gap-2 col-6 mx-auto">
        <br>
        <button class="btn btn-primary" input class="sub" type="submit" value="APPLY" id="submit" name="submit">Submit</button>
    </div>


  </form>
    </div>

    </section>

    <script src="../script.js"></script>
</body>
</html>