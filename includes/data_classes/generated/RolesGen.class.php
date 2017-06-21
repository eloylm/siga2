<?php
	/**
	 * The abstract RolesGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Roles subclass which
	 * extends this RolesGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Roles class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $RolesId the value for intRolesId (Read-Only PK)
	 * @property string $Descrip the value for strDescrip 
	 * @property string $Comentario the value for strComentario 
	 * @property-read Usuarios $_Usuarios the value for the private _objUsuarios (Read-Only) if set due to an expansion on the usuarios_roles_assn association table
	 * @property-read Usuarios[] $_UsuariosArray the value for the private _objUsuariosArray (Read-Only) if set due to an ExpandAsArray on the usuarios_roles_assn association table
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class RolesGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column roles.roles_id
		 * @var integer intRolesId
		 */
		protected $intRolesId;
		const RolesIdDefault = 'nextval(\'roles_roles_id_seq\'::regclass)';


		/**
		 * Protected member variable that maps to the database column roles.descrip
		 * @var string strDescrip
		 */
		protected $strDescrip;
		const DescripDefault = null;


		/**
		 * Protected member variable that maps to the database column roles.comentario
		 * @var string strComentario
		 */
		protected $strComentario;
		const ComentarioDefault = null;


		/**
		 * Private member variable that stores a reference to a single Usuarios object
		 * (of type Usuarios), if this Roles object was restored with
		 * an expansion on the usuarios_roles_assn association table.
		 * @var Usuarios _objUsuarios;
		 */
		private $_objUsuarios;

		/**
		 * Private member variable that stores a reference to an array of Usuarios objects
		 * (of type Usuarios[]), if this Roles object was restored with
		 * an ExpandAsArray on the usuarios_roles_assn association table.
		 * @var Usuarios[] _objUsuariosArray;
		 */
		private $_objUsuariosArray = array();

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
		 * Load a Roles from PK Info
		 * @param integer $intRolesId
		 * @return Roles
		 */
		public static function Load($intRolesId) {
			// Use QuerySingle to Perform the Query
			return Roles::QuerySingle(
				QQ::Equal(QQN::Roles()->RolesId, $intRolesId)
			);
		}

		/**
		 * Load all Roleses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Roles[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Roles::QueryArray to perform the LoadAll query
			try {
				return Roles::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Roleses
		 * @return int
		 */
		public static function CountAll() {
			// Call Roles::QueryCount to perform the CountAll query
			return Roles::QueryCount(QQ::All());
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
			$objDatabase = Roles::GetDatabase();

			// Create/Build out the QueryBuilder object with Roles-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'roles');
			Roles::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('roles');

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
		 * Static Qcubed Query method to query for a single Roles object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Roles the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Roles::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new Roles object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Roles::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
					if ($objItem)
						$objToReturn[] = $objItem;					
				}			
				// Since we only want the object to return, lets return the object and not the array.
				return $objToReturn[0];
			} else {
				// No expands just return the first row
				$objToReturn = null;
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn = Roles::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
			
			return $objToReturn;
		}

		/**
		 * Static Qcubed Query method to query for an array of Roles objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Roles[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Roles::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Roles::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of Roles objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Roles::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Roles::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'roles_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with Roles-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				Roles::GetSelectFields($objQueryBuilder);
				Roles::GetFromFields($objQueryBuilder);

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
			return Roles::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Roles
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'roles';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'roles_id', $strAliasPrefix . 'roles_id');
			$objBuilder->AddSelectItem($strTableName, 'descrip', $strAliasPrefix . 'descrip');
			$objBuilder->AddSelectItem($strTableName, 'comentario', $strAliasPrefix . 'comentario');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Roles from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Roles::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Roles
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'roles_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {            
					if ($objPreviousItem->intRolesId == $objDbRow->GetColumn($strAliasName, 'Integer')) {        
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'roles__';

						// Expanding many-to-many references: Usuarios
						$strAlias = $strAliasPrefix . 'usuarios__usuarios_id__usuarios_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objUsuariosArray)) {
								$objPreviousChildItems = $objPreviousItem->_objUsuariosArray;
								$objChildItem = Usuarios::InstantiateDbRow($objDbRow, $strAliasPrefix . 'usuarios__usuarios_id__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objUsuariosArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objUsuariosArray[] = Usuarios::InstantiateDbRow($objDbRow, $strAliasPrefix . 'usuarios__usuarios_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}


						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'roles__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Roles object
			$objToReturn = new Roles();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'roles_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'roles_id'] : $strAliasPrefix . 'roles_id';
			$objToReturn->intRolesId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'descrip', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'descrip'] : $strAliasPrefix . 'descrip';
			$objToReturn->strDescrip = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'comentario', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'comentario'] : $strAliasPrefix . 'comentario';
			$objToReturn->strComentario = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->RolesId != $objPreviousItem->RolesId) {
						continue;
					}
					if (array_diff($objPreviousItem->_objUsuariosArray, $objToReturn->_objUsuariosArray) != null) {
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
				$strAliasPrefix = 'roles__';



			// Check for Usuarios Virtual Binding
			$strAlias = $strAliasPrefix . 'usuarios__usuarios_id__usuarios_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objUsuariosArray[] = Usuarios::InstantiateDbRow($objDbRow, $strAliasPrefix . 'usuarios__usuarios_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objUsuarios = Usuarios::InstantiateDbRow($objDbRow, $strAliasPrefix . 'usuarios__usuarios_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}


			return $objToReturn;
		}

		/**
		 * Instantiate an array of Roleses from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Roles[]
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
					$objItem = Roles::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Roles::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Roles object,
		 * by RolesId Index(es)
		 * @param integer $intRolesId
		 * @return Roles
		*/
		public static function LoadByRolesId($intRolesId) {
			return Roles::QuerySingle(
				QQ::Equal(QQN::Roles()->RolesId, $intRolesId)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////
			/**
		 * Load an array of Usuarios objects for a given Usuarios
		 * via the usuarios_roles_assn table
		 * @param integer $intUsuariosId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Roles[]
		*/
		public static function LoadArrayByUsuarios($intUsuariosId, $objOptionalClauses = null) {
			// Call Roles::QueryArray to perform the LoadArrayByUsuarios query
			try {
				return Roles::QueryArray(
					QQ::Equal(QQN::Roles()->Usuarios->UsuariosId, $intUsuariosId),
					$objOptionalClauses
				);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Roleses for a given Usuarios
		 * via the usuarios_roles_assn table
		 * @param integer $intUsuariosId
		 * @return int
		*/
		public static function CountByUsuarios($intUsuariosId) {
			return Roles::QueryCount(
				QQ::Equal(QQN::Roles()->Usuarios->UsuariosId, $intUsuariosId)
			);
		}




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Roles
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Roles::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO "roles" (
							"descrip",
							"comentario"
						) VALUES (
							' . $objDatabase->SqlVariable($this->strDescrip) . ',
							' . $objDatabase->SqlVariable($this->strComentario) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intRolesId = $objDatabase->InsertId('roles', 'roles_id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							"roles"
						SET
							"descrip" = ' . $objDatabase->SqlVariable($this->strDescrip) . ',
							"comentario" = ' . $objDatabase->SqlVariable($this->strComentario) . '
						WHERE
							"roles_id" = ' . $objDatabase->SqlVariable($this->intRolesId) . '
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
		 * Delete this Roles
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intRolesId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Roles with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Roles::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"roles"
				WHERE
					"roles_id" = ' . $objDatabase->SqlVariable($this->intRolesId) . '');
		}

		/**
		 * Delete all Roleses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Roles::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					"roles"');
		}

		/**
		 * Truncate roles table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Roles::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE "roles"');
		}

		/**
		 * Reload this Roles from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Roles object.');

			// Reload the Object
			$objReloaded = Roles::Load($this->intRolesId);

			// Update $this's local variables to match
			$this->strDescrip = $objReloaded->strDescrip;
			$this->strComentario = $objReloaded->strComentario;
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
				case 'RolesId':
					/**
					 * Gets the value for intRolesId (Read-Only PK)
					 * @return integer
					 */
					return $this->intRolesId;

				case 'Descrip':
					/**
					 * Gets the value for strDescrip 
					 * @return string
					 */
					return $this->strDescrip;

				case 'Comentario':
					/**
					 * Gets the value for strComentario 
					 * @return string
					 */
					return $this->strComentario;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_Usuarios':
					/**
					 * Gets the value for the private _objUsuarios (Read-Only)
					 * if set due to an expansion on the usuarios_roles_assn association table
					 * @return Usuarios
					 */
					return $this->_objUsuarios;

				case '_UsuariosArray':
					/**
					 * Gets the value for the private _objUsuariosArray (Read-Only)
					 * if set due to an ExpandAsArray on the usuarios_roles_assn association table
					 * @return Usuarios[]
					 */
					return (array) $this->_objUsuariosArray;


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
				case 'Descrip':
					/**
					 * Sets the value for strDescrip 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDescrip = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Comentario':
					/**
					 * Sets the value for strComentario 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strComentario = QType::Cast($mixValue, QType::String));
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

			
		// Related Many-to-Many Objects' Methods for Usuarios
		//-------------------------------------------------------------------

		/**
		 * Gets all many-to-many associated Usuarioses as an array of Usuarios objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Usuarios[]
		*/ 
		public function GetUsuariosArray($objOptionalClauses = null) {
			if ((is_null($this->intRolesId)))
				return array();

			try {
				return Usuarios::LoadArrayByRoles($this->intRolesId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all many-to-many associated Usuarioses
		 * @return int
		*/ 
		public function CountUsuarioses() {
			if ((is_null($this->intRolesId)))
				return 0;

			return Usuarios::CountByRoles($this->intRolesId);
		}

		/**
		 * Checks to see if an association exists with a specific Usuarios
		 * @param Usuarios $objUsuarios
		 * @return bool
		*/
		public function IsUsuariosAssociated(Usuarios $objUsuarios) {
			if ((is_null($this->intRolesId)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsUsuariosAssociated on this unsaved Roles.');
			if ((is_null($objUsuarios->UsuariosId)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsUsuariosAssociated on this Roles with an unsaved Usuarios.');

			$intRowCount = Roles::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::Roles()->RolesId, $this->intRolesId),
					QQ::Equal(QQN::Roles()->Usuarios->UsuariosId, $objUsuarios->UsuariosId)
				)
			);

			return ($intRowCount > 0);
		}

		/**
		 * Associates a Usuarios
		 * @param Usuarios $objUsuarios
		 * @return void
		*/ 
		public function AssociateUsuarios(Usuarios $objUsuarios) {
			if ((is_null($this->intRolesId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateUsuarios on this unsaved Roles.');
			if ((is_null($objUsuarios->UsuariosId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateUsuarios on this Roles with an unsaved Usuarios.');

			// Get the Database Object for this Class
			$objDatabase = Roles::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				INSERT INTO "usuarios_roles_assn" (
					"roles_id",
					"usuarios_id"
				) VALUES (
					' . $objDatabase->SqlVariable($this->intRolesId) . ',
					' . $objDatabase->SqlVariable($objUsuarios->UsuariosId) . '
				)
			');
		}

		/**
		 * Unassociates a Usuarios
		 * @param Usuarios $objUsuarios
		 * @return void
		*/ 
		public function UnassociateUsuarios(Usuarios $objUsuarios) {
			if ((is_null($this->intRolesId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUsuarios on this unsaved Roles.');
			if ((is_null($objUsuarios->UsuariosId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUsuarios on this Roles with an unsaved Usuarios.');

			// Get the Database Object for this Class
			$objDatabase = Roles::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"usuarios_roles_assn"
				WHERE
					"roles_id" = ' . $objDatabase->SqlVariable($this->intRolesId) . ' AND
					"usuarios_id" = ' . $objDatabase->SqlVariable($objUsuarios->UsuariosId) . '
			');
		}

		/**
		 * Unassociates all Usuarioses
		 * @return void
		*/ 
		public function UnassociateAllUsuarioses() {
			if ((is_null($this->intRolesId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllUsuariosArray on this unsaved Roles.');

			// Get the Database Object for this Class
			$objDatabase = Roles::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"usuarios_roles_assn"
				WHERE
					"roles_id" = ' . $objDatabase->SqlVariable($this->intRolesId) . '
			');
		}




		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Roles"><sequence>';
			$strToReturn .= '<element name="RolesId" type="xsd:int"/>';
			$strToReturn .= '<element name="Descrip" type="xsd:string"/>';
			$strToReturn .= '<element name="Comentario" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Roles', $strComplexTypeArray)) {
				$strComplexTypeArray['Roles'] = Roles::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Roles::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Roles();
			if (property_exists($objSoapObject, 'RolesId'))
				$objToReturn->intRolesId = $objSoapObject->RolesId;
			if (property_exists($objSoapObject, 'Descrip'))
				$objToReturn->strDescrip = $objSoapObject->Descrip;
			if (property_exists($objSoapObject, 'Comentario'))
				$objToReturn->strComentario = $objSoapObject->Comentario;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Roles::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

	class QQNodeRolesUsuarios extends QQAssociationNode {
		protected $strType = 'association';
		protected $strName = 'usuarios';

		protected $strTableName = 'usuarios_roles_assn';
		protected $strPrimaryKey = 'roles_id';
		protected $strClassName = 'Usuarios';

		public function __get($strName) {
			switch ($strName) {
				case 'UsuariosId':
					return new QQNode('usuarios_id', 'UsuariosId', 'integer', $this);
				case 'Usuarios':
					return new QQNodeUsuarios('usuarios_id', 'UsuariosId', 'integer', $this);
				case '_ChildTableNode':
					return new QQNodeUsuarios('usuarios_id', 'UsuariosId', 'integer', $this);
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

	class QQNodeRoles extends QQNode {
		protected $strTableName = 'roles';
		protected $strPrimaryKey = 'roles_id';
		protected $strClassName = 'Roles';
		public function __get($strName) {
			switch ($strName) {
				case 'RolesId':
					return new QQNode('roles_id', 'RolesId', 'integer', $this);
				case 'Descrip':
					return new QQNode('descrip', 'Descrip', 'string', $this);
				case 'Comentario':
					return new QQNode('comentario', 'Comentario', 'string', $this);
				case 'Usuarios':
					return new QQNodeRolesUsuarios($this);

				case '_PrimaryKeyNode':
					return new QQNode('roles_id', 'RolesId', 'integer', $this);
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

	class QQReverseReferenceNodeRoles extends QQReverseReferenceNode {
		protected $strTableName = 'roles';
		protected $strPrimaryKey = 'roles_id';
		protected $strClassName = 'Roles';
		public function __get($strName) {
			switch ($strName) {
				case 'RolesId':
					return new QQNode('roles_id', 'RolesId', 'integer', $this);
				case 'Descrip':
					return new QQNode('descrip', 'Descrip', 'string', $this);
				case 'Comentario':
					return new QQNode('comentario', 'Comentario', 'string', $this);
				case 'Usuarios':
					return new QQNodeRolesUsuarios($this);

				case '_PrimaryKeyNode':
					return new QQNode('roles_id', 'RolesId', 'integer', $this);
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