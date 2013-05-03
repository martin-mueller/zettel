$ ->
	class Note
		id:	  1
		pos:  
			top: 100
			left: 20
		size: 
			width:  200
			height: 100	
		text: "Lorem ipsum dolor sit amet"

		constructor: (options) ->
			# if el 
			# 	@$el = $(el)
			if options
				console.log options
				{@id, @pos, @size, @text} = options

			

		insert: (container) ->
			@container = $(container)
			@$el = $ "<div class=\"note ui-widget-content\" id=\"note#{@id}\">
				<h3 class=\"ui-widget-header\">Notes</h3><textarea>#{@text}</textarea></div>"

			@container.append @$el
			@_setPosition
			@_setSize
			
			@$el.draggable
				stack: @$el
			@$el.resizable()
			return
							
		_setPosition: ->
			@$el.width @size.width
			@$el.height @size.height

		_setSize: ->	
			@$el.offset @pos
							
	note = new Note 
				id: 2
				pos: {top: 100, left: 100}
				size: {width: 300, height :300}
				text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, fuga, vero, maiores, magni officia eius animi eum eveniet debitis blanditiis deserunt dolorum natus ab necessitatibus dolore fugit repellat ullam explicabo.'
	


# Just a test here				
	note.insert "#container"			
