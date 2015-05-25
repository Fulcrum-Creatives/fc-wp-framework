// Add new attribute
function fcwpf_addNewAttribute(elementID, attrName, attrValue) {
	var theElementID = document.getElementById(elementID),
		theAttrName = document.createAttribute(attrName);
	// check if ariaValue isset, if not add NULL as Default
	attrValue = typeof attrValue !== 'undefined' ? attrValue : 'NULL';
	// if attrValue not set, do not add a value to the attribute
	if(attrValue !== 'NULL') {
		theAttrName.value = attrValue;
	}
  	// set the attribute
    theElementID.setAttributeNode(theAttrName);
}

function fcwpf_addNewClassName(elementClass, newClass) {
	var element = document.querySelectorAll('.' + elementClass);
	element.className += " " + newClass;
}