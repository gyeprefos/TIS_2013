<?php
include 'header.php';
?>
<div class="page-header">
	<h3>Editor kodu/upload</h3>
</div>
<form>



	<div class="row-fluid">
		<div class="span3">

			<label for="selectZadanie"><strong>Odovzdanie/uprava kodu pre zadanie: </strong></label>
			<select name="selectZadanie" id="selectZadanie">
				<option>Zadanie 1 - Operatory</option>
				<option>Zadanie 2 - Premenne</option>
				<option>Zadanie 3 - Premenne</option>
				<option>Zadanie 4 - Premenne</option>
				<option>Zadanie 5 - Premenne</option>

			</select>

			<div>

				<strong>Sposob odovzdania</strong>	
				<label class="radio"><input type="radio" name="submissionMode">Upload suboru</label>
				<label class="radio"><input type="radio" name="submissionMode">Editor</label>
				<label for="fileChooser"><strong>Subory na upload</strong></label>
				<input name="fileChooser" id="fileChooser" type="file" multiple="multiple">
			</div>
			<hr></hr>
			<h4>Historia suborov</h4>
			<table class="table table-hover">
				<thead>
					<th>Dat. a cas</th><th>Testy</th><th>Hodnot.</th>
				</thead>
				<tbody>
					<tr>
					<td>
					<a href="#">
					20.10.2013 15:40
					</a>
					</td>
					<td>14/150</td>
					<td>8/10</td>	
					</tr>

					<tr>
					<td>
					<a href="#">
					20.10.2013 16:50
					</a>
					</td>
					<td>14/150</td>
					<td>6/10</td>	
					</tr>
					
					<tr>
					<td>
					<a href="#">
					20.10.2013 16:50
					</a>
					</td>
					<td>14/150</td>
					<td>6/10</td>	
					</tr>

					<tr>
					<td>
					<a href="#">
					20.10.2013 16:50
					</a>
					</td>
					<td>14/150</td>
					<td>6/10</td>	
					</tr>	
				</tbody>
			</table>
		</div>

		<div class="span9">
			<ul class="nav nav-tabs">
        
        <li class="active"><a href="prednasky.php">riesenie.cpp</a></li>
        <!-- <li class="<?php currentPageClass("zadania.php",false);?>"><a href="zadania.php">Zadania</a></li> -->
        <li class=""><a href="editor.php">riesenie.h</a></li>
        <li class=""><a href="testing.php">vstupnySubor.txt</a></li>
        
      
    </ul>


			<textarea rows="20" spellcheck="false" class="span12 codeEditor">

// example about structures
#include <iostream>
#include <string>
#include <sstream>
using namespace std;

struct movies_t {
string title;
int year;
} mine, yours;

void printmovie (movies_t movie);

int main ()
{
string mystr;

mine.title = "2001 A Space Odyssey";
mine.year = 1968;

cout << "Enter title: ";
getline (cin,yours.title);
cout << "Enter year: ";
getline (cin,mystr);
stringstream(mystr) >> yours.year;

cout << "My favorite movie is:\n ";
printmovie (mine);
cout << "And yours is:\n ";
printmovie (yours);
return 0;
}

void printmovie (movies_t movie)
{
cout << movie.title;
cout << " (" << movie.year << ")\n";
}


</textarea>
			<a class="btn btn-primary" href="#"><i class="icon-white icon-check"></i> Ulozit obsah editora</a>
</div>


<div class="span10 pull-right"><hr>
<div class="alert alert-error fade in">
<button type="button" class="close" data-dismiss="alert">×</button>
<b>Chyba pri kompilacii odoslaneho riesenia</b><br>
Pri kompilacii riesenia doslo k nasledujucej chybe:<br>
(vystup kompilatora)

</div>
</div>
<div class="span10 pull-right"><hr>
<div class="alert alert-success fade in">
<button type="button" class="close" data-dismiss="alert">×</button>
<b>Success!</b><br>
Riesenie bolo uspesne skompilovane
</div>
</div>
</div>



		<button type="submit" class="btn btn-large btn-success pull-right"><i class="icon-white icon-check"></i> Odoslat</button>
</form>

<?php
include "footer.php";
?>