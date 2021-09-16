<?php

namespace hpb\Dev;

class HTMLUtils{

   public function popup($page, $f) {
     echo '
     <script type="text/javascript">
     <!--
     function ' . $f . '() {
     window.open("' . $page . '", "", "channelmode");
     }
     //-->
     </script>
     ';
   }
}
