<?php

/**
 * DIVBasedTable Class File
 *
 * @author Muhammad Arfeen  
 * @license Freeware
 */

/**
 * DIV based table generator provides a programatic way to generate
 * table via DIV tags of HTML.
 *
 * @author Muhammad Arfeen
 * @version 1.0
 * @package DIVBasedTable
 */
class DIVBasedTable {

    public $TableBackGroundColor;
    public $TableBorderColor;
    public $TableBorder;
    public $TableWidth;
    public $TableWidthCol;
    public $TableWidthColNo;
    public $HeaderCellStyle;
    public $BodyRowCellStyle;
    public $TableRowStyle;
    private $FinalTable;

    /**
     * Start a DIV table     
     * @param string $TableAlign alignment for the table.     
     */
    public function StartTable($TableAlign = "center") {

        $this->FinalTable .= "<DIV class='base-layer' align=\"$TableAlign\"> ";
    }

    /**
     * Start a DIV table header row    
     * @param string $HeaderRowID a unique header id
     * @param string $Style to provide custom inline CSS style     
     */
    public function StartHeader($HeaderRowID = "id", $Style = "") {

        $this->FinalTable .= "<div class='MyTableRowClass' ID='" . $HeaderRowID . "' style='" . $Style . "'> ";
    }

    /**
     * Add a header cell
     * @param string $HeaderText to provide text for the header cell
     * @param string $Style to provide custom inline CSS style     
     * @param string $TableAlign alignment for the cell. 
     */
    public function AddHeaderCell($HeaderText = "AddColumn", $Style = "", $TableAlign = "center") {

        $this->FinalTable .= "<div class='MyMainTableRowClass' style='" . $Style . "' align=\"$TableAlign\"><h5 class='MyTableHeaderClass'>";
        $this->FinalTable .= $HeaderText . "</h5></DIV>";
    }

    /**
     * End a header row     
     */
    public function StopHeader() {

        $this->FinalTable .= "</DIV>";
    }

    /**
     * Add a table row
     * @param string $BodyRowID a unique id for the row
     * @param string $Style to provide custom inline CSS style          
     */
    public function StartTableRow($BodyRowID = "id", $Style = "") {

        $this->FinalTable .= "<div class='MyTableRowClass' id='" . $BodyRowID . "' style='" . $Style . "'>";
    }

    /**
     * Add a table row
     * @param string $CellText text for the cell 
     * @param string $Style to provide custom inline CSS style     
     * @param string $TableAlign alignment for the cell.      
     */
    public function AddBodyCell($CellText = "BodyCell", $Style = "", $TableAlign = "center") {

        $this->FinalTable .= "<div class='MyMainTableRowClass' style='" . $Style . "' align=\"$TableAlign\"><P class='MyTableCellTextClass'>";
        $this->FinalTable .= $CellText . "</P></DIV>";
    }

    /**
     * End a body  row     
     */
    public function StopTableRow() {

        $this->FinalTable .= "</DIV>";
    }

    /**
     * End table
     */
    public function CloseTable() {

        $this->FinalTable .= "</DIV>";
    }

    /**
     * Get final rendered table
     * @return string
     */
    public function GetFinalTable() {

        return $this->FinalTable;
    }

    /**
     * Generate CSS for the table     
     */
    public function GetCSS() {


        $this->TableWidthCol = sprintf("%d", $this->TableWidth / $this->TableWidthColNo) . "%";

        $this->FinalTable .= "<style>
			 DIV.base-layer {
            border: solid #f8f8f8 1px; 
           " . $this->TableStyle . "; padding: 0; text-align: center; width: auto; 
         }

         DIV.MyTableRowClass {
            width: " . $this->TableWidth . "; 
         }


         DIV.MyMainTableRowClass {
           float: left; margin: 0; padding: 0; width: " . $this->TableWidthCol . "; " . $this->TableRowStyle . "
         }


         H5.MyTableHeaderClass {
           " . $this->HeaderCellStyle . "
         }

         P.MyTableCellTextClass {
           " . $this->BodyRowCellStyle . "
         }


         </style>
         ";
    }

}
?>