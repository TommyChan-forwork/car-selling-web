<?php

                                            $db_name = "autocarsales";
                                            $host = "localhost";
                                            $db_user = "root";
                                            $db_password = "";
                                            $conn = mysqli_connect ($host, $db_user, $db_password, $db_name);
                                            if (!$conn) {
                                                echo  "Failed to connect to MySQL" . mysqli_connect_error();
                                                exit();
                                            }
                                            ?>