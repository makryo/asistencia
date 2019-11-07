<?php
/**
* @author KevinCS - Diego
*  Llama todos los archivos del framework LegoBox
**/

include "controller/Core.php";
include "controller/View.php";
include "controller/Module.php";
include "controller/Database.php";
include "controller/Executor.php";
//# include "controller/Session.php"; [remplazada]

include "controller/forms/lbForm.php";
include "controller/forms/lbInputText.php";
include "controller/forms/lbInputPassword.php";
include "controller/forms/lbValidator.php";

// Fase 1
include "controller/Model.php";
include "controller/Bootload.php";
include "controller/Action.php";

// Fase 2
include "controller/Request.php";


// Fase 3
include "controller/Get.php";
include "controller/Post.php";
include "controller/Cookie.php";
include "controller/Session.php";
include "controller/Lb.php";

// Fase 4
include "controller/Form.php";


?>