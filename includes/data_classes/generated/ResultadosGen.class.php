<?php
	/**
	 * The abstract ResultadosGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Resultados subclass which
	 * extends this ResultadosGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Resultados class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $ResultadosId the value for intResultadosId (Read-Only PK)
	 * @property integer $OrdenesTrabajoId the value for intOrdenesTrabajoId 
	 * @property integer $AnalisisId the value for intAnalisisId 
	 * @property string $Estado the value for strEstado 
	 * @property integer $UsuariosId the value for intUsuariosId 
	 * @property QDateTime $Fecha the value for dttFecha 
	 * @property string $Norma the value for strNorma 
	 * @property string $Medicion the value for strMedicion 
	 * @property string $Resultado the value for strResultado 
	 * @property OrdenesTrabajo $OrdenesTrabajo the value for the OrdenesTrabajo object referenced by intOrdenesTrabajoId 
	 * @property Analisis $Analisis the value for the Analisis object referenced by intAnalisisId 
	 * @property Usuarios $Usuarios the value for the Usuarios object referenced by intUsuariosId 
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class ResultadosGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column resultados.resultados_id
		 * @var integer intResultadosId
		 */
		protected $intResultadosId;
		const ResultadosIdDefault = 'nextval(\'resultados_resultados_id_seq\'::regclass)';


		/**
		 * Protected member variable that maps to the database column resultados.ordenes_trabajo_id
		 * @var integer intOrdenesTrabajoId
		 */
		protected $intOrdenesTrabajoId;
		const OrdenesTrabajoIdDefault = null;


		/**
		 * Protected member variable that maps to the database column resultados.analisis_id
		 * @var integer intAnalisisId
		 */
		protected $intAnalisisId;
		const AnalisisIdDefault = null;


		/**
		 * Protected member variable that maps to the database column resultados.estado
		 * @var string strEstado
		 */
		protected $strEstado;
		const EstadoDefault = null;


		/**
		 * Protected member variable that maps to the database column resultados.usuarios_id
		 * @var integer intUsuariosId
		 */
		protected $intUsuariosId;
		const UsuariosIdDefault = null;


		/**
		 * Protected member variable that maps to the database column resultados.fecha
		 * @var QDateTime dttFecha
		 */
		protected $dttFecha;
		const FechaDefault = null;


		/**
		 * Protected member variable that maps to the database column resultados.norma
		 * @var string strNorma
		 */
		protected $strNorma;
		const NormaDefault = null;


		/**
		 * Protected member variable that maps to the database column resultados.medicion
		 * @var string strMedicion
		 */
		protected $strMedicion;
		const MedicionDefault = null;


		/**
		 * Protected member variable that maps to the database column resultados.resultado
		 * @var string strResultado
		 */
		protected $strResultado;
		const ResultadoDefault = null;


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
		 * in the database column resultados.ordenes_trabajo_id.
		 *
		 * NOTE: Always use the OrdenesTrabajo property getter to correctly retrieve this OrdenesTrabajo object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var OrdenesTrabajo objOrdenesTrabajo
		 */
		protected $objOrdenesTrabajo;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column resultados.analisis_id.
		 *
		 * NOTE: Always use the Analisis property getter to correctly retrieve this Analisis object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Analisis objAnalisis
		 */
		protected $objAnalisis;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column resultados.usuarios_id.
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
		 * Load a Resultados from PK Info
		 * @param integer $intResultadosId
		 * @return Resultados
		 */
		public static function Load($intResultadosId) {
			// Use QuerySingle to Perform the Query
			return Resultados::QuerySingle(
				QQ::Equal(QQN::Resultados()->ResultadosId, $intResultadosId)
			);
		}

		/**
		 * Load all Resultadoses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Resultados[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Resultados::QueryArray to perform the LoadAll query
			try {
				return Resultados::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Resultadoses
		 * @return int
		 */
		public static function CountAll() {
			// Call Resultados::QueryCount to perform the CountAll query
			return Resultados::QueryCount(QQ::All());
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
			$objDatabase = Resultados::GetDatabase();

			// Create/Build out the QueryBuilder object with Resultados-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'resultados');
			Resultados::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('resultados');

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
		 * Static Qcubed Query method to query for a single Resultados object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Resultados the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Resultados::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new Resultados object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Resultados::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
					if ($objItem)
						$objToReturn[] = $objItem;					
				}			
				// Since we only want the object to return, lets return the object and not the array.
				return $objToReturn[0];
			} else {
				// No expands just return the first row
				$objToReturn = null;
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn = Resultados::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
			
			return $objToReturn;
		}

		/**
		 * Static Qcubed Query method to query for an array of Resultados objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Resultados[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Resultados::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Resultados::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of Resultados objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Resultados::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Resultados::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'resultados_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with Resultados-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				Resultados::GetSelectFields($objQueryBuilder);
				Resultados::GetFromFields($objQueryBuilder);

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
			return Resultados::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Resultados
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'resultados';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'resultados_id', $strAliasPrefix . 'resultados_id');
			$objBuilder->AddSelectItem($strTableName, 'ordenes_trabajo_id', $strAliasPrefix . 'ordenes_trabajo_id');
			$objBuilder->AddSelectItem($strTableName, 'analisis_id', $strAliasPrefix . 'analisis_id');
			$objBuilder->AddSelectItem($strTableName, 'estado', $strAliasPrefix . 'estado');
			$objBuilder->AddSelectItem($strTableName, 'usuarios_id', $strAliasPrefix . 'usuarios_id');
			$objBuilder->AddSelectItem($strTableName, 'fecha', $strAliasPrefix . 'fecha');
			$objBuilder->AddSelectItem($strTableName, 'norma', $strAliasPrefix . 'norma');
			$objBuilder->AddSelectItem($strTableName, 'medicion', $strAliasPrefix . 'medicion');
			$objBuilder->AddSelectItem($strTableName, 'resultado', $strAliasPrefix . 'resultado');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Resultados from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Resultados::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Resultados
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the Resultados object
			$objToReturn = new Resultados();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'resultados_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'resultados_id'] : $strAliasPrefix . 'resultados_id';
			$objToReturn->intResultadosId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'ordenes_trabajo_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'ordenes_trabajo_id'] : $strAliasPrefix . 'ordenes_trabajo_id';
			$objToReturn->intOrdenesTrabajoId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'analisis_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'analisis_id'] : $strAliasPrefix . 'analisis_id';
			$objToReturn->intAnalisisId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'estado', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'estado'] : $strAliasPrefix . 'estado';
			$objToReturn->strEstado = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'usuarios_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'usuarios_id'] : $strAliasPrefix . 'usuarios_id';
			$objToReturn->intUsuariosId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'fecha', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'fecha'] : $strAliasPrefix . 'fecha';
			$objToReturn->dttFecha = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAliasName = array_key_exists($strAliasPrefix . 'norma', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'norma'] : $strAliasPrefix . 'norma';
			$objToReturn->strNorma = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'medicion', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'medicion'] : $strAliasPrefix . 'medicion';
			$objToReturn->strMedicion = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'resultado', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'resultado'] : $strAliasPrefix . 'resultado';
			$objToReturn->strResultado = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->ResultadosId != $objPreviousItem->ResultadosId) {
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
				$strAliasPrefix = 'resultados__';

			// Check for OrdenesTrabajo Early Binding
			$strAlias = $strAliasPrefix . 'ordenes_trabajo_id__ordenes_trabajo_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objOrdenesTrabajo = OrdenesTrabajo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ordenes_trabajo_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for Analisis Early Binding
			$strAlias = $strAliasPrefix . 'analisis_id__analisis_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objAnalisis = Analisis::InstantiateDbRow($objDbRow, $strAliasPrefix . 'analisis_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for Usuarios Early Binding
			$strAlias = $strAliasPrefix . 'usuarios_id__usuarios_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objUsuarios = Usuarios::InstantiateDbRow($objDbRow, $strAliasPrefix . 'usuarios_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of Resultadoses from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Resultados[]
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
					$objItem = Resultados::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Resultados::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Resultados object,
		 * by ResultadosId Index(es)
		 * @param integer $intResultadosId
		 * @return Resultados
		*/
		public static function LoadByResultadosId($intResultadosId) {
			return Resultados::QuerySingle(
				QQ::Equal(QQN::Resultados()->ResultadosId, $intResultadosId)
			);
		}
			
		/**
		 * Load an array of Resultados objects,
		 * by OrdenesTrabajoId Index(es)
		 * @param integer $intOrdenesTrabajoId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Resultados[]
		*/
		public static function LoadArrayByOrdenesTrabajoId($intOrdenesTrabajoId, $objOptionalClauses = null) {
			// Call Resultados::QueryArray to perform the LoadArrayByOrdenesTrabajoId query
			try {
				return Resultados::QueryArray(
					QQ::Equal(QQN::Resultados()->OrdenesTrabajoId, $intOrdenesTrabajoId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Resultadoses
		 * by OrdenesTrabajoId Index(es)
		 * @param integer $intOrdenesTrabajoId
		 * @return int
		*/
		public static function CountByOrdenesTrabajoId($intOrdenesTrabajoId) {
			// Call Resultados::QueryCount to perform the CountByOrdenesTrabajoId query
			return Resultados::QueryCount(
				QQ::Equal(QQN::Resultados()->OrdenesTrabajoId, $intOrdenesTrabajoId)
			);
		}
			
		/**
		 * Load an array of Resultados objects,
		 * by AnalisisId Index(es)
		 * @param integer $intAnalisisId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Resultados[]
		*/
		public static function LoadArrayByAnalisisId($intAnalisisId, $objOptionalClauses = null) {
			// Call Resultados::QueryArray to perform the LoadArrayByAnalisisId query
			try {
				return Resultados::QueryArray(
					QQ::Equal(QQN::Resultados()->AnalisisId, $intAnalisisId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Resultadoses
		 * by AnalisisId Index(es)
		 * @param integer $intAnalisisId
		 * @return int
		*/
		public static function CountByAnalisisId($intAnalisisId) {
			// Call Resultados::QueryCount to perform the CountByAnalisisId query
			return Resultados::QueryCount(
				QQ::Equal(QQN::Resultados()->AnalisisId, $intAnalisisId)
			);
		}
			
		/**
		 * Load an array of Resultados objects,
		 * by UsuariosId Index(es)
		 * @param integer $intUsuariosId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Resultados[]
		*/
		public static function LoadArrayByUsuariosId($intUsuariosId, $objOptionalClauses = null) {
			// Call Resultados::QueryArray to perform the LoadArrayByUsuariosId query
			try {
				return Resultados::QueryArray(
					QQ::Equal(QQN::Resultados()->UsuariosId, $intUsuariosId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Resultadoses
		 * by UsuariosId Index(es)
		 * @param integer $intUsuariosId
		 * @return int
		*/
		public static function CountByUsuariosId($intUsuariosId) {
			// Call Resultados::QueryCount to perform the CountByUsuariosId query
			return Resultados::QueryCount(
				QQ::Equal(QQN::Resultados()->UsuariosId, $intUsuariosId)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Resultados
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Resultados::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO "resultados" (
							"ordenes_trabajo_id",
							"analisis_id",
							"estado",
							"usuarios_id",
							"fecha",
							"norma",
							"medicion",
							"resultado"
						) VALUES (
							' . $objDatabase->SqlVariable($this->intOrdenesTrabajoId) . ',
							' . $objDatabase->SqlVariable($this->intAnalisisId) . ',
							' . $objDatabase->SqlVariable($this->strEstado) . ',
							' . $objDatabase->SqlVariable($this->intUsuariosId) . ',
							' . $objDatabase->SqlVariable($this->dttFecha) . ',
							' . $objDatabase->SqlVariable($this->strNorma) . ',
							' . $objDatabase->SqlVariable($this->strMedicion) . ',
							' . $objDatabase->SqlVariable($this->strResultado) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intResultadosId = $objDatabase->InsertId('resultados', 'resultados_id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							"resultados"
						SET
							"ordenes_trabajo_id" = ' . $objDatabase->SqlVariable($this->intOrdenesTrabajoId) . ',
							"analisis_id" = ' . $objDatabase->SqlVariable($this->intAnalisisId) . ',
							"estado" = ' . $objDatabase->SqlVariable($this->strEstado) . ',
							"usuarios_id" = ' . $objDatabase->SqlVariable($this->intUsuariosId) . ',
							"fecha" = ' . $objDatabase->SqlVariable($this->dttFecha) . ',
							"norma" = ' . $objDatabase->SqlVariable($this->strNorma) . ',
							"medicion" = ' . $objDatabase->SqlVariable($this->strMedicion) . ',
							"resultado" = ' . $objDatabase->SqlVariable($this->strResultado) . '
						WHERE
							"resultados_id" = ' . $objDatabase->SqlVariable($this->intResultadosId) . '
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
		 * Delete this Resultados
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intResultadosId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Resultados with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Resultados::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"resultados"
				WHERE
					"resultados_id" = ' . $objDatabase->SqlVariable($this->intResultadosId) . '');
		}

		/**
		 * Delete all Resultadoses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Resultados::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					"resultados"');
		}

		/**
		 * Truncate resultados table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Resultados::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE "resultados"');
		}

		/**
		 * Reload this Resultados from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Resultados object.');

			// Reload the Object
			$objReloaded = Resultados::Load($this->intResultadosId);

			// Update $this's local variables to match
			$this->OrdenesTrabajoId = $objReloaded->OrdenesTrabajoId;
			$this->AnalisisId = $objReloaded->AnalisisId;
			$this->strEstado = $objReloaded->strEstado;
			$this->UsuariosId = $objReloaded->UsuariosId;
			$this->dttFecha = $objReloaded->dttFecha;
			$this->strNorma = $objReloaded->strNorma;
			$this->strMedicion = $objReloaded->strMedicion;
			$this->strResultado = $objReloaded->strResultado;
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
				case 'ResultadosId':
					/**
					 * Gets the value for intResultadosId (Read-Only PK)
					 * @return integer
					 */
					return $this->intResultadosId;

				case 'OrdenesTrabajoId':
					/**
					 * Gets the value for intOrdenesTrabajoId 
					 * @return integer
					 */
					return $this->intOrdenesTrabajoId;

				case 'AnalisisId':
					/**
					 * Gets the value for intAnalisisId 
					 * @return integer
					 */
					return $this->intAnalisisId;

				case 'Estado':
					/**
					 * Gets the value for strEstado 
					 * @return string
					 */
					return $this->strEstado;

				case 'UsuariosId':
					/**
					 * Gets the value for intUsuariosId 
					 * @return integer
					 */
					return $this->intUsuariosId;

				case 'Fecha':
					/**
					 * Gets the value for dttFecha 
					 * @return QDateTime
					 */
					return $this->dttFecha;

				case 'Norma':
					/**
					 * Gets the value for strNorma 
					 * @return string
					 */
					return $this->strNorma;

				case 'Medicion':
					/**
					 * Gets the value for strMedicion 
					 * @return string
					 */
					return $this->strMedicion;

				case 'Resultado':
					/**
					 * Gets the value for strResultado 
					 * @return string
					 */
					return $this->strResultado;


				///////////////////
				// Member Objects
				///////////////////
				case 'OrdenesTrabajo':
					/**
					 * Gets the value for the OrdenesTrabajo object referenced by intOrdenesTrabajoId 
					 * @return OrdenesTrabajo
					 */
					try {
						if ((!$this->objOrdenesTrabajo) && (!is_null($this->intOrdenesTrabajoId)))
							$this->objOrdenesTrabajo = OrdenesTrabajo::Load($this->intOrdenesTrabajoId);
						return $this->objOrdenesTrabajo;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Analisis':
					/**
					 * Gets the value for the Analisis object referenced by intAnalisisId 
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

				case 'Usuarios':
					/**
					 * Gets the value for the Usuarios object referenced by intUsuariosId 
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
				case 'OrdenesTrabajoId':
					/**
					 * Sets the value for intOrdenesTrabajoId 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objOrdenesTrabajo = null;
						return ($this->intOrdenesTrabajoId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AnalisisId':
					/**
					 * Sets the value for intAnalisisId 
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

				case 'Estado':
					/**
					 * Sets the value for strEstado 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strEstado = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'UsuariosId':
					/**
					 * Sets the value for intUsuariosId 
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

				case 'Fecha':
					/**
					 * Sets the value for dttFecha 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttFecha = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Norma':
					/**
					 * Sets the value for strNorma 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strNorma = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Medicion':
					/**
					 * Sets the value for strMedicion 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strMedicion = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Resultado':
					/**
					 * Sets the value for strResultado 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strResultado = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'OrdenesTrabajo':
					/**
					 * Sets the value for the OrdenesTrabajo object referenced by intOrdenesTrabajoId 
					 * @param OrdenesTrabajo $mixValue
					 * @return OrdenesTrabajo
					 */
					if (is_null($mixValue)) {
						$this->intOrdenesTrabajoId = null;
						$this->objOrdenesTrabajo = null;
						return null;
					} else {
						// Make sure $mixValue actually is a OrdenesTrabajo object
						try {
							$mixValue = QType::Cast($mixValue, 'OrdenesTrabajo');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED OrdenesTrabajo object
						if (is_null($mixValue->OrdenesTrabajoId))
							throw new QCallerException('Unable to set an unsaved OrdenesTrabajo for this Resultados');

						// Update Local Member Variables
						$this->objOrdenesTrabajo = $mixValue;
						$this->intOrdenesTrabajoId = $mixValue->OrdenesTrabajoId;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'Analisis':
					/**
					 * Sets the value for the Analisis object referenced by intAnalisisId 
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
							throw new QCallerException('Unable to set an unsaved Analisis for this Resultados');

						// Update Local Member Variables
						$this->objAnalisis = $mixValue;
						$this->intAnalisisId = $mixValue->AnalisisId;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'Usuarios':
					/**
					 * Sets the value for the Usuarios object referenced by intUsuariosId 
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
							throw new QCallerException('Unable to set an unsaved Usuarios for this Resultados');

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





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Resultados"><sequence>';
			$strToReturn .= '<element name="ResultadosId" type="xsd:int"/>';
			$strToReturn .= '<element name="OrdenesTrabajo" type="xsd1:OrdenesTrabajo"/>';
			$strToReturn .= '<element name="Analisis" type="xsd1:Analisis"/>';
			$strToReturn .= '<element name="Estado" type="xsd:string"/>';
			$strToReturn .= '<element name="Usuarios" type="xsd1:Usuarios"/>';
			$strToReturn .= '<element name="Fecha" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Norma" type="xsd:string"/>';
			$strToReturn .= '<element name="Medicion" type="xsd:string"/>';
			$strToReturn .= '<element name="Resultado" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Resultados', $strComplexTypeArray)) {
				$strComplexTypeArray['Resultados'] = Resultados::GetSoapComplexTypeXml();
				OrdenesTrabajo::AlterSoapComplexTypeArray($strComplexTypeArray);
				Analisis::AlterSoapComplexTypeArray($strComplexTypeArray);
				Usuarios::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Resultados::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Resultados();
			if (property_exists($objSoapObject, 'ResultadosId'))
				$objToReturn->intResultadosId = $objSoapObject->ResultadosId;
			if ((property_exists($objSoapObject, 'OrdenesTrabajo')) &&
				($objSoapObject->OrdenesTrabajo))
				$objToReturn->OrdenesTrabajo = OrdenesTrabajo::GetObjectFromSoapObject($objSoapObject->OrdenesTrabajo);
			if ((property_exists($objSoapObject, 'Analisis')) &&
				($objSoapObject->Analisis))
				$objToReturn->Analisis = Analisis::GetObjectFromSoapObject($objSoapObject->Analisis);
			if (property_exists($objSoapObject, 'Estado'))
				$objToReturn->strEstado = $objSoapObject->Estado;
			if ((property_exists($objSoapObject, 'Usuarios')) &&
				($objSoapObject->Usuarios))
				$objToReturn->Usuarios = Usuarios::GetObjectFromSoapObject($objSoapObject->Usuarios);
			if (property_exists($objSoapObject, 'Fecha'))
				$objToReturn->dttFecha = new QDateTime($objSoapObject->Fecha);
			if (property_exists($objSoapObject, 'Norma'))
				$objToReturn->strNorma = $objSoapObject->Norma;
			if (property_exists($objSoapObject, 'Medicion'))
				$objToReturn->strMedicion = $objSoapObject->Medicion;
			if (property_exists($objSoapObject, 'Resultado'))
				$objToReturn->strResultado = $objSoapObject->Resultado;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Resultados::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objOrdenesTrabajo)
				$objObject->objOrdenesTrabajo = OrdenesTrabajo::GetSoapObjectFromObject($objObject->objOrdenesTrabajo, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intOrdenesTrabajoId = null;
			if ($objObject->objAnalisis)
				$objObject->objAnalisis = Analisis::GetSoapObjectFromObject($objObject->objAnalisis, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intAnalisisId = null;
			if ($objObject->objUsuarios)
				$objObject->objUsuarios = Usuarios::GetSoapObjectFromObject($objObject->objUsuarios, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intUsuariosId = null;
			if ($objObject->dttFecha)
				$objObject->dttFecha = $objObject->dttFecha->__toString(QDateTime::FormatSoap);
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

	class QQNodeResultados extends QQNode {
		protected $strTableName = 'resultados';
		protected $strPrimaryKey = 'resultados_id';
		protected $strClassName = 'Resultados';
		public function __get($strName) {
			switch ($strName) {
				case 'ResultadosId':
					return new QQNode('resultados_id', 'ResultadosId', 'integer', $this);
				case 'OrdenesTrabajoId':
					return new QQNode('ordenes_trabajo_id', 'OrdenesTrabajoId', 'integer', $this);
				case 'OrdenesTrabajo':
					return new QQNodeOrdenesTrabajo('ordenes_trabajo_id', 'OrdenesTrabajo', 'integer', $this);
				case 'AnalisisId':
					return new QQNode('analisis_id', 'AnalisisId', 'integer', $this);
				case 'Analisis':
					return new QQNodeAnalisis('analisis_id', 'Analisis', 'integer', $this);
				case 'Estado':
					return new QQNode('estado', 'Estado', 'string', $this);
				case 'UsuariosId':
					return new QQNode('usuarios_id', 'UsuariosId', 'integer', $this);
				case 'Usuarios':
					return new QQNodeUsuarios('usuarios_id', 'Usuarios', 'integer', $this);
				case 'Fecha':
					return new QQNode('fecha', 'Fecha', 'QDateTime', $this);
				case 'Norma':
					return new QQNode('norma', 'Norma', 'string', $this);
				case 'Medicion':
					return new QQNode('medicion', 'Medicion', 'string', $this);
				case 'Resultado':
					return new QQNode('resultado', 'Resultado', 'string', $this);

				case '_PrimaryKeyNode':
					return new QQNode('resultados_id', 'ResultadosId', 'integer', $this);
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

	class QQReverseReferenceNodeResultados extends QQReverseReferenceNode {
		protected $strTableName = 'resultados';
		protected $strPrimaryKey = 'resultados_id';
		protected $strClassName = 'Resultados';
		public function __get($strName) {
			switch ($strName) {
				case 'ResultadosId':
					return new QQNode('resultados_id', 'ResultadosId', 'integer', $this);
				case 'OrdenesTrabajoId':
					return new QQNode('ordenes_trabajo_id', 'OrdenesTrabajoId', 'integer', $this);
				case 'OrdenesTrabajo':
					return new QQNodeOrdenesTrabajo('ordenes_trabajo_id', 'OrdenesTrabajo', 'integer', $this);
				case 'AnalisisId':
					return new QQNode('analisis_id', 'AnalisisId', 'integer', $this);
				case 'Analisis':
					return new QQNodeAnalisis('analisis_id', 'Analisis', 'integer', $this);
				case 'Estado':
					return new QQNode('estado', 'Estado', 'string', $this);
				case 'UsuariosId':
					return new QQNode('usuarios_id', 'UsuariosId', 'integer', $this);
				case 'Usuarios':
					return new QQNodeUsuarios('usuarios_id', 'Usuarios', 'integer', $this);
				case 'Fecha':
					return new QQNode('fecha', 'Fecha', 'QDateTime', $this);
				case 'Norma':
					return new QQNode('norma', 'Norma', 'string', $this);
				case 'Medicion':
					return new QQNode('medicion', 'Medicion', 'string', $this);
				case 'Resultado':
					return new QQNode('resultado', 'Resultado', 'string', $this);

				case '_PrimaryKeyNode':
					return new QQNode('resultados_id', 'ResultadosId', 'integer', $this);
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