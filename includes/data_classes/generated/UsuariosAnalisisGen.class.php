<?php
	/**
	 * The abstract UsuariosAnalisisGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the UsuariosAnalisis subclass which
	 * extends this UsuariosAnalisisGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the UsuariosAnalisis class.
	 * 
	 * @package SIGA
	 * @subpackage GeneratedDataObjects
	 * @property integer $UsuariosId the value for intUsuariosId (Not Null)
	 * @property integer $AnalisisId the value for intAnalisisId (Not Null)
	 * @property integer $UsuariosAnalisisId the value for intUsuariosAnalisisId (PK)
	 * @property Usuarios $Usuarios the value for the Usuarios object referenced by intUsuariosId (Not Null)
	 * @property Analisis $Analisis the value for the Analisis object referenced by intAnalisisId (Not Null)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class UsuariosAnalisisGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database column usuarios_analisis.usuarios_id
		 * @var integer intUsuariosId
		 */
		protected $intUsuariosId;
		const UsuariosIdDefault = null;


		/**
		 * Protected member variable that maps to the database column usuarios_analisis.analisis_id
		 * @var integer intAnalisisId
		 */
		protected $intAnalisisId;
		const AnalisisIdDefault = null;


		/**
		 * Protected member variable that maps to the database PK column usuarios_analisis.usuarios_analisis_id
		 * @var integer intUsuariosAnalisisId
		 */
		protected $intUsuariosAnalisisId;
		const UsuariosAnalisisIdDefault = 'nextval(\'usuarios_analisis_usuarios_analisis_id_seq\'::regclass)';


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE
		 * @var integer __intUsuariosAnalisisId;
		 */
		protected $__intUsuariosAnalisisId;

		/**
		 * Protected array of virtual attributes for this object (e.g. extra/other calculated and/or non-object bound
		 * columns from the run-time database query result for this object).  Used by InstantiateDbRow and
		 * GetVirtualAttribute.
		 * @var string[] $__strVirtualAttributeArray
		 */
		protected $__strVirtualAttributeArray = array();

		/**
		 * Protected internal member variable that specifies whether or not this object is Restored from the database.
		 * Used by Save() to determine if Save() should perform a db UPDATE or INSERT.
		 * @var bool __blnRestored;
		 */
		protected $__blnRestored;




		///////////////////////////////
		// PROTECTED MEMBER OBJECTS
		///////////////////////////////

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column usuarios_analisis.usuarios_id.
		 *
		 * NOTE: Always use the Usuarios property getter to correctly retrieve this Usuarios object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Usuarios objUsuarios
		 */
		protected $objUsuarios;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column usuarios_analisis.analisis_id.
		 *
		 * NOTE: Always use the Analisis property getter to correctly retrieve this Analisis object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Analisis objAnalisis
		 */
		protected $objAnalisis;





		///////////////////////////////
		// CLASS-WIDE LOAD AND COUNT METHODS
		///////////////////////////////

		/**
		 * Static method to retrieve the Database object that owns this class.
		 * @return QDatabaseBase reference to the Database object that can query this class
		 */
		public static function GetDatabase() {
			return QApplication::$Database[1];
		}

		/**
		 * Load a UsuariosAnalisis from PK Info
		 * @param integer $intUsuariosAnalisisId
		 * @return UsuariosAnalisis
		 */
		public static function Load($intUsuariosAnalisisId) {
			// Use QuerySingle to Perform the Query
			return UsuariosAnalisis::QuerySingle(
				QQ::Equal(QQN::UsuariosAnalisis()->UsuariosAnalisisId, $intUsuariosAnalisisId)
			);
		}

		/**
		 * Load all UsuariosAnalisises
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return UsuariosAnalisis[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call UsuariosAnalisis::QueryArray to perform the LoadAll query
			try {
				return UsuariosAnalisis::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all UsuariosAnalisises
		 * @return int
		 */
		public static function CountAll() {
			// Call UsuariosAnalisis::QueryCount to perform the CountAll query
			return UsuariosAnalisis::QueryCount(QQ::All());
		}




		///////////////////////////////
		// QCUBED QUERY-RELATED METHODS
		///////////////////////////////

		/**
		 * Internally called method to assist with calling Qcubed Query for this class
		 * on load methods.
		 * @param QQueryBuilder &$objQueryBuilder the QueryBuilder object that will be created
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause object or array of QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with (sending in null will skip the PrepareStatement step)
		 * @param boolean $blnCountOnly only select a rowcount
		 * @return string the query statement
		 */
		protected static function BuildQueryStatement(&$objQueryBuilder, QQCondition $objConditions, $objOptionalClauses, $mixParameterArray, $blnCountOnly) {
			// Get the Database Object for this Class
			$objDatabase = UsuariosAnalisis::GetDatabase();

			// Create/Build out the QueryBuilder object with UsuariosAnalisis-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'usuarios_analisis');
			UsuariosAnalisis::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('usuarios_analisis');

			// Set "CountOnly" option (if applicable)
			if ($blnCountOnly)
				$objQueryBuilder->SetCountOnlyFlag();

			// Apply Any Conditions
			if ($objConditions)
				try {
					$objConditions->UpdateQueryBuilder($objQueryBuilder);
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}

			// Iterate through all the Optional Clauses (if any) and perform accordingly
			if ($objOptionalClauses) {
				if ($objOptionalClauses instanceof QQClause)
					$objOptionalClauses->UpdateQueryBuilder($objQueryBuilder);
				else if (is_array($objOptionalClauses))
					foreach ($objOptionalClauses as $objClause)
						$objClause->UpdateQueryBuilder($objQueryBuilder);
				else
					throw new QCallerException('Optional Clauses must be a QQClause object or an array of QQClause objects');
			}

			// Get the SQL Statement
			$strQuery = $objQueryBuilder->GetStatement();

			// Prepare the Statement with the Query Parameters (if applicable)
			if ($mixParameterArray) {
				if (is_array($mixParameterArray)) {
					if (count($mixParameterArray))
						$strQuery = $objDatabase->PrepareStatement($strQuery, $mixParameterArray);

					// Ensure that there are no other Unresolved Named Parameters
					if (strpos($strQuery, chr(QQNamedValue::DelimiterCode) . '{') !== false)
						throw new QCallerException('Unresolved named parameters in the query');
				} else
					throw new QCallerException('Parameter Array must be an array of name-value parameter pairs');
			}

			// Return the Objects
			return $strQuery;
		}

		/**
		 * Static Qcubed Query method to query for a single UsuariosAnalisis object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return UsuariosAnalisis the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = UsuariosAnalisis::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new UsuariosAnalisis object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = UsuariosAnalisis::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
					if ($objItem)
						$objToReturn[] = $objItem;					
				}			
				// Since we only want the object to return, lets return the object and not the array.
				return $objToReturn[0];
			} else {
				// No expands just return the first row
				$objToReturn = null;
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn = UsuariosAnalisis::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
			
			return $objToReturn;
		}

		/**
		 * Static Qcubed Query method to query for an array of UsuariosAnalisis objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return UsuariosAnalisis[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = UsuariosAnalisis::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return UsuariosAnalisis::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of UsuariosAnalisis objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = UsuariosAnalisis::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and return the row_count
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Figure out if the query is using GroupBy
			$blnGrouped = false;

			if ($objOptionalClauses) foreach ($objOptionalClauses as $objClause) {
				if ($objClause instanceof QQGroupBy) {
					$blnGrouped = true;
					break;
				}
			}

			if ($blnGrouped)
				// Groups in this query - return the count of Groups (which is the count of all rows)
				return $objDbResult->CountRows();
			else {
				// No Groups - return the sql-calculated count(*) value
				$strDbRow = $objDbResult->FetchRow();
				return QType::Cast($strDbRow[0], QType::Integer);
			}
		}

/*		public static function QueryArrayCached($strConditions, $mixParameterArray = null) {
			// Get the Database Object for this Class
			$objDatabase = UsuariosAnalisis::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'usuarios_analisis_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with UsuariosAnalisis-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				UsuariosAnalisis::GetSelectFields($objQueryBuilder);
				UsuariosAnalisis::GetFromFields($objQueryBuilder);

				// Ensure the Passed-in Conditions is a string
				try {
					$strConditions = QType::Cast($strConditions, QType::String);
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}

				// Create the Conditions object, and apply it
				$objConditions = eval('return ' . $strConditions . ';');

				// Apply Any Conditions
				if ($objConditions)
					$objConditions->UpdateQueryBuilder($objQueryBuilder);

				// Get the SQL Statement
				$strQuery = $objQueryBuilder->GetStatement();

				// Save the SQL Statement in the Cache
				$objCache->SaveData($strQuery);
			}

			// Prepare the Statement with the Parameters
			if ($mixParameterArray)
				$strQuery = $objDatabase->PrepareStatement($strQuery, $mixParameterArray);

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objDatabase->Query($strQuery);
			return UsuariosAnalisis::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this UsuariosAnalisis
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'usuarios_analisis';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'usuarios_id', $strAliasPrefix . 'usuarios_id');
			$objBuilder->AddSelectItem($strTableName, 'analisis_id', $strAliasPrefix . 'analisis_id');
			$objBuilder->AddSelectItem($strTableName, 'usuarios_analisis_id', $strAliasPrefix . 'usuarios_analisis_id');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a UsuariosAnalisis from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this UsuariosAnalisis::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return UsuariosAnalisis
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the UsuariosAnalisis object
			$objToReturn = new UsuariosAnalisis();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'usuarios_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'usuarios_id'] : $strAliasPrefix . 'usuarios_id';
			$objToReturn->intUsuariosId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'analisis_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'analisis_id'] : $strAliasPrefix . 'analisis_id';
			$objToReturn->intAnalisisId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'usuarios_analisis_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'usuarios_analisis_id'] : $strAliasPrefix . 'usuarios_analisis_id';
			$objToReturn->intUsuariosAnalisisId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$objToReturn->__intUsuariosAnalisisId = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->UsuariosAnalisisId != $objPreviousItem->UsuariosAnalisisId) {
						continue;
					}

					// complete match - all primary key columns are the same
					return null;
				}
			}

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'usuarios_analisis__';

			// Check for Usuarios Early Binding
			$strAlias = $strAliasPrefix . 'usuarios_id__usuarios_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objUsuarios = Usuarios::InstantiateDbRow($objDbRow, $strAliasPrefix . 'usuarios_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for Analisis Early Binding
			$strAlias = $strAliasPrefix . 'analisis_id__analisis_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objAnalisis = Analisis::InstantiateDbRow($objDbRow, $strAliasPrefix . 'analisis_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of UsuariosAnalisises from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return UsuariosAnalisis[]
		 */
		public static function InstantiateDbResult(QDatabaseResultBase $objDbResult, $strExpandAsArrayNodes = null, $strColumnAliasArray = null) {
			$objToReturn = array();
			
			if (!$strColumnAliasArray)
				$strColumnAliasArray = array();

			// If blank resultset, then return empty array
			if (!$objDbResult)
				return $objToReturn;

			// Load up the return array with each row
			if ($strExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = UsuariosAnalisis::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = UsuariosAnalisis::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single UsuariosAnalisis object,
		 * by UsuariosAnalisisId Index(es)
		 * @param integer $intUsuariosAnalisisId
		 * @return UsuariosAnalisis
		*/
		public static function LoadByUsuariosAnalisisId($intUsuariosAnalisisId) {
			return UsuariosAnalisis::QuerySingle(
				QQ::Equal(QQN::UsuariosAnalisis()->UsuariosAnalisisId, $intUsuariosAnalisisId)
			);
		}
			
		/**
		 * Load an array of UsuariosAnalisis objects,
		 * by AnalisisId Index(es)
		 * @param integer $intAnalisisId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return UsuariosAnalisis[]
		*/
		public static function LoadArrayByAnalisisId($intAnalisisId, $objOptionalClauses = null) {
			// Call UsuariosAnalisis::QueryArray to perform the LoadArrayByAnalisisId query
			try {
				return UsuariosAnalisis::QueryArray(
					QQ::Equal(QQN::UsuariosAnalisis()->AnalisisId, $intAnalisisId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count UsuariosAnalisises
		 * by AnalisisId Index(es)
		 * @param integer $intAnalisisId
		 * @return int
		*/
		public static function CountByAnalisisId($intAnalisisId) {
			// Call UsuariosAnalisis::QueryCount to perform the CountByAnalisisId query
			return UsuariosAnalisis::QueryCount(
				QQ::Equal(QQN::UsuariosAnalisis()->AnalisisId, $intAnalisisId)
			);
		}
			
		/**
		 * Load an array of UsuariosAnalisis objects,
		 * by UsuariosId Index(es)
		 * @param integer $intUsuariosId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return UsuariosAnalisis[]
		*/
		public static function LoadArrayByUsuariosId($intUsuariosId, $objOptionalClauses = null) {
			// Call UsuariosAnalisis::QueryArray to perform the LoadArrayByUsuariosId query
			try {
				return UsuariosAnalisis::QueryArray(
					QQ::Equal(QQN::UsuariosAnalisis()->UsuariosId, $intUsuariosId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count UsuariosAnalisises
		 * by UsuariosId Index(es)
		 * @param integer $intUsuariosId
		 * @return int
		*/
		public static function CountByUsuariosId($intUsuariosId) {
			// Call UsuariosAnalisis::QueryCount to perform the CountByUsuariosId query
			return UsuariosAnalisis::QueryCount(
				QQ::Equal(QQN::UsuariosAnalisis()->UsuariosId, $intUsuariosId)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this UsuariosAnalisis
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return void
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = UsuariosAnalisis::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO "usuarios_analisis" (
							"usuarios_id",
							"analisis_id",
							"usuarios_analisis_id"
						) VALUES (
							' . $objDatabase->SqlVariable($this->intUsuariosId) . ',
							' . $objDatabase->SqlVariable($this->intAnalisisId) . ',
							' . $objDatabase->SqlVariable($this->intUsuariosAnalisisId) . '
						)
					');


				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							"usuarios_analisis"
						SET
							"usuarios_id" = ' . $objDatabase->SqlVariable($this->intUsuariosId) . ',
							"analisis_id" = ' . $objDatabase->SqlVariable($this->intAnalisisId) . ',
							"usuarios_analisis_id" = ' . $objDatabase->SqlVariable($this->intUsuariosAnalisisId) . '
						WHERE
							"usuarios_analisis_id" = ' . $objDatabase->SqlVariable($this->__intUsuariosAnalisisId) . '
					');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;
			$this->__intUsuariosAnalisisId = $this->intUsuariosAnalisisId;


			// Return 
			return $mixToReturn;
		}

		/**
		 * Delete this UsuariosAnalisis
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intUsuariosAnalisisId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this UsuariosAnalisis with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = UsuariosAnalisis::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"usuarios_analisis"
				WHERE
					"usuarios_analisis_id" = ' . $objDatabase->SqlVariable($this->intUsuariosAnalisisId) . '');
		}

		/**
		 * Delete all UsuariosAnalisises
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = UsuariosAnalisis::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					"usuarios_analisis"');
		}

		/**
		 * Truncate usuarios_analisis table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = UsuariosAnalisis::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE "usuarios_analisis"');
		}

		/**
		 * Reload this UsuariosAnalisis from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved UsuariosAnalisis object.');

			// Reload the Object
			$objReloaded = UsuariosAnalisis::Load($this->intUsuariosAnalisisId);

			// Update $this's local variables to match
			$this->UsuariosId = $objReloaded->UsuariosId;
			$this->AnalisisId = $objReloaded->AnalisisId;
			$this->intUsuariosAnalisisId = $objReloaded->intUsuariosAnalisisId;
			$this->__intUsuariosAnalisisId = $this->intUsuariosAnalisisId;
		}



		////////////////////
		// PUBLIC OVERRIDERS
		////////////////////

				/**
		 * Override method to perform a property "Get"
		 * This will get the value of $strName
		 *
		 * @param string $strName Name of the property to get
		 * @return mixed
		 */
		public function __get($strName) {
			switch ($strName) {
				///////////////////
				// Member Variables
				///////////////////
				case 'UsuariosId':
					/**
					 * Gets the value for intUsuariosId (Not Null)
					 * @return integer
					 */
					return $this->intUsuariosId;

				case 'AnalisisId':
					/**
					 * Gets the value for intAnalisisId (Not Null)
					 * @return integer
					 */
					return $this->intAnalisisId;

				case 'UsuariosAnalisisId':
					/**
					 * Gets the value for intUsuariosAnalisisId (PK)
					 * @return integer
					 */
					return $this->intUsuariosAnalisisId;


				///////////////////
				// Member Objects
				///////////////////
				case 'Usuarios':
					/**
					 * Gets the value for the Usuarios object referenced by intUsuariosId (Not Null)
					 * @return Usuarios
					 */
					try {
						if ((!$this->objUsuarios) && (!is_null($this->intUsuariosId)))
							$this->objUsuarios = Usuarios::Load($this->intUsuariosId);
						return $this->objUsuarios;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Analisis':
					/**
					 * Gets the value for the Analisis object referenced by intAnalisisId (Not Null)
					 * @return Analisis
					 */
					try {
						if ((!$this->objAnalisis) && (!is_null($this->intAnalisisId)))
							$this->objAnalisis = Analisis::Load($this->intAnalisisId);
						return $this->objAnalisis;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////


				case '__Restored':
					return $this->__blnRestored;

				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

				/**
		 * Override method to perform a property "Set"
		 * This will set the property $strName to be $mixValue
		 *
		 * @param string $strName Name of the property to set
		 * @param string $mixValue New value of the property
		 * @return mixed
		 */
		public function __set($strName, $mixValue) {
			switch ($strName) {
				///////////////////
				// Member Variables
				///////////////////
				case 'UsuariosId':
					/**
					 * Sets the value for intUsuariosId (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objUsuarios = null;
						return ($this->intUsuariosId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AnalisisId':
					/**
					 * Sets the value for intAnalisisId (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objAnalisis = null;
						return ($this->intAnalisisId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'UsuariosAnalisisId':
					/**
					 * Sets the value for intUsuariosAnalisisId (PK)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intUsuariosAnalisisId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'Usuarios':
					/**
					 * Sets the value for the Usuarios object referenced by intUsuariosId (Not Null)
					 * @param Usuarios $mixValue
					 * @return Usuarios
					 */
					if (is_null($mixValue)) {
						$this->intUsuariosId = null;
						$this->objUsuarios = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Usuarios object
						try {
							$mixValue = QType::Cast($mixValue, 'Usuarios');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Usuarios object
						if (is_null($mixValue->UsuariosId))
							throw new QCallerException('Unable to set an unsaved Usuarios for this UsuariosAnalisis');

						// Update Local Member Variables
						$this->objUsuarios = $mixValue;
						$this->intUsuariosId = $mixValue->UsuariosId;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'Analisis':
					/**
					 * Sets the value for the Analisis object referenced by intAnalisisId (Not Null)
					 * @param Analisis $mixValue
					 * @return Analisis
					 */
					if (is_null($mixValue)) {
						$this->intAnalisisId = null;
						$this->objAnalisis = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Analisis object
						try {
							$mixValue = QType::Cast($mixValue, 'Analisis');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Analisis object
						if (is_null($mixValue->AnalisisId))
							throw new QCallerException('Unable to set an unsaved Analisis for this UsuariosAnalisis');

						// Update Local Member Variables
						$this->objAnalisis = $mixValue;
						$this->intAnalisisId = $mixValue->AnalisisId;

						// Return $mixValue
						return $mixValue;
					}
					break;

				default:
					try {
						return parent::__set($strName, $mixValue);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		/**
		 * Lookup a VirtualAttribute value (if applicable).  Returns NULL if none found.
		 * @param string $strName
		 * @return string
		 */
		public function GetVirtualAttribute($strName) {
			if (array_key_exists($strName, $this->__strVirtualAttributeArray))
				return $this->__strVirtualAttributeArray[$strName];
			return null;
		}



		///////////////////////////////
		// ASSOCIATED OBJECTS' METHODS
		///////////////////////////////





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="UsuariosAnalisis"><sequence>';
			$strToReturn .= '<element name="Usuarios" type="xsd1:Usuarios"/>';
			$strToReturn .= '<element name="Analisis" type="xsd1:Analisis"/>';
			$strToReturn .= '<element name="UsuariosAnalisisId" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('UsuariosAnalisis', $strComplexTypeArray)) {
				$strComplexTypeArray['UsuariosAnalisis'] = UsuariosAnalisis::GetSoapComplexTypeXml();
				Usuarios::AlterSoapComplexTypeArray($strComplexTypeArray);
				Analisis::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, UsuariosAnalisis::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new UsuariosAnalisis();
			if ((property_exists($objSoapObject, 'Usuarios')) &&
				($objSoapObject->Usuarios))
				$objToReturn->Usuarios = Usuarios::GetObjectFromSoapObject($objSoapObject->Usuarios);
			if ((property_exists($objSoapObject, 'Analisis')) &&
				($objSoapObject->Analisis))
				$objToReturn->Analisis = Analisis::GetObjectFromSoapObject($objSoapObject->Analisis);
			if (property_exists($objSoapObject, 'UsuariosAnalisisId'))
				$objToReturn->intUsuariosAnalisisId = $objSoapObject->UsuariosAnalisisId;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, UsuariosAnalisis::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objUsuarios)
				$objObject->objUsuarios = Usuarios::GetSoapObjectFromObject($objObject->objUsuarios, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intUsuariosId = null;
			if ($objObject->objAnalisis)
				$objObject->objAnalisis = Analisis::GetSoapObjectFromObject($objObject->objAnalisis, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intAnalisisId = null;
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

	class QQNodeUsuariosAnalisis extends QQNode {
		protected $strTableName = 'usuarios_analisis';
		protected $strPrimaryKey = 'usuarios_analisis_id';
		protected $strClassName = 'UsuariosAnalisis';
		public function __get($strName) {
			switch ($strName) {
				case 'UsuariosId':
					return new QQNode('usuarios_id', 'UsuariosId', 'integer', $this);
				case 'Usuarios':
					return new QQNodeUsuarios('usuarios_id', 'Usuarios', 'integer', $this);
				case 'AnalisisId':
					return new QQNode('analisis_id', 'AnalisisId', 'integer', $this);
				case 'Analisis':
					return new QQNodeAnalisis('analisis_id', 'Analisis', 'integer', $this);
				case 'UsuariosAnalisisId':
					return new QQNode('usuarios_analisis_id', 'UsuariosAnalisisId', 'integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('usuarios_analisis_id', 'UsuariosAnalisisId', 'integer', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}

	class QQReverseReferenceNodeUsuariosAnalisis extends QQReverseReferenceNode {
		protected $strTableName = 'usuarios_analisis';
		protected $strPrimaryKey = 'usuarios_analisis_id';
		protected $strClassName = 'UsuariosAnalisis';
		public function __get($strName) {
			switch ($strName) {
				case 'UsuariosId':
					return new QQNode('usuarios_id', 'UsuariosId', 'integer', $this);
				case 'Usuarios':
					return new QQNodeUsuarios('usuarios_id', 'Usuarios', 'integer', $this);
				case 'AnalisisId':
					return new QQNode('analisis_id', 'AnalisisId', 'integer', $this);
				case 'Analisis':
					return new QQNodeAnalisis('analisis_id', 'Analisis', 'integer', $this);
				case 'UsuariosAnalisisId':
					return new QQNode('usuarios_analisis_id', 'UsuariosAnalisisId', 'integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('usuarios_analisis_id', 'UsuariosAnalisisId', 'integer', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}

?>