/*
 * Name: shop.js
 * Author: Griffin Brome
 * License: MIT
 * Descripton: AJAX handler to load all items from the 'item' database for the shop view
 */

$(document).ready(function() {
  // Load all items using a GET request
  $.get("../../php/get_all_items.php")
    .done(function( data ) {
      var json = JSON.parse(data);
      for (var item in json) {
        $("#all_items")
          .append(
            "<tr>"
            +"<td>" + json[item].name + "</td>"
            +"<td>" + json[item].cost + "</td>"
            +"<td>" + json[item].details + "</td>"
            + "</tr>");
      }
    });
});
