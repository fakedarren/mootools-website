<?php
/*
routes
*/
Control::route("/^[^\/]+\/docs/", "docs");
Control::route("/^[^\/]+\/?/", "plugin");
?>