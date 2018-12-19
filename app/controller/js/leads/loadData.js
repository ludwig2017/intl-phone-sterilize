$(document).ready(function() {
	load_data();
	
	function load_data() {
		$.ajax({
			url:"../../inc/leads/fetch.php",
			method:"POST",
			success:function(data) {
				$('#leads_data').html(data);
			}
		})
	}
});