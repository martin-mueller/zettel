// Generated by CoffeeScript 1.6.2
var $;

$ = require("jQuery");

$(function() {
  var note;

  note = {
    id: 1,
    pos: [10, 20],
    size: [200, 100],
    text: "Lorem ipsum dolor sit amet",
    save: function(what) {
      var reqString;

      reqString = {
        id: this.id,
        "action": ''
      };
      reqString["action"] = "save";
      reqString[what] = this[what];
      return $.post("./ajax.php", reqString, function(data) {
        return console.log(data);
      });
    }
  };
  return console.log(note.save("pos"));
});