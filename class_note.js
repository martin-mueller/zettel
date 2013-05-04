// Generated by CoffeeScript 1.6.2
(function() {
  $(function() {
    var Note, note1, note2, note3, note4;

    Note = (function() {
      var el;

      Note.prototype.id = null;

      Note.prototype.pos = {
        top: 100,
        left: 20
      };

      Note.prototype.size = {
        width: 200,
        height: 100
      };

      Note.prototype.text = "Lorem ipsum dolor sit amet";

      Note.prototype._lastId = null;

      el = null;

      function Note(options) {
        if (options) {
          console.log(options);
          this.id = options.id, this.pos = options.pos, this.size = options.size, this.text = options.text;
          console.log(this.size);
        }
      }

      Note.prototype.insert = function(container) {
        var _this = this;

        this.container = $(container);
        if (this.id === null) {
          this.newId();
          console.log(this.id);
        }
        this.$el = $("<div class=\"note ui-widget-content\" id=\"note" + this.id + "\">				<!-- h3 class=\"ui-widget-header\">Notes</h3 --><textarea>" + this.text + "</textarea></div>");
        this.container.append(this.$el);
        this._setPosition();
        this._setSize();
        this.$el.draggable({
          stack: 'note',
          stop: function(event, ui) {
            return _this.save("pos");
          }
        });
        this.$el.resizable({
          stop: function(event, ui) {
            return _this.save("size");
          }
        });
      };

      Note.prototype.save = function(what) {
        var reqString;

        reqString = {
          "id": "note" + this.id,
          "action": "save"
        };
        reqString[what] = this[what];
        console.log(reqString);
        return $.post("./ajax.php", reqString, function(data) {
          return console.log(data);
        });
      };

      Note.prototype.newId = function() {
        var _this = this;

        return $.get("./ajax.php", {
          action: "newId"
        }, function(data) {
          console.log(data);
          return _this.setId(data);
        }, "json");
      };

      Note.prototype.setId = function(data) {
        return this.id = data['id'];
      };

      Note.prototype._setPosition = function() {
        return this.$el.offset(this.pos);
      };

      Note.prototype._setSize = function() {
        this.$el.width(this.size.width);
        return this.$el.height(this.size.height);
      };

      return Note;

    })();
    note1 = new Note({
      id: null,
      pos: {
        top: 100,
        left: 20
      },
      size: {
        width: 200,
        height: 200
      },
      text: "Lorem ipsum dolor sit amet"
    });
    note2 = new Note({
      id: null,
      pos: {
        top: 150,
        left: 300
      },
      size: {
        width: 400,
        height: 200
      },
      text: "Lorem ipsum dolor sit amet"
    });
    note3 = new Note({
      id: null,
      pos: {
        top: 200,
        left: 220
      },
      size: {
        width: 200,
        height: 200
      },
      text: "Lorem ipsum dolor sit amet"
    });
    note4 = new Note({
      id: null,
      pos: {
        top: 180,
        left: 50
      },
      size: {
        width: 200,
        height: 200
      },
      text: "Lorem ipsum dolor sit amet"
    });
    note1.insert("#container");
    note2.insert("#container");
    note3.insert("#container");
    return note4.insert("#container");
  });

}).call(this);
