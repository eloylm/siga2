<?php
	/**
	 * The abstract MuestrasGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Muestras subclass which
	 * extends this MuestrasGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Muestras class.
	 * 
	 * @package SIGA
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $MuestrasId the value for intMuestrasId (Read-Only PK)
	 * @property string $Detalle the value for strDetalle 
	 * @property string $Observaciones the value for strObservaciones 
	 * @property integer $ClientesId the value for intClientesId 
	 * @property boolean $Estado the value for blnEstado 
	 * @property integer $UsuariosId the value for intUsuariosId (Not Null)
	 * @property Clientes $Clientes the value for the Clientes object referenced by intClientesId 
	 * @property Usuarios $Usuarios the value for the Usuarios object referenced by intUsuariosId (Not Null)
	 * @property-read OrdenesTrabajo $_OrdenesTrabajo the value for the private _objOrdenesTrabajo (Read-Only) if set due to an expansion on the ordenes_trabajo.muestras_id reverse relationship
	 * @property-read OrdenesTrabajo[] $_OrdenesTrabajoArray the value for the private _objOrdenesTrabajoArray (Read-Only) if set due to an ExpandAsArray on the ordenes_trabajo.muestras_id reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class MuestrasGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column muestras.muestras_id
		 * @var integer intMuestrasId
		 */
		protected $intMuestrasId;
		const MuestrasIdDefault = 'nextval(\'muestras_muestras_id_seq\'::regclass)';


		/**
		 * Protected member variable that maps to the database column muestras.detalle
		 * @var string strDetalle
		 */
		protected $strDetalle;
		const DetalleDefault = null;


		/**
		 * Protected member variable that maps to the database column muestras.observaciones
		 * @var string strObservaciones
		 */
		protected $strObservaciones;
		const ObservacionesDefault = null;


		/**
		 * Protected member variable that maps to the database column muestras.clientes_id
		 * @var integer intClientesId
		 */
		protected $intClientesId;
		const ClientesIdDefault = null;


		/**
		 * Protected member variable that maps to the database column muestras.estado
		 * @var boolean blnEstado
		 */
		protected $blnEstado;
		const EstadoDefault = null;


		/**
		 * Protected member variable that maps to the database column muestras.usuarios_id
		 * @var integer intUsuariosId
		 */
		protected $intUsuariosId;
		const UsuariosIdDefault = null;


		/**
		 * Private member variable that stores a reference to a single OrdenesTrabajo object
		 * (of type OrdenesTrabajo), if this Muestras object was restored with
		 * an expansion on the ordenes_trabajo association table.
		 * @var OrdenesTrabajo _objOrdenesTrabajo;
		 */
		private $_objOrdenesTrabajo;

		/**
		 * Private member variable that stores a reference to an array of OrdenesTrabajo objects
		 * (of type OrdenesTrabajo[]), if this Muestras object was restored with
		 * an ExpandAsArray on the ordenes_trabajo association table.
		 * @var OrdenesTrabajo[] _objOrdenesTrabajoArray;
		 */
		private $_objOrdenesTrabajoArray = array();

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
		 * in the database column muestras.clientes_id.
		 *
		 * NOTE: Always use the Clientes property getter to correctly retrieve this Clientes object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Clientes objClientes
		 */
		protected $objClientes;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column muestras.usuarios_id.
		 *
		 * NOTE: Always use the Usuarios property getter to correctly retrieve this Usuarios object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Usuarios objUsuarios
		 */
		protected $objUsuarios;





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
		 * Load a Muestras from PK Info
		 * @param integer $intMuestrasId
		 * @return Muestras
		 */
		public static function Load($intMuestrasId) {
			// Use QuerySingle to Perform the Query
			return Muestras::QuerySingle(
				QQ::Equal(QQN::Muestras()->MuestrasId, $intMuestrasId)
			);
		}

		/**
		 * Load all Muestrases
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Muestras[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Muestras::QueryArray to perform the LoadAll query
			try {
				return Muestras::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Muestrases
		 * @return int
		 */
		public static function CountAll() {
			// Call Muestras::QueryCount to perform the CountAll query
			return Muestras::QueryCount(QQ::All());
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
			$objDatabase = Muestras::GetDatabase();

			// Create/Build out the QueryBuilder object with Muestras-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'muestras');
			Muestras::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('muestras');

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
		 * Static Qcubed Query method to query for a single Muestras object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Muestras the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Muestras::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new Muestras object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Muestras::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
					if ($objItem)
						$objToReturn[] = $objItem;					
				}			
				// Since we only want the object to return, lets return the object and not the array.
				return $objToReturn[0];
			} else {
				// No expands just return the first row
				$objToReturn = null;
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn = Muestras::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
			
			return $objToReturn;
		}

		/**
		 * Static Qcubed Query method to query for an array of Muestras objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Muestras[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Muestras::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Muestras::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of Muestras objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Muestras::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Muestras::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'muestras_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with Muestras-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				Muestras::GetSelectFields($objQueryBuilder);
				Muestras::GetFromFields($objQueryBuilder);

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
			return Muestras::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Muestras
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'muestras';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'muestras_id', $strAliasPrefix . 'muestras_id');
			$objBuilder->AddSelectItem($strTableName, 'detalle', $strAliasPrefix . 'detalle');
			$objBuilder->AddSelectItem($strTableName, 'observaciones', $strAliasPrefix . 'observaciones');
			$objBuilder->AddSelectItem($strTableName, 'clientes_id', $strAliasPrefix . 'clientes_id');
			$objBuilder->AddSelectItem($strTableName, 'estado', $strAliasPrefix . 'estado');
			$objBuilder->AddSelectItem($strTableName, 'usuarios_id', $strAliasPrefix . 'usuarios_id');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Muestras from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Muestras::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Muestras
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'muestras_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {            
					if ($objPreviousItem->intMuestrasId == $objDbRow->GetColumn($strAliasName, 'Integer')) {        
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'muestras__';


						// Expanding reverse references: OrdenesTrabajo
						$strAlias = $strAliasPrefix . 'ordenestrabajo__ordenes_trabajo_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objOrdenesTrabajoArray)) {
								$objPreviousChildItems = $objPreviousItem->_objOrdenesTrabajoArray;
								$objChildItem = OrdenesTrabajo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ordenestrabajo__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objOrdenesTrabajoArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objOrdenesTrabajoArray[] = OrdenesTrabajo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ordenestrabajo__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'muestras__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Muestras object
			$objToReturn = new Muestras();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'muestras_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'muestras_id'] : $strAliasPrefix . 'muestras_id';
			$objToReturn->intMuestrasId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'detalle', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'detalle'] : $strAliasPrefix . 'detalle';
			$objToReturn->strDetalle = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'observaciones', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'observaciones'] : $strAliasPrefix . 'observaciones';
			$objToReturn->strObservaciones = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'clientes_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'clientes_id'] : $strAliasPrefix . 'clientes_id';
			$objToReturn->intClientesId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'estado', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'estado'] : $strAliasPrefix . 'estado';
			$objToReturn->blnEstado = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAliasName = array_key_exists($strAliasPrefix . 'usuarios_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'usuarios_id'] : $strAliasPrefix . 'usuarios_id';
			$objToReturn->intUsuariosId = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->MuestrasId != $objPreviousItem->MuestrasId) {
						continue;
					}
					if (array_diff($objPreviousItem->_objOrdenesTrabajoArray, $objToReturn->_objOrdenesTrabajoArray) != null) {
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
				$strAliasPrefix = 'muestras__';

			// Check for Clientes Early Binding
			$strAlias = $strAliasPrefix . 'clientes_id__clientes_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objClientes = Clientes::InstantiateDbRow($objDbRow, $strAliasPrefix . 'clientes_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for Usuarios Early Binding
			$strAlias = $strAliasPrefix . 'usuarios_id__usuarios_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objUsuarios = Usuarios::InstantiateDbRow($objDbRow, $strAliasPrefix . 'usuarios_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for OrdenesTrabajo Virtual Binding
			$strAlias = $strAliasPrefix . 'ordenestrabajo__ordenes_trabajo_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objOrdenesTrabajoArray[] = OrdenesTrabajo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ordenestrabajo__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objOrdenesTrabajo = OrdenesTrabajo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ordenestrabajo__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Muestrases from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Muestras[]
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
					$objItem = Muestras::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Muestras::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Muestras object,
		 * by MuestrasId Index(es)
		 * @param integer $intMuestrasId
		 * @return Muestras
		*/
		public static function LoadByMuestrasId($intMuestrasId) {
			return Muestras::QuerySingle(
				QQ::Equal(QQN::Muestras()->MuestrasId, $intMuestrasId)
			);
		}
			
		/**
		 * Load an array of Muestras objects,
		 * by ClientesId Index(es)
		 * @param integer $intClientesId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Muestras[]
		*/
		public static function LoadArrayByClientesId($intClientesId, $objOptionalClauses = null) {
			// Call Muestras::QueryArray to perform the LoadArrayByClientesId query
			try {
				return Muestras::QueryArray(
					QQ::Equal(QQN::Muestras()->ClientesId, $intClientesId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Muestrases
		 * by ClientesId Index(es)
		 * @param integer $intClientesId
		 * @return int
		*/
		public static function CountByClientesId($intClientesId) {
			// Call Muestras::QueryCount to perform the CountByClientesId query
			return Muestras::QueryCount(
				QQ::Equal(QQN::Muestras()->ClientesId, $intClientesId)
			);
		}
			
		/**
		 * Load an array of Muestras objects,
		 * by UsuariosId Index(es)
		 * @param integer $intUsuariosId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Muestras[]
		*/
		public static function LoadArrayByUsuariosId($intUsuariosId, $objOptionalClauses = null) {
			// Call Muestras::QueryArray to perform the LoadArrayByUsuariosId query
			try {
				return Muestras::QueryArray(
					QQ::Equal(QQN::Muestras()->UsuariosId, $intUsuariosId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Muestrases
		 * by UsuariosId Index(es)
		 * @param integer $intUsuariosId
		 * @return int
		*/
		public static function CountByUsuariosId($intUsuariosId) {
			// Call Muestras::QueryCount to perform the CountByUsuariosId query
			return Muestras::QueryCount(
				QQ::Equal(QQN::Muestras()->UsuariosId, $intUsuariosId)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Muestras
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Muestras::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO "muestras" (
							"detalle",
							"observaciones",
							"clientes_id",
							"estado",
							"usuarios_id"
						) VALUES (
							' . $objDatabase->SqlVariable($this->strDetalle) . ',
							' . $objDatabase->SqlVariable($this->strObservaciones) . ',
							' . $objDatabase->SqlVariable($this->intClientesId) . ',
							' . $objDatabase->SqlVariable($this->blnEstado) . ',
							' . $objDatabase->SqlVariable($this->intUsuariosId) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intMuestrasId = $objDatabase->InsertId('muestras', 'muestras_id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							"muestras"
						SET
							"detalle" = ' . $objDatabase->SqlVariable($this->strDetalle) . ',
							"observaciones" = ' . $objDatabase->SqlVariable($this->strObservaciones) . ',
							"clientes_id" = ' . $objDatabase->SqlVariable($this->intClientesId) . ',
							"estado" = ' . $objDatabase->SqlVariable($this->blnEstado) . ',
							"usuarios_id" = ' . $objDatabase->SqlVariable($this->intUsuariosId) . '
						WHERE
							"muestras_id" = ' . $objDatabase->SqlVariable($this->intMuestrasId) . '
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
		 * Delete this Muestras
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intMuestrasId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Muestras with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Muestras::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"muestras"
				WHERE
					"muestras_id" = ' . $objDatabase->SqlVariable($this->intMuestrasId) . '');
		}

		/**
		 * Delete all Muestrases
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Muestras::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					"muestras"');
		}

		/**
		 * Truncate muestras table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Muestras::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE "muestras"');
		}

		/**
		 * Reload this Muestras from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Muestras object.');

			// Reload the Object
			$objReloaded = Muestras::Load($this->intMuestrasId);

			// Update $this's local variables to match
			$this->strDetalle = $objReloaded->strDetalle;
			$this->strObservaciones = $objReloaded->strObservaciones;
			$this->ClientesId = $objReloaded->ClientesId;
			$this->blnEstado = $objReloaded->blnEstado;
			$this->UsuariosId = $objReloaded->UsuariosId;
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
				case 'MuestrasId':
					/**
					 * Gets the value for intMuestrasId (Read-Only PK)
					 * @return integer
					 */
					return $this->intMuestrasId;

				case 'Detalle':
					/**
					 * Gets the value for strDetalle 
					 * @return string
					 */
					return $this->strDetalle;

				case 'Observaciones':
					/**
					 * Gets the value for strObservaciones 
					 * @return string
					 */
					return $this->strObservaciones;

				case 'ClientesId':
					/**
					 * Gets the value for intClientesId 
					 * @return integer
					 */
					return $this->intClientesId;

				case 'Estado':
					/**
					 * Gets the value for blnEstado 
					 * @return boolean
					 */
					return $this->blnEstado;

				case 'UsuariosId':
					/**
					 * Gets the value for intUsuariosId (Not Null)
					 * @return integer
					 */
					return $this->intUsuariosId;


				///////////////////
				// Member Objects
				///////////////////
				case 'Clientes':
					/**
					 * Gets the value for the Clientes object referenced by intClientesId 
					 * @return Clientes
					 */
					try {
						if ((!$this->objClientes) && (!is_null($this->intClientesId)))
							$this->objClientes = Clientes::Load($this->intClientesId);
						return $this->objClientes;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

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


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_OrdenesTrabajo':
					/**
					 * Gets the value for the private _objOrdenesTrabajo (Read-Only)
					 * if set due to an expansion on the ordenes_trabajo.muestras_id reverse relationship
					 * @return OrdenesTrabajo
					 */
					return $this->_objOrdenesTrabajo;

				case '_OrdenesTrabajoArray':
					/**
					 * Gets the value for the private _objOrdenesTrabajoArray (Read-Only)
					 * if set due to an ExpandAsArray on the ordenes_trabajo.muestras_id reverse relationship
					 * @return OrdenesTrabajo[]
					 */
					return (array) $this->_objOrdenesTrabajoArray;


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
				case 'Detalle':
					/**
					 * Sets the value for strDetalle 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDetalle = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Observaciones':
					/**
					 * Sets the value for strObservaciones 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strObservaciones = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ClientesId':
					/**
					 * Sets the value for intClientesId 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objClientes = null;
						return ($this->intClientesId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Estado':
					/**
					 * Sets the value for blnEstado 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnEstado = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

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


				///////////////////
				// Member Objects
				///////////////////
				case 'Clientes':
					/**
					 * Sets the value for the Clientes object referenced by intClientesId 
					 * @param Clientes $mixValue
					 * @return Clientes
					 */
					if (is_null($mixValue)) {
						$this->intClientesId = null;
						$this->objClientes = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Clientes object
						try {
							$mixValue = QType::Cast($mixValue, 'Clientes');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Clientes object
						if (is_null($mixValue->ClientesId))
							throw new QCallerException('Unable to set an unsaved Clientes for this Muestras');

						// Update Local Member Variables
						$this->objClientes = $mixValue;
						$this->intClientesId = $mixValue->ClientesId;

						// Return $mixValue
						return $mixValue;
					}
					break;

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
							throw new QCallerException('Unable to set an unsaved Usuarios for this Muestras');

						// Update Local Member Variables
						$this->objUsuarios = $mixValue;
						$this->intUsuariosId = $mixValue->UsuariosId;

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

			
		
		// Related Objects' Methods for OrdenesTrabajo
		//-------------------------------------------------------------------

		/**
		 * Gets all associated OrdenesTrabajos as an array of OrdenesTrabajo objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return OrdenesTrabajo[]
		*/ 
		public function GetOrdenesTrabajoArray($objOptionalClauses = null) {
			if ((is_null($this->intMuestrasId)))
				return array();

			try {
				return OrdenesTrabajo::LoadArrayByMuestrasId($this->intMuestrasId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated OrdenesTrabajos
		 * @return int
		*/ 
		public function CountOrdenesTrabajos() {
			if ((is_null($this->intMuestrasId)))
				return 0;

			return OrdenesTrabajo::CountByMuestrasId($this->intMuestrasId);
		}

		/**
		 * Associates a OrdenesTrabajo
		 * @param OrdenesTrabajo $objOrdenesTrabajo
		 * @return void
		*/ 
		public function AssociateOrdenesTrabajo(OrdenesTrabajo $objOrdenesTrabajo) {
			if ((is_null($this->intMuestrasId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateOrdenesTrabajo on this unsaved Muestras.');
			if ((is_null($objOrdenesTrabajo->OrdenesTrabajoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateOrdenesTrabajo on this Muestras with an unsaved OrdenesTrabajo.');

			// Get the Database Object for this Class
			$objDatabase = Muestras::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					"ordenes_trabajo"
				SET
					"muestras_id" = ' . $objDatabase->SqlVariable($this->intMuestrasId) . '
				WHERE
					"ordenes_trabajo_id" = ' . $objDatabase->SqlVariable($objOrdenesTrabajo->OrdenesTrabajoId) . '
			');
		}

		/**
		 * Unassociates a OrdenesTrabajo
		 * @param OrdenesTrabajo $objOrdenesTrabajo
		 * @return void
		*/ 
		public function UnassociateOrdenesTrabajo(OrdenesTrabajo $objOrdenesTrabajo) {
			if ((is_null($this->intMuestrasId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrdenesTrabajo on this unsaved Muestras.');
			if ((is_null($objOrdenesTrabajo->OrdenesTrabajoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrdenesTrabajo on this Muestras with an unsaved OrdenesTrabajo.');

			// Get the Database Object for this Class
			$objDatabase = Muestras::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					"ordenes_trabajo"
				SET
					"muestras_id" = null
				WHERE
					"ordenes_trabajo_id" = ' . $objDatabase->SqlVariable($objOrdenesTrabajo->OrdenesTrabajoId) . ' AND
					"muestras_id" = ' . $objDatabase->SqlVariable($this->intMuestrasId) . '
			');
		}

		/**
		 * Unassociates all OrdenesTrabajos
		 * @return void
		*/ 
		public function UnassociateAllOrdenesTrabajos() {
			if ((is_null($this->intMuestrasId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrdenesTrabajo on this unsaved Muestras.');

			// Get the Database Object for this Class
			$objDatabase = Muestras::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					"ordenes_trabajo"
				SET
					"muestras_id" = null
				WHERE
					"muestras_id" = ' . $objDatabase->SqlVariable($this->intMuestrasId) . '
			');
		}

		/**
		 * Deletes an associated OrdenesTrabajo
		 * @param OrdenesTrabajo $objOrdenesTrabajo
		 * @return void
		*/ 
		public function DeleteAssociatedOrdenesTrabajo(OrdenesTrabajo $objOrdenesTrabajo) {
			if ((is_null($this->intMuestrasId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrdenesTrabajo on this unsaved Muestras.');
			if ((is_null($objOrdenesTrabajo->OrdenesTrabajoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrdenesTrabajo on this Muestras with an unsaved OrdenesTrabajo.');

			// Get the Database Object for this Class
			$objDatabase = Muestras::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"ordenes_trabajo"
				WHERE
					"ordenes_trabajo_id" = ' . $objDatabase->SqlVariable($objOrdenesTrabajo->OrdenesTrabajoId) . ' AND
					"muestras_id" = ' . $objDatabase->SqlVariable($this->intMuestrasId) . '
			');
		}

		/**
		 * Deletes all associated OrdenesTrabajos
		 * @return void
		*/ 
		public function DeleteAllOrdenesTrabajos() {
			if ((is_null($this->intMuestrasId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrdenesTrabajo on this unsaved Muestras.');

			// Get the Database Object for this Class
			$objDatabase = Muestras::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"ordenes_trabajo"
				WHERE
					"muestras_id" = ' . $objDatabase->SqlVariable($this->intMuestrasId) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Muestras"><sequence>';
			$strToReturn .= '<element name="MuestrasId" type="xsd:int"/>';
			$strToReturn .= '<element name="Detalle" type="xsd:string"/>';
			$strToReturn .= '<element name="Observaciones" type="xsd:string"/>';
			$strToReturn .= '<element name="Clientes" type="xsd1:Clientes"/>';
			$strToReturn .= '<element name="Estado" type="xsd:boolean"/>';
			$strToReturn .= '<element name="Usuarios" type="xsd1:Usuarios"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Muestras', $strComplexTypeArray)) {
				$strComplexTypeArray['Muestras'] = Muestras::GetSoapComplexTypeXml();
				Clientes::AlterSoapComplexTypeArray($strComplexTypeArray);
				Usuarios::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Muestras::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Muestras();
			if (property_exists($objSoapObject, 'MuestrasId'))
				$objToReturn->intMuestrasId = $objSoapObject->MuestrasId;
			if (property_exists($objSoapObject, 'Detalle'))
				$objToReturn->strDetalle = $objSoapObject->Detalle;
			if (property_exists($objSoapObject, 'Observaciones'))
				$objToReturn->strObservaciones = $objSoapObject->Observaciones;
			if ((property_exists($objSoapObject, 'Clientes')) &&
				($objSoapObject->Clientes))
				$objToReturn->Clientes = Clientes::GetObjectFromSoapObject($objSoapObject->Clientes);
			if (property_exists($objSoapObject, 'Estado'))
				$objToReturn->blnEstado = $objSoapObject->Estado;
			if ((property_exists($objSoapObject, 'Usuarios')) &&
				($objSoapObject->Usuarios))
				$objToReturn->Usuarios = Usuarios::GetObjectFromSoapObject($objSoapObject->Usuarios);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Muestras::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objClientes)
				$objObject->objClientes = Clientes::GetSoapObjectFromObject($objObject->objClientes, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intClientesId = null;
			if ($objObject->objUsuarios)
				$objObject->objUsuarios = Usuarios::GetSoapObjectFromObject($objObject->objUsuarios, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intUsuariosId = null;
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

	class QQNodeMuestras extends QQNode {
		protected $strTableName = 'muestras';
		protected $strPrimaryKey = 'muestras_id';
		protected $strClassName = 'Muestras';
		public function __get($strName) {
			switch ($strName) {
				case 'MuestrasId':
					return new QQNode('muestras_id', 'MuestrasId', 'integer', $this);
				case 'Detalle':
					return new QQNode('detalle', 'Detalle', 'string', $this);
				case 'Observaciones':
					return new QQNode('observaciones', 'Observaciones', 'string', $this);
				case 'ClientesId':
					return new QQNode('clientes_id', 'ClientesId', 'integer', $this);
				case 'Clientes':
					return new QQNodeClientes('clientes_id', 'Clientes', 'integer', $this);
				case 'Estado':
					return new QQNode('estado', 'Estado', 'boolean', $this);
				case 'UsuariosId':
					return new QQNode('usuarios_id', 'UsuariosId', 'integer', $this);
				case 'Usuarios':
					return new QQNodeUsuarios('usuarios_id', 'Usuarios', 'integer', $this);
				case 'OrdenesTrabajo':
					return new QQReverseReferenceNodeOrdenesTrabajo($this, 'ordenestrabajo', 'reverse_reference', 'muestras_id');

				case '_PrimaryKeyNode':
					return new QQNode('muestras_id', 'MuestrasId', 'integer', $this);
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

	class QQReverseReferenceNodeMuestras extends QQReverseReferenceNode {
		protected $strTableName = 'muestras';
		protected $strPrimaryKey = 'muestras_id';
		protected $strClassName = 'Muestras';
		public function __get($strName) {
			switch ($strName) {
				case 'MuestrasId':
					return new QQNode('muestras_id', 'MuestrasId', 'integer', $this);
				case 'Detalle':
					return new QQNode('detalle', 'Detalle', 'string', $this);
				case 'Observaciones':
					return new QQNode('observaciones', 'Observaciones', 'string', $this);
				case 'ClientesId':
					return new QQNode('clientes_id', 'ClientesId', 'integer', $this);
				case 'Clientes':
					return new QQNodeClientes('clientes_id', 'Clientes', 'integer', $this);
				case 'Estado':
					return new QQNode('estado', 'Estado', 'boolean', $this);
				case 'UsuariosId':
					return new QQNode('usuarios_id', 'UsuariosId', 'integer', $this);
				case 'Usuarios':
					return new QQNodeUsuarios('usuarios_id', 'Usuarios', 'integer', $this);
				case 'OrdenesTrabajo':
					return new QQReverseReferenceNodeOrdenesTrabajo($this, 'ordenestrabajo', 'reverse_reference', 'muestras_id');

				case '_PrimaryKeyNode':
					return new QQNode('muestras_id', 'MuestrasId', 'integer', $this);
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