<?php
if(!function_exists("vietproHelper")){
       function vietproHelper(){
           return "Vietpro Helper !";
       }
}
if(!function_exists("showCategories")){
  function showCategories($categories, $parent, $char){
      foreach($categories as $category){
          if($category["parent"] == $parent){
              echo "<option value=".$category["id"].">".$char.$category["name"]."</option>";
              $newparent = $category["id"];
              echo showCategories($categories, $newparent, $char."|-- ");
          }
      }
  }
}
?>
