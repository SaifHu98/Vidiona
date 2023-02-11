<?php 
	require '../../lang/ar.php';
  require './acc.php';
 ?>
<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="../../css/bootstrap/bootstrap.css" >
   <script src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery.tabledit.js"></script>
<script type="text/javascript" src="../js/table_admin.js"></script>
</head>
<body>
	<div class="container well">
		<div class="row">
			<div class="text-center" style=" margin-top: -10px; " >
          <a style="float: right;" href="./addadmin.php" class="btn btn-primary"><?php echo $LNG[addadmin]; ?></a>
				<form style="float: left;" method="post" action="#">
						<select class="custom-select mr-sm-2" name="limit-records" id="limit-records">
							<option disabled="disabled" selected="selected">---نتائج محددة---</option>
							<?php foreach([10,20,50,200,300] as $limit): ?>
								<option <?php if( isset($_POST["limit-records"]) && $_POST["limit-records"] == $limit) echo "selected" ?> value="<?= $limit; ?>"><?= $limit; ?></option>
							<?php endforeach; ?>
						</select>
					</form>
				</div>
		</div>
		<input type="text" id="textbox" name="username" class="form-control rounded" placeholder="<?php echo $LNG[adminsearch]; ?>" />
		<script>
            $(document).ready(function() {
                $("#textbox").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#admin tr").filter(function() {
                        $(this).toggle($(this).text()
                        .toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script>
		<div id="display"></div>
		<div style="height: auto; overflow-y: auto;">
			<table id="data_table" class="table table-sm table-striped table-bordered">
          <thead>
<tr>
<th><?php echo $LNG[id]; ?></th>
<th><?php echo $LNG[useradmin]; ?></th>
<th><?php echo $LNG[name]; ?></th>
<th><?php echo $LNG[email]; ?></th>
<th><?php echo $LNG[dob]; ?></th>
<th><?php echo $LNG[eduser]; ?></th>
</tr>
</thead>
<tbody id="admin">
<?php
include '../../dbh.php';
$limit = isset($_POST["limit-records"]) ? $_POST["limit-records"] : 10;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit;
$result1 = $conn->query("SELECT count(id) AS id FROM admin");
$custCount = $result1->fetch_all(MYSQLI_ASSOC);
$total = $custCount[0]['id'];
$pages = ceil( $total / $limit );
$Previous = $page - 1;
$Next = $page + 1;
$sql_query = "SELECT id, user, name, email, dob FROM admin WHERE user LIKE '%".$search."%' OR email LIKE '%".$search."%' LIMIT $start, $limit";
$stmt = $conn->prepare($sql_query); 
$stmt->bind_param("issss", $id, $user, $name, $email, $dob);
$stmt->execute();
$resultset = $stmt->get_result();

while( $admin = $resultset->fetch_assoc()) {
?>

<tr id="<?php echo $admin ['id']; ?>">
<td><?php echo $admin ['id']; ?></td>
<td><?php echo $admin ['user']; ?></td>
<td><?php echo $admin ['name']; ?></td>
<td><?php echo $admin ['email']; ?></td>
<td><?php echo $admin ['dob']; ?></td>
<td>
<a href="./deladmin.php?id=<?php echo $admin['id']; ?>" class="btn btn-outline-danger" onclick="return confirm('<?php echo $LNG[condel]; ?>')"><?php echo $LNG[del]; ?></a>
</td></tr>


<?php }?>
	        	</tbody>
      		</table>	
		</div>
    <div class="col-md-10">
				<nav aria-label="Page navigation">
					<ul class="pagination">
				    <li class="page-item">
				      <a class="page-link" href="editusers.php?page=<?= $Previous; ?>" aria-label="Previous">
				        <span aria-hidden="true">&laquo; السابق</span>
				      </a>
				    </li>
				    <?php for($i = 1; $i<= $pages; $i++) : ?>
				    	<li class="page-item"><a class="page-link" class="page-link" href="editusers.php?page=<?= $i; ?>"><?= $i; ?></a></li>
				    <?php endfor; ?>
				    <li class="page-item">
				      <a class="page-link" href="editusers.php?page=<?= $Next; ?>" aria-label="Next">
				        <span aria-hidden="true">التالي &raquo;</span>
				      </a>
				    </li>
				  </ul>
				</nav>
			</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#limit-records").change(function(){
			$('form').submit();
		})
	})
</script>
</body>
</html>