var fullname = "My name is" ;
var me = "Prem" ;
 
$(ducument).ready(function(){
  if(fullname.indexOf(me)==-1){    // ถ้า ค้นหาใน fullname ไม่พบ me
    fullname = fullname + me ;
  }
})
