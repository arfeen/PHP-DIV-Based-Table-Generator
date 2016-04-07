<?php


/*
    Example

 */

include "DIVBasedTable.php";


##### Step 1 - Create Object #######

$DIV = new DIVBasedTable();

##### Step 2 - Define Table Properties ####

$DIV->TableWidth = "100%";    ##### Table Width

$DIV->TableWidthColNo = 10;    ##### No. of Columns


$DIV->TableStyle = "background-color: #a1d2f1; ";        ###### Style for whole table

$DIV->HeaderCellStyle = "font-family: verdana; height: 5px";  ##### Style for Header Cells

$DIV->BodyRowCellStyle = "font-family: verdana";        ###### Style for Table Body Cells

$DIV->TableRowStyle = "font-family: verdana; ";         ###### Style for Table Row	
###### Step 3 - Apply CSS

$DIV->GetCSS();


###### Step 3 - Start Table Drawing

$DIV->StartTable();

###### Step 4 - Start Table Header

$DIV->StartHeader();

###### Step 5 - Start Header Cells

$DIV->AddHeaderCell("HeaderCell", "background-color: #f8f8f8; height=5;");
$DIV->AddHeaderCell("HeaderCell", "background-color: #f8f8f8; height=5;");
$DIV->AddHeaderCell("HeaderCell", "background-color: #f8f8f8; height=5;");
$DIV->AddHeaderCell("HeaderCell", "background-color: #f8f8f8; height=5;");
$DIV->AddHeaderCell("HeaderCell", "background-color: #f8f8f8; height=5;");
$DIV->AddHeaderCell("HeaderCell", "background-color: #f8f8f8; height=5;");
$DIV->AddHeaderCell("HeaderCell", "background-color: #f8f8f8; height=5;");
$DIV->AddHeaderCell("HeaderCell", "background-color: #f8f8f8; height=5;");
$DIV->AddHeaderCell("HeaderCell", "background-color: #f8f8f8; height=5;");
$DIV->AddHeaderCell("HeaderCell", "background-color: #f8f8f8; height=5;");
$DIV->StopHeader();

###### Step 6 - Start Table Body Row

$DIV->StartTableRow();

###### Step 7 - Start Table Body Cells

$DIV->AddBodyCell();
$DIV->AddBodyCell();
$DIV->AddBodyCell();
$DIV->AddBodyCell();
$DIV->AddBodyCell();
$DIV->AddBodyCell();
$DIV->AddBodyCell();
$DIV->AddBodyCell();
$DIV->AddBodyCell();
$DIV->AddBodyCell();
$DIV->StopTableRow();



$DIV->StartTableRow();
$DIV->AddBodyCell();
$DIV->AddBodyCell();
$DIV->AddBodyCell();
$DIV->AddBodyCell();
$DIV->AddBodyCell();
$DIV->AddBodyCell();
$DIV->AddBodyCell();
$DIV->AddBodyCell();
$DIV->AddBodyCell();
$DIV->AddBodyCell("A Cell", "background-color: #f0f0f0;");
$DIV->StopTableRow();


###### Step 8 - Finalize Table

$DIV->CloseTable();


###### Step 9 - Get Final Table HTML

echo $DIV->GetFinalTable();



exit;
?>