/*
 * Name: admin.js
 * Author: Griffin Brome
 * License: MIT
 * Descripton: AJAX handlers that enable admin page forms to mutate the database
 */

$(document).ready(function() {
  /*
   * Create item via AJAX request
   */
  $("#new_item").submit(function(event) {
    $.post("../../php/new_item.php", $("#new_item").serialize())
      .done(function() {
        // Flash success message to user
        alert("Item successfully created");

        // Reset form values
        $("#new_item").each(function() { this.reset(); });
      })
      .fail(function() {
        alert("Error: could not create new item");
      });
    event.preventDefault();
  });

  /*
   * Delete item via AJAX request
   */
  $("#delete_item").submit(function(event) {
    $.post("../../php/delete_item.php", $("#delete_item").serialize())
      .done(function() {
        // Flash success message to user
        alert("Item successfully deleted");
      })
      .fail(function() {
        alert("Error: could not delete item");
      });
    event.preventDefault();
  });

  /*
   * Populate dropdown via AJAX
   */
  $.get("../../php/get_all_items.php")
    .done(function( data){
      var json = JSON.parse(data);
      for (var item in json) {
        $("#delete_name")
          .append("<option value='" + json[item].name + "'>" 
            + json[item].name 
            + "</option");
      }
    });


});
