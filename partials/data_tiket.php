<?php
                                                include 'config/config.php';

                                                if( !$conn ){
                                                    die("Gagal terhubung dengan database: " . mysqli_connect_error());
                                                }

                                                

                                                
                                                $sql = "SELECT * FROM tiket where id_user ='$id_users'";
                                                $query = mysqli_query($conn, $sql);

                                                while($tiket = mysqli_fetch_array($query)){

                                                    echo "<tr>";

                                                    echo "<td>".$tiket['tanggal']."</td>";
                                                    echo "<td>".$tiket['report_by']."</td>";
                                                    echo "<td>".$tiket['asign_to']."</td>";
                                                    echo "<td>".$tiket['teknisi']."</td>";
                                                    echo "<td>".$tiket['subject']."</td>";
                                                    echo "<td>".$tiket['status']."</td>";
                                                    echo "<td>".$tiket['update']."</td>";

                                                    echo "<td>";
                                                    echo "<a href='form_edit.php?id_tiket=".$tiket['id_tiket']."'>Edit</a> | ";
                                                    echo "<a href='config/proses_hapus.php?id_tiket=".$tiket['id_tiket']."'>Hapus</a>";
                                                    echo "</td>";

                                                    echo "</tr>";
                                                }
                                                ?>