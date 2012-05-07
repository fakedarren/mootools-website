<?php
/*
routes
*/
Control::route("/^[^\/]+\/docs/", "docs");
Control::route("/^[^\/]+\/download/", "download");
Control::route("/^[^\/]+\/?/", "plugin");
?>