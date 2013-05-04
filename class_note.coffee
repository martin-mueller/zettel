$ ->
	class Note
		id:	  null
		pos:  
			top: 100
			left: 20
		size: 
			width:  200
			height: 100	
		text: "Lorem ipsum dolor sit amet"
		_lastId: null;
		el = null;

		constructor: (options) ->
			# if el 
			# 	@$el = $(el)
			if options
				console.log options
				{@id, @pos, @size, @text} = options

				console.log @size
				

		insert: (container) ->
			@container = $(container)
			if @id is null
				@newId()
				console.log @id	
			@$el = $ "<div class=\"note ui-widget-content\" id=\"note#{@id}\">
				<!-- h3 class=\"ui-widget-header\">Notes</h3 --><textarea>#{@text}</textarea></div>"

			@container.append @$el
			@_setPosition()
			@_setSize()
			
			@$el.draggable
				stack: 'note'
				stop: (event,ui) =>
					@save "pos"

			@$el.resizable
				stop: (event,ui) =>
					@save "size"
			return
		
		save: (what) ->
			reqString = {"id": "note#{@id}", "action": "save"} 
			
			reqString[what]   = @[what]
			console.log reqString
			$.post "./ajax.php",
				reqString,
				(data) -> console.log(data)

		newId: ->
			
			$.get "./ajax.php",
				action: "newId",
				(data) => 
					console.log data
					# if @_lastId @id = @_lastId + 1
					@setId(data)
				,"json"
					
		setId: (data) ->
			
			@id = data['id']		

		_setPosition: ->
			@$el.offset @pos

		_setSize: ->	
			@$el.width @size.width
			@$el.height @size.height				
	note1 = new Note 
			id:	  null
			pos:  
				top: 100
				left: 20
			size: 
				width:  200
				height: 200	
			text: "Lorem ipsum dolor sit amet"

	note2 = new Note 
			id:	  null
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
				height: 200	
			text: "Lorem ipsum dolor sit amet"

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