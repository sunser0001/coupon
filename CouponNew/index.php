
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<input class="form-control" type="text" placeholder="Dev : Pacharapol Sooksomboon" readonly>
<form method="post" action="print.php">
    <p><div class="form-group">
        <label>เริ่มต้น</label>
        <input type="input" class="form-control"  name = "Start" require>
    </div>
    <div class="form-group">
        <label >สิ้นสุด</label>
        <input type="input" class="form-control"  name = "End" require>
    </div>
    <div class="form-group">
        <label >วันที่</label>
        <input type="input"  class="form-control"  name = "Date" require >
    </div>
    <button type="submit" class="btn btn-outline-success btn-lg">Success</button></p>
</form>