<?php
	/**
	 * The abstract UnidadesGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Unidades subclass which
	 * extends this UnidadesGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Unidades class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $UnidadId the value for intUnidadId (Read-Only PK)
	 * @property string $Nombre the value for strNombre (Not Null)
	 * @property-read Analisis $_Analisis the value for the private _objAnalisis (Read-Only) if set due to an expansion on the analisis_unidades_assn association table
	 * @property-read Analisis[] $_AnalisisArray the value for the private _objAnalisisArray (Read-Only) if set due to an ExpandAsArray on the analisis_unidades_assn association table
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class UnidadesGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column unidades.unidad_id
		 * @var integer intUnidadId
		 */
		protected $intUnidadId;
		const UnidadIdDefault = 'nextval(\'unidades_unidad_id_seq\'::regclass)';


		/**
		 * Protected member variable that maps to the database column unidades.nombre
		 * @var string strNombre
		 */
		protected $strNombre;
		const NombreDefault = null;


		/**
		 * Private member variable that stores a reference to a single Analisis object
		 * (of type Analisis), if this Unidades object was restored with
		 * an expansion on the analisis_unidades_assn association table.
		 * @var Analisis _objAnalisis;
		 */
		private $_objAnalisis;

		/**
		 * Private member variable that stores a reference to an array of Analisis objects
		 * (of type Analisis[]), if this Unidades object was restored with
		 * an ExpandAsArray on the analisis_unidades_assn association table.
		 * @var Analisis[] _objAnalisisArray;
		 */
		private $_objAnalisisArray = array();

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
		 * Load a Unidades from PK Info
		 * @param integer $intUnidadId
		 * @return Unidades
		 */
		public static function Load($intUnidadId) {
			// Use QuerySingle to Perform the Query
			return Unidades::QuerySingle(
				QQ::Equal(QQN::Unidades()->UnidadId, $intUnidadId)
			);
		}

		/**
		 * Load all Unidadeses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Unidades[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Unidades::QueryArray to perform the LoadAll query
			try {
				return Unidades::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Unidadeses
		 * @return int
		 */
		public static function CountAll() {
			// Call Unidades::QueryCount to perform the CountAll query
			return Unidades::QueryCount(QQ::All());
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
			$objDatabase = Unidades::GetDatabase();

			// Create/Build out the QueryBuilder object with Unidades-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'unidades');
			Unidades::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('unidades');

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
		 * Static Qcubed Query method to query for a single Unidades object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Unidades the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Unidades::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new Unidades object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Unidades::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
					if ($objItem)
						$objToReturn[] = $objItem;					
				}			
				// Since we only want the object to return, lets return the object and not the array.
				return $objToReturn[0];
			} else {
				// No expands just return the first row
				$objToReturn = null;
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn = Unidades::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
			
			return $objToReturn;
		}

		/**
		 * Static Qcubed Query method to query for an array of Unidades objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Unidades[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Unidades::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Unidades::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of Unidades objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Unidades::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Unidades::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'unidades_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with Unidades-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				Unidades::GetSelectFields($objQueryBuilder);
				Unidades::GetFromFields($objQueryBuilder);

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
			return Unidades::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Unidades
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'unidades';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'unidad_id', $strAliasPrefix . 'unidad_id');
			$objBuilder->AddSelectItem($strTableName, 'nombre', $strAliasPrefix . 'nombre');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Unidades from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Unidades::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Unidades
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'unidad_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {            
					if ($objPreviousItem->intUnidadId == $objDbRow->GetColumn($strAliasName, 'Integer')) {        
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'unidades__';

						// Expanding many-to-many references: Analisis
						$strAlias = $strAliasPrefix . 'analisis__analisis_id__analisis_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objAnalisisArray)) {
								$objPreviousChildItems = $objPreviousItem->_objAnalisisArray;
								$objChildItem = Analisis::InstantiateDbRow($objDbRow, $strAliasPrefix . 'analisis__analisis_id__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objAnalisisArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objAnalisisArray[] = Analisis::InstantiateDbRow($objDbRow, $strAliasPrefix . 'analisis__analisis_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}


						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'unidades__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Unidades object
			$objToReturn = new Unidades();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'unidad_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'unidad_id'] : $strAliasPrefix . 'unidad_id';
			$objToReturn->intUnidadId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'nombre', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nombre'] : $strAliasPrefix . 'nombre';
			$objToReturn->strNombre = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->UnidadId != $objPreviousItem->UnidadId) {
						continue;
					}
					if (array_diff($objPreviousItem->_objAnalisisArray, $objToReturn->_objAnalisisArray) != null) {
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
				$strAliasPrefix = 'unidades__';



			// Check for Analisis Virtual Binding
			$strAlias = $strAliasPrefix . 'analisis__analisis_id__analisis_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objAnalisisArray[] = Analisis::InstantiateDbRow($objDbRow, $strAliasPrefix . 'analisis__analisis_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objAnalisis = Analisis::InstantiateDbRow($objDbRow, $strAliasPrefix . 'analisis__analisis_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}


			return $objToReturn;
		}

		/**
		 * Instantiate an array of Unidadeses from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Unidades[]
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
					$objItem = Unidades::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Unidades::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Unidades object,
		 * by UnidadId Index(es)
		 * @param integer $intUnidadId
		 * @return Unidades
		*/
		public static function LoadByUnidadId($intUnidadId) {
			return Unidades::QuerySingle(
				QQ::Equal(QQN::Unidades()->UnidadId, $intUnidadId)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////
			/**
		 * Load an array of Analisis objects for a given Analisis
		 * via the analisis_unidades_assn table
		 * @param integer $intAnalisisId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Unidades[]
		*/
		public static function LoadArrayByAnalisis($intAnalisisId, $objOptionalClauses = null) {
			// Call Unidades::QueryArray to perform the LoadArrayByAnalisis query
			try {
				return Unidades::QueryArray(
					QQ::Equal(QQN::Unidades()->Analisis->AnalisisId, $intAnalisisId),
					$objOptionalClauses
				);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Unidadeses for a given Analisis
		 * via the analisis_unidades_assn table
		 * @param integer $intAnalisisId
		 * @return int
		*/
		public static function CountByAnalisis($intAnalisisId) {
			return Unidades::QueryCount(
				QQ::Equal(QQN::Unidades()->Analisis->AnalisisId, $intAnalisisId)
			);
		}




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Unidades
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Unidades::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO "unidades" (
							"nombre"
						) VALUES (
							' . $objDatabase->SqlVariable($this->strNombre) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intUnidadId = $objDatabase->InsertId('unidades', 'unidad_id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							"unidades"
						SET
							"nombre" = ' . $objDatabase->SqlVariable($this->strNombre) . '
						WHERE
							"unidad_id" = ' . $objDatabase->SqlVariable($this->intUnidadId) . '
					');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;


			// Return 
			return $mixToReturn;
		}

		/**
		 * Delete this Unidades
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intUnidadId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Unidades with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Unidades::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"unidades"
				WHERE
					"unidad_id" = ' . $objDatabase->SqlVariable($this->intUnidadId) . '');
		}

		/**
		 * Delete all Unidadeses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Unidades::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					"unidades"');
		}

		/**
		 * Truncate unidades table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Unidades::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE "unidades"');
		}

		/**
		 * Reload this Unidades from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Unidades object.');

			// Reload the Object
			$objReloaded = Unidades::Load($this->intUnidadId);

			// Update $this's local variables to match
			$this->strNombre = $objReloaded->strNombre;
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
				case 'UnidadId':
					/**
					 * Gets the value for intUnidadId (Read-Only PK)
					 * @return integer
					 */
					return $this->intUnidadId;

				case 'Nombre':
					/**
					 * Gets the value for strNombre (Not Null)
					 * @return string
					 */
					return $this->strNombre;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_Analisis':
					/**
					 * Gets the value for the private _objAnalisis (Read-Only)
					 * if set due to an expansion on the analisis_unidades_assn association table
					 * @return Analisis
					 */
					return $this->_objAnalisis;

				case '_AnalisisArray':
					/**
					 * Gets the value for the private _objAnalisisArray (Read-Only)
					 * if set due to an ExpandAsArray on the analisis_unidades_assn association table
					 * @return Analisis[]
					 */
					return (array) $this->_objAnalisisArray;


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
				case 'Nombre':
					/**
					 * Sets the value for strNombre (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strNombre = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
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

			
		// Related Many-to-Many Objects' Methods for Analisis
		//-------------------------------------------------------------------

		/**
		 * Gets all many-to-many associated Analisises as an array of Analisis objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Analisis[]
		*/ 
		public function GetAnalisisArray($objOptionalClauses = null) {
			if ((is_null($this->intUnidadId)))
				return array();

			try {
				return Analisis::LoadArrayByUnidades($this->intUnidadId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all many-to-many associated Analisises
		 * @return int
		*/ 
		public function CountAnalisises() {
			if ((is_null($this->intUnidadId)))
				return 0;

			return Analisis::CountByUnidades($this->intUnidadId);
		}

		/**
		 * Checks to see if an association exists with a specific Analisis
		 * @param Analisis $objAnalisis
		 * @return bool
		*/
		public function IsAnalisisAssociated(Analisis $objAnalisis) {
			if ((is_null($this->intUnidadId)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsAnalisisAssociated on this unsaved Unidades.');
			if ((is_null($objAnalisis->AnalisisId)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsAnalisisAssociated on this Unidades with an unsaved Analisis.');

			$intRowCount = Unidades::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::Unidades()->UnidadId, $this->intUnidadId),
					QQ::Equal(QQN::Unidades()->Analisis->AnalisisId, $objAnalisis->AnalisisId)
				)
			);

			return ($intRowCount > 0);
		}

		/**
		 * Associates a Analisis
		 * @param Analisis $objAnalisis
		 * @return void
		*/ 
		public function AssociateAnalisis(Analisis $objAnalisis) {
			if ((is_null($this->intUnidadId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAnalisis on this unsaved Unidades.');
			if ((is_null($objAnalisis->AnalisisId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAnalisis on this Unidades with an unsaved Analisis.');

			// Get the Database Object for this Class
			$objDatabase = Unidades::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				INSERT INTO "analisis_unidades_assn" (
					"unidad_id",
					"analisis_id"
				) VALUES (
					' . $objDatabase->SqlVariable($this->intUnidadId) . ',
					' . $objDatabase->SqlVariable($objAnalisis->AnalisisId) . '
				)
			');
		}

		/**
		 * Unassociates a Analisis
		 * @param Analisis $objAnalisis
		 * @return void
		*/ 
		public function UnassociateAnalisis(Analisis $objAnalisis) {
			if ((is_null($this->intUnidadId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAnalisis on this unsaved Unidades.');
			if ((is_null($objAnalisis->AnalisisId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAnalisis on this Unidades with an unsaved Analisis.');

			// Get the Database Object for this Class
			$objDatabase = Unidades::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"analisis_unidades_assn"
				WHERE
					"unidad_id" = ' . $objDatabase->SqlVariable($this->intUnidadId) . ' AND
					"analisis_id" = ' . $objDatabase->SqlVariable($objAnalisis->AnalisisId) . '
			');
		}

		/**
		 * Unassociates all Analisises
		 * @return void
		*/ 
		public function UnassociateAllAnalisises() {
			if ((is_null($this->intUnidadId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllAnalisisArray on this unsaved Unidades.');

			// Get the Database Object for this Class
			$objDatabase = Unidades::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"analisis_unidades_assn"
				WHERE
					"unidad_id" = ' . $objDatabase->SqlVariable($this->intUnidadId) . '
			');
		}




		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Unidades"><sequence>';
			$strToReturn .= '<element name="UnidadId" type="xsd:int"/>';
			$strToReturn .= '<element name="Nombre" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Unidades', $strComplexTypeArray)) {
				$strComplexTypeArray['Unidades'] = Unidades::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Unidades::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Unidades();
			if (property_exists($objSoapObject, 'UnidadId'))
				$objToReturn->intUnidadId = $objSoapObject->UnidadId;
			if (property_exists($objSoapObject, 'Nombre'))
				$objToReturn->strNombre = $objSoapObject->Nombre;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Unidades::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

	class QQNodeUnidadesAnalisis extends QQAssociationNode {
		protected $strType = 'association';
		protected $strName = 'analisis';

		protected $strTableName = 'analisis_unidades_assn';
		protected $strPrimaryKey = 'unidad_id';
		protected $strClassName = 'Analisis';

		public function __get($strName) {
			switch ($strName) {
				case 'AnalisisId':
					return new QQNode('analisis_id', 'AnalisisId', 'integer', $this);
				case 'Analisis':
					return new QQNodeAnalisis('analisis_id', 'AnalisisId', 'integer', $this);
				case '_ChildTableNode':
					return new QQNodeAnalisis('analisis_id', 'AnalisisId', 'integer', $this);
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

	class QQNodeUnidades extends QQNode {
		protected $strTableName = 'unidades';
		protected $strPrimaryKey = 'unidad_id';
		protected $strClassName = 'Unidades';
		public function __get($strName) {
			switch ($strName) {
				case 'UnidadId':
					return new QQNode('unidad_id', 'UnidadId', 'integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'string', $this);
				case 'Analisis':
					return new QQNodeUnidadesAnalisis($this);

				case '_PrimaryKeyNode':
					return new QQNode('unidad_id', 'UnidadId', 'integer', $this);
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

	class QQReverseReferenceNodeUnidades extends QQReverseReferenceNode {
		protected $strTableName = 'unidades';
		protected $strPrimaryKey = 'unidad_id';
		protected $strClassName = 'Unidades';
		public function __get($strName) {
			switch ($strName) {
				case 'UnidadId':
					return new QQNode('unidad_id', 'UnidadId', 'integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'string', $this);
				case 'Analisis':
					return new QQNodeUnidadesAnalisis($this);

				case '_PrimaryKeyNode':
					return new QQNode('unidad_id', 'UnidadId', 'integer', $this);
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