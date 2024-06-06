<?php

// Replace with the actual URL of the iframe source
$iframeUrl = "https://api.ipify.org";

$content = file_get_contents($iframeUrl); // Fetch content from iframe URL

if ($content) {
  // Process the content to extract the desired text (if needed)
    $text = $content; // Assuming the entire content is text

      // Write the text to a file
        file_put_contents("Txt0.txt", $text);
        }

        ?>
        
