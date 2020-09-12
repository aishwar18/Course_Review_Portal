var degree_arr=new Array("B.Tech","M.Tech");
var b_a = new Array();
var s_a = new Array();
var e_a = new Array();

b_a[0] = "";
b_a[1] =" AEE | AIE | CCE | CHE | CIE | CVI | CSE |  ECE | EEE | ELC | EIE | EAC | MEE ";
b_a[2] =" ATE | BME | CEN | CHE | CIE | CSE | EBS | EDN | MSE | PWE ";

s_a[0] = "";
s_a[1]="1|2|3|4|5|6|7|8";
s_a[2]="1|2|3|4";

e_a[0] = "";
e_a[1]="";
e_a[2]="";
e_a[3]="Business Communication | Psychology |Food and Nutition";
e_a[4]="Business Communication | Psychology |Food and Nutition";
e_a[5]="Android App Development | Cloud Computing | Cryptography | Data Science | Digital Image Processing";
e_a[6]="";
e_a[7]="";
e_a[8]="";

function print_degree(degree_id){
	// given the id of the <select> tag as function argument, it inserts <option> tags
	var option_str = document.getElementById(degree_id);
	option_str.length=0;
	option_str.options[0] = new Option('Select degree','');
	option_str.selectedIndex = 0;
	for (var i=0; i<degree_arr.length; i++) {
		option_str.options[option_str.length] = new Option(degree_arr[i],degree_arr[i]);
	}
}

function print_branch(branch_id, branch_index){
	var option_str = document.getElementById(branch_id);
	option_str.length=0;	
	option_str.options[0] = new Option('Select Branch','');
	option_str.selectedIndex = 0;
	var branch_arr = b_a[branch_index].split("|");
	for (var i=0; i<branch_arr.length; i++) {
		option_str.options[option_str.length] = new Option(branch_arr[i],branch_arr[i]);
	}
}

function print_semester(sem_id, sem_index){
	var option_str = document.getElementById(sem_id);
	option_str.length=0;
	option_str.options[0] = new Option('Select Semester','');
	option_str.selectedIndex = 0;
	var sem_arr = s_a[sem_index].split("|");
	for (var i=0; i<sem_arr.length; i++) {
		option_str.options[option_str.length] = new Option(sem_arr[i],sem_arr[i]);
	}
}

function print_elective(ele_id, ele_index){
	var option_str = document.getElementById(ele_id);
	option_str.length=0;	
	option_str.options[0] = new Option('Select Elective','');
	option_str.selectedIndex = 0;
	var elec_arr = e_a[ele_index].split("|");
	for (var i=0; i<elec_arr.length; i++) {
		option_str.options[option_str.length] = new Option(elec_arr[i],elec_arr[i]);
	}
}

