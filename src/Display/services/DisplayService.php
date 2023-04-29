<?php 
class DisplayService extends ArrayObject {

    public function displayAsTable() : string 
    {
        $offsets = $this->getArrayCopy();
        $content = '';
        $header =  
        "<thead>" .
            "<tr>" . 
                "<td> Key </td>" .
                "<td> Value </td>" .
            "</tr>".
        "</thead>";

        foreach($offsets as $key => $value) {
            $value = is_callable($value) ? $value() : $value;
            $content .= 
            "<tr>" . 
                "<td> {$key} </td>" .
                "<td> {$value} </td>" .
            "</tr>";
        }
        
        return "<table>{$header}<tbody>{$content}</tbody></table>";
    }
}
