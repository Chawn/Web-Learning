<!-- replace '<br/>' -->

<script type="text/javascript">

allcheck = "Hello <br/> chawput" ;

var regex = /<br\s*[\/]?>/gi;       //this is <br/>
allcheck = allcheck.replace(regex,"");

</script>
