        <?php include 'header.php'; ?>

        <main>
            <?php
            $kataku = (isset($_GET['kataku']))?$_GET['kataku']:"";
            ?>
            <h1>Admin</h1>
            <p>
                <a href="input_db.php">
                    <input type="button" class="btn btn-primary" value="new">
                </a>
            </p>
            <form class="row g-3" method="get">
                <div class="col-auto">
                    <input type="text" class="form-control" placeholder="Masukan Genre/Lagu" name="kataku" value="<?php echo $kataku?>">
                </div>
                <div class="col-auto">
                    <input type="submit" name="cari" value="cari tulisan" class="btn btn-secondary">
                </div>
            </form>
            <table class="table table-striped">
                 <thead>
                    <tr>
                        <th class="col-1">#</th>
                        <th>omw</th>
                        <th>Kuip</th>
                        <th class="col-2">Aksi</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                        <td>1</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, porro!</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing.</td>
                        <td>
                        <span class="badge text-bg-warning">Edit</span>
                        <span class="badge text-bg-danger">Delete</span>
                        </td>
                    </tr>
                 </tbody>
            </table>
        </main>
        <?php include ('footer.php')?>