<?
class Helper 
{
    public static function getCheckBox($name, $value) 
    {
        $checkbox = "";
        if (is_array($value))
        {
            foreach($value as $key => $val)
            {
                $checkbox .= "<div><input type=\"checkbox\" id=\"$val\" name=\"$name\" value=\"$val\">
                              <label for=\"$val\">$val</label></div>";
            }
        }
        return $checkbox;
    }

    public static function getOrderedList($item)
    {
        $orderedList = "<ol>";
        if (is_array($item))
        {
            foreach($item as $key => $val)
            {
            $orderedList .= "<li>$val</li>";
            }   
        }      
        return $orderedList;
    }

    public static function getUnOrderedList($item)
    {
        $unOrderedList = "<ol>";
        if (is_array($item))
        {
            foreach($item as $key => $val)
            {
            $unOrderedList .= "<li>$val</li>";
            }   
        }      
        return $unOrderedList;
    }

    public static function getTable($col, $row, $item) 
    {
        $table = "<table border=\"7\" width=\"777\" height=\"300\">";
        if ($col>0 && $row>0 && is_array($item)) 
        {
            foreach($item as $key => $val)
            {
                $table .= "<th>$val</th>";
            }
            for($i=0; $i<$row; $i++)
            {
                $table .= "<tr>";
                for($j = 0; $j < $col; $j++) 
                {
                    $table .= "<td></td>";
                }
                $table .= "</tr>";
            }
        }
        $table .= "</table>";
        return $table;
    }

    public static function getRadioButton($name, $value)
    {
        $rButton = "<p>";
        if(is_array($value)) 
        {
            foreach($value as $key => $val) 
            {
                $rButton .= "<input type=\"radio\" id=\"$key\" name=\"$name\" value=\"$val\">
                <label for=\"$key\">$val</label>";
            }
        }
        $rButton .= "</p>";
        return $rButton;
    }

    public static function getDropDown($name, $value)
	{
		$select = "<select name=\"$name\" multiple>";
		if(is_array($value))
		{
			foreach($value as $key => $val)
			{
				$select .= "<option value=\"$key\">$val</option>";
			}
		}
		$select .= "</select>";
		return $select;
    }
    
    public static function getTermList($definitionTerm)
	{
		$definitionList = "<dl>";
		if(is_array($definitionTerm))
		{
			foreach($definitionTerm as $key => $val)
			{
				$definitionList .= "<dt>$key</dt><dd>$val</dd>";
			}
		}
		$definitionList .= "</dl>";
		return $definitionList;
	}

}