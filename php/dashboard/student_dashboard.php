<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, 
				initial-scale=1.0">
    <title>RIT Hostel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../../style/dash-style.css">
    <link rel="stylesheet" href="../../style/responsive.css">
</head>

<body>

    <!-- for header part -->
    <header>

        <div class="logosec">
            <div class="logo">Student Dashboard</div>
            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png"
                class="icn menuicn" id="menuicn" alt="menu-icon">
        </div>

        <div class="searchbar">
            <input type="text" placeholder="Search">
            <div class="searchbtn">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
                    class="icn srchicn" alt="search-icon">
            </div>
        </div>

        <div class="message">
            <div class="circle"></div>
            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/8.png" class="icn" alt="">
            <div class="dp">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png"
                    class="dpicn" alt="dp">
            </div>
        </div>

    </header>

    <div class="main-container">
        <div class="navcontainer">
            <nav class="nav">
                <div class="nav-upper-options">
                    <div class="nav-option active">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
                            class="nav-img" alt="dashboard">
                        <h3> Dashboard</h3>
                    </div>
                    <div class="navbar-bottom">
                        <div class="nav-option option6">
                            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/4.png"
                                class="nav-img" alt="settings">
                            <h3> Settings</h3>
                        </div>
    
                        <div class="nav-option logout">
                            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png"
                                class="nav-img" alt="logout">
                            <h3>Logout</h3>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="main">

            <div class="searchbar2">
                <input type="text" name="" id="" placeholder="Search">
                <div class="searchbtn">
                    <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
                        class="icn srchicn" alt="search-button">
                </div>
            </div>

            <div class="dashboard-items-container">             
                            <div class="food-card">
                                <h2 class="food-title">Today's Menu</h2>
                                <div class="food-details">
                                    <div class="food-item had-food-success">
                                        <div class="food-title">
                                            <i class="fas fa-utensils food-icon"></i>
                                            <span class="food-label">Breakfast:</span>
                                        </div>
                                        <div class="food-name">Uppumavu</div>
                                        <div class="food-time">8:00 AM - 10:00 AM</div>
                                        <div class="had-food-btn">✓</div>
                                    </div>
                                    <div class="food-item">
                                        <div class="food-title">
                                            <i class="fas fa-utensils food-icon"></i>
                                            <span class="food-label">Launch:</span>
                                        </div>
                                        <div class="food-name">Meals</div>
                                        <div class="food-time">8:00 AM - 10:00 AM</div>
                                        <div class="had-food-btn">Had Food</div>
                                    </div>
                                    <div class="food-item">
                                        <div class="food-title">
                                            <i class="fas fa-utensils food-icon"></i>
                                            <span class="food-label">Evening:</span>
                                        </div>
                                        <div class="food-name">Pazhampori</div>
                                        <div class="food-time">8:00 AM - 10:00 AM</div>
                                        <div class="had-food-btn">Had Food</div>
                                    </div>
                                    <div class="food-item">
                                        <div class="food-title">
                                            <i class="fas fa-utensils food-icon"></i>
                                            <span class="food-label">Dinner:</span>
                                        </div>
                                        <div class="food-name">Kanji</div>
                                        <div class="food-time">8:00 AM - 10:00 AM</div>
                                        <div class="had-food-btn">Had Food</div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="attendance-section">
                                    <h2 class="attendance-title">Mark Attendance</h2>
                                    <div class="attendance-buttons">
                                        <button class="attendance-button">Morning</button>
                                        <button class="attendance-button">Evening</button>
                                    </div>
                                </div>
                                <div class="complaint-section">
                                    <h2 class="complaint-title">Complaint Box</h2>
                                    <label for="title" class="input-title">Topic</label>
                                    <input class="complaint-input" type="text" placeholder="Enter Topic">
                                    <label for="title">Describe</label>
                                    <textarea class="complaint-textarea" placeholder="Enter your complaint"></textarea>
<<<<<<<<< Temporary merge branch 1
                                    <button class="inform-button">Inform</button>
=========
                                    <button class="inform-button">Inform Warden</button>
>>>>>>>>> Temporary merge branch 2
                                </div>
                            </div>

            </div>

            <!-- <div class="report-container">
                <div class="report-header">
                    <h1 class="recent-Articles">Recent Articles</h1>
                    <button class="view">View All</button>
                </div>

                <div class="report-body">
                    <div class="report-topic-heading">
                        <h3 class="t-op">Article</h3>
                        <h3 class="t-op">Views</h3>
                        <h3 class="t-op">Comments</h3>
                        <h3 class="t-op">Status</h3>
                    </div>

                    <div class="items">
                        <div class="item1">
                            <h3 class="t-op-nextlvl">Article 73</h3>
                            <h3 class="t-op-nextlvl">2.9k</h3>
                            <h3 class="t-op-nextlvl">210</h3>
                            <h3 class="t-op-nextlvl label-tag">Published</h3>
                        </div>

                        <div class="item1">
                            <h3 class="t-op-nextlvl">Article 72</h3>
                            <h3 class="t-op-nextlvl">1.5k</h3>
                            <h3 class="t-op-nextlvl">360</h3>
                            <h3 class="t-op-nextlvl label-tag">Published</h3>
                        </div>

                        <div class="item1">
                            <h3 class="t-op-nextlvl">Article 71</h3>
                            <h3 class="t-op-nextlvl">1.1k</h3>
                            <h3 class="t-op-nextlvl">150</h3>
                            <h3 class="t-op-nextlvl label-tag">Published</h3>
                        </div>

                        <div class="item1">
                            <h3 class="t-op-nextlvl">Article 70</h3>
                            <h3 class="t-op-nextlvl">1.2k</h3>
                            <h3 class="t-op-nextlvl">420</h3>
                            <h3 class="t-op-nextlvl label-tag">Published</h3>
                        </div>

                        <div class="item1">
                            <h3 class="t-op-nextlvl">Article 69</h3>
                            <h3 class="t-op-nextlvl">2.6k</h3>
                            <h3 class="t-op-nextlvl">190</h3>
                            <h3 class="t-op-nextlvl label-tag">Published</h3>
                        </div>

                        <div class="item1">
                            <h3 class="t-op-nextlvl">Article 68</h3>
                            <h3 class="t-op-nextlvl">1.9k</h3>
                            <h3 class="t-op-nextlvl">390</h3>
                            <h3 class="t-op-nextlvl label-tag">Published</h3>
                        </div>

                        <div class="item1">
                            <h3 class="t-op-nextlvl">Article 67</h3>
                            <h3 class="t-op-nextlvl">1.2k</h3>
                            <h3 class="t-op-nextlvl">580</h3>
                            <h3 class="t-op-nextlvl label-tag">Published</h3>
                        </div>

                        <div class="item1">
                            <h3 class="t-op-nextlvl">Article 66</h3>
                            <h3 class="t-op-nextlvl">3.6k</h3>
                            <h3 class="t-op-nextlvl">160</h3>
                            <h3 class="t-op-nextlvl label-tag">Published</h3>
                        </div>

                        <div class="item1">
                            <h3 class="t-op-nextlvl">Article 65</h3>
                            <h3 class="t-op-nextlvl">1.3k</h3>
                            <h3 class="t-op-nextlvl">220</h3>
                            <h3 class="t-op-nextlvl label-tag">Published</h3>
                        </div>

                    </div>
                </div> -->
            </div>
        </div>
    </div>

    <script src="../../style/dashboard.js"></script>
</body>

</html>