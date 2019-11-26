	<script src="src/bootstrap/js/bootstrap.js" ></script>
    <script src="src/bootstrap/js/bootstrap.min.js" ></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
</body>
</html>
<?php
	if(isset($db)){
	    mysqli_close($db);
	}
?>