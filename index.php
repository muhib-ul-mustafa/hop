<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Include the connection file
  include 'conn.php';

  // Retrieve form data
  $course = $_POST['Course'];
  $skeme = $_POST['Skeme'];
  $candidateName = $_POST['CandidateName'];
  $fatherName = $_POST['FatherName'];
  $permanentAddress = $_POST['PermanentAddress'];
  $email = $_POST['Email'];
  $candidateCNICNumber = $_POST['CandidateCNICNumber'];
  $dateOfBirth = $_POST['DateOfBirth'];
  $candidateCellNumber = $_POST['CandidateCellNumber'];
  $fatherCellNumber = $_POST['FatherCellNumber'];
  $qualification = $_POST['Qualification'];
  $gender = $_POST['Gender'];
  $registrationDate = $_POST['RegistrationDate'];
  $startingDate = $_POST['StartingDate'];
  $endingDate = $_POST['EndingDate'];
  $classDaysAWeek = $_POST['ClassDaysAWeek'];
  $totalFees = $_POST['TotalFees'];
  $paymentTerms = $_POST['PaymentTerms'];
  $feesReceived = $_POST['FeesReceived'];
  $numberOfInstallments = $_POST['NumberOfInstallments'];
  $feesRemaining = $_POST['FeesRemaining'];
  $remarks = $_POST['Remarks'];

  // Perform SQL insertion (exclude ApplicationID)
  $sql = "INSERT INTO muhib (course, skeme, candidateName, fatherName, permanentAddress, email, candidateCNICNumber, dateOfBirth, candidateCellNumber, fatherCellNumber, qualification, gender, registrationDate, startingDate, endingDate, classDaysAWeek, totalFees, paymentTerms, feesReceived, numberOfInstallments, feesRemaining, remarks)
          VALUES ('$course', '$skeme', '$candidateName', '$fatherName', '$permanentAddress', '$email', '$candidateCNICNumber', '$dateOfBirth', '$candidateCellNumber', '$fatherCellNumber', '$qualification', '$gender', '$registrationDate', '$startingDate', '$endingDate', '$classDaysAWeek', '$totalFees', '$paymentTerms', '$feesReceived', '$numberOfInstallments', '$feesRemaining', '$remarks')";

  if (mysqli_query($conn, $sql)) {
      echo "Data saved successfully!";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  // Close the database connection
  mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
          <link rel="stylesheet" href="style.css">
      </head>
      
<body>
    <form id="myForm" method="post">
        <div class="container">
            <h1 class="text-center mb-3">Registration Form</h1>
            <div class="row">
              <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control formCourse" id="courseInput" placeholder="" name="Course" >
                  <label for="candidateName">Course:</label>
                </div>
              </div>
              <div class="col-md-6 col-lg-6 col-sm-12 skeme">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="Skeme" placeholder="" onchange="courseChange()" name="Skeme">
                  <label for="Skeme">Skeme:</label>
                </div>
              </div>
            </div>
            <div class="infoCnic border border-dark mb-3">
              <p class="fs-md-1 fs-lg-1 fs-sm-4">Applicant Information(As Per CNIC)</p>
              <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="candidateName" placeholder="" name="CandidateName">
                    <label for="candidateName">Candidate Name:</label>
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="fatherName" placeholder="" name="FatherName">
                    <label for="fatherName">Father Name:</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="PermanentAddress" placeholder="" name="PermanentAddress">
                    <label for="PermanentAddress">Permanent Address:</label>
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="endingDate" placeholder="" name="Email"
                      >
                    <label for="endingDate">Email:</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12">
                  <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="candidateCNICNumber" placeholder="" name="CandidateCNICNumber" oninput="limitInputLength(this, 13)">
                    <label for="candidateCNICNumber">Candidate CNIC Number:</label>
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                  <div class="form-floating mb-3">
                    <input type="date" class="form-control" id="DateOfBirth" placeholder="" name="DateOfBirth">
                    <label for="DateOfBirth">Date of Birth:</label>
                  </div>
                </div>
              </div>
      
              <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12">
                  <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="candidateCellNumber" placeholder="" name="CandidateCellNumber" oninput="limitInputLength(this, 11)">
                    <label for="candidateCellNumber">Candidate Cell Number:</label>
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                  <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="fatherCellNumber" placeholder="" name="FatherCellNumber" oninput="limitInputLength(this, 11)">
                    <label for="fatherCellNumber">Father Cell Number:</label>
                  </div>
                </div>
              </div>
      
              <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12">
                  <div class="form-floating mb-3">
                    <select class="form-select" id="qualification" aria-label="Qualification" name="Qualification">
                      <option value="" selected>Choose a qualification</option>
                      <option value="Matric">Matric</option>
                      <option value="Intermediate">Intermediate</option>
                      <option value="Bachelors">Bachelors Degree</option>
                      <option value="Masters">Masters / MPhill</option>
                      <option value="PhD">PhD</option>
                    </select>
                    <label for="qualification">Qualification:</label>
                  </div>
                </div>
      
                <div class="col-md-6 col-lg-6 col-sm-12">
                  <div class="form-floating mb-3">
                    <select class="form-select" id="gender" aria-label="Gender" name="Gender">
                      <option value="" selected>Choose a gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="genderX">Gender X</option>
                    </select>
                    <label for="gender">Gender:</label>
                  </div>
                </div>
              </div>
            </div>
                  
            <div class="row">
              <div class="form-group col-md-6 col-lg-6 col-sm-12">
    <div>
        <input type="text" class="form-control" id="applicationID" placeholder="Application ID:" name="ApplicationID">
    </div>
</div>

      
              <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-floating mb-3">
                  <input type="date" class="form-control" id="registrationDate" placeholder="" name="RegistrationDate" >
                  <label for="registrationDate">Registration Date:</label>
                </div>
              </div>
            </div>
      
            <div class="row">
              <div class="col-md-6 col-lg-6 col-sm-12">
                  <div class="form-floating mb-3">
                      <input type="date" class="form-control" id="startingDate" placeholder="" name="StartingDate">
                      <label for="startingDate">Starting Date:</label>
                  </div>
              </div>
              <div class="col-md-6 col-lg-6 col-sm-12">
                  <div class="form-floating mb-3">
                      <input type="date" class="form-control" id="endingDate" placeholder="" onchange="calculateDuration()" name="EndingDate">
                      <label for="endingDate">Ending Date:</label>
                  </div>
              </div>
          </div>
          
          <div class="row">
              <!-- <div class="col-md-6 col-lg-6 col-sm-12 mb-3">
                  <p id="durationHeading">Duration</p>
                  <input type="text" class="form-control" id="duration" placeholder="Duration" name="Duration">
              </div> -->
              <div class="col-md-12 col-lg-12 col-sm-12">
                  <div class="form-floating mb-3">
                      <input type="number" class="form-control" id="classDaysaWeek" placeholder="" name="ClassDaysAWeek">
                      <label for="classDaysaWeek">Class Days a Week:</label>
                  </div>
              </div>
          </div>
            <hr class="mb-3">
            <!-- <h4 class="fs-md-1 fs-lg-1 fs-sm-4 text-dark font-weight-bold">For Office Use Only</h4> -->
      
            <div class="row">
              <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-floating mb-3">
                  <input type="number" class="form-control" id="totalFees" placeholder="" name="TotalFees" onchange="calculateFeesRemaining()">
                  <label for="TotalFees">Total Fees:</label>
                </div>
              </div>
              <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="paymentTerms" placeholder="" name="PaymentTerms">
                  <label for="paymentTerms">Payment Terms:</label>
                </div>
              </div>
            </div>
      
            <div class="row">
              <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-floating mb-3">
                  <input type="number" class="form-control" id="feesReceived" placeholder="" name="FeesReceived" onchange="calculateFeesRemaining()">
                  <label for="feesReceived">Fees Received:</label>
                </div>
              </div>
              <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-floating mb-3">
                  <input type="number" class="form-control" id="feesInstallments" placeholder="" name="NumberOfInstallments" value="0">
                  <label for="feesInstallment">Number of Installements:</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-floating mb-3">
                  <input type="number" class="form-control" id="feesRemaining" placeholder="" name="FeesRemaining" value="0">
                  <label for="feesRemaining">Fees Remaining:</label>
                </div>
              </div>
              <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="remarks" placeholder="" name="Remarks">
                  <label for="remarks">Remarks:</label>
                </div>
              </div>
            </div>
            <div class="col-md-5 col-lg-6 col-sm-12">
              <button class="" type="submit">Save Data</button>
            </div>
          </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script>
//     function generateRollNumber(courseValue, skemeValue) {
//   const key = `${courseValue}_${skemeValue}`;
//   let rollNumber = localStorage.getItem(key) || 0;
//   rollNumber++;
//   localStorage.setItem(key, rollNumber);
//   return `${courseValue}_${skemeValue}_${rollNumber}`;
// }


//     const registrationCounts = {};
//     let previousCourse = '';

//     function courseChange() {
//   const courseValue = document.getElementById("courseInput").value;
//   const skemeValue = document.getElementById("Skeme").value;

//   const roleNumber = generateRollNumber(courseValue, skemeValue);
//   const applicationIDValue = roleNumber;

//   document.getElementById("applicationID").value = applicationIDValue;
// }

    function calculateFeesRemaining() {
      // Get values from input fields
      const totalFees = parseFloat(document.getElementById('totalFees').value) || 0;
      const feesReceived = parseFloat(document.getElementById('feesReceived').value) || 0;
      const feesInstallments = document.getElementById("feesInstallments");
      const zero = 0;

      // Calculate fees remaining
      const remaining = totalFees - feesReceived;

      // Update the Fees Remaining field
      document.getElementById('feesRemaining').value = remaining.toFixed(2);

      // Check if fees remaining is zero and update the number of installments
      if (remaining === 0) {
        feesInstallments.value = zero;
      }
    }
    function limitInputLength(element, maxLength) {
    let inputValue = element.value;
    if (inputValue.length > maxLength) {
      element.value = inputValue.slice(0, maxLength);
    }
  }
  </script>
  </script>
</body>
</html>

