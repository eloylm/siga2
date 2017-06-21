<?php
	require(__DATAGEN_META_CONTROLS__ . '/OrdenesTrabajoDataGridGen.class.php');

	/**
	 * This is the "Meta" DataGrid customizable subclass for the List functionality
	 * of the OrdenesTrabajo class.  This code-generated class extends
	 * from the generated Meta DataGrid class which contains a QDataGrid class which
	 * can be used by any QForm or QPanel, listing a collection of OrdenesTrabajo
	 * objects.  It includes functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create an instance of this DataGrid in a QForm or QPanel.
	 *
	 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
	 * or overwrite this file.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * 
	 */
	class OrdenesTrabajoDataGrid extends OrdenesTrabajoDataGridGen {

            public function AddLinkColumn($strLinkUrl, $strLinkHtml = 'Edit', $strColumnTitle = 'Edit', $intArgumentType = QMetaControlArgumentType::PathInfo) {
			switch ($intArgumentType) {
				case QMetaControlArgumentType::QueryString:
					$strLinkUrl .= 'intOrdenesTrabajoId=<?=urlencode($_ITEM->OrdenesTrabajoId)?>';
					break;
				case QMetaControlArgumentType::PathInfo:
					$strLinkUrl .= '/<?=urlencode($_ITEM->OrdenesTrabajoId)?>';
					break;
				default:
					throw new QCallerException('Unable to pass arguments with this intArgumentType: ' . $intArgumentType);
			}

			$strHtml = '<a href="' . $strLinkUrl . '">' . $strLinkHtml . '</a>';
			$colEditColumn = new QDataGridColumn($strColumnTitle, $strHtml, 'HtmlEntities=False');
			$this->AddColumn($colEditColumn);
			return $colEditColumn;
		}



	}
?>