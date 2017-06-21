<?php
	/**
	 * The abstract ClientesGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Clientes subclass which
	 * extends this ClientesGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Clientes class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $ClientesId the value for intClientesId (Read-Only PK)
	 * @property string $Nombre the value for strNombre 
	 * @property string $Direccion the value for strDireccion 
	 * @property string $Localidad the value for strLocalidad 
	 * @property string $Provincia the value for strProvincia 
	 * @property string $Email the value for strEmail (Not Null)
	 * @property string $ResponsableContacto the value for strResponsableContacto 
	 * @property QDateTime $FechaAlta the value for dttFechaAlta 
	 * @property boolean $Estado the value for blnEstado 
	 * @property string $EmailSecundario the value for strEmailSecundario 
	 * @property string $Telefono the value for strTelefono 
	 * @property-read Muestras $_Muestras the value for the private _objMuestras (Read-Only) if set due to an expansion on the muestras.clientes_id reverse relationship
	 * @property-read Muestras[] $_MuestrasArray the value for the private _objMuestrasArray (Read-Only) if set due to an ExpandAsArray on the muestras.clientes_id reverse relationship
	 * @property-read OrdenesTrabajo $_OrdenesTrabajo the value for the private _objOrdenesTrabajo (Read-Only) if set due to an expansion on the ordenes_trabajo.clientes_id reverse relationship
	 * @property-read OrdenesTrabajo[] $_OrdenesTrabajoArray the value for the private _objOrdenesTrabajoArray (Read-Only) if set due to an ExpandAsArray on the ordenes_trabajo.clientes_id reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class ClientesGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column clientes.clientes_id
		 * @var integer intClientesId
		 */
		protected $intClientesId;
		const ClientesIdDefault = 'nextval(\'clientes_clientes_id_seq\'::regclass)';


		/**
		 * Protected member variable that maps to the database column clientes.nombre
		 * @var string strNombre
		 */
		protected $strNombre;
		const NombreDefault = null;


		/**
		 * Protected member variable that maps to the database column clientes.direccion
		 * @var string strDireccion
		 */
		protected $strDireccion;
		const DireccionDefault = null;


		/**
		 * Protected member variable that maps to the database column clientes.localidad
		 * @var string strLocalidad
		 */
		protected $strLocalidad;
		const LocalidadDefault = null;


		/**
		 * Protected member variable that maps to the database column clientes.provincia
		 * @var string strProvincia
		 */
		protected $strProvincia;
		const ProvinciaDefault = null;


		/**
		 * Protected member variable that maps to the database column clientes.email
		 * @var string strEmail
		 */
		protected $strEmail;
		const EmailDefault = null;


		/**
		 * Protected member variable that maps to the database column clientes.responsable_contacto
		 * @var string strResponsableContacto
		 */
		protected $strResponsableContacto;
		const ResponsableContactoDefault = null;


		/**
		 * Protected member variable that maps to the database column clientes.fecha_alta
		 * @var QDateTime dttFechaAlta
		 */
		protected $dttFechaAlta;
		const FechaAltaDefault = null;


		/**
		 * Protected member variable that maps to the database column clientes.estado
		 * @var boolean blnEstado
		 */
		protected $blnEstado;
		const EstadoDefault = null;


		/**
		 * Protected member variable that maps to the database column clientes.email_secundario
		 * @var string strEmailSecundario
		 */
		protected $strEmailSecundario;
		const EmailSecundarioDefault = null;


		/**
		 * Protected member variable that maps to the database column clientes.telefono
		 * @var string strTelefono
		 */
		protected $strTelefono;
		const TelefonoDefault = null;


		/**
		 * Private member variable that stores a reference to a single Muestras object
		 * (of type Muestras), if this Clientes object was restored with
		 * an expansion on the muestras association table.
		 * @var Muestras _objMuestras;
		 */
		private $_objMuestras;

		/**
		 * Private member variable that stores a reference to an array of Muestras objects
		 * (of type Muestras[]), if this Clientes object was restored with
		 * an ExpandAsArray on the muestras association table.
		 * @var Muestras[] _objMuestrasArray;
		 */
		private $_objMuestrasArray = array();

		/**
		 * Private member variable that stores a reference to a single OrdenesTrabajo object
		 * (of type OrdenesTrabajo), if this Clientes object was restored with
		 * an expansion on the ordenes_trabajo association table.
		 * @var OrdenesTrabajo _objOrdenesTrabajo;
		 */
		private $_objOrdenesTrabajo;

		/**
		 * Private member variable that stores a reference to an array of OrdenesTrabajo objects
		 * (of type OrdenesTrabajo[]), if this Clientes object was restored with
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
		 * Load a Clientes from PK Info
		 * @param integer $intClientesId
		 * @return Clientes
		 */
		public static function Load($intClientesId) {
			// Use QuerySingle to Perform the Query
			return Clientes::QuerySingle(
				QQ::Equal(QQN::Clientes()->ClientesId, $intClientesId)
			);
		}

		/**
		 * Load all Clienteses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Clientes[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Clientes::QueryArray to perform the LoadAll query
			try {
				return Clientes::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Clienteses
		 * @return int
		 */
		public static function CountAll() {
			// Call Clientes::QueryCount to perform the CountAll query
			return Clientes::QueryCount(QQ::All());
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
			$objDatabase = Clientes::GetDatabase();

			// Create/Build out the QueryBuilder object with Clientes-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'clientes');
			Clientes::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('clientes');

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
		 * Static Qcubed Query method to query for a single Clientes object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Clientes the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Clientes::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new Clientes object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Clientes::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
					if ($objItem)
						$objToReturn[] = $objItem;					
				}			
				// Since we only want the object to return, lets return the object and not the array.
				return $objToReturn[0];
			} else {
				// No expands just return the first row
				$objToReturn = null;
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn = Clientes::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
			
			return $objToReturn;
		}

		/**
		 * Static Qcubed Query method to query for an array of Clientes objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Clientes[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Clientes::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Clientes::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of Clientes objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Clientes::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Clientes::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'clientes_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with Clientes-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				Clientes::GetSelectFields($objQueryBuilder);
				Clientes::GetFromFields($objQueryBuilder);

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
			return Clientes::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Clientes
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'clientes';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'clientes_id', $strAliasPrefix . 'clientes_id');
			$objBuilder->AddSelectItem($strTableName, 'nombre', $strAliasPrefix . 'nombre');
			$objBuilder->AddSelectItem($strTableName, 'direccion', $strAliasPrefix . 'direccion');
			$objBuilder->AddSelectItem($strTableName, 'localidad', $strAliasPrefix . 'localidad');
			$objBuilder->AddSelectItem($strTableName, 'provincia', $strAliasPrefix . 'provincia');
			$objBuilder->AddSelectItem($strTableName, 'email', $strAliasPrefix . 'email');
			$objBuilder->AddSelectItem($strTableName, 'responsable_contacto', $strAliasPrefix . 'responsable_contacto');
			$objBuilder->AddSelectItem($strTableName, 'fecha_alta', $strAliasPrefix . 'fecha_alta');
			$objBuilder->AddSelectItem($strTableName, 'estado', $strAliasPrefix . 'estado');
			$objBuilder->AddSelectItem($strTableName, 'email_secundario', $strAliasPrefix . 'email_secundario');
			$objBuilder->AddSelectItem($strTableName, 'telefono', $strAliasPrefix . 'telefono');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Clientes from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Clientes::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Clientes
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'clientes_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {            
					if ($objPreviousItem->intClientesId == $objDbRow->GetColumn($strAliasName, 'Integer')) {        
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'clientes__';


						// Expanding reverse references: Muestras
						$strAlias = $strAliasPrefix . 'muestras__muestras_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objMuestrasArray)) {
								$objPreviousChildItems = $objPreviousItem->_objMuestrasArray;
								$objChildItem = Muestras::InstantiateDbRow($objDbRow, $strAliasPrefix . 'muestras__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objMuestrasArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objMuestrasArray[] = Muestras::InstantiateDbRow($objDbRow, $strAliasPrefix . 'muestras__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

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
						} else if ($strAliasPrefix == 'clientes__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Clientes object
			$objToReturn = new Clientes();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'clientes_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'clientes_id'] : $strAliasPrefix . 'clientes_id';
			$objToReturn->intClientesId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'nombre', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nombre'] : $strAliasPrefix . 'nombre';
			$objToReturn->strNombre = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'direccion', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'direccion'] : $strAliasPrefix . 'direccion';
			$objToReturn->strDireccion = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'localidad', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'localidad'] : $strAliasPrefix . 'localidad';
			$objToReturn->strLocalidad = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'provincia', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'provincia'] : $strAliasPrefix . 'provincia';
			$objToReturn->strProvincia = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'email', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'email'] : $strAliasPrefix . 'email';
			$objToReturn->strEmail = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'responsable_contacto', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'responsable_contacto'] : $strAliasPrefix . 'responsable_contacto';
			$objToReturn->strResponsableContacto = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'fecha_alta', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'fecha_alta'] : $strAliasPrefix . 'fecha_alta';
			$objToReturn->dttFechaAlta = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAliasName = array_key_exists($strAliasPrefix . 'estado', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'estado'] : $strAliasPrefix . 'estado';
			$objToReturn->blnEstado = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAliasName = array_key_exists($strAliasPrefix . 'email_secundario', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'email_secundario'] : $strAliasPrefix . 'email_secundario';
			$objToReturn->strEmailSecundario = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'telefono', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'telefono'] : $strAliasPrefix . 'telefono';
			$objToReturn->strTelefono = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->ClientesId != $objPreviousItem->ClientesId) {
						continue;
					}
					if (array_diff($objPreviousItem->_objMuestrasArray, $objToReturn->_objMuestrasArray) != null) {
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
				$strAliasPrefix = 'clientes__';




			// Check for Muestras Virtual Binding
			$strAlias = $strAliasPrefix . 'muestras__muestras_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objMuestrasArray[] = Muestras::InstantiateDbRow($objDbRow, $strAliasPrefix . 'muestras__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objMuestras = Muestras::InstantiateDbRow($objDbRow, $strAliasPrefix . 'muestras__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

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
		 * Instantiate an array of Clienteses from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Clientes[]
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
					$objItem = Clientes::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Clientes::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Clientes object,
		 * by ClientesId Index(es)
		 * @param integer $intClientesId
		 * @return Clientes
		*/
		public static function LoadByClientesId($intClientesId) {
			return Clientes::QuerySingle(
				QQ::Equal(QQN::Clientes()->ClientesId, $intClientesId)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Clientes
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Clientes::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO "clientes" (
							"nombre",
							"direccion",
							"localidad",
							"provincia",
							"email",
							"responsable_contacto",
							"fecha_alta",
							"estado",
							"email_secundario",
							"telefono"
						) VALUES (
							' . $objDatabase->SqlVariable($this->strNombre) . ',
							' . $objDatabase->SqlVariable($this->strDireccion) . ',
							' . $objDatabase->SqlVariable($this->strLocalidad) . ',
							' . $objDatabase->SqlVariable($this->strProvincia) . ',
							' . $objDatabase->SqlVariable($this->strEmail) . ',
							' . $objDatabase->SqlVariable($this->strResponsableContacto) . ',
							' . $objDatabase->SqlVariable($this->dttFechaAlta) . ',
							' . $objDatabase->SqlVariable($this->blnEstado) . ',
							' . $objDatabase->SqlVariable($this->strEmailSecundario) . ',
							' . $objDatabase->SqlVariable($this->strTelefono) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intClientesId = $objDatabase->InsertId('clientes', 'clientes_id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							"clientes"
						SET
							"nombre" = ' . $objDatabase->SqlVariable($this->strNombre) . ',
							"direccion" = ' . $objDatabase->SqlVariable($this->strDireccion) . ',
							"localidad" = ' . $objDatabase->SqlVariable($this->strLocalidad) . ',
							"provincia" = ' . $objDatabase->SqlVariable($this->strProvincia) . ',
							"email" = ' . $objDatabase->SqlVariable($this->strEmail) . ',
							"responsable_contacto" = ' . $objDatabase->SqlVariable($this->strResponsableContacto) . ',
							"fecha_alta" = ' . $objDatabase->SqlVariable($this->dttFechaAlta) . ',
							"estado" = ' . $objDatabase->SqlVariable($this->blnEstado) . ',
							"email_secundario" = ' . $objDatabase->SqlVariable($this->strEmailSecundario) . ',
							"telefono" = ' . $objDatabase->SqlVariable($this->strTelefono) . '
						WHERE
							"clientes_id" = ' . $objDatabase->SqlVariable($this->intClientesId) . '
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
		 * Delete this Clientes
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intClientesId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Clientes with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Clientes::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"clientes"
				WHERE
					"clientes_id" = ' . $objDatabase->SqlVariable($this->intClientesId) . '');
		}

		/**
		 * Delete all Clienteses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Clientes::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					"clientes"');
		}

		/**
		 * Truncate clientes table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Clientes::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE "clientes"');
		}

		/**
		 * Reload this Clientes from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Clientes object.');

			// Reload the Object
			$objReloaded = Clientes::Load($this->intClientesId);

			// Update $this's local variables to match
			$this->strNombre = $objReloaded->strNombre;
			$this->strDireccion = $objReloaded->strDireccion;
			$this->strLocalidad = $objReloaded->strLocalidad;
			$this->strProvincia = $objReloaded->strProvincia;
			$this->strEmail = $objReloaded->strEmail;
			$this->strResponsableContacto = $objReloaded->strResponsableContacto;
			$this->dttFechaAlta = $objReloaded->dttFechaAlta;
			$this->blnEstado = $objReloaded->blnEstado;
			$this->strEmailSecundario = $objReloaded->strEmailSecundario;
			$this->strTelefono = $objReloaded->strTelefono;
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
				case 'ClientesId':
					/**
					 * Gets the value for intClientesId (Read-Only PK)
					 * @return integer
					 */
					return $this->intClientesId;

				case 'Nombre':
					/**
					 * Gets the value for strNombre 
					 * @return string
					 */
					return $this->strNombre;

				case 'Direccion':
					/**
					 * Gets the value for strDireccion 
					 * @return string
					 */
					return $this->strDireccion;

				case 'Localidad':
					/**
					 * Gets the value for strLocalidad 
					 * @return string
					 */
					return $this->strLocalidad;

				case 'Provincia':
					/**
					 * Gets the value for strProvincia 
					 * @return string
					 */
					return $this->strProvincia;

				case 'Email':
					/**
					 * Gets the value for strEmail (Not Null)
					 * @return string
					 */
					return $this->strEmail;

				case 'ResponsableContacto':
					/**
					 * Gets the value for strResponsableContacto 
					 * @return string
					 */
					return $this->strResponsableContacto;

				case 'FechaAlta':
					/**
					 * Gets the value for dttFechaAlta 
					 * @return QDateTime
					 */
					return $this->dttFechaAlta;

				case 'Estado':
					/**
					 * Gets the value for blnEstado 
					 * @return boolean
					 */
					return $this->blnEstado;

				case 'EmailSecundario':
					/**
					 * Gets the value for strEmailSecundario 
					 * @return string
					 */
					return $this->strEmailSecundario;

				case 'Telefono':
					/**
					 * Gets the value for strTelefono 
					 * @return string
					 */
					return $this->strTelefono;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_Muestras':
					/**
					 * Gets the value for the private _objMuestras (Read-Only)
					 * if set due to an expansion on the muestras.clientes_id reverse relationship
					 * @return Muestras
					 */
					return $this->_objMuestras;

				case '_MuestrasArray':
					/**
					 * Gets the value for the private _objMuestrasArray (Read-Only)
					 * if set due to an ExpandAsArray on the muestras.clientes_id reverse relationship
					 * @return Muestras[]
					 */
					return (array) $this->_objMuestrasArray;

				case '_OrdenesTrabajo':
					/**
					 * Gets the value for the private _objOrdenesTrabajo (Read-Only)
					 * if set due to an expansion on the ordenes_trabajo.clientes_id reverse relationship
					 * @return OrdenesTrabajo
					 */
					return $this->_objOrdenesTrabajo;

				case '_OrdenesTrabajoArray':
					/**
					 * Gets the value for the private _objOrdenesTrabajoArray (Read-Only)
					 * if set due to an ExpandAsArray on the ordenes_trabajo.clientes_id reverse relationship
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
				case 'Nombre':
					/**
					 * Sets the value for strNombre 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strNombre = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Direccion':
					/**
					 * Sets the value for strDireccion 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDireccion = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Localidad':
					/**
					 * Sets the value for strLocalidad 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strLocalidad = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Provincia':
					/**
					 * Sets the value for strProvincia 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strProvincia = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Email':
					/**
					 * Sets the value for strEmail (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strEmail = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ResponsableContacto':
					/**
					 * Sets the value for strResponsableContacto 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strResponsableContacto = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FechaAlta':
					/**
					 * Sets the value for dttFechaAlta 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttFechaAlta = QType::Cast($mixValue, QType::DateTime));
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

				case 'EmailSecundario':
					/**
					 * Sets the value for strEmailSecundario 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strEmailSecundario = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Telefono':
					/**
					 * Sets the value for strTelefono 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTelefono = QType::Cast($mixValue, QType::String));
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

			
		
		// Related Objects' Methods for Muestras
		//-------------------------------------------------------------------

		/**
		 * Gets all associated Muestrases as an array of Muestras objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Muestras[]
		*/ 
		public function GetMuestrasArray($objOptionalClauses = null) {
			if ((is_null($this->intClientesId)))
				return array();

			try {
				return Muestras::LoadArrayByClientesId($this->intClientesId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated Muestrases
		 * @return int
		*/ 
		public function CountMuestrases() {
			if ((is_null($this->intClientesId)))
				return 0;

			return Muestras::CountByClientesId($this->intClientesId);
		}

		/**
		 * Associates a Muestras
		 * @param Muestras $objMuestras
		 * @return void
		*/ 
		public function AssociateMuestras(Muestras $objMuestras) {
			if ((is_null($this->intClientesId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateMuestras on this unsaved Clientes.');
			if ((is_null($objMuestras->MuestrasId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateMuestras on this Clientes with an unsaved Muestras.');

			// Get the Database Object for this Class
			$objDatabase = Clientes::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					"muestras"
				SET
					"clientes_id" = ' . $objDatabase->SqlVariable($this->intClientesId) . '
				WHERE
					"muestras_id" = ' . $objDatabase->SqlVariable($objMuestras->MuestrasId) . '
			');
		}

		/**
		 * Unassociates a Muestras
		 * @param Muestras $objMuestras
		 * @return void
		*/ 
		public function UnassociateMuestras(Muestras $objMuestras) {
			if ((is_null($this->intClientesId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMuestras on this unsaved Clientes.');
			if ((is_null($objMuestras->MuestrasId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMuestras on this Clientes with an unsaved Muestras.');

			// Get the Database Object for this Class
			$objDatabase = Clientes::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					"muestras"
				SET
					"clientes_id" = null
				WHERE
					"muestras_id" = ' . $objDatabase->SqlVariable($objMuestras->MuestrasId) . ' AND
					"clientes_id" = ' . $objDatabase->SqlVariable($this->intClientesId) . '
			');
		}

		/**
		 * Unassociates all Muestrases
		 * @return void
		*/ 
		public function UnassociateAllMuestrases() {
			if ((is_null($this->intClientesId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMuestras on this unsaved Clientes.');

			// Get the Database Object for this Class
			$objDatabase = Clientes::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					"muestras"
				SET
					"clientes_id" = null
				WHERE
					"clientes_id" = ' . $objDatabase->SqlVariable($this->intClientesId) . '
			');
		}

		/**
		 * Deletes an associated Muestras
		 * @param Muestras $objMuestras
		 * @return void
		*/ 
		public function DeleteAssociatedMuestras(Muestras $objMuestras) {
			if ((is_null($this->intClientesId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMuestras on this unsaved Clientes.');
			if ((is_null($objMuestras->MuestrasId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMuestras on this Clientes with an unsaved Muestras.');

			// Get the Database Object for this Class
			$objDatabase = Clientes::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"muestras"
				WHERE
					"muestras_id" = ' . $objDatabase->SqlVariable($objMuestras->MuestrasId) . ' AND
					"clientes_id" = ' . $objDatabase->SqlVariable($this->intClientesId) . '
			');
		}

		/**
		 * Deletes all associated Muestrases
		 * @return void
		*/ 
		public function DeleteAllMuestrases() {
			if ((is_null($this->intClientesId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMuestras on this unsaved Clientes.');

			// Get the Database Object for this Class
			$objDatabase = Clientes::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"muestras"
				WHERE
					"clientes_id" = ' . $objDatabase->SqlVariable($this->intClientesId) . '
			');
		}

			
		
		// Related Objects' Methods for OrdenesTrabajo
		//-------------------------------------------------------------------

		/**
		 * Gets all associated OrdenesTrabajos as an array of OrdenesTrabajo objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return OrdenesTrabajo[]
		*/ 
		public function GetOrdenesTrabajoArray($objOptionalClauses = null) {
			if ((is_null($this->intClientesId)))
				return array();

			try {
				return OrdenesTrabajo::LoadArrayByClientesId($this->intClientesId, $objOptionalClauses);
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
			if ((is_null($this->intClientesId)))
				return 0;

			return OrdenesTrabajo::CountByClientesId($this->intClientesId);
		}

		/**
		 * Associates a OrdenesTrabajo
		 * @param OrdenesTrabajo $objOrdenesTrabajo
		 * @return void
		*/ 
		public function AssociateOrdenesTrabajo(OrdenesTrabajo $objOrdenesTrabajo) {
			if ((is_null($this->intClientesId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateOrdenesTrabajo on this unsaved Clientes.');
			if ((is_null($objOrdenesTrabajo->OrdenesTrabajoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateOrdenesTrabajo on this Clientes with an unsaved OrdenesTrabajo.');

			// Get the Database Object for this Class
			$objDatabase = Clientes::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					"ordenes_trabajo"
				SET
					"clientes_id" = ' . $objDatabase->SqlVariable($this->intClientesId) . '
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
			if ((is_null($this->intClientesId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrdenesTrabajo on this unsaved Clientes.');
			if ((is_null($objOrdenesTrabajo->OrdenesTrabajoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrdenesTrabajo on this Clientes with an unsaved OrdenesTrabajo.');

			// Get the Database Object for this Class
			$objDatabase = Clientes::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					"ordenes_trabajo"
				SET
					"clientes_id" = null
				WHERE
					"ordenes_trabajo_id" = ' . $objDatabase->SqlVariable($objOrdenesTrabajo->OrdenesTrabajoId) . ' AND
					"clientes_id" = ' . $objDatabase->SqlVariable($this->intClientesId) . '
			');
		}

		/**
		 * Unassociates all OrdenesTrabajos
		 * @return void
		*/ 
		public function UnassociateAllOrdenesTrabajos() {
			if ((is_null($this->intClientesId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrdenesTrabajo on this unsaved Clientes.');

			// Get the Database Object for this Class
			$objDatabase = Clientes::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					"ordenes_trabajo"
				SET
					"clientes_id" = null
				WHERE
					"clientes_id" = ' . $objDatabase->SqlVariable($this->intClientesId) . '
			');
		}

		/**
		 * Deletes an associated OrdenesTrabajo
		 * @param OrdenesTrabajo $objOrdenesTrabajo
		 * @return void
		*/ 
		public function DeleteAssociatedOrdenesTrabajo(OrdenesTrabajo $objOrdenesTrabajo) {
			if ((is_null($this->intClientesId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrdenesTrabajo on this unsaved Clientes.');
			if ((is_null($objOrdenesTrabajo->OrdenesTrabajoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrdenesTrabajo on this Clientes with an unsaved OrdenesTrabajo.');

			// Get the Database Object for this Class
			$objDatabase = Clientes::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"ordenes_trabajo"
				WHERE
					"ordenes_trabajo_id" = ' . $objDatabase->SqlVariable($objOrdenesTrabajo->OrdenesTrabajoId) . ' AND
					"clientes_id" = ' . $objDatabase->SqlVariable($this->intClientesId) . '
			');
		}

		/**
		 * Deletes all associated OrdenesTrabajos
		 * @return void
		*/ 
		public function DeleteAllOrdenesTrabajos() {
			if ((is_null($this->intClientesId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrdenesTrabajo on this unsaved Clientes.');

			// Get the Database Object for this Class
			$objDatabase = Clientes::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"ordenes_trabajo"
				WHERE
					"clientes_id" = ' . $objDatabase->SqlVariable($this->intClientesId) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Clientes"><sequence>';
			$strToReturn .= '<element name="ClientesId" type="xsd:int"/>';
			$strToReturn .= '<element name="Nombre" type="xsd:string"/>';
			$strToReturn .= '<element name="Direccion" type="xsd:string"/>';
			$strToReturn .= '<element name="Localidad" type="xsd:string"/>';
			$strToReturn .= '<element name="Provincia" type="xsd:string"/>';
			$strToReturn .= '<element name="Email" type="xsd:string"/>';
			$strToReturn .= '<element name="ResponsableContacto" type="xsd:string"/>';
			$strToReturn .= '<element name="FechaAlta" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Estado" type="xsd:boolean"/>';
			$strToReturn .= '<element name="EmailSecundario" type="xsd:string"/>';
			$strToReturn .= '<element name="Telefono" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Clientes', $strComplexTypeArray)) {
				$strComplexTypeArray['Clientes'] = Clientes::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Clientes::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Clientes();
			if (property_exists($objSoapObject, 'ClientesId'))
				$objToReturn->intClientesId = $objSoapObject->ClientesId;
			if (property_exists($objSoapObject, 'Nombre'))
				$objToReturn->strNombre = $objSoapObject->Nombre;
			if (property_exists($objSoapObject, 'Direccion'))
				$objToReturn->strDireccion = $objSoapObject->Direccion;
			if (property_exists($objSoapObject, 'Localidad'))
				$objToReturn->strLocalidad = $objSoapObject->Localidad;
			if (property_exists($objSoapObject, 'Provincia'))
				$objToReturn->strProvincia = $objSoapObject->Provincia;
			if (property_exists($objSoapObject, 'Email'))
				$objToReturn->strEmail = $objSoapObject->Email;
			if (property_exists($objSoapObject, 'ResponsableContacto'))
				$objToReturn->strResponsableContacto = $objSoapObject->ResponsableContacto;
			if (property_exists($objSoapObject, 'FechaAlta'))
				$objToReturn->dttFechaAlta = new QDateTime($objSoapObject->FechaAlta);
			if (property_exists($objSoapObject, 'Estado'))
				$objToReturn->blnEstado = $objSoapObject->Estado;
			if (property_exists($objSoapObject, 'EmailSecundario'))
				$objToReturn->strEmailSecundario = $objSoapObject->EmailSecundario;
			if (property_exists($objSoapObject, 'Telefono'))
				$objToReturn->strTelefono = $objSoapObject->Telefono;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Clientes::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->dttFechaAlta)
				$objObject->dttFechaAlta = $objObject->dttFechaAlta->__toString(QDateTime::FormatSoap);
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

	class QQNodeClientes extends QQNode {
		protected $strTableName = 'clientes';
		protected $strPrimaryKey = 'clientes_id';
		protected $strClassName = 'Clientes';
		public function __get($strName) {
			switch ($strName) {
				case 'ClientesId':
					return new QQNode('clientes_id', 'ClientesId', 'integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'string', $this);
				case 'Direccion':
					return new QQNode('direccion', 'Direccion', 'string', $this);
				case 'Localidad':
					return new QQNode('localidad', 'Localidad', 'string', $this);
				case 'Provincia':
					return new QQNode('provincia', 'Provincia', 'string', $this);
				case 'Email':
					return new QQNode('email', 'Email', 'string', $this);
				case 'ResponsableContacto':
					return new QQNode('responsable_contacto', 'ResponsableContacto', 'string', $this);
				case 'FechaAlta':
					return new QQNode('fecha_alta', 'FechaAlta', 'QDateTime', $this);
				case 'Estado':
					return new QQNode('estado', 'Estado', 'boolean', $this);
				case 'EmailSecundario':
					return new QQNode('email_secundario', 'EmailSecundario', 'string', $this);
				case 'Telefono':
					return new QQNode('telefono', 'Telefono', 'string', $this);
				case 'Muestras':
					return new QQReverseReferenceNodeMuestras($this, 'muestras', 'reverse_reference', 'clientes_id');
				case 'OrdenesTrabajo':
					return new QQReverseReferenceNodeOrdenesTrabajo($this, 'ordenestrabajo', 'reverse_reference', 'clientes_id');

				case '_PrimaryKeyNode':
					return new QQNode('clientes_id', 'ClientesId', 'integer', $this);
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

	class QQReverseReferenceNodeClientes extends QQReverseReferenceNode {
		protected $strTableName = 'clientes';
		protected $strPrimaryKey = 'clientes_id';
		protected $strClassName = 'Clientes';
		public function __get($strName) {
			switch ($strName) {
				case 'ClientesId':
					return new QQNode('clientes_id', 'ClientesId', 'integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'string', $this);
				case 'Direccion':
					return new QQNode('direccion', 'Direccion', 'string', $this);
				case 'Localidad':
					return new QQNode('localidad', 'Localidad', 'string', $this);
				case 'Provincia':
					return new QQNode('provincia', 'Provincia', 'string', $this);
				case 'Email':
					return new QQNode('email', 'Email', 'string', $this);
				case 'ResponsableContacto':
					return new QQNode('responsable_contacto', 'ResponsableContacto', 'string', $this);
				case 'FechaAlta':
					return new QQNode('fecha_alta', 'FechaAlta', 'QDateTime', $this);
				case 'Estado':
					return new QQNode('estado', 'Estado', 'boolean', $this);
				case 'EmailSecundario':
					return new QQNode('email_secundario', 'EmailSecundario', 'string', $this);
				case 'Telefono':
					return new QQNode('telefono', 'Telefono', 'string', $this);
				case 'Muestras':
					return new QQReverseReferenceNodeMuestras($this, 'muestras', 'reverse_reference', 'clientes_id');
				case 'OrdenesTrabajo':
					return new QQReverseReferenceNodeOrdenesTrabajo($this, 'ordenestrabajo', 'reverse_reference', 'clientes_id');

				case '_PrimaryKeyNode':
					return new QQNode('clientes_id', 'ClientesId', 'integer', $this);
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