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
                                                
                                                $sql = "SELECT * FROM tiket ";
                                                $query = mysqli_query($conn, $sql);

                                                while($tiket = mysqli_fetch_array($query)){

                                                    echo "<tr>";

                                                    echo "<td>".$tiket['tanggal']."</td>";
                                                    echo "<td>".$tiket['report_by']."</td>";
                                                    echo "<td>".$tiket['asign_to']."</td>";
                                                    echo "<td>".$tiket['teknisi']."</td>";
                                                    echo "<td>".$tiket['subject']."</td>";
                                                    echo "<td>".$tiket['status']."</td>";

                                                    echo "<td>";
                                                    echo "<a href='form_edit.php?id_tiket=".$tiket['id_tiket']."'>Edit</a> | ";
                                                    echo "<a href='config/proses_hapus.php?id_tiket=".$tiket['id_tiket']."'>Hapus</a>";
                                                    echo "</td>";

                                                    echo "</tr>";
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>