<?php

function include_template($template_name, $data = [])
{
   // Define the path to your templates directory
   $templates_dir = __DIR__ . './';

   // Check if the template file exists
   $template_file = $templates_dir . $template_name . '.php';
   if (!file_exists($template_file)) {
      throw new Exception("Template file '$template_name' not found.");
   }

   // Extract variables from the data array
   extract($data);

   // Include the template file
   include $template_file;
}
