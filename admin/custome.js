
									function run(filtertype){ 
									
									if(filtertype=='price'){
			$("#logindiv").css("display", "block");
									}else if(filtertype=='sku'){
										$("#logindiv1").css("display", "block");
									}else if(filtertype=='shipping'){
										$("#logindiv2").css("display", "block");
									}
		}function runX(filtertype){   
									
									if(filtertype=='price'){
			$("#despatch_1").css("display", "block");
									}else if(filtertype=='sku'){
										$("#despatch_2").css("display", "block");
									}else if(filtertype=='shipping'){
										$("#despatch_3").css("display", "block");
		}}
									function runF(filtertype){ 
									
									if(filtertype=='price'){
			$("#logindiv_progress").css("display", "block");
									}else if(filtertype=='sku'){
										$("#logindiv_progress_1").css("display", "block");
									}else if(filtertype=='shipping'){
										$("#logindiv_progress_2").css("display", "block");
									}
		}
		function ImportForm(){
			$("#importform").css("display", "block");
		}
		function closeTab(){
			
			$("#logindiv").css("display","none");
			$("#logindiv1").css("display","none");
			$("#logindiv2").css("display","none");
			$("#importform").css("display","none");
			$("#despatch_1").css("display","none");
			$("#despatch_2").css("display","none");
			$("#despatch_3").css("display","none");
			$("#logindiv_progress").css("display","none");
			$("#logindiv_progress_1").css("display","none");
			$("#logindiv_progress_2").css("display","none");
			$("#addusertab1").css("display","none");
			$("#addnote").css("display","none");
			$("#addnote_progress").css("display","none");
			$("#addnote_dispatch").css("display","none");
			
		}
		
//----------------------------------
									function FormStuff() {
									
									var print_type = document.getElementById("print_type").value;
										if(print_type == 'invoice'){
											document.getElementById("form1").setAttribute("target", "_blank");
									 document.print.action = "invoice.php";
									 document.getElementById("selectstatus").innerHTML = "";	
									
										}
										else if(print_type == 'receipt'){
												document.getElementById("form1").setAttribute("target", "_blank");
										 document.print.action = "receipt.php";
										
								document.getElementById("selectstatus").innerHTML = "";
								
										}
										
										else if(print_type == 'returnsform'){
												document.getElementById("form1").setAttribute("target", "_blank");
										 document.print.action = "returnsform.php";
										
								document.getElementById("selectstatus").innerHTML = "";
								
										}
										
										else if(print_type == 'picking'){
												document.getElementById("form1").setAttribute("target", "_blank");
										 document.print.action = "picking_list.php";
										
								document.getElementById("selectstatus").innerHTML = "";										
										}
										else if(print_type == 'addnote'){
											
										 document.print.action = "addnotesubmit.php";
										
								document.getElementById("selectstatus").innerHTML = "";
								 $('#selectstatus').append('<input name="addnote" placeholder="Enter Note Here" type="text" class="form-control selectst"><br>');
										}
										else if(print_type == 'export'){
												document.getElementById("form1").setAttribute("target", "_blank");
										 document.print.action = "export.php";
										
								document.getElementById("selectstatus").innerHTML = "";										
										}
										else if(print_type == 'jobsheet'){
												document.getElementById("form1").setAttribute("target", "_blank");
										 document.print.action = "jobsheet.php";
										
								document.getElementById("selectstatus").innerHTML = "";										
										}else if(print_type == 'makedespatched'){
												document.getElementById("form1").removeAttribute("target");
										 document.print.action = "makedespatched.php";
										
								document.getElementById("selectstatus").innerHTML = "";
										 $('#selectstatus').append('<select name="despatch" type="text" class="form-control selectst"><option value="">Select Status</option><option value="0">Remove As Despatched</option><option value="shipped">Make As Despatced</option></select><br>');
										}
										else if(print_type == 'flag'){
											document.getElementById("form1").removeAttribute("target");	
										 document.print.action = "flagsubmit.php";
										
								document.getElementById("selectstatus").innerHTML = "";
										 $('#selectstatus').append('<select name="flag" type="text" class="form-control selectst"><option value="">Select Flag Status</option><option value="holdorder">Hold Order</option><option value="urgent">Urgent</option></select><br>');
										}
										
										else if(print_type == 'status'){
												document.getElementById("form1").removeAttribute("target");
										 document.print.action = "status_change.php";
										 document.getElementById("selectstatus").innerHTML = "";
										  $('#selectstatus').append('<select name="status" type="text" class="form-control selectst"><option value="">Select Status</option><option value="new">New</option><option value="inprogress">In progress</option><option value="shipped">Dispatch</option><option value="close">Close</option></select><br>');
																		
										}
										else{
											document.print.action = "#";
											document.getElementById("selectstatus").innerHTML = "";	
										}
									}
									function FormStuffUser(){
									document.print.action = "adduser.php";
									}
									function Note(){
									document.print.action = "addnotesubmit.php";
									}
									function Export(){
											document.getElementById("form1").setAttribute("target", "_blank");
									document.print.action = "export.php";
									document.getElementById('form1').submit();
									
									}
									function Export_progress(){
											document.getElementById("form2").setAttribute("target", "_blank");
									document.print1.action = "export.php";
									document.getElementById('form2').submit();
									
									}
									function Export_despatch(){
											document.getElementById("form3").setAttribute("target", "_blank");
									document.print2.action = "export.php";
									document.getElementById('form3').submit();
									
									}
									
									
									//------------------------tab-2---------------------------------------------------------------------
								function FormStuff1() {
									
									var print_type1 = document.getElementById("print_type1").value;
										if(print_type1 == 'invoice'){
												document.getElementById("form2").setAttribute("target", "_blank");
									 document.print1.action = "invoice.php";
									 document.getElementById("selectstatus1").innerHTML = "";	
									
										}
										else if(print_type1 == 'receipt'){
												document.getElementById("form2").setAttribute("target", "_blank");
										 document.print1.action = "receipt.php";
										
								document.getElementById("selectstatus").innerHTML = "";
								
										}
										
										
										else if(print_type1 == 'picking'){
												document.getElementById("form2").setAttribute("target", "_blank");
										 document.print1.action = "picking_list.php";
										
								document.getElementById("selectstatus1").innerHTML = "";										
										}
										else if(print_type1 == 'addnote'){
												document.getElementById("form2").removeAttribute("target");
										 document.print1.action = "addnotesubmit.php";
										
								document.getElementById("selectstatus1").innerHTML = "";
								 $('#selectstatus1').append('<input name="addnote" placeholder="Enter Note Here" type="text" class="form-control selectst"><br>');
										}
										else if(print_type1 == 'export'){
												document.getElementById("form2").setAttribute("target", "_blank");
										 document.print1.action = "export.php";
										
								document.getElementById("selectstatus1").innerHTML = "";										
										}
										else if(print_type1 == 'jobsheet'){
												document.getElementById("form2").setAttribute("target", "_blank");
										 document.print1.action = "jobsheet.php";
										
								document.getElementById("selectstatus1").innerHTML = "";										
										}else if(print_type1 == 'makedespatched'){
												document.getElementById("form2").removeAttribute("target");
										 document.print1.action = "makedespatched.php";
										
								document.getElementById("selectstatus1").innerHTML = "";
										 $('#selectstatus1').append('<select name="despatch" type="text" class="form-control selectst"><option value="">Select Status</option><option value="0">Remove As Despatched</option><option value="shipped">Make As Despatced</option></select><br>');
										}
										else if(print_type1 == 'flag'){
												document.getElementById("form2").removeAttribute("target");
										 document.print1.action = "flagsubmit.php";
										
								document.getElementById("selectstatus1").innerHTML = "";
										 $('#selectstatus1').append('<select name="flag" type="text" class="form-control selectst"><option value="">Select Flag Status</option><option value="holdorder">Hold Order</option><option value="urgent">Urgent</option></select><br>');
										}
										
										else if(print_type1 == 'status'){
											document.getElementById("form2").removeAttribute("target");
										 document.print1.action = "status_change.php";
										 document.getElementById("selectstatus1").innerHTML = "";
										  $('#selectstatus1').append('<select name="status" type="text" class="form-control selectst"><option value="">Select Status</option><option value="new">New</option><option value="inprogress">In progress</option><option value="shipped">Dispatch</option><option value="close">Close</option></select><br>');
																		
										}
										else{
											document.print1.action = "#";
											document.getElementById("selectstatus1").innerHTML = "";	
										}
									}
									//-------------------------tab3--------------------------------------------------------------
									function FormStuff2() {
									
									var print_type2 = document.getElementById("print_type2").value;
										if(print_type2 == 'invoice'){
												document.getElementById("form3").setAttribute("target", "_blank");
									 document.print2.action = "invoice.php";
									 document.getElementById("selectstatus2").innerHTML = "";	
									
										}
										else if(print_type2 == 'receipt'){
												document.getElementById("form3").setAttribute("target", "_blank");
										 document.print2.action = "receipt.php";
										
								document.getElementById("selectstatus").innerHTML = "";
								
										}
										else if(print_type2 == 'picking'){
												document.getElementById("form3").setAttribute("target", "_blank");
										 document.print2.action = "picking_list.php";
										
								document.getElementById("selectstatus2").innerHTML = "";										
										}
										else if(print_type2 == 'export'){
												document.getElementById("form3").setAttribute("target", "_blank");
										 document.print2.action = "export.php";
										
								document.getElementById("selectstatus2").innerHTML = "";										
										}
										else if(print_type2 == 'returnsform'){
											
										 document.print2.action = "returnsform.php";
										
								document.getElementById("selectstatus2").innerHTML = "";										
										}
										
										else if(print_type2 == 'addnote'){
											document.getElementById("form3").removeAttribute("target");
										 document.print2.action = "addnotesubmit.php";
										
								document.getElementById("selectstatus2").innerHTML = "";
								 $('#selectstatus2').append('<input name="addnote" placeholder="Enter Note Here" type="text" class="form-control selectst"><br>');
										}
										else if(print_type2 == 'flag'){
											document.getElementById("form3").removeAttribute("target");
										 document.print2.action = "flagsubmit.php";
										
								document.getElementById("selectstatus2").innerHTML = "";
										 $('#selectstatus2').append('<select name="flag" type="text" class="form-control selectst"><option value="">Select Flag Status</option><option value="holdorder">Hold Order</option><option value="urgent">Urgent</option></select><br>');
										}
										
										else if(print_type2 == 'jobsheet'){
												document.getElementById("form3").setAttribute("target", "_blank");
										 document.print2.action = "jobsheet.php";
										
								document.getElementById("selectstatus2").innerHTML = "";										
										}else if(print_type2 == 'makedespatched'){
											document.getElementById("form3").removeAttribute("target");
										 document.print2.action = "makedespatched.php";
										
								document.getElementById("selectstatus2").innerHTML = "";
										 $('#selectstatus2').append('<select name="despatch" type="text" class="form-control selectst"><option value="">Select Status</option><option value="0">Remove As Despatched</option><option value="shipped">Make As Despatced</option></select><br>');
										}
										
										else if(print_type2 == 'status'){
											document.getElementById("form3").removeAttribute("target");
										 document.print2.action = "status_change.php";
										 document.getElementById("selectstatus2").innerHTML = "";
										  $('#selectstatus2').append('<select name="status" type="text" class="form-control selectst"><option value="">Select Status</option><option value="new">New</option><option value="inprogress">In progress</option><option value="shipped">Dispatch</option><option value="close">Close</option></select><br>');
																		
										}
										else{
											document.print2.action = "#";
											document.getElementById("selectstatus2").innerHTML = "";	
										}
									}
									
									function FormStuffUser2(){
										document.print2.action = "adduser.php";
									}
									function Note3(){
										document.print2.action = "addnotesubmit.php";
									}
									
									
									
									function FormStuffUser1(){
										document.print_progress.action = "adduser.php";
									}
									function Note2(){
										document.print_progress.action = "addnotesubmit.php";
									}
									function addUser(orderid){
										
										$('#addusertab1 #order_id').val(orderid);
										
										$('#addusertab1 #order_id'). attr("type","hidden");
										$("#addusertab1").css("display", "block");
										
										$('#user_name').focus();
									}
									function addNote(orderid){
										
										$('#order_id_note').val(orderid);
										
										$('#order_id_note'). attr("type","hidden");
										$("#addnote").css("display", "block");
										
										$('#user_name').focus();
									}
									function addNoteProgress(orderid){
										
										$('#order_id_note_progress').val(orderid);
										
										$('#order_id_note_progress'). attr("type","hidden");
										$("#addnote_progress").css("display", "block");
										
										$('#user_name').focus();
									}
									
									function addNoteDispatch(orderid){
										
										$('#order_id_note_dispatch').val(orderid);
										
										$('#order_id_note_dispatch'). attr("type","hidden");
										$("#addnote_dispatch").css("display", "block");
										
										$('#user_name').focus();
									}
									
								function mearge_new(){
									var result = confirm("Want to Merge?");
if (result) {
									document.getElementById("form1").removeAttribute("target");
									document.print.action = "meargesubmit.php?status=new";
									
									document.getElementById('form1').submit();
								}	
								}	
									function mearge_progress(){
										var result = confirm("Want to Merge?");
if (result) {document.getElementById("form2").removeAttribute("target");
									document.print1.action = "meargesubmit.php?status=inprogress";
									document.getElementById('form2').submit();
								}	
								}	
									function mearge_despatch(){
									var result = confirm("Want to Merge?");
if (result) {document.getElementById("form3").removeAttribute("target");
									document.print2.action = "meargesubmit.php?status=shipped";
									document.getElementById('form3').submit();
								}	
								}	
									function delete_new_order(){
										var result = confirm("Want to delete?");
if (result) {document.getElementById("form1").removeAttribute("target");
    document.print.action = "deleteorder.php?status=new";
									document.getElementById('form1').submit();
}
										
									}
									function delete_progress_order(){
										var result = confirm("Want to delete?");
if (result) {document.getElementById("form2").removeAttribute("target");
										document.print1.action = "deleteorder.php?status=inprogress";
									document.getElementById('form2').submit();
									}
									}
									function delete_despatch_order(){
										var result = confirm("Want to delete?");
if (result) {
		document.getElementById("form3").removeAttribute("target");
										document.print2.action = "deleteorder.php?status=despatch";
									document.getElementById('form3').submit();
									}
									}
									//receipt 
									function ReceiptNew(){
										document.print.action = "receipt.php";
											document.getElementById("form1").setAttribute("target", "_blank");
										document.getElementById('form1').submit();
									}
									function ReceiptProgress(){
										document.print1.action = "receipt.php";
											document.getElementById("form2").setAttribute("target", "_blank");
										document.getElementById('form2').submit();
									}
									function ReceiptDispatch(){
										document.print2.action = "receipt.php";
											document.getElementById("form3").setAttribute("target", "_blank");
										document.getElementById('form3').submit();
									}
									//end receipt
									
									//JobSheet////////
									function JobSheetNew(){
										document.print.action = "jobsheet.php";
											document.getElementById("form1").setAttribute("target", "_blank");
										document.getElementById('form1').submit();
									}function JobSheetProgress(){
										document.print1.action = "jobsheet.php";
											document.getElementById("form2").setAttribute("target", "_blank");
										document.getElementById('form2').submit();
									}
									function JobSheetDispatch(){
										document.print2.action = "jobsheet.php";
											document.getElementById("form3").setAttribute("target", "_blank");
										document.getElementById('form3').submit();
									}
									//jobsheet////end////
									
									//picking_list
									function PackingListNew(){
										document.print.action = "picking_list.php";
											document.getElementById("form1").setAttribute("target", "_blank");
										document.getElementById('form1').submit();
									}
									function PackingListProgress(){
										document.print1.action = "picking_list.php";
											document.getElementById("form2").setAttribute("target", "_blank");
										document.getElementById('form2').submit();
									}
									function PackingListDispatch(){
										document.print2.action = "picking_list.php";
											document.getElementById("form3").setAttribute("target", "_blank");
										document.getElementById('form3').submit();
									}
									//invoice new
									function InvoiceNew(){
										document.print.action = "invoice.php";
											document.getElementById("form1").setAttribute("target", "_blank");
										document.getElementById('form1').submit();
									}
									function InvoiceProgress(){
										document.print1.action = "invoice.php";
											document.getElementById("form2").setAttribute("target", "_blank");
										document.getElementById('form2').submit();
									}
									function InvoiceDispatch(){
										document.print2.action = "invoice.php";
											document.getElementById("form3").setAttribute("target", "_blank");
										document.getElementById('form3').submit();
									}
									
									//invoice new end
									//dispatch
									function Dispatch1(){
										document.print.action = "invoicedom.php";
											document.getElementById("form1").setAttribute("target", "_blank");
										document.getElementById('form1').submit();
									}
									function Dispatch2(){
										document.print1.action = "invoicedom.php";
											document.getElementById("form2").setAttribute("target", "_blank");
										document.getElementById('form2').submit();
									}
									function Dispatch3(){
										document.print2.action = "invoicedom.php";
											document.getElementById("form3").setAttribute("target", "_blank");
										document.getElementById('form3').submit();
									}
									
									
									//unmerge
									
									function UnmergeNew(){
										document.print.action = "unmerge.php";
											//document.getElementById("form1").setAttribute("target", "_blank");
										document.getElementById('form1').submit();
									}
									function UnmergeInprogress(){
										document.print1.action = "unmerge.php";
											//document.getElementById("form2").setAttribute("target", "_blank");
										document.getElementById('form2').submit();
									}
									function UnmergeDispatch(){
										document.print2.action = "unmerge.php";
											//document.getElementById("form3").setAttribute("target", "_blank");
										document.getElementById('form3').submit();
									}