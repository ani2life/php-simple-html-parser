<?php
require './HTMLParser.php';
require './SimpleNode.php';
require './SimpleDocument.php';

$data = '<i>i<a>a<b>b</b></i>c';

$document = new SimpleDocument($data);

echo htmlspecialchars($document->html());

$child_nodes = $document->child_nodes();
foreach ( $child_nodes as $node ) {
    echo '<p>'.$node->node_name().'</p>';
}
?>