            <div id="tables" class="mt-3">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-table me-1"></i>
                                        Data Tiket
                                    </div>
                                    <div class="card-body">
                                        <table id="datatablesSimple">
                                            <thead>
                                                <tr>
                                                    <th>Tanggal</th>
                                                    <th>Report By</th>
                                                    <th>asign to</th>
                                                    <th>teknisi</th>
                                                    <th>Subject</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Tanggal</th>
                                                    <th>Report By</th>
                                                    <th>asign to</th>
                                                    <th>teknisi</th>
                                                    <th>Subject</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>

                                            <?php

                                                include 'partials/config.php';
                                                if( !$conn ){
                                                    die("Gagal terhubung dengan database: " . mysqli_connect_error());
                                                }
                                                $sql = "SELECT * FROM teknisi ";
                                                $query = mysqli_query($dbs, $sql);

                                                while($teknisi = mysqli_fetch_array($query)){

                                                    echo "<tr>";

                                                    echo "<td>".$teknisi['id_teknisi']."</td>";
                                                    echo "<td>".$teknisi['username']."</td>";
                                                    echo "<td>".$teknisi['email']."</td>";
                                                    echo "<td>".$teknisi['password']."</td>";
                                                    echo "<td>".$teknisi['name']."</td>";
                                                    echo "<td>".$teknisi['unit']."</td>";
                                                   

                                                    echo "<td>";
                                                    echo "<a href='form_edit.php?id_teknisi=".$teknisi['id_teknisi']."'>Edit</a> | ";
                                                    echo "<a href='config/proses_hapus.php?id_teknisi=".$teknisi['id_teknisi']."'>Hapus</a>";
                                                    echo "</td>";

                                                    echo "</tr>";
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>