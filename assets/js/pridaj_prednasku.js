function formPrednasky(){ 

	var element = document.getElementsByClassName("row-fluid")[0]
	var to_remove = document.getElementsByClassName("btn btn-success")[0]
	element.removeChild(to_remove)
	var form = document.createElement("form")
	form.className = "well"
	var fieldset = document.createElement("fieldset")
	var legend = document.createElement("legend")
	legend.textContent= "Pridat prednasku"

	var label1 = document.createElement("label")
	var for1 = document.createAttribute("for")
	for1.value = "porcis"
	label1.setAttributeNode(for1)

	var label2 = document.createElement("label")
	var for2 = document.createAttribute("for")
	for2.value = "nazov"
	label2.setAttributeNode(for2)

	var label3 = document.createElement("label")
	var for3 = document.createAttribute("for")
	for3.value = "subor"
	label3.setAttributeNode(for3)

	var input1 = document.createElement("input")
	input1.className = "input-xxsmall"
	var id1 = document.createAttribute("id")
	id1.value = "porCis"
	input1.setAttributeNode(id1)
	var type1 = document.createAttribute("type")
	type1.value = "text"
	input1.setAttributeNode(type1)

	var input2 = document.createElement("input")
	input2.className = "input"
	var type2 = document.createAttribute("type")
	type2.value = "text"
	input2.setAttributeNode(type2)
	var id2 = document.createAttribute("id")
	id2.value = "nazov"
	input2.setAttributeNode(id2)

	var input3 = document.createElement("input")
	input3.className = "input-xsmall"
	var type3 = document.createAttribute("type")
	type3.value = "file"
	input3.setAttributeNode(type3)
	var id3 = document.createAttribute("id")
	id3.value = "subor"
	input3.setAttributeNode(id3)

	label1.textContent = "poradove cislo"
	label2.textContent = "nazov prednasky"
	label3.textContent = "Subor"
	var a = document.createElement("a")
	var href = document.createAttribute("href")
	href.value = "prednasky.php"
	a.className= "btn btn-primary"
	a.setAttributeNode(href)
	
	var i = document.createElement("i")
	i.className = "icon-white icon-plus"
	var span = document.createElement("span")
	span.textContent = "Pridat prednasku"
	a.appendChild(i)
	a.appendChild(span)

	//'<i class="icon-white icon-plus"></i>'
	var a2 = document.createElement("a")
	var href2 = document.createAttribute("href")
	href2.value = "#"
	a2.className= "btn btn-primary"
	a2.setAttributeNode(href2)
	
	var i2 = document.createElement("i")
	i2.className = "icon-white icon-minus"
	var span2 = document.createElement("span")
	span2.textContent = "hide"
	var onc = document.createAttribute("onclick")
	onc.value = "hideForm()"
	a2.setAttributeNode(onc)
	a2.appendChild(i2)
	a2.appendChild(span2)

	//fieldset.appendChild(document.createElement("br"))
	fieldset.appendChild(a2)
	fieldset.appendChild(label1)
	fieldset.appendChild(input1)
	fieldset.appendChild(label2)
	fieldset.appendChild(input2)
	fieldset.appendChild(label3)
	fieldset.appendChild(input3)
	fieldset.appendChild(a)



	form.appendChild(fieldset)
	element.insertBefore(form, element.firstChild)

}
function hideForm(){
	var element = document.getElementsByClassName("row-fluid")[0]
	var to_remove = document.getElementsByClassName("well")[0]
	element.removeChild(to_remove)
	var a = document.createElement("a")
	a.className ="btn btn-success"
	var att = document.createAttribute("onclick")
	att.value = "formPrednasky()"
	var i = document.createElement("i")
	i.className = "icon-white icon-plus"
	a.setAttributeNode(att)
	var span = document.createElement("span")
	span.textContent = "Pridat prednasku"
	a.appendChild(i)
	a.appendChild(span)
	element.insertBefore(a, element.firstChild)
	//<a href="#" class="btn btn-success" onclick="formPrednasky()"><i class="icon-white icon-plus"></i> Pridat prednasku</a>
}
/*
<a href="prednasky.php" class="btn btn-primary"><i class="icon-white icon-plus"></i> Pridat prednasku</a>
<form class="well">
    <fieldset>
      <legend>Pridat prednasku</legend>
      <label for"porcis"="">poradove cislo</label>
      <input class="input-xxsmall" id="porCis" type="text">
       <label for"nazov"="">nazov prednasky</label>
      <input class="input" id="nazov" type="text">
       <label for"subor"="">Subor</label>
      <input class="input-xsmall" id="subor" type="file">
    <a href="prednasky.php" class="btn btn-primary"><i class="icon-white icon-plus"></i> Pridat prednasku</a>
    </fieldset>
  </form>
*/