# NOTE: first test: without object
# reqString = {id: 1}
# what = 'pos'
# reqString[what] = [10,10]
# console.log reqString

# NOTE: this is wrong, what will not be evaluated
# reqString = {id: 1,	what: [10,10]}

$ = require "jQuery"
$ ->
	note = 
		id:	  1
		pos:  [10, 20]
		size: [200,100]	
		text: "Lorem ipsum dolor sit amet"	
		save: (what) ->
			reqString = {@id, "action": ''} 
			reqString["action"] = "save"
			reqString[what]   = @[what]
			$.post "./ajax.php",
				reqString,
				(data) -> console.log(data)

	console.log note.save("pos")	
