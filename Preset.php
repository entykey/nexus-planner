
<?php
include_once "header.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Planner Preset | The Nexus Planner</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,800&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&amp;display=swap">
    <link rel="stylesheet" href="assets/css/Account-setting-or-edit-profile.css">
    <!-- dark mode switch -->
    <link rel="stylesheet" href="assets/css/Dark-Mode-Switch.css">
    <!-- end of dark mode switch -->
    <link rel="stylesheet" href="assets/css/File-Input---Beautiful-Input--Button-Approach-Jasny-Bootstrap-file-input.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark-Multi-Column-icons.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form-.css">
</head>

<body>
    
    <footer class="justify-content-center" style="display: flex;">
        <div class="container d-flex flex-column">
            <h1 class="text-center" style="font-family: 'Nunito Sans', sans-serif;">Preset</h1>
            <div>
                <h3 style="font-weight: bold;">Interface</h3>
                <div class="d-flex flex-row justify-content-start align-items-center align-content-center align-self-center flex-wrap">
                    <h4>Dark mode:&nbsp;</h4><div class="custom-control custom-switch"><input class="custom-control-input" type="checkbox" id="darkSwitch" /><label class="custom-control-label" for="darkSwitch"></label></div>
                </div>
            </div>
            <div>
                <h3 style="font-weight: bold;">Date and Time</h3>
                <div class="d-flex flex-row justify-content-start align-items-center align-content-center align-self-center flex-wrap">
                    <h4>Timezone&nbsp;</h4><select>
                        <optgroup label="This is a group">
                            <option value="12" selected="">This is item 1</option>
                            <option value="13">This is item 2</option>
                            <option value="14">This is item 3</option>
                        </optgroup>
                    </select>
                </div>
            </div>
            <div>
                <h3 style="font-weight: bold;"></h3>
                <div class="d-flex flex-row justify-content-start align-items-center align-content-center align-self-center flex-wrap">
                    <h4>Date type:&nbsp;</h4><select>
                        <option value="undefined">MM/DD/YY</option>
                        <option value="12" selected="">DD/MM/YY</option>
                        <option value="13">YY/MM/DD</option>
                        <option value="14">YY/DD/MM</option>
                    </select>
                </div>
            </div><button class="btn btn-primary" type="button" style="background: #43bc43;">Save</button>
        </div>
    </footer>

    <?php
		include_once "footer.php";
	?>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <!-- dark mode switch -->
    <script src="assets/js/Dark-Mode-Switch-darkmode.js"></script>
    <!-- end of dark mode switch -->s
    <script src="assets/js/File-Input---Beautiful-Input--Button-Approach-Jasny-Bootstrap-fileinput.js"></script>
</body>

</html>