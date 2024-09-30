<form action="navigate.php?id=<? $_SESSION['rhu_id'] ?>" method="post" enctype="multipart/form-data">
        <h5>Supported File <span>(.xls, .csv, .xlsx)</span></h5>
        <hr>
        <div>
          <div>
            <input type="file" class="form-control" name="file" aria-describedby="textHelp" required>
          </div>
        </div>
        <div>
          <div>
            <button type="submit" name="btn-upload-file-children" >
              Save</button>
          </div>
        </div>
    </div>
    </form>