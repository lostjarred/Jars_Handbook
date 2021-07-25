<?php
    function embedyoutubevideo($videotitle, $videocode) {
        $videoembedhtml='<iframe width="560" height="315" src="https://www.youtube.com/embed/'.$videocode.'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        echo "<h5>".$videotitle."</h5> \n".$videoembedhtml."\n <hr>";
    }

?>