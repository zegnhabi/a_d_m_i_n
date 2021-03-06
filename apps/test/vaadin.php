<!doctype html>
<html>
 <head>
   <!-- Import Web Component polyfills and all Vaadin Core Elements. -->

   <!-- CDN -->
   <script src="https://cdn.vaadin.com/vaadin-core-elements/latest/webcomponentsjs/webcomponents-lite.min.js"></script>
   <link href="https://cdn.vaadin.com/vaadin-core-elements/latest/vaadin-core-elements/vaadin-core-elements.html" rel="import">

   <!-- Bower -->
   <!-- <script src="bower_components/webcomponentsjs/webcomponents-lite.min.js"></script>
   <link href="bower_components/vaadin-core-elements/vaadin-core-elements.html" rel="import"> -->

   <!-- ZIP archive -->
   <!-- <script src="deps/webcomponentsjs/webcomponents-lite.min.js"></script>
   <link href="deps/vaadin-core-elements/vaadin-core-elements.html" rel="import"> -->
 </head>
 <body>

   <vaadin-grid selection-mode="multi">
     <table>
       <!-- Define the columns and their mapping to data properties. -->
       <col name="firstName">
       <col name="lastName">
       <col name="email">

       <!-- Define the column headings. -->
       <thead>
         <tr>
           <th>First Name</th>
           <th>Last Name</th>
           <th>Email</th>
         </tr>
       </thead>
     </table>
   </vaadin-grid>

   <script>
     // The Web Components polyfill introduces a custom event we can
     // use to determine when the custom elements are ready to be used.
     document.addEventListener("WebComponentsReady", function () {

       // Reference to the grid element.
       var grid = document.querySelector("vaadin-grid");

       // Add some example data as an array.
       grid.items = [
         { "firstName": "Hugo", "lastName": "Romero", "email": "hugo.romero@example.com" },
         { "firstName": "Nieves", "lastName": "Diez", "email": "nieves.diez@example.com" },
         { "firstName": "Esteban", "lastName": "Vega", "email": "esteban.vega@example.com" },
         { "firstName": "Roxane", "lastName": "Diez", "email": "roxane.diez@example.com" }
       ];
     });
   </script>

 </body>
</html>