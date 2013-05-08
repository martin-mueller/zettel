$ ->
	lastId = null;
	class Note
		id:	  null
		pos:  
			top: 100
			left: 20
		size: 
			width:  200
			height: 100	
		text: "Lorem ipsum dolor sit amet"
		el = null;

		constructor: (options) ->
			# if el 
			# 	@$el = $(el)
			if options
				for key, value of options
					@[key] = value if key of @ 
				# console.log options
				# {@id, @pos, @size, @text} = options

				console.log @size
				

		insert: (container) ->
			@container = $(container)
			if @id is null

				@newId
				return
				# console.log @id	
			@$el = $ "<div class=\"note ui-widget-content\" id=\"note#{@id}\">
				<!-- h3 class=\"ui-widget-header\">Notes</h3 --><textarea>#{@text}</textarea></div>"

			@container.append @$el
			@_setPosition()
			@_setSize()
			
			@$el.draggable
				stack: '.note'
				stop: (event,ui) =>
					@save "pos"

			@$el.resizable
				stop: (event,ui) =>
					@save "size"
			@save "pos"
			@save "size"
			@save "text"		
			return
		
		save: (what) ->
			reqString = {"id": "note#{@id}", "action": "save"} 
			
			reqString[what]   = @[what]
			console.log reqString
			$.post "./ajax.php",
				reqString,
				(data) -> console.log(data)

		newId: ->
			if (lastId)
				lastId = lastId + 1

				return lastId
			else	
			$.get "./ajax.php",
				action: "newId",
				(data) => 
					# console.log data
					@setId(data)

					@insert(@container)
				,"json"
		
		setId: (data) ->
			@id = data['id']		
			lastId = data['id']
		_setPosition: ->
			@$el.offset @pos

		_setSize: ->	
			@$el.width @size.width
			@$el.height @size.height				
	note1 = new Note 
			id:	  null
			size: 
				width:  900
				height: 400	
			

	note2 = new Note 
			id:	  null
			bla: "test"
			pos:  
				top: 150
				left: 300
			size: 
				width:  400
				height: 200	
			text: "Lorem ipsum dolor sit amet"
	note3 = new Note 
			id:	  null
			pos:  
				top: 200
				left: 220
			size: 
				width:  200
				height: 700	
			text: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, est neque minima? Cum, alias, fuga ipsum modi doloribus deserunt libero veritatis numquam voluptatibus ut nulla exercitationem dolores placeat rerum dolor."

	note4 = new Note 
			id:	  null
			pos:  
				top: 180
				left: 50
			size: 
				width:  200
				height: 200	
			text: "Lorem ipsum dolor sit amet"

# Just a test here				
	note1.insert "#container"			
	note2.insert "#container"			
	note3.insert "#container"			
	note4.insert "#container"		