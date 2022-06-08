#!/bin/bash

export hd='\\core\\session\\redis'

sed -i '/.*\$CFG->directorypermissions.*/i \$CFG->preventexecpath = true;' config.php
sed -i '/.*\$CFG->directorypermissions.*/i \$CFG->preventfilelocking = true;' config.php

sed -i "/.*\$CFG->directorypermissions.*/i \$CFG->session_handler_class = '$hd';" config.php
