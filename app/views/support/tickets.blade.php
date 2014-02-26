<!doctype html>

<head>
	<style type="text/css">
table{
	width: 100%;
}
td{
 padding: 10px;
 font-size: 1.2em;
}
.head{
	color: #fff;
	background-color: #303030;
}
.title{
	color:red;
	text-decoration: underline;
	font-weight: bolder;
	cursor: pointer;
}
.pagination{
	background-color: #d3d3d3;
	width: 100%;
}
.pagination li{
	display: inline-block;
	list-style: none;
	padding: 5px;

	
}
.no-active{
	text-align: center;
}



	</style>
{{ HTML::style('ui/css/trontastic/jquery-ui-1.10.4.custom.css')}}
{{ HTML::script('ui/js/jquery-1.10.2.js')}}
{{ HTML::script('ui/js/jquery-ui-1.10.4.custom.js')}}
 <script>
$(function() {
$( document ).tooltip();
});
</script>
</head>
<?php if(count($tickets) > 0){ ?>
<table>
<td class="head">Title</td>
<td class="head">Answer</td>
<td class="head">Category</td>
<td class="head">Last update</td>
@foreach($tickets as $tiket)

<tr>
<td class="title" title="{{ $tiket->msg }}">{{ $tiket->title }}</td>
<td class="title" title="{{ $tiket->answer }}">@if( $tiket->answer == "")
No answer yet.
@else
Answered
@endif


</td>
<td>{{ $tiket->cat }}</td>
<td>{{ $tiket->updated_at}}</td>

</tr>

	
@endforeach
</table>
<?php }else{ ?>
<h2 class="no-active">There is no active tickets</h2>
<?php } ?>
<?php echo $tickets->links(); ?>
</body>
</html>