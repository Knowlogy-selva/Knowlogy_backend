// add-course code-functionality start to here
// Add row
var row=1;
$(document).on("click", "#add-row", function () {
var new_row = '<tr id="row' + row + '"><td><div class="form-group"><input name="sdate' + row + '" type="date" class="form-control" /></div><div class="form-group"><select class="form-control" name="partner '+ row +' "><option value="none">Partner</option><option value="Knowlogy">Knowlogy</option><option value="Techsherpa">Techsherpa</option><option value="Logical Operations">Logical Operations</option><option value="other">other</option></select></div></td><td><div class="form-group"><input name="days' + row + '" type="text" class="form-control" /></div><div class="form-group"><select class="form-control" name="code '+ row +' "><option value="none">Code</option><option value="Knowlogy">K1</option><option value="Techsherpa">T5</option><option value="Logical Operations">L0</option><option value="other">xy</option></select></div></td><td><div class="form-group"><select class="form-control" name="status' + row +'"><option value="none">Status</option> <option value="GTR">GTR</option> <option value="Enrolling Now">Enrolling Now</option> <option value="Year Subscription">Year Subscription</option> </select></div><div class="form-group"> <input type="text" name="pprice '+ row +' " class="form-control" required placeholder="Price"></div></td><td><div class="form-group"><input name="stime' + row + '" type="time" class="form-control" /></div><div class="form-group"><input type="text" name="rprice '+ row +' " class="form-control" required placeholder="Retail Price"></div></td><td><div class="form-group"><select class="form-control" name="timezone' + row +'"> <option value="none">Time</option> <option value="Eastern Time(ET)">Eastern Time(ET)</option><option value="Central Time(CT)">Central Time(CT)</option> <option value="Mountain Time(MT)">Mountain Time(MT)</option><option value="Pacific Time(PT)">Pacific Time(PT)</option></select></div><div class="form-group"><input type="text" name="profit '+ row +' "  class="form-control" required placeholder="Profit"></div></td><td><div class="form-group"><select class="form-control" name="deliverformat' + row +'"> <option value="none">deliverformat</option> <option value="live virtual led">Live Virtual Led</option> <option value="live virtual led assistance">Live Virtual Led with Assistance</option> <option value="in cla">In-Classroom</option></select></div><div class="form-group"><select class="form-control" name="location '+ row +' "><option value="none">Location</option><option value="USA">USA</option><option value="DUBAI">DUBAI</option><option value="SINGAPORE">SINGAPORE</option></select></div></td><td><div class="form-group"><input name="price' + row + '" type="text" class="form-control" /></div><div class="form-group"><input name="total_course' + row + '" type="text" class="form-control" placeholder="Total-Course" /></div></td><td><i class="far fa-trash-alt delete delete-row" value="Delete"></i></td></tr>';
$('#test-body').append(new_row);
row++;
return false;
});

// Remove criterion
$(document).on("click", ".delete-row", function () {
//  confirm("deleting row#"+row);
  if(row>1) {
    $(this).closest('tr').remove();
    row--;
  }
return false;
});
// add-course code-functionality end to here


// *************** &&&&&&&&&& ************* 
// edit-course code-functionality start to here

// edit-course code-functionality end to here
