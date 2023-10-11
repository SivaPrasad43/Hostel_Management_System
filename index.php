<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Management System</title>
    <link rel="stylesheet" href="./style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<?php include './component/header.php' ?>
<main>
    <div class="section background-bg p-5">
        <h2 class="text-center py-2">Application for admission to RIT Hostels for the period 2023-24</h2>
    <div class="container col-lg-8 p-5 mt-3 border border-2 rounded-3 bg-light shadow">
        <form>
            <div class="row">
                <div class="col-md-6">
                    <div class="my-3">
                        <label for="name" class="form-label important">Name of Applicant</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name of Applicant">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="my-3">
                        <label for="gender" class="form-label important">Gender</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                <label class="form-check-label" for="male">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                <label class="form-check-label" for="female">Female</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="other" value="other">
                                <label class="form-check-label" for="other">Other</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="my-3">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="course" class="form-label important">Degree</label>
                                <select class="form-select" id="course" name="course">
                                    <option value="" selected>Select your course</option>
                                    <option value="math">Mathematics</option>
                                    <option value="science">Science</option>
                                    <option value="history">History</option>
                                    <option value="english">English</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="course" class="form-label important">Year of Study</label>
                                <select class="form-select" id="course" name="course">
                                    <option value="" selected>Select your course</option>
                                    <option value="math">Mathematics</option>
                                    <option value="science">Science</option>
                                    <option value="history">History</option>
                                    <option value="english">English</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="my-3">
                        <div class="my-3">
                            <label for="name" class="form-label important">Admission Number</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name of Applicant">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="my-3">
                        <label for="course" class="form-label important">Semester</label>
                            <select class="form-select" id="course" name="course">
                                    <option value="" selected>Select your course</option>
                                    <option value="math">Mathematics</option>
                                    <option value="science">Science</option>
                                    <option value="history">History</option>
                                    <option value="english">English</option>
                            </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="my-3">
                        <label for="course" class="form-label important">Branch</label>
                            <select class="form-select" id="course" name="course">
                                    <option value="" selected>Select your course</option>
                                    <option value="math">Mathematics</option>
                                    <option value="science">Science</option>
                                    <option value="history">History</option>
                                    <option value="english">English</option>
                            </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="my-3">
                        <label for="address" class="form-label important">Permanent Address</label>
                        <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter your address"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="my-3">
                        <label for="address" class="form-label important">Guardian Address</label>
                        <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter your address"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="my-3">
                        <label for="address" class="form-label important">Your Mobile Number</label>
                        <input type="phone" class="form-control" id="name" name="name" placeholder="Enter your Phone Number">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="my-3">
                        <label for="address" class="form-label important">Guardian Mobile Number</label>
                        <input type="phone" class="form-control" id="name" name="name" placeholder="Enter Guardian Mobile Number">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="my-3">
                        <label for="address" class="form-label">Present Residential Address</label>
                        <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter your address"></textarea>
                    </div>
                </div>
            </div>
            <div class="text-center mt-3">
                <button type="reset" class="btn btn-secondary px-4 mx-1">Reset</button>
                <button type="submit" class="btn btn-primary px-4 mx-1">Submit</button>
            </div>
        </form>
    </div>
    </div>
</main>
<?php include './component/footer.php' ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>