<?php
	/**
	 * The abstract OrdenesTrabajoGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the OrdenesTrabajo subclass which
	 * extends this OrdenesTrabajoGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the OrdenesTrabajo class.
	 * 
	 * @package SIGA
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $OrdenesTrabajoId the value for intOrdenesTrabajoId (Read-Only PK)
	 * @property QDateTime $FechaEntrada the value for dttFechaEntrada 
	 * @property integer $ClientesId the value for intClientesId 
	 * @property string $Cargador the value for strCargador 
	 * @property string $Buque the value for strBuque 
	 * @property integer $Kg the value for intKg 
	 * @property string $Puerto the value for strPuerto 
	 * @property string $ReferenciaCliente the value for strReferenciaCliente 
	 * @property string $Destino the value for strDestino 
	 * @property integer $MuestrasId the value for intMuestrasId 
	 * @property integer $UsuariosId the value for intUsuariosId 
	 * @property boolean $New the value for blnNew 
	 * @property string $Estado the value for strEstado 
	 * @property string $Observaciones the value for strObservaciones 
	 * @property QDateTime $FechaFinalizado the value for dttFechaFinalizado 
	 * @property Clientes $Clientes the value for the Clientes object referenced by intClientesId 
	 * @property Muestras $Muestras the value for the Muestras object referenced by intMuestrasId 
	 * @property Usuarios $Usuarios the value for the Usuarios object referenced by intUsuariosId 
	 * @property-read Analisis $_Analisis the value for the private _objAnalisis (Read-Only) if set due to an expansion on the analisis_ordenes_trabajo_assn association table
	 * @property-read Analisis[] $_AnalisisArray the value for the private _objAnalisisArray (Read-Only) if set due to an ExpandAsArray on the analisis_ordenes_trabajo_assn association table
	 * @property-read Resultados $_Resultados the value for the private _objResultados (Read-Only) if set due to an expansion on the resultados.ordenes_trabajo_id reverse relationship
	 * @property-read Resultados[] $_ResultadosArray the value for the private _objResultadosArray (Read-Only) if set due to an ExpandAsArray on the resultados.ordenes_trabajo_id reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class OrdenesTrabajoGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column ordenes_trabajo.ordenes_trabajo_id
		 * @var integer intOrdenesTrabajoId
		 */
		protected $intOrdenesTrabajoId;
		const OrdenesTrabajoIdDefault = 'nextval(\'ordenes_trabajo_ordenes_trabajo_id_seq\'::regclass)';


		/**
		 * Protected member variable that maps to the database column ordenes_trabajo.fecha_entrada
		 * @var QDateTime dttFechaEntrada
		 */
		protected $dttFechaEntrada;
		const FechaEntradaDefault = null;


		/**
		 * Protected member variable that maps to the database column ordenes_trabajo.clientes_id
		 * @var integer intClientesId
		 */
		protected $intClientesId;
		const ClientesIdDefault = null;


		/**
		 * Protected member variable that maps to the database column ordenes_trabajo.cargador
		 * @var string strCargador
		 */
		protected $strCargador;
		const CargadorDefault = null;


		/**
		 * Protected member variable that maps to the database column ordenes_trabajo.buque
		 * @var string strBuque
		 */
		protected $strBuque;
		const BuqueDefault = null;


		/**
		 * Protected member variable that maps to the database column ordenes_trabajo.kg
		 * @var integer intKg
		 */
		protected $intKg;
		const KgDefault = null;


		/**
		 * Protected member variable that maps to the database column ordenes_trabajo.puerto
		 * @var string strPuerto
		 */
		protected $strPuerto;
		const PuertoDefault = null;


		/**
		 * Protected member variable that maps to the database column ordenes_trabajo.referencia_cliente
		 * @var string strReferenciaCliente
		 */
		protected $strReferenciaCliente;
		const ReferenciaClienteDefault = null;


		/**
		 * Protected member variable that maps to the database column ordenes_trabajo.destino
		 * @var string strDestino
		 */
		protected $strDestino;
		const DestinoDefault = null;


		/**
		 * Protected member variable that maps to the database column ordenes_trabajo.muestras_id
		 * @var integer intMuestrasId
		 */
		protected $intMuestrasId;
		const MuestrasIdDefault = null;


		/**
		 * Protected member variable that maps to the database column ordenes_trabajo.usuarios_id
		 * @var integer intUsuariosId
		 */
		protected $intUsuariosId;
		const UsuariosIdDefault = null;


		/**
		 * Protected member variable that maps to the database column ordenes_trabajo.new
		 * @var boolean blnNew
		 */
		protected $blnNew;
		const NewDefault = 'true';


		/**
		 * Protected member variable that maps to the database column ordenes_trabajo.estado
		 * @var string strEstado
		 */
		protected $strEstado;
		const EstadoDefault = null;


		/**
		 * Protected member variable that maps to the database column ordenes_trabajo.observaciones
		 * @var string strObservaciones
		 */
		protected $strObservaciones;
		const ObservacionesDefault = null;


		/**
		 * Protected member variable that maps to the database column ordenes_trabajo.fecha_finalizado
		 * @var QDateTime dttFechaFinalizado
		 */
		protected $dttFechaFinalizado;
		const FechaFinalizadoDefault = null;


		/**
		 * Private member variable that stores a reference to a single Analisis object
		 * (of type Analisis), if this OrdenesTrabajo object was restored with
		 * an expansion on the analisis_ordenes_trabajo_assn association table.
		 * @var Analisis _objAnalisis;
		 */
		private $_objAnalisis;

		/**
		 * Private member variable that stores a reference to an array of Analisis objects
		 * (of type Analisis[]), if this OrdenesTrabajo object was restored with
		 * an ExpandAsArray on the analisis_ordenes_trabajo_assn association table.
		 * @var Analisis[] _objAnalisisArray;
		 */
		private $_objAnalisisArray = array();

		/**
		 * Private member variable that stores a reference to a single Resultados object
		 * (of type Resultados), if this OrdenesTrabajo object was restored with
		 * an expansion on the resultados association table.
		 * @var Resultados _objResultados;
		 */
		private $_objResultados;

		/**
		 * Private member variable that stores a reference to an array of Resultados objects
		 * (of type Resultados[]), if this OrdenesTrabajo object was restored with
		 * an ExpandAsArray on the resultados association table.
		 * @var Resultados[] _objResultadosArray;
		 */
		private $_objResultadosArray = array();

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
		 * in the database column ordenes_trabajo.clientes_id.
		 *
		 * NOTE: Always use the Clientes property getter to correctly retrieve this Clientes object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Clientes objClientes
		 */
		protected $objClientes;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column ordenes_trabajo.muestras_id.
		 *
		 * NOTE: Always use the Muestras property getter to correctly retrieve this Muestras object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Muestras objMuestras
		 */
		protected $objMuestras;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column ordenes_trabajo.usuarios_id.
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
		 * Load a OrdenesTrabajo from PK Info
		 * @param integer $intOrdenesTrabajoId
		 * @return OrdenesTrabajo
		 */
		public static function Load($intOrdenesTrabajoId) {
			// Use QuerySingle to Perform the Query
			return OrdenesTrabajo::QuerySingle(
				QQ::Equal(QQN::OrdenesTrabajo()->OrdenesTrabajoId, $intOrdenesTrabajoId)
			);
		}

		/**
		 * Load all OrdenesTrabajos
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return OrdenesTrabajo[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call OrdenesTrabajo::QueryArray to perform the LoadAll query
			try {
				return OrdenesTrabajo::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all OrdenesTrabajos
		 * @return int
		 */
		public static function CountAll() {
			// Call OrdenesTrabajo::QueryCount to perform the CountAll query
			return OrdenesTrabajo::QueryCount(QQ::All());
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
			$objDatabase = OrdenesTrabajo::GetDatabase();

			// Create/Build out the QueryBuilder object with OrdenesTrabajo-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'ordenes_trabajo');
			OrdenesTrabajo::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('ordenes_trabajo');

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
		 * Static Qcubed Query method to query for a single OrdenesTrabajo object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return OrdenesTrabajo the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = OrdenesTrabajo::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new OrdenesTrabajo object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = OrdenesTrabajo::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
					if ($objItem)
						$objToReturn[] = $objItem;					
				}			
				// Since we only want the object to return, lets return the object and not the array.
				return $objToReturn[0];
			} else {
				// No expands just return the first row
				$objToReturn = null;
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn = OrdenesTrabajo::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
			
			return $objToReturn;
		}

		/**
		 * Static Qcubed Query method to query for an array of OrdenesTrabajo objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return OrdenesTrabajo[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = OrdenesTrabajo::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return OrdenesTrabajo::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of OrdenesTrabajo objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = OrdenesTrabajo::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = OrdenesTrabajo::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'ordenes_trabajo_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with OrdenesTrabajo-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				OrdenesTrabajo::GetSelectFields($objQueryBuilder);
				OrdenesTrabajo::GetFromFields($objQueryBuilder);

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
			return OrdenesTrabajo::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this OrdenesTrabajo
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'ordenes_trabajo';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'ordenes_trabajo_id', $strAliasPrefix . 'ordenes_trabajo_id');
			$objBuilder->AddSelectItem($strTableName, 'fecha_entrada', $strAliasPrefix . 'fecha_entrada');
			$objBuilder->AddSelectItem($strTableName, 'clientes_id', $strAliasPrefix . 'clientes_id');
			$objBuilder->AddSelectItem($strTableName, 'cargador', $strAliasPrefix . 'cargador');
			$objBuilder->AddSelectItem($strTableName, 'buque', $strAliasPrefix . 'buque');
			$objBuilder->AddSelectItem($strTableName, 'kg', $strAliasPrefix . 'kg');
			$objBuilder->AddSelectItem($strTableName, 'puerto', $strAliasPrefix . 'puerto');
			$objBuilder->AddSelectItem($strTableName, 'referencia_cliente', $strAliasPrefix . 'referencia_cliente');
			$objBuilder->AddSelectItem($strTableName, 'destino', $strAliasPrefix . 'destino');
			$objBuilder->AddSelectItem($strTableName, 'muestras_id', $strAliasPrefix . 'muestras_id');
			$objBuilder->AddSelectItem($strTableName, 'usuarios_id', $strAliasPrefix . 'usuarios_id');
			$objBuilder->AddSelectItem($strTableName, 'new', $strAliasPrefix . 'new');
			$objBuilder->AddSelectItem($strTableName, 'estado', $strAliasPrefix . 'estado');
			$objBuilder->AddSelectItem($strTableName, 'observaciones', $strAliasPrefix . 'observaciones');
			$objBuilder->AddSelectItem($strTableName, 'fecha_finalizado', $strAliasPrefix . 'fecha_finalizado');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a OrdenesTrabajo from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this OrdenesTrabajo::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return OrdenesTrabajo
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'ordenes_trabajo_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {            
					if ($objPreviousItem->intOrdenesTrabajoId == $objDbRow->GetColumn($strAliasName, 'Integer')) {        
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'ordenes_trabajo__';

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


						// Expanding reverse references: Resultados
						$strAlias = $strAliasPrefix . 'resultados__resultados_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objResultadosArray)) {
								$objPreviousChildItems = $objPreviousItem->_objResultadosArray;
								$objChildItem = Resultados::InstantiateDbRow($objDbRow, $strAliasPrefix . 'resultados__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objResultadosArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objResultadosArray[] = Resultados::InstantiateDbRow($objDbRow, $strAliasPrefix . 'resultados__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'ordenes_trabajo__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the OrdenesTrabajo object
			$objToReturn = new OrdenesTrabajo();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'ordenes_trabajo_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'ordenes_trabajo_id'] : $strAliasPrefix . 'ordenes_trabajo_id';
			$objToReturn->intOrdenesTrabajoId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'fecha_entrada', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'fecha_entrada'] : $strAliasPrefix . 'fecha_entrada';
			$objToReturn->dttFechaEntrada = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAliasName = array_key_exists($strAliasPrefix . 'clientes_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'clientes_id'] : $strAliasPrefix . 'clientes_id';
			$objToReturn->intClientesId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'cargador', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'cargador'] : $strAliasPrefix . 'cargador';
			$objToReturn->strCargador = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'buque', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'buque'] : $strAliasPrefix . 'buque';
			$objToReturn->strBuque = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'kg', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'kg'] : $strAliasPrefix . 'kg';
			$objToReturn->intKg = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'puerto', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'puerto'] : $strAliasPrefix . 'puerto';
			$objToReturn->strPuerto = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'referencia_cliente', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'referencia_cliente'] : $strAliasPrefix . 'referencia_cliente';
			$objToReturn->strReferenciaCliente = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'destino', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'destino'] : $strAliasPrefix . 'destino';
			$objToReturn->strDestino = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'muestras_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'muestras_id'] : $strAliasPrefix . 'muestras_id';
			$objToReturn->intMuestrasId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'usuarios_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'usuarios_id'] : $strAliasPrefix . 'usuarios_id';
			$objToReturn->intUsuariosId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'new', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'new'] : $strAliasPrefix . 'new';
			$objToReturn->blnNew = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAliasName = array_key_exists($strAliasPrefix . 'estado', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'estado'] : $strAliasPrefix . 'estado';
			$objToReturn->strEstado = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'observaciones', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'observaciones'] : $strAliasPrefix . 'observaciones';
			$objToReturn->strObservaciones = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAliasName = array_key_exists($strAliasPrefix . 'fecha_finalizado', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'fecha_finalizado'] : $strAliasPrefix . 'fecha_finalizado';
			$objToReturn->dttFechaFinalizado = $objDbRow->GetColumn($strAliasName, 'Date');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->OrdenesTrabajoId != $objPreviousItem->OrdenesTrabajoId) {
						continue;
					}
					if (array_diff($objPreviousItem->_objAnalisisArray, $objToReturn->_objAnalisisArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objResultadosArray, $objToReturn->_objResultadosArray) != null) {
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
				$strAliasPrefix = 'ordenes_trabajo__';

			// Check for Clientes Early Binding
			$strAlias = $strAliasPrefix . 'clientes_id__clientes_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objClientes = Clientes::InstantiateDbRow($objDbRow, $strAliasPrefix . 'clientes_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for Muestras Early Binding
			$strAlias = $strAliasPrefix . 'muestras_id__muestras_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objMuestras = Muestras::InstantiateDbRow($objDbRow, $strAliasPrefix . 'muestras_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for Usuarios Early Binding
			$strAlias = $strAliasPrefix . 'usuarios_id__usuarios_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objUsuarios = Usuarios::InstantiateDbRow($objDbRow, $strAliasPrefix . 'usuarios_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);



			// Check for Analisis Virtual Binding
			$strAlias = $strAliasPrefix . 'analisis__analisis_id__analisis_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objAnalisisArray[] = Analisis::InstantiateDbRow($objDbRow, $strAliasPrefix . 'analisis__analisis_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objAnalisis = Analisis::InstantiateDbRow($objDbRow, $strAliasPrefix . 'analisis__analisis_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}


			// Check for Resultados Virtual Binding
			$strAlias = $strAliasPrefix . 'resultados__resultados_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objResultadosArray[] = Resultados::InstantiateDbRow($objDbRow, $strAliasPrefix . 'resultados__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objResultados = Resultados::InstantiateDbRow($objDbRow, $strAliasPrefix . 'resultados__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of OrdenesTrabajos from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return OrdenesTrabajo[]
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
					$objItem = OrdenesTrabajo::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = OrdenesTrabajo::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single OrdenesTrabajo object,
		 * by OrdenesTrabajoId Index(es)
		 * @param integer $intOrdenesTrabajoId
		 * @return OrdenesTrabajo
		*/
		public static function LoadByOrdenesTrabajoId($intOrdenesTrabajoId) {
			return OrdenesTrabajo::QuerySingle(
				QQ::Equal(QQN::OrdenesTrabajo()->OrdenesTrabajoId, $intOrdenesTrabajoId)
			);
		}
			
		/**
		 * Load an array of OrdenesTrabajo objects,
		 * by ClientesId Index(es)
		 * @param integer $intClientesId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return OrdenesTrabajo[]
		*/
		public static function LoadArrayByClientesId($intClientesId, $objOptionalClauses = null) {
			// Call OrdenesTrabajo::QueryArray to perform the LoadArrayByClientesId query
			try {
				return OrdenesTrabajo::QueryArray(
					QQ::Equal(QQN::OrdenesTrabajo()->ClientesId, $intClientesId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count OrdenesTrabajos
		 * by ClientesId Index(es)
		 * @param integer $intClientesId
		 * @return int
		*/
		public static function CountByClientesId($intClientesId) {
			// Call OrdenesTrabajo::QueryCount to perform the CountByClientesId query
			return OrdenesTrabajo::QueryCount(
				QQ::Equal(QQN::OrdenesTrabajo()->ClientesId, $intClientesId)
			);
		}
			
		/**
		 * Load an array of OrdenesTrabajo objects,
		 * by MuestrasId Index(es)
		 * @param integer $intMuestrasId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return OrdenesTrabajo[]
		*/
		public static function LoadArrayByMuestrasId($intMuestrasId, $objOptionalClauses = null) {
			// Call OrdenesTrabajo::QueryArray to perform the LoadArrayByMuestrasId query
			try {
				return OrdenesTrabajo::QueryArray(
					QQ::Equal(QQN::OrdenesTrabajo()->MuestrasId, $intMuestrasId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count OrdenesTrabajos
		 * by MuestrasId Index(es)
		 * @param integer $intMuestrasId
		 * @return int
		*/
		public static function CountByMuestrasId($intMuestrasId) {
			// Call OrdenesTrabajo::QueryCount to perform the CountByMuestrasId query
			return OrdenesTrabajo::QueryCount(
				QQ::Equal(QQN::OrdenesTrabajo()->MuestrasId, $intMuestrasId)
			);
		}
			
		/**
		 * Load an array of OrdenesTrabajo objects,
		 * by UsuariosId Index(es)
		 * @param integer $intUsuariosId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return OrdenesTrabajo[]
		*/
		public static function LoadArrayByUsuariosId($intUsuariosId, $objOptionalClauses = null) {
			// Call OrdenesTrabajo::QueryArray to perform the LoadArrayByUsuariosId query
			try {
				return OrdenesTrabajo::QueryArray(
					QQ::Equal(QQN::OrdenesTrabajo()->UsuariosId, $intUsuariosId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count OrdenesTrabajos
		 * by UsuariosId Index(es)
		 * @param integer $intUsuariosId
		 * @return int
		*/
		public static function CountByUsuariosId($intUsuariosId) {
			// Call OrdenesTrabajo::QueryCount to perform the CountByUsuariosId query
			return OrdenesTrabajo::QueryCount(
				QQ::Equal(QQN::OrdenesTrabajo()->UsuariosId, $intUsuariosId)
			);
		}
			
		/**
		 * Load an array of OrdenesTrabajo objects,
		 * by Buque Index(es)
		 * @param string $strBuque
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return OrdenesTrabajo[]
		*/
		public static function LoadArrayByBuque($strBuque, $objOptionalClauses = null) {
			// Call OrdenesTrabajo::QueryArray to perform the LoadArrayByBuque query
			try {
				return OrdenesTrabajo::QueryArray(
					QQ::Equal(QQN::OrdenesTrabajo()->Buque, $strBuque),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count OrdenesTrabajos
		 * by Buque Index(es)
		 * @param string $strBuque
		 * @return int
		*/
		public static function CountByBuque($strBuque) {
			// Call OrdenesTrabajo::QueryCount to perform the CountByBuque query
			return OrdenesTrabajo::QueryCount(
				QQ::Equal(QQN::OrdenesTrabajo()->Buque, $strBuque)
			);
		}
			
		/**
		 * Load an array of OrdenesTrabajo objects,
		 * by Cargador Index(es)
		 * @param string $strCargador
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return OrdenesTrabajo[]
		*/
		public static function LoadArrayByCargador($strCargador, $objOptionalClauses = null) {
			// Call OrdenesTrabajo::QueryArray to perform the LoadArrayByCargador query
			try {
				return OrdenesTrabajo::QueryArray(
					QQ::Equal(QQN::OrdenesTrabajo()->Cargador, $strCargador),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count OrdenesTrabajos
		 * by Cargador Index(es)
		 * @param string $strCargador
		 * @return int
		*/
		public static function CountByCargador($strCargador) {
			// Call OrdenesTrabajo::QueryCount to perform the CountByCargador query
			return OrdenesTrabajo::QueryCount(
				QQ::Equal(QQN::OrdenesTrabajo()->Cargador, $strCargador)
			);
		}
			
		/**
		 * Load an array of OrdenesTrabajo objects,
		 * by Destino Index(es)
		 * @param string $strDestino
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return OrdenesTrabajo[]
		*/
		public static function LoadArrayByDestino($strDestino, $objOptionalClauses = null) {
			// Call OrdenesTrabajo::QueryArray to perform the LoadArrayByDestino query
			try {
				return OrdenesTrabajo::QueryArray(
					QQ::Equal(QQN::OrdenesTrabajo()->Destino, $strDestino),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count OrdenesTrabajos
		 * by Destino Index(es)
		 * @param string $strDestino
		 * @return int
		*/
		public static function CountByDestino($strDestino) {
			// Call OrdenesTrabajo::QueryCount to perform the CountByDestino query
			return OrdenesTrabajo::QueryCount(
				QQ::Equal(QQN::OrdenesTrabajo()->Destino, $strDestino)
			);
		}
			
		/**
		 * Load an array of OrdenesTrabajo objects,
		 * by FechaEntrada Index(es)
		 * @param QDateTime $dttFechaEntrada
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return OrdenesTrabajo[]
		*/
		public static function LoadArrayByFechaEntrada($dttFechaEntrada, $objOptionalClauses = null) {
			// Call OrdenesTrabajo::QueryArray to perform the LoadArrayByFechaEntrada query
			try {
				return OrdenesTrabajo::QueryArray(
					QQ::Equal(QQN::OrdenesTrabajo()->FechaEntrada, $dttFechaEntrada),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count OrdenesTrabajos
		 * by FechaEntrada Index(es)
		 * @param QDateTime $dttFechaEntrada
		 * @return int
		*/
		public static function CountByFechaEntrada($dttFechaEntrada) {
			// Call OrdenesTrabajo::QueryCount to perform the CountByFechaEntrada query
			return OrdenesTrabajo::QueryCount(
				QQ::Equal(QQN::OrdenesTrabajo()->FechaEntrada, $dttFechaEntrada)
			);
		}
			
		/**
		 * Load an array of OrdenesTrabajo objects,
		 * by Kg Index(es)
		 * @param integer $intKg
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return OrdenesTrabajo[]
		*/
		public static function LoadArrayByKg($intKg, $objOptionalClauses = null) {
			// Call OrdenesTrabajo::QueryArray to perform the LoadArrayByKg query
			try {
				return OrdenesTrabajo::QueryArray(
					QQ::Equal(QQN::OrdenesTrabajo()->Kg, $intKg),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count OrdenesTrabajos
		 * by Kg Index(es)
		 * @param integer $intKg
		 * @return int
		*/
		public static function CountByKg($intKg) {
			// Call OrdenesTrabajo::QueryCount to perform the CountByKg query
			return OrdenesTrabajo::QueryCount(
				QQ::Equal(QQN::OrdenesTrabajo()->Kg, $intKg)
			);
		}
			
		/**
		 * Load an array of OrdenesTrabajo objects,
		 * by Puerto Index(es)
		 * @param string $strPuerto
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return OrdenesTrabajo[]
		*/
		public static function LoadArrayByPuerto($strPuerto, $objOptionalClauses = null) {
			// Call OrdenesTrabajo::QueryArray to perform the LoadArrayByPuerto query
			try {
				return OrdenesTrabajo::QueryArray(
					QQ::Equal(QQN::OrdenesTrabajo()->Puerto, $strPuerto),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count OrdenesTrabajos
		 * by Puerto Index(es)
		 * @param string $strPuerto
		 * @return int
		*/
		public static function CountByPuerto($strPuerto) {
			// Call OrdenesTrabajo::QueryCount to perform the CountByPuerto query
			return OrdenesTrabajo::QueryCount(
				QQ::Equal(QQN::OrdenesTrabajo()->Puerto, $strPuerto)
			);
		}
			
		/**
		 * Load an array of OrdenesTrabajo objects,
		 * by ReferenciaCliente Index(es)
		 * @param string $strReferenciaCliente
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return OrdenesTrabajo[]
		*/
		public static function LoadArrayByReferenciaCliente($strReferenciaCliente, $objOptionalClauses = null) {
			// Call OrdenesTrabajo::QueryArray to perform the LoadArrayByReferenciaCliente query
			try {
				return OrdenesTrabajo::QueryArray(
					QQ::Equal(QQN::OrdenesTrabajo()->ReferenciaCliente, $strReferenciaCliente),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count OrdenesTrabajos
		 * by ReferenciaCliente Index(es)
		 * @param string $strReferenciaCliente
		 * @return int
		*/
		public static function CountByReferenciaCliente($strReferenciaCliente) {
			// Call OrdenesTrabajo::QueryCount to perform the CountByReferenciaCliente query
			return OrdenesTrabajo::QueryCount(
				QQ::Equal(QQN::OrdenesTrabajo()->ReferenciaCliente, $strReferenciaCliente)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////
			/**
		 * Load an array of Analisis objects for a given Analisis
		 * via the analisis_ordenes_trabajo_assn table
		 * @param integer $intAnalisisId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return OrdenesTrabajo[]
		*/
		public static function LoadArrayByAnalisis($intAnalisisId, $objOptionalClauses = null) {
			// Call OrdenesTrabajo::QueryArray to perform the LoadArrayByAnalisis query
			try {
				return OrdenesTrabajo::QueryArray(
					QQ::Equal(QQN::OrdenesTrabajo()->Analisis->AnalisisId, $intAnalisisId),
					$objOptionalClauses
				);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count OrdenesTrabajos for a given Analisis
		 * via the analisis_ordenes_trabajo_assn table
		 * @param integer $intAnalisisId
		 * @return int
		*/
		public static function CountByAnalisis($intAnalisisId) {
			return OrdenesTrabajo::QueryCount(
				QQ::Equal(QQN::OrdenesTrabajo()->Analisis->AnalisisId, $intAnalisisId)
			);
		}




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this OrdenesTrabajo
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = OrdenesTrabajo::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO "ordenes_trabajo" (
							"fecha_entrada",
							"clientes_id",
							"cargador",
							"buque",
							"kg",
							"puerto",
							"referencia_cliente",
							"destino",
							"muestras_id",
							"usuarios_id",
							"new",
							"estado",
							"observaciones",
							"fecha_finalizado"
						) VALUES (
							' . $objDatabase->SqlVariable($this->dttFechaEntrada) . ',
							' . $objDatabase->SqlVariable($this->intClientesId) . ',
							' . $objDatabase->SqlVariable($this->strCargador) . ',
							' . $objDatabase->SqlVariable($this->strBuque) . ',
							' . $objDatabase->SqlVariable($this->intKg) . ',
							' . $objDatabase->SqlVariable($this->strPuerto) . ',
							' . $objDatabase->SqlVariable($this->strReferenciaCliente) . ',
							' . $objDatabase->SqlVariable($this->strDestino) . ',
							' . $objDatabase->SqlVariable($this->intMuestrasId) . ',
							' . $objDatabase->SqlVariable($this->intUsuariosId) . ',
							' . $objDatabase->SqlVariable($this->blnNew) . ',
							' . $objDatabase->SqlVariable($this->strEstado) . ',
							' . $objDatabase->SqlVariable($this->strObservaciones) . ',
							' . $objDatabase->SqlVariable($this->dttFechaFinalizado) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intOrdenesTrabajoId = $objDatabase->InsertId('ordenes_trabajo', 'ordenes_trabajo_id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							"ordenes_trabajo"
						SET
							"fecha_entrada" = ' . $objDatabase->SqlVariable($this->dttFechaEntrada) . ',
							"clientes_id" = ' . $objDatabase->SqlVariable($this->intClientesId) . ',
							"cargador" = ' . $objDatabase->SqlVariable($this->strCargador) . ',
							"buque" = ' . $objDatabase->SqlVariable($this->strBuque) . ',
							"kg" = ' . $objDatabase->SqlVariable($this->intKg) . ',
							"puerto" = ' . $objDatabase->SqlVariable($this->strPuerto) . ',
							"referencia_cliente" = ' . $objDatabase->SqlVariable($this->strReferenciaCliente) . ',
							"destino" = ' . $objDatabase->SqlVariable($this->strDestino) . ',
							"muestras_id" = ' . $objDatabase->SqlVariable($this->intMuestrasId) . ',
							"usuarios_id" = ' . $objDatabase->SqlVariable($this->intUsuariosId) . ',
							"new" = ' . $objDatabase->SqlVariable($this->blnNew) . ',
							"estado" = ' . $objDatabase->SqlVariable($this->strEstado) . ',
							"observaciones" = ' . $objDatabase->SqlVariable($this->strObservaciones) . ',
							"fecha_finalizado" = ' . $objDatabase->SqlVariable($this->dttFechaFinalizado) . '
						WHERE
							"ordenes_trabajo_id" = ' . $objDatabase->SqlVariable($this->intOrdenesTrabajoId) . '
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
		 * Delete this OrdenesTrabajo
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intOrdenesTrabajoId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this OrdenesTrabajo with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = OrdenesTrabajo::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"ordenes_trabajo"
				WHERE
					"ordenes_trabajo_id" = ' . $objDatabase->SqlVariable($this->intOrdenesTrabajoId) . '');
		}

		/**
		 * Delete all OrdenesTrabajos
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = OrdenesTrabajo::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					"ordenes_trabajo"');
		}

		/**
		 * Truncate ordenes_trabajo table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = OrdenesTrabajo::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE "ordenes_trabajo"');
		}

		/**
		 * Reload this OrdenesTrabajo from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved OrdenesTrabajo object.');

			// Reload the Object
			$objReloaded = OrdenesTrabajo::Load($this->intOrdenesTrabajoId);

			// Update $this's local variables to match
			$this->dttFechaEntrada = $objReloaded->dttFechaEntrada;
			$this->ClientesId = $objReloaded->ClientesId;
			$this->strCargador = $objReloaded->strCargador;
			$this->strBuque = $objReloaded->strBuque;
			$this->intKg = $objReloaded->intKg;
			$this->strPuerto = $objReloaded->strPuerto;
			$this->strReferenciaCliente = $objReloaded->strReferenciaCliente;
			$this->strDestino = $objReloaded->strDestino;
			$this->MuestrasId = $objReloaded->MuestrasId;
			$this->UsuariosId = $objReloaded->UsuariosId;
			$this->blnNew = $objReloaded->blnNew;
			$this->strEstado = $objReloaded->strEstado;
			$this->strObservaciones = $objReloaded->strObservaciones;
			$this->dttFechaFinalizado = $objReloaded->dttFechaFinalizado;
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
				case 'OrdenesTrabajoId':
					/**
					 * Gets the value for intOrdenesTrabajoId (Read-Only PK)
					 * @return integer
					 */
					return $this->intOrdenesTrabajoId;

				case 'FechaEntrada':
					/**
					 * Gets the value for dttFechaEntrada 
					 * @return QDateTime
					 */
					return $this->dttFechaEntrada;

				case 'ClientesId':
					/**
					 * Gets the value for intClientesId 
					 * @return integer
					 */
					return $this->intClientesId;

				case 'Cargador':
					/**
					 * Gets the value for strCargador 
					 * @return string
					 */
					return $this->strCargador;

				case 'Buque':
					/**
					 * Gets the value for strBuque 
					 * @return string
					 */
					return $this->strBuque;

				case 'Kg':
					/**
					 * Gets the value for intKg 
					 * @return integer
					 */
					return $this->intKg;

				case 'Puerto':
					/**
					 * Gets the value for strPuerto 
					 * @return string
					 */
					return $this->strPuerto;

				case 'ReferenciaCliente':
					/**
					 * Gets the value for strReferenciaCliente 
					 * @return string
					 */
					return $this->strReferenciaCliente;

				case 'Destino':
					/**
					 * Gets the value for strDestino 
					 * @return string
					 */
					return $this->strDestino;

				case 'MuestrasId':
					/**
					 * Gets the value for intMuestrasId 
					 * @return integer
					 */
					return $this->intMuestrasId;

				case 'UsuariosId':
					/**
					 * Gets the value for intUsuariosId 
					 * @return integer
					 */
					return $this->intUsuariosId;

				case 'New':
					/**
					 * Gets the value for blnNew 
					 * @return boolean
					 */
					return $this->blnNew;

				case 'Estado':
					/**
					 * Gets the value for strEstado 
					 * @return string
					 */
					return $this->strEstado;

				case 'Observaciones':
					/**
					 * Gets the value for strObservaciones 
					 * @return string
					 */
					return $this->strObservaciones;

				case 'FechaFinalizado':
					/**
					 * Gets the value for dttFechaFinalizado 
					 * @return QDateTime
					 */
					return $this->dttFechaFinalizado;


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

				case 'Muestras':
					/**
					 * Gets the value for the Muestras object referenced by intMuestrasId 
					 * @return Muestras
					 */
					try {
						if ((!$this->objMuestras) && (!is_null($this->intMuestrasId)))
							$this->objMuestras = Muestras::Load($this->intMuestrasId);
						return $this->objMuestras;
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

				case '_Analisis':
					/**
					 * Gets the value for the private _objAnalisis (Read-Only)
					 * if set due to an expansion on the analisis_ordenes_trabajo_assn association table
					 * @return Analisis
					 */
					return $this->_objAnalisis;

				case '_AnalisisArray':
					/**
					 * Gets the value for the private _objAnalisisArray (Read-Only)
					 * if set due to an ExpandAsArray on the analisis_ordenes_trabajo_assn association table
					 * @return Analisis[]
					 */
					return (array) $this->_objAnalisisArray;

				case '_Resultados':
					/**
					 * Gets the value for the private _objResultados (Read-Only)
					 * if set due to an expansion on the resultados.ordenes_trabajo_id reverse relationship
					 * @return Resultados
					 */
					return $this->_objResultados;

				case '_ResultadosArray':
					/**
					 * Gets the value for the private _objResultadosArray (Read-Only)
					 * if set due to an ExpandAsArray on the resultados.ordenes_trabajo_id reverse relationship
					 * @return Resultados[]
					 */
					return (array) $this->_objResultadosArray;


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
				case 'FechaEntrada':
					/**
					 * Sets the value for dttFechaEntrada 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttFechaEntrada = QType::Cast($mixValue, QType::DateTime));
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

				case 'Cargador':
					/**
					 * Sets the value for strCargador 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCargador = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Buque':
					/**
					 * Sets the value for strBuque 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strBuque = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Kg':
					/**
					 * Sets the value for intKg 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intKg = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Puerto':
					/**
					 * Sets the value for strPuerto 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPuerto = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ReferenciaCliente':
					/**
					 * Sets the value for strReferenciaCliente 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strReferenciaCliente = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Destino':
					/**
					 * Sets the value for strDestino 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDestino = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MuestrasId':
					/**
					 * Sets the value for intMuestrasId 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objMuestras = null;
						return ($this->intMuestrasId = QType::Cast($mixValue, QType::Integer));
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

				case 'New':
					/**
					 * Sets the value for blnNew 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnNew = QType::Cast($mixValue, QType::Boolean));
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

				case 'FechaFinalizado':
					/**
					 * Sets the value for dttFechaFinalizado 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttFechaFinalizado = QType::Cast($mixValue, QType::DateTime));
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
							throw new QCallerException('Unable to set an unsaved Clientes for this OrdenesTrabajo');

						// Update Local Member Variables
						$this->objClientes = $mixValue;
						$this->intClientesId = $mixValue->ClientesId;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'Muestras':
					/**
					 * Sets the value for the Muestras object referenced by intMuestrasId 
					 * @param Muestras $mixValue
					 * @return Muestras
					 */
					if (is_null($mixValue)) {
						$this->intMuestrasId = null;
						$this->objMuestras = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Muestras object
						try {
							$mixValue = QType::Cast($mixValue, 'Muestras');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Muestras object
						if (is_null($mixValue->MuestrasId))
							throw new QCallerException('Unable to set an unsaved Muestras for this OrdenesTrabajo');

						// Update Local Member Variables
						$this->objMuestras = $mixValue;
						$this->intMuestrasId = $mixValue->MuestrasId;

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
							throw new QCallerException('Unable to set an unsaved Usuarios for this OrdenesTrabajo');

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

			
		
		// Related Objects' Methods for Resultados
		//-------------------------------------------------------------------

		/**
		 * Gets all associated Resultadoses as an array of Resultados objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Resultados[]
		*/ 
		public function GetResultadosArray($objOptionalClauses = null) {
			if ((is_null($this->intOrdenesTrabajoId)))
				return array();

			try {
				return Resultados::LoadArrayByOrdenesTrabajoId($this->intOrdenesTrabajoId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated Resultadoses
		 * @return int
		*/ 
		public function CountResultadoses() {
			if ((is_null($this->intOrdenesTrabajoId)))
				return 0;

			return Resultados::CountByOrdenesTrabajoId($this->intOrdenesTrabajoId);
		}

		/**
		 * Associates a Resultados
		 * @param Resultados $objResultados
		 * @return void
		*/ 
		public function AssociateResultados(Resultados $objResultados) {
			if ((is_null($this->intOrdenesTrabajoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateResultados on this unsaved OrdenesTrabajo.');
			if ((is_null($objResultados->ResultadosId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateResultados on this OrdenesTrabajo with an unsaved Resultados.');

			// Get the Database Object for this Class
			$objDatabase = OrdenesTrabajo::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					"resultados"
				SET
					"ordenes_trabajo_id" = ' . $objDatabase->SqlVariable($this->intOrdenesTrabajoId) . '
				WHERE
					"resultados_id" = ' . $objDatabase->SqlVariable($objResultados->ResultadosId) . '
			');
		}

		/**
		 * Unassociates a Resultados
		 * @param Resultados $objResultados
		 * @return void
		*/ 
		public function UnassociateResultados(Resultados $objResultados) {
			if ((is_null($this->intOrdenesTrabajoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateResultados on this unsaved OrdenesTrabajo.');
			if ((is_null($objResultados->ResultadosId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateResultados on this OrdenesTrabajo with an unsaved Resultados.');

			// Get the Database Object for this Class
			$objDatabase = OrdenesTrabajo::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					"resultados"
				SET
					"ordenes_trabajo_id" = null
				WHERE
					"resultados_id" = ' . $objDatabase->SqlVariable($objResultados->ResultadosId) . ' AND
					"ordenes_trabajo_id" = ' . $objDatabase->SqlVariable($this->intOrdenesTrabajoId) . '
			');
		}

		/**
		 * Unassociates all Resultadoses
		 * @return void
		*/ 
		public function UnassociateAllResultadoses() {
			if ((is_null($this->intOrdenesTrabajoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateResultados on this unsaved OrdenesTrabajo.');

			// Get the Database Object for this Class
			$objDatabase = OrdenesTrabajo::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					"resultados"
				SET
					"ordenes_trabajo_id" = null
				WHERE
					"ordenes_trabajo_id" = ' . $objDatabase->SqlVariable($this->intOrdenesTrabajoId) . '
			');
		}

		/**
		 * Deletes an associated Resultados
		 * @param Resultados $objResultados
		 * @return void
		*/ 
		public function DeleteAssociatedResultados(Resultados $objResultados) {
			if ((is_null($this->intOrdenesTrabajoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateResultados on this unsaved OrdenesTrabajo.');
			if ((is_null($objResultados->ResultadosId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateResultados on this OrdenesTrabajo with an unsaved Resultados.');

			// Get the Database Object for this Class
			$objDatabase = OrdenesTrabajo::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"resultados"
				WHERE
					"resultados_id" = ' . $objDatabase->SqlVariable($objResultados->ResultadosId) . ' AND
					"ordenes_trabajo_id" = ' . $objDatabase->SqlVariable($this->intOrdenesTrabajoId) . '
			');
		}

		/**
		 * Deletes all associated Resultadoses
		 * @return void
		*/ 
		public function DeleteAllResultadoses() {
			if ((is_null($this->intOrdenesTrabajoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateResultados on this unsaved OrdenesTrabajo.');

			// Get the Database Object for this Class
			$objDatabase = OrdenesTrabajo::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"resultados"
				WHERE
					"ordenes_trabajo_id" = ' . $objDatabase->SqlVariable($this->intOrdenesTrabajoId) . '
			');
		}

			
		// Related Many-to-Many Objects' Methods for Analisis
		//-------------------------------------------------------------------

		/**
		 * Gets all many-to-many associated Analisises as an array of Analisis objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Analisis[]
		*/ 
		public function GetAnalisisArray($objOptionalClauses = null) {
			if ((is_null($this->intOrdenesTrabajoId)))
				return array();

			try {
				return Analisis::LoadArrayByOrdenesTrabajo($this->intOrdenesTrabajoId, $objOptionalClauses);
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
			if ((is_null($this->intOrdenesTrabajoId)))
				return 0;

			return Analisis::CountByOrdenesTrabajo($this->intOrdenesTrabajoId);
		}

		/**
		 * Checks to see if an association exists with a specific Analisis
		 * @param Analisis $objAnalisis
		 * @return bool
		*/
		public function IsAnalisisAssociated(Analisis $objAnalisis) {
			if ((is_null($this->intOrdenesTrabajoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsAnalisisAssociated on this unsaved OrdenesTrabajo.');
			if ((is_null($objAnalisis->AnalisisId)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsAnalisisAssociated on this OrdenesTrabajo with an unsaved Analisis.');

			$intRowCount = OrdenesTrabajo::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::OrdenesTrabajo()->OrdenesTrabajoId, $this->intOrdenesTrabajoId),
					QQ::Equal(QQN::OrdenesTrabajo()->Analisis->AnalisisId, $objAnalisis->AnalisisId)
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
			if ((is_null($this->intOrdenesTrabajoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAnalisis on this unsaved OrdenesTrabajo.');
			if ((is_null($objAnalisis->AnalisisId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAnalisis on this OrdenesTrabajo with an unsaved Analisis.');

			// Get the Database Object for this Class
			$objDatabase = OrdenesTrabajo::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				INSERT INTO "analisis_ordenes_trabajo_assn" (
					"ordenes_trabajo_id",
					"analisis_id"
				) VALUES (
					' . $objDatabase->SqlVariable($this->intOrdenesTrabajoId) . ',
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
			if ((is_null($this->intOrdenesTrabajoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAnalisis on this unsaved OrdenesTrabajo.');
			if ((is_null($objAnalisis->AnalisisId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAnalisis on this OrdenesTrabajo with an unsaved Analisis.');

			// Get the Database Object for this Class
			$objDatabase = OrdenesTrabajo::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"analisis_ordenes_trabajo_assn"
				WHERE
					"ordenes_trabajo_id" = ' . $objDatabase->SqlVariable($this->intOrdenesTrabajoId) . ' AND
					"analisis_id" = ' . $objDatabase->SqlVariable($objAnalisis->AnalisisId) . '
			');
		}

		/**
		 * Unassociates all Analisises
		 * @return void
		*/ 
		public function UnassociateAllAnalisises() {
			if ((is_null($this->intOrdenesTrabajoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllAnalisisArray on this unsaved OrdenesTrabajo.');

			// Get the Database Object for this Class
			$objDatabase = OrdenesTrabajo::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"analisis_ordenes_trabajo_assn"
				WHERE
					"ordenes_trabajo_id" = ' . $objDatabase->SqlVariable($this->intOrdenesTrabajoId) . '
			');
		}




		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="OrdenesTrabajo"><sequence>';
			$strToReturn .= '<element name="OrdenesTrabajoId" type="xsd:int"/>';
			$strToReturn .= '<element name="FechaEntrada" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Clientes" type="xsd1:Clientes"/>';
			$strToReturn .= '<element name="Cargador" type="xsd:string"/>';
			$strToReturn .= '<element name="Buque" type="xsd:string"/>';
			$strToReturn .= '<element name="Kg" type="xsd:int"/>';
			$strToReturn .= '<element name="Puerto" type="xsd:string"/>';
			$strToReturn .= '<element name="ReferenciaCliente" type="xsd:string"/>';
			$strToReturn .= '<element name="Destino" type="xsd:string"/>';
			$strToReturn .= '<element name="Muestras" type="xsd1:Muestras"/>';
			$strToReturn .= '<element name="Usuarios" type="xsd1:Usuarios"/>';
			$strToReturn .= '<element name="New" type="xsd:boolean"/>';
			$strToReturn .= '<element name="Estado" type="xsd:string"/>';
			$strToReturn .= '<element name="Observaciones" type="xsd:string"/>';
			$strToReturn .= '<element name="FechaFinalizado" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('OrdenesTrabajo', $strComplexTypeArray)) {
				$strComplexTypeArray['OrdenesTrabajo'] = OrdenesTrabajo::GetSoapComplexTypeXml();
				Clientes::AlterSoapComplexTypeArray($strComplexTypeArray);
				Muestras::AlterSoapComplexTypeArray($strComplexTypeArray);
				Usuarios::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, OrdenesTrabajo::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new OrdenesTrabajo();
			if (property_exists($objSoapObject, 'OrdenesTrabajoId'))
				$objToReturn->intOrdenesTrabajoId = $objSoapObject->OrdenesTrabajoId;
			if (property_exists($objSoapObject, 'FechaEntrada'))
				$objToReturn->dttFechaEntrada = new QDateTime($objSoapObject->FechaEntrada);
			if ((property_exists($objSoapObject, 'Clientes')) &&
				($objSoapObject->Clientes))
				$objToReturn->Clientes = Clientes::GetObjectFromSoapObject($objSoapObject->Clientes);
			if (property_exists($objSoapObject, 'Cargador'))
				$objToReturn->strCargador = $objSoapObject->Cargador;
			if (property_exists($objSoapObject, 'Buque'))
				$objToReturn->strBuque = $objSoapObject->Buque;
			if (property_exists($objSoapObject, 'Kg'))
				$objToReturn->intKg = $objSoapObject->Kg;
			if (property_exists($objSoapObject, 'Puerto'))
				$objToReturn->strPuerto = $objSoapObject->Puerto;
			if (property_exists($objSoapObject, 'ReferenciaCliente'))
				$objToReturn->strReferenciaCliente = $objSoapObject->ReferenciaCliente;
			if (property_exists($objSoapObject, 'Destino'))
				$objToReturn->strDestino = $objSoapObject->Destino;
			if ((property_exists($objSoapObject, 'Muestras')) &&
				($objSoapObject->Muestras))
				$objToReturn->Muestras = Muestras::GetObjectFromSoapObject($objSoapObject->Muestras);
			if ((property_exists($objSoapObject, 'Usuarios')) &&
				($objSoapObject->Usuarios))
				$objToReturn->Usuarios = Usuarios::GetObjectFromSoapObject($objSoapObject->Usuarios);
			if (property_exists($objSoapObject, 'New'))
				$objToReturn->blnNew = $objSoapObject->New;
			if (property_exists($objSoapObject, 'Estado'))
				$objToReturn->strEstado = $objSoapObject->Estado;
			if (property_exists($objSoapObject, 'Observaciones'))
				$objToReturn->strObservaciones = $objSoapObject->Observaciones;
			if (property_exists($objSoapObject, 'FechaFinalizado'))
				$objToReturn->dttFechaFinalizado = new QDateTime($objSoapObject->FechaFinalizado);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, OrdenesTrabajo::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->dttFechaEntrada)
				$objObject->dttFechaEntrada = $objObject->dttFechaEntrada->__toString(QDateTime::FormatSoap);
			if ($objObject->objClientes)
				$objObject->objClientes = Clientes::GetSoapObjectFromObject($objObject->objClientes, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intClientesId = null;
			if ($objObject->objMuestras)
				$objObject->objMuestras = Muestras::GetSoapObjectFromObject($objObject->objMuestras, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intMuestrasId = null;
			if ($objObject->objUsuarios)
				$objObject->objUsuarios = Usuarios::GetSoapObjectFromObject($objObject->objUsuarios, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intUsuariosId = null;
			if ($objObject->dttFechaFinalizado)
				$objObject->dttFechaFinalizado = $objObject->dttFechaFinalizado->__toString(QDateTime::FormatSoap);
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

	class QQNodeOrdenesTrabajoAnalisis extends QQAssociationNode {
		protected $strType = 'association';
		protected $strName = 'analisis';

		protected $strTableName = 'analisis_ordenes_trabajo_assn';
		protected $strPrimaryKey = 'ordenes_trabajo_id';
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

	class QQNodeOrdenesTrabajo extends QQNode {
		protected $strTableName = 'ordenes_trabajo';
		protected $strPrimaryKey = 'ordenes_trabajo_id';
		protected $strClassName = 'OrdenesTrabajo';
		public function __get($strName) {
			switch ($strName) {
				case 'OrdenesTrabajoId':
					return new QQNode('ordenes_trabajo_id', 'OrdenesTrabajoId', 'integer', $this);
				case 'FechaEntrada':
					return new QQNode('fecha_entrada', 'FechaEntrada', 'QDateTime', $this);
				case 'ClientesId':
					return new QQNode('clientes_id', 'ClientesId', 'integer', $this);
				case 'Clientes':
					return new QQNodeClientes('clientes_id', 'Clientes', 'integer', $this);
				case 'Cargador':
					return new QQNode('cargador', 'Cargador', 'string', $this);
				case 'Buque':
					return new QQNode('buque', 'Buque', 'string', $this);
				case 'Kg':
					return new QQNode('kg', 'Kg', 'integer', $this);
				case 'Puerto':
					return new QQNode('puerto', 'Puerto', 'string', $this);
				case 'ReferenciaCliente':
					return new QQNode('referencia_cliente', 'ReferenciaCliente', 'string', $this);
				case 'Destino':
					return new QQNode('destino', 'Destino', 'string', $this);
				case 'MuestrasId':
					return new QQNode('muestras_id', 'MuestrasId', 'integer', $this);
				case 'Muestras':
					return new QQNodeMuestras('muestras_id', 'Muestras', 'integer', $this);
				case 'UsuariosId':
					return new QQNode('usuarios_id', 'UsuariosId', 'integer', $this);
				case 'Usuarios':
					return new QQNodeUsuarios('usuarios_id', 'Usuarios', 'integer', $this);
				case 'New':
					return new QQNode('new', 'New', 'boolean', $this);
				case 'Estado':
					return new QQNode('estado', 'Estado', 'string', $this);
				case 'Observaciones':
					return new QQNode('observaciones', 'Observaciones', 'string', $this);
				case 'FechaFinalizado':
					return new QQNode('fecha_finalizado', 'FechaFinalizado', 'QDateTime', $this);
				case 'Analisis':
					return new QQNodeOrdenesTrabajoAnalisis($this);
				case 'Resultados':
					return new QQReverseReferenceNodeResultados($this, 'resultados', 'reverse_reference', 'ordenes_trabajo_id');

				case '_PrimaryKeyNode':
					return new QQNode('ordenes_trabajo_id', 'OrdenesTrabajoId', 'integer', $this);
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

	class QQReverseReferenceNodeOrdenesTrabajo extends QQReverseReferenceNode {
		protected $strTableName = 'ordenes_trabajo';
		protected $strPrimaryKey = 'ordenes_trabajo_id';
		protected $strClassName = 'OrdenesTrabajo';
		public function __get($strName) {
			switch ($strName) {
				case 'OrdenesTrabajoId':
					return new QQNode('ordenes_trabajo_id', 'OrdenesTrabajoId', 'integer', $this);
				case 'FechaEntrada':
					return new QQNode('fecha_entrada', 'FechaEntrada', 'QDateTime', $this);
				case 'ClientesId':
					return new QQNode('clientes_id', 'ClientesId', 'integer', $this);
				case 'Clientes':
					return new QQNodeClientes('clientes_id', 'Clientes', 'integer', $this);
				case 'Cargador':
					return new QQNode('cargador', 'Cargador', 'string', $this);
				case 'Buque':
					return new QQNode('buque', 'Buque', 'string', $this);
				case 'Kg':
					return new QQNode('kg', 'Kg', 'integer', $this);
				case 'Puerto':
					return new QQNode('puerto', 'Puerto', 'string', $this);
				case 'ReferenciaCliente':
					return new QQNode('referencia_cliente', 'ReferenciaCliente', 'string', $this);
				case 'Destino':
					return new QQNode('destino', 'Destino', 'string', $this);
				case 'MuestrasId':
					return new QQNode('muestras_id', 'MuestrasId', 'integer', $this);
				case 'Muestras':
					return new QQNodeMuestras('muestras_id', 'Muestras', 'integer', $this);
				case 'UsuariosId':
					return new QQNode('usuarios_id', 'UsuariosId', 'integer', $this);
				case 'Usuarios':
					return new QQNodeUsuarios('usuarios_id', 'Usuarios', 'integer', $this);
				case 'New':
					return new QQNode('new', 'New', 'boolean', $this);
				case 'Estado':
					return new QQNode('estado', 'Estado', 'string', $this);
				case 'Observaciones':
					return new QQNode('observaciones', 'Observaciones', 'string', $this);
				case 'FechaFinalizado':
					return new QQNode('fecha_finalizado', 'FechaFinalizado', 'QDateTime', $this);
				case 'Analisis':
					return new QQNodeOrdenesTrabajoAnalisis($this);
				case 'Resultados':
					return new QQReverseReferenceNodeResultados($this, 'resultados', 'reverse_reference', 'ordenes_trabajo_id');

				case '_PrimaryKeyNode':
					return new QQNode('ordenes_trabajo_id', 'OrdenesTrabajoId', 'integer', $this);
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