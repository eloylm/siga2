Some suggested improvements are: 
- a way to allow the user to choose the comparator to use on a numeric field.

This control has a ZCodo project you can use to find the newest releases, and submit 
comments / bugs / patches / etc at http://zcodo.com/project/QFilteredDataGrid-BC

A full change log is available below.

---------------
--- License ---
---------------

Unless otherwise specified, all files in the QFilteredDatagrid
are under the following copyright and licensing policies:

The QFilteredDatagrid is distributed by ICOM Productions, Inc
under the terms of the MIT License.  More information can be found at
http://www.opensource.org/licenses/mit-license.php

Copyright (c) 2006 - 2007, ICOM Productions, Inc

Permission is hereby granted, free of charge, to any person obtaining a copy of
this software and associated documentation files (the "Software"), to deal in
the Software without restriction, including without limitation the rights to
use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies
of the Software, and to permit persons to whom the Software is furnished to do
so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

* @author Ryan Peters rpeters@icomproductions.ca, Gagandeep Grewal
* @copyright ICOM Productions, Inc. 2006-2008

-------------------------
--- Instalation Notes ---
-------------------------

All .class.php files must be placed in includes\qcodo\qform for them to be automatically included when 
needed. Otherwise, you will have to include them in the needed files manually.

---------------
---- USAGE ----
---------------

----------------
For QCodo 0.3 or newer
----------------

Beta 3 has built-in support for loading and counting using QConditions, so no additional downloads are 
needed.

Here is a quick usage example:
---------
Setting up the columns:

//An exact match filter
$this->colId = new QFilteredDataGridColumn(QApplication::Translate('Id'), '<?= $_ITEM->Id; ?>', 
	array('OrderByClause' => QQ::OrderBy(QQN::User()->Id), 
		'ReverseOrderByClause' => QQ::OrderBy(QQN::User()->Id, false)));
//QQ::Equal requires a value, but it's ignored by the filter
$this->colId->Filter = QQ::Equal(QQN::User()->Id, null);
$this->colId->FilterBoxSize = 3;

//A "like" filter
$this->colName = new QFilteredDataGridColumn(QApplication::Translate('Name'), 
	'<?= htmlentities(QString::Truncate($_ITEM->Name, 200), ENT_COMPAT, QApplication::$EncodingType); ?>',
	array('OrderByClause' => QQ::OrderBy(QQN::User()->Name), 
		'ReverseOrderByClause' => QQ::OrderBy(QQN::User()->Name, false)));
//QQ::Like requires a value, but it's ignored by the filter
$this->colName->Filter = QQ::Like(QQN::User()->Name, null);
$this->colName->FilterPrefix = $this->colName->FilterPostfix = "%";
$this->colName->FilterBoxSize = 10; 

//An old-style dropdown filter
$this->colUserType = new QFilteredDataGridColumn(QApplication::Translate('User Type'), 
	'<?= $_FORM->dtgUser_UserType_Render($_ITEM); ?>', 
	array('OrderByClause' => QQ::OrderBy(QQN::User()->UserType), 
		'ReverseOrderByClause' => QQ::OrderBy(QQN::User()->UserType, false)));
//QQ::Equal requires a value, but it's ignored by the filter
$this->colUserType->Filter = QQ::Equal(QQN::User()->UserType, null);
$this->colUserType->FilterList = array_flip(UserType::NameArray);

//An advanced dropdown filter
$this->colAge = new QFilteredDataGridColumn(QApplication::Translate('Age'), '<?= $_ITEM->Age; ?>', 
	array('OrderByClause' => QQ::OrderBy(QQN::User()->Age), 
		'ReverseOrderByClause' => QQ::OrderBy(QQN::User()->Age, false)));
$this->colAge->FilterAddListItem("Under 18", QQ::LessThan(QQN::User()->Age,18));
$this->colAge->FilterAddListItem("18-35", QQ::Between(QQN::User()->Age,18,35));
$this->colAge->FilterAddListItem("Over 35", QQ::GreaterThan(QQN::User()->Age,35));

---------
And when setting the data source:

$this->dtgUser->TotalItemCount = User::QueryCount($this->dtgUser->Conditions);
$this->dtgUser->DataSource = User::QueryArray($this->dtgUser->Conditions, $objClauses); 

---------
Other than those changes, it's the same as a normal DataGrid (ie: you still have to add the columns to the datagrid, set the $objClauses variable, etc)

----------------
For QCodo Beta 2
----------------
-- WARNING -- This is now depreciated, and is not guaraunteed to work, though there are no known issues. Newer features may not be avaliable via this method

-- Note -- These are correct as far as my memory can serve, but minor alterations may be needed to these, or the instalation steps. If you do find errors or incomplete instructions, please let me know so I can update this documentation. -- !Note --

Since Beta 2 did not include filtered load functions, this filtered datagrid requires the LoadArrayByArray function also supplied in the user download area of qcodo.com.

You must also edit the QFilteredDataGrid.class.php file, commenting out the first line (171) of GetControlHtml(): $this->DataBind();

The differences in usage between Beta 3 and this are:
 - You must use “fieldname” instead of a QQ Node
 - Uses FilterInfo instead of Conditions

Here is a quick usage example:

---------
Setting up the columns:

//An exact match filter
$this->idCol = new QFilteredDataGridColumn(QApplication::Translate('Id'), '<?= $_ITEM->Id; ?>', 'SortByCommand="id ASC"', 'ReverseSortByCommand="id DESC"');
$this->idCol->FilterByCommand = array("fieldname"=>"id", "operator"=>"=");
$this->idCol->FilterBoxSize = 3;
            
//A "like" filter
$this->nameCol = new QFilteredDataGridColumn(QApplication::Translate('Name'), '<?= htmlentities(QString::Truncate($_ITEM->Name, 200), ENT_COMPAT, QApplication::$EncodingType); ?>', 'SortByCommand="name ASC"', 'ReverseSortByCommand="name DESC"');
$this->nameCol->FilterByCommand=array("fieldname"=>"name","operator"=>"LIKE","prefix"=>"%","postfix"=>"%");
$this->nameCol->FilterBoxSize = 10; 

//A dropdown filter
$this->colUserType = new QFilteredDataGridColumn(QApplication::Translate('User Type'), '<?= $_FORM->dtgUser_UserType_Render($_ITEM); ?>', 'SortByCommand="user_type ASC"', 'ReverseOrderByCommand="user_type DESC"');
$this->colUserType->FilterByCommand=array("fieldname"=>"user_type","operator"=>"=");
$this->colUserType->FilterList = array_flip(UserType::NameArray);

//A Clear button
$this->colReset = new QFilteredDataGridColumn(QApplication::Translate('Reset'));
$this->colReset->FilterType = 'Reset';

---------
And when setting the data source:

$this->dtgUser->TotalItemCount = User::CountByArray($this->dtgUser->FilterInfo);
$this->dtgUser->DataSource = User::LoadArrayByArray($this->dtgUser->FilterInfo,$this->dtgUser->SortInfo, $this->dtgUser->LimitInfo); 

---------
Other than those changes, it's the same as a normal DataGrid (ie: you still have to add the columns to the datagrid, set the original sortinfo, etc)

------------------
--- Change Log ---
------------------
V4.1.2
- Fixed internal bugs

V4.1.1
- Fixed bug with QPaginators without WaitIcon properties.

V4.1.0
- Some code cleanup/rearangement by gibran
- QQCondition-as-filter support by gibran
- Wait Icon added for filtering

V4.0.0
- Added new Advanced List filters
- Removed reliance on arrays, moving to a fully OO based approach
- Released under MIT license to ease possible inclusion into the core

V3.1.1
- Adopted vakopian's refactoring to eliminate the GetChildControlByName function

V3.1.1
- Adopted vakopian's refactoring to future-proof the control

V3.1
- Included vakopian's patches, including a new Clear filter type to reset the filters

V3.0
- Now supports dropdown lists
- Refactoring done to improve ability to add new features and filter types

V2.1
- QCodo 0.3.7 support added (details above)

V2.0
- QCodo Beta 3 support added

V1.0
- Initial release for QCodo Beta 2
