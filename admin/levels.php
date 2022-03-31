<?php 
    ob_start();

    $pageTitle = 'Levels';

    include "init.php";

    $_SESSION['url']='levels.php';

    if (!isset($_SESSION['Username'])) {
        header('Location: login.php'); // Redirect Register page
    }

?>
        <!-------------------------- College years --------------------------->
        
        <!-- =================== page body =================== -->
        <section>
            <div class="years grid">
            <!-- =================== First year =================== -->
                
                <div class="year-first" data-tilt data-tilt-parallax data-tilt-max-parallax="0.5">
                    <i class="fas fa-star" style="color: #eb60e1"></i>
                    <div class="year-btn rgb">
                        <div class="year-btn1">
                            <h3><?php echo lang('FIRST_YEAR')?></h3>
                            <div class="middle">
                                <button class="y-btn btn1" style="color: #fff">
                                <a href="subjects/subject1.php"><?php echo lang('VIEW_SUBJECT')?></a>
                                </button>
                            </div> 
                        </div>
                        <img src="<?php echo $img . "level-one1.png" ?>"/>
                    </div>
                    <i class="fas fa-star last" style="color: #4549e1"></i>
                </div>
            <!-- =================== Second year =================== -->
                
                <div class="year-first" data-tilt data-tilt-parallax data-tilt-max-parallax="0.5">
                    <i class="fas fa-star" style="color: #43d5b5"></i>
                    <div class="year-btn rgb year1">
                        <div class="year-btn1">
                            <h3><?php echo lang('SECOND_YEAR')?></h3>
                            <div class="middle">
                                <button class="y-btn btn1" style="color: #fff">
                                <a href="subjects/subject2.php"><?php echo lang('VIEW_SUBJECT')?></a>
                                </button>
                            </div>
                        </div>
                        <img src="<?php echo $img . "level2.png" ?>"/>
                    </div>
                    <i class="fas fa-star last" style="color: #688fea"></i>
                </div>
            <!-- =================== Third year =================== -->
                
                <div class="year-first" data-tilt data-tilt-parallax data-tilt-max-parallax="0.5">
                    <i class="fas fa-star" style="color: #596eeb"></i>
                    <div class="year-btn rgb year2">
                        <div class="year-btn1">
                            <h3><?php echo lang('THIRD_YEAR')?></h3>
                            <div class="middle">
                                <button class="y-btn btn1" style="color: #fff">
                                <a href="subjects/subject3.php"><?php echo lang('VIEW_SUBJECT')?></a>
                                </button>
                            </div> 
                        </div>
                        <img src="<?php echo $img . "level3.png" ?>"/>
                    </div>
                    <i class="fas fa-star last" style="color: #a0a3ff"></i>
                </div>
            <!-- =================== Fourth year =================== -->
                
                <div class="year-first" data-tilt data-tilt-parallax data-tilt-max-parallax="0.5">
                    <i class="fas fa-star" style="color: #e96598"></i>
                    <div class="year-btn rgb year3">
                        <div class="year-btn1">
                            <h3><?php echo lang('4TH_YEAR')?></h3>
                            <div class="middle">
                                <button class="y-btn btn1 popup-btn" style="color: #fff"><?php echo lang('VIEW_SUBJECT')?></button>
                            </div>
                        </div>
                        <img src="<?php echo $img . "level4_preview_rev_1.png" ?>"/>
                    </div>
                    <i class="fas fa-star last" style="color: #ffbe92"></i>
                </div>
            </div>

            <!-- =================== Modal Pop-Up =================== -->
            <div>
                <div class="modal modals hidden y-modal" id="modal">
                    <button class="close-modal">&times;</button>
                    <h1>Fourth Year</h1> 
                    <p>
                        Coming Soon
                    </p>
                </div> 
                <div class="overlay hidden"></div> 
            </div>    
        </section>
        <script src="layout/js/4thyear-popup.js"></script>
        <script src="layout/js/vanilla-tilt.min.js"></script>
<?php
    include "include/templete/footer.php";

    ob_end_flush();
?>