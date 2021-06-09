<?php
	/**
	 * The abstract AnalisisGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Analisis subclass which
	 * extends this AnalisisGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Analisis class.
	 * 
	 * @package SIGA
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $AnalisisId the value for intAnalisisId (Read-Only PK)
	 * @property string $Nombre the value for strNombre 
	 * @property integer $TiempoDemora the value for intTiempoDemora 
	 * @property integer $Grupo the value for intGrupo 
	 * @property-read Metodos $_Metodos the value for the private _objMetodos (Read-Only) if set due to an expansion on the analisis_metodos_assn association table
	 * @property-read Metodos[] $_MetodosArray the value for the private _objMetodosArray (Read-Only) if set due to an ExpandAsArray on the analisis_metodos_assn association table
	 * @property-read OrdenesTrabajo $_OrdenesTrabajo the value for the private _objOrdenesTrabajo (Read-Only) if set due to an expansion on the analisis_ordenes_trabajo_assn association table
	 * @property-read OrdenesTrabajo[] $_OrdenesTrabajoArray the value for the private _objOrdenesTrabajoArray (Read-Only) if set due to an ExpandAsArray on the analisis_ordenes_trabajo_assn association table
	 * @property-read Unidades $_Unidades the value for the private _objUnidades (Read-Only) if set due to an expansion on the analisis_unidades_assn association table
	 * @property-read Unidades[] $_UnidadesArray the value for the private _objUnidadesArray (Read-Only) if set due to an ExpandAsArray on the analisis_unidades_assn association table
	 * @property-read Resultados $_Resultados the value for the private _objResultados (Read-Only) if set due to an expansion on the resultados.analisis_id reverse relationship
	 * @property-read Resultados[] $_ResultadosArray the value for the private _objResultadosArray (Read-Only) if set due to an ExpandAsArray on the resultados.analisis_id reverse relationship
	 * @property-read UsuariosAnalisis $_UsuariosAnalisis the value for the private _objUsuariosAnalisis (Read-Only) if set due to an expansion on the usuarios_analisis.analisis_id reverse relationship
	 * @property-read UsuariosAnalisis[] $_UsuariosAnalisisArray the value for the private _objUsuariosAnalisisArray (Read-Only) if set due to an ExpandAsArray on the usuarios_analisis.analisis_id reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class AnalisisGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column analisis.analisis_id
		 * @var integer intAnalisisId
		 */
		protected $intAnalisisId;
		const AnalisisIdDefault = 'nextval(\'analisis_analisis_id_seq\'::regclass)';


		/**
		 * Protected member variable that maps to the database column analisis.nombre
		 * @var string strNombre
		 */
		protected $strNombre;
		const NombreDefault = null;


		/**
		 * Protected member variable that maps to the database column analisis.tiempo_demora
		 * @var integer intTiempoDemora
		 */
		protected $intTiempoDemora;
		const TiempoDemoraDefault = null;


		/**
		 * Protected member variable that maps to the database column analisis.grupo
		 * @var integer intGrupo
		 */
		protected $intGrupo;
		const GrupoDefault = null;


		/**
		 * Private member variable that stores a reference to a single Metodos object
		 * (of type Metodos), if this Analisis object was restored with
		 * an expansion on the analisis_metodos_assn association table.
		 * @var Metodos _objMetodos;
		 */
		private $_objMetodos;

		/**
		 * Private member variable that stores a reference to an array of Metodos objects
		 * (of type Metodos[]), if this Analisis object was restored with
		 * an ExpandAsArray on the analisis_metodos_assn association table.
		 * @var Metodos[] _objMetodosArray;
		 */
		private $_objMetodosArray = array();

		/**
		 * Private member variable that stores a reference to a single OrdenesTrabajo object
		 * (of type OrdenesTrabajo), if this Analisis object was restored with
		 * an expansion on the analisis_ordenes_trabajo_assn association table.
		 * @var OrdenesTrabajo _objOrdenesTrabajo;
		 */
		private $_objOrdenesTrabajo;

		/**
		 * Private member variable that stores a reference to an array of OrdenesTrabajo objects
		 * (of type OrdenesTrabajo[]), if this Analisis object was restored with
		 * an ExpandAsArray on the analisis_ordenes_trabajo_assn association table.
		 * @var OrdenesTrabajo[] _objOrdenesTrabajoArray;
		 */
		private $_objOrdenesTrabajoArray = array();

		/**
		 * Private member variable that stores a reference to a single Unidades object
		 * (of type Unidades), if this Analisis object was restored with
		 * an expansion on the analisis_unidades_assn association table.
		 * @var Unidades _objUnidades;
		 */
		private $_objUnidades;

		/**
		 * Private member variable that stores a reference to an array of Unidades objects
		 * (of type Unidades[]), if this Analisis object was restored with
		 * an ExpandAsArray on the analisis_unidades_assn association table.
		 * @var Unidades[] _objUnidadesArray;
		 */
		private $_objUnidadesArray = array();

		/**
		 * Private member variable that stores a reference to a single Resultados object
		 * (of type Resultados), if this Analisis object was restored with
		 * an expansion on the resultados association table.
		 * @var Resultados _objResultados;
		 */
		private $_objResultados;

		/**
		 * Private member variable that stores a reference to an array of Resultados objects
		 * (of type Resultados[]), if this Analisis object was restored with
		 * an ExpandAsArray on the resultados association table.
		 * @var Resultados[] _objResultadosArray;
		 */
		private $_objResultadosArray = array();

		/**
		 * Private member variable that stores a reference to a single UsuariosAnalisis object
		 * (of type UsuariosAnalisis), if this Analisis object was restored with
		 * an expansion on the usuarios_analisis association table.
		 * @var UsuariosAnalisis _objUsuariosAnalisis;
		 */
		private $_objUsuariosAnalisis;

		/**
		 * Private member variable that stores a reference to an array of UsuariosAnalisis objects
		 * (of type UsuariosAnalisis[]), if this Analisis object was restored with
		 * an ExpandAsArray on the usuarios_analisis association table.
		 * @var UsuariosAnalisis[] _objUsuariosAnalisisArray;
		 */
		private $_objUsuariosAnalisisArray = array();

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
		 * Load a Analisis from PK Info
		 * @param integer $intAnalisisId
		 * @return Analisis
		 */
		public static function Load($intAnalisisId) {
			// Use QuerySingle to Perform the Query
			return Analisis::QuerySingle(
				QQ::Equal(QQN::Analisis()->AnalisisId, $intAnalisisId)
			);
		}

		/**
		 * Load all Analisises
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Analisis[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Analisis::QueryArray to perform the LoadAll query
			try {
				return Analisis::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Analisises
		 * @return int
		 */
		public static function CountAll() {
			// Call Analisis::QueryCount to perform the CountAll query
			return Analisis::QueryCount(QQ::All());
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
			$objDatabase = Analisis::GetDatabase();

			// Create/Build out the QueryBuilder object with Analisis-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'analisis');
			Analisis::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('analisis');

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
		 * Static Qcubed Query method to query for a single Analisis object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Analisis the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Analisis::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new Analisis object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Analisis::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
					if ($objItem)
						$objToReturn[] = $objItem;					
				}			
				// Since we only want the object to return, lets return the object and not the array.
				return $objToReturn[0];
			} else {
				// No expands just return the first row
				$objToReturn = null;
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn = Analisis::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
			
			return $objToReturn;
		}

		/**
		 * Static Qcubed Query method to query for an array of Analisis objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Analisis[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Analisis::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Analisis::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of Analisis objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Analisis::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Analisis::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'analisis_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with Analisis-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				Analisis::GetSelectFields($objQueryBuilder);
				Analisis::GetFromFields($objQueryBuilder);

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
			return Analisis::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Analisis
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'analisis';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'analisis_id', $strAliasPrefix . 'analisis_id');
			$objBuilder->AddSelectItem($strTableName, 'nombre', $strAliasPrefix . 'nombre');
			$objBuilder->AddSelectItem($strTableName, 'tiempo_demora', $strAliasPrefix . 'tiempo_demora');
			$objBuilder->AddSelectItem($strTableName, 'grupo', $strAliasPrefix . 'grupo');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Analisis from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Analisis::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Analisis
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'analisis_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {            
					if ($objPreviousItem->intAnalisisId == $objDbRow->GetColumn($strAliasName, 'Integer')) {        
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'analisis__';

						// Expanding many-to-many references: Metodos
						$strAlias = $strAliasPrefix . 'metodos__metodo_id__metodo_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objMetodosArray)) {
								$objPreviousChildItems = $objPreviousItem->_objMetodosArray;
								$objChildItem = Metodos::InstantiateDbRow($objDbRow, $strAliasPrefix . 'metodos__metodo_id__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objMetodosArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objMetodosArray[] = Metodos::InstantiateDbRow($objDbRow, $strAliasPrefix . 'metodos__metodo_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding many-to-many references: OrdenesTrabajo
						$strAlias = $strAliasPrefix . 'ordenestrabajo__ordenes_trabajo_id__ordenes_trabajo_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objOrdenesTrabajoArray)) {
								$objPreviousChildItems = $objPreviousItem->_objOrdenesTrabajoArray;
								$objChildItem = OrdenesTrabajo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ordenestrabajo__ordenes_trabajo_id__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objOrdenesTrabajoArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objOrdenesTrabajoArray[] = OrdenesTrabajo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ordenestrabajo__ordenes_trabajo_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding many-to-many references: Unidades
						$strAlias = $strAliasPrefix . 'unidades__unidad_id__unidad_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objUnidadesArray)) {
								$objPreviousChildItems = $objPreviousItem->_objUnidadesArray;
								$objChildItem = Unidades::InstantiateDbRow($objDbRow, $strAliasPrefix . 'unidades__unidad_id__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objUnidadesArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objUnidadesArray[] = Unidades::InstantiateDbRow($objDbRow, $strAliasPrefix . 'unidades__unidad_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
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

						// Expanding reverse references: UsuariosAnalisis
						$strAlias = $strAliasPrefix . 'usuariosanalisis__usuarios_analisis_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objUsuariosAnalisisArray)) {
								$objPreviousChildItems = $objPreviousItem->_objUsuariosAnalisisArray;
								$objChildItem = UsuariosAnalisis::InstantiateDbRow($objDbRow, $strAliasPrefix . 'usuariosanalisis__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objUsuariosAnalisisArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objUsuariosAnalisisArray[] = UsuariosAnalisis::InstantiateDbRow($objDbRow, $strAliasPrefix . 'usuariosanalisis__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'analisis__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Analisis object
			$objToReturn = new Analisis();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'analisis_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'analisis_id'] : $strAliasPrefix . 'analisis_id';
			$objToReturn->intAnalisisId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'nombre', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nombre'] : $strAliasPrefix . 'nombre';
			$objToReturn->strNombre = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'tiempo_demora', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'tiempo_demora'] : $strAliasPrefix . 'tiempo_demora';
			$objToReturn->intTiempoDemora = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'grupo', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'grupo'] : $strAliasPrefix . 'grupo';
			$objToReturn->intGrupo = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->AnalisisId != $objPreviousItem->AnalisisId) {
						continue;
					}
					if (array_diff($objPreviousItem->_objMetodosArray, $objToReturn->_objMetodosArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objOrdenesTrabajoArray, $objToReturn->_objOrdenesTrabajoArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objUnidadesArray, $objToReturn->_objUnidadesArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objResultadosArray, $objToReturn->_objResultadosArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objUsuariosAnalisisArray, $objToReturn->_objUsuariosAnalisisArray) != null) {
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
				$strAliasPrefix = 'analisis__';



			// Check for Metodos Virtual Binding
			$strAlias = $strAliasPrefix . 'metodos__metodo_id__metodo_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objMetodosArray[] = Metodos::InstantiateDbRow($objDbRow, $strAliasPrefix . 'metodos__metodo_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objMetodos = Metodos::InstantiateDbRow($objDbRow, $strAliasPrefix . 'metodos__metodo_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for OrdenesTrabajo Virtual Binding
			$strAlias = $strAliasPrefix . 'ordenestrabajo__ordenes_trabajo_id__ordenes_trabajo_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objOrdenesTrabajoArray[] = OrdenesTrabajo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ordenestrabajo__ordenes_trabajo_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objOrdenesTrabajo = OrdenesTrabajo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ordenestrabajo__ordenes_trabajo_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for Unidades Virtual Binding
			$strAlias = $strAliasPrefix . 'unidades__unidad_id__unidad_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objUnidadesArray[] = Unidades::InstantiateDbRow($objDbRow, $strAliasPrefix . 'unidades__unidad_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objUnidades = Unidades::InstantiateDbRow($objDbRow, $strAliasPrefix . 'unidades__unidad_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
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

			// Check for UsuariosAnalisis Virtual Binding
			$strAlias = $strAliasPrefix . 'usuariosanalisis__usuarios_analisis_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objUsuariosAnalisisArray[] = UsuariosAnalisis::InstantiateDbRow($objDbRow, $strAliasPrefix . 'usuariosanalisis__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objUsuariosAnalisis = UsuariosAnalisis::InstantiateDbRow($objDbRow, $strAliasPrefix . 'usuariosanalisis__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Analisises from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Analisis[]
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
					$objItem = Analisis::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Analisis::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Analisis object,
		 * by AnalisisId Index(es)
		 * @param integer $intAnalisisId
		 * @return Analisis
		*/
		public static function LoadByAnalisisId($intAnalisisId) {
			return Analisis::QuerySingle(
				QQ::Equal(QQN::Analisis()->AnalisisId, $intAnalisisId)
			);
		}
			
		/**
		 * Load an array of Analisis objects,
		 * by Nombre Index(es)
		 * @param string $strNombre
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Analisis[]
		*/
		public static function LoadArrayByNombre($strNombre, $objOptionalClauses = null) {
			// Call Analisis::QueryArray to perform the LoadArrayByNombre query
			try {
				return Analisis::QueryArray(
					QQ::Equal(QQN::Analisis()->Nombre, $strNombre),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Analisises
		 * by Nombre Index(es)
		 * @param string $strNombre
		 * @return int
		*/
		public static function CountByNombre($strNombre) {
			// Call Analisis::QueryCount to perform the CountByNombre query
			return Analisis::QueryCount(
				QQ::Equal(QQN::Analisis()->Nombre, $strNombre)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////
			/**
		 * Load an array of Metodos objects for a given Metodos
		 * via the analisis_metodos_assn table
		 * @param integer $intMetodoId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Analisis[]
		*/
		public static function LoadArrayByMetodos($intMetodoId, $objOptionalClauses = null) {
			// Call Analisis::QueryArray to perform the LoadArrayByMetodos query
			try {
				return Analisis::QueryArray(
					QQ::Equal(QQN::Analisis()->Metodos->MetodoId, $intMetodoId),
					$objOptionalClauses
				);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Analisises for a given Metodos
		 * via the analisis_metodos_assn table
		 * @param integer $intMetodoId
		 * @return int
		*/
		public static function CountByMetodos($intMetodoId) {
			return Analisis::QueryCount(
				QQ::Equal(QQN::Analisis()->Metodos->MetodoId, $intMetodoId)
			);
		}
			/**
		 * Load an array of OrdenesTrabajo objects for a given OrdenesTrabajo
		 * via the analisis_ordenes_trabajo_assn table
		 * @param integer $intOrdenesTrabajoId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Analisis[]
		*/
		public static function LoadArrayByOrdenesTrabajo($intOrdenesTrabajoId, $objOptionalClauses = null) {
			// Call Analisis::QueryArray to perform the LoadArrayByOrdenesTrabajo query
			try {
				return Analisis::QueryArray(
					QQ::Equal(QQN::Analisis()->OrdenesTrabajo->OrdenesTrabajoId, $intOrdenesTrabajoId),
					$objOptionalClauses
				);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Analisises for a given OrdenesTrabajo
		 * via the analisis_ordenes_trabajo_assn table
		 * @param integer $intOrdenesTrabajoId
		 * @return int
		*/
		public static function CountByOrdenesTrabajo($intOrdenesTrabajoId) {
			return Analisis::QueryCount(
				QQ::Equal(QQN::Analisis()->OrdenesTrabajo->OrdenesTrabajoId, $intOrdenesTrabajoId)
			);
		}
			/**
		 * Load an array of Unidades objects for a given Unidades
		 * via the analisis_unidades_assn table
		 * @param integer $intUnidadId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Analisis[]
		*/
		public static function LoadArrayByUnidades($intUnidadId, $objOptionalClauses = null) {
			// Call Analisis::QueryArray to perform the LoadArrayByUnidades query
			try {
				return Analisis::QueryArray(
					QQ::Equal(QQN::Analisis()->Unidades->UnidadId, $intUnidadId),
					$objOptionalClauses
				);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Analisises for a given Unidades
		 * via the analisis_unidades_assn table
		 * @param integer $intUnidadId
		 * @return int
		*/
		public static function CountByUnidades($intUnidadId) {
			return Analisis::QueryCount(
				QQ::Equal(QQN::Analisis()->Unidades->UnidadId, $intUnidadId)
			);
		}




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Analisis
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Analisis::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO "analisis" (
							"nombre",
							"tiempo_demora",
							"grupo"
						) VALUES (
							' . $objDatabase->SqlVariable($this->strNombre) . ',
							' . $objDatabase->SqlVariable($this->intTiempoDemora) . ',
							' . $objDatabase->SqlVariable($this->intGrupo) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intAnalisisId = $objDatabase->InsertId('analisis', 'analisis_id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							"analisis"
						SET
							"nombre" = ' . $objDatabase->SqlVariable($this->strNombre) . ',
							"tiempo_demora" = ' . $objDatabase->SqlVariable($this->intTiempoDemora) . ',
							"grupo" = ' . $objDatabase->SqlVariable($this->intGrupo) . '
						WHERE
							"analisis_id" = ' . $objDatabase->SqlVariable($this->intAnalisisId) . '
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
		 * Delete this Analisis
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intAnalisisId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Analisis with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Analisis::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"analisis"
				WHERE
					"analisis_id" = ' . $objDatabase->SqlVariable($this->intAnalisisId) . '');
		}

		/**
		 * Delete all Analisises
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Analisis::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					"analisis"');
		}

		/**
		 * Truncate analisis table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Analisis::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE "analisis"');
		}

		/**
		 * Reload this Analisis from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Analisis object.');

			// Reload the Object
			$objReloaded = Analisis::Load($this->intAnalisisId);

			// Update $this's local variables to match
			$this->strNombre = $objReloaded->strNombre;
			$this->intTiempoDemora = $objReloaded->intTiempoDemora;
			$this->intGrupo = $objReloaded->intGrupo;
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
				case 'AnalisisId':
					/**
					 * Gets the value for intAnalisisId (Read-Only PK)
					 * @return integer
					 */
					return $this->intAnalisisId;

				case 'Nombre':
					/**
					 * Gets the value for strNombre 
					 * @return string
					 */
					return $this->strNombre;

				case 'TiempoDemora':
					/**
					 * Gets the value for intTiempoDemora 
					 * @return integer
					 */
					return $this->intTiempoDemora;

				case 'Grupo':
					/**
					 * Gets the value for intGrupo 
					 * @return integer
					 */
					return $this->intGrupo;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_Metodos':
					/**
					 * Gets the value for the private _objMetodos (Read-Only)
					 * if set due to an expansion on the analisis_metodos_assn association table
					 * @return Metodos
					 */
					return $this->_objMetodos;

				case '_MetodosArray':
					/**
					 * Gets the value for the private _objMetodosArray (Read-Only)
					 * if set due to an ExpandAsArray on the analisis_metodos_assn association table
					 * @return Metodos[]
					 */
					return (array) $this->_objMetodosArray;

				case '_OrdenesTrabajo':
					/**
					 * Gets the value for the private _objOrdenesTrabajo (Read-Only)
					 * if set due to an expansion on the analisis_ordenes_trabajo_assn association table
					 * @return OrdenesTrabajo
					 */
					return $this->_objOrdenesTrabajo;

				case '_OrdenesTrabajoArray':
					/**
					 * Gets the value for the private _objOrdenesTrabajoArray (Read-Only)
					 * if set due to an ExpandAsArray on the analisis_ordenes_trabajo_assn association table
					 * @return OrdenesTrabajo[]
					 */
					return (array) $this->_objOrdenesTrabajoArray;

				case '_Unidades':
					/**
					 * Gets the value for the private _objUnidades (Read-Only)
					 * if set due to an expansion on the analisis_unidades_assn association table
					 * @return Unidades
					 */
					return $this->_objUnidades;

				case '_UnidadesArray':
					/**
					 * Gets the value for the private _objUnidadesArray (Read-Only)
					 * if set due to an ExpandAsArray on the analisis_unidades_assn association table
					 * @return Unidades[]
					 */
					return (array) $this->_objUnidadesArray;

				case '_Resultados':
					/**
					 * Gets the value for the private _objResultados (Read-Only)
					 * if set due to an expansion on the resultados.analisis_id reverse relationship
					 * @return Resultados
					 */
					return $this->_objResultados;

				case '_ResultadosArray':
					/**
					 * Gets the value for the private _objResultadosArray (Read-Only)
					 * if set due to an ExpandAsArray on the resultados.analisis_id reverse relationship
					 * @return Resultados[]
					 */
					return (array) $this->_objResultadosArray;

				case '_UsuariosAnalisis':
					/**
					 * Gets the value for the private _objUsuariosAnalisis (Read-Only)
					 * if set due to an expansion on the usuarios_analisis.analisis_id reverse relationship
					 * @return UsuariosAnalisis
					 */
					return $this->_objUsuariosAnalisis;

				case '_UsuariosAnalisisArray':
					/**
					 * Gets the value for the private _objUsuariosAnalisisArray (Read-Only)
					 * if set due to an ExpandAsArray on the usuarios_analisis.analisis_id reverse relationship
					 * @return UsuariosAnalisis[]
					 */
					return (array) $this->_objUsuariosAnalisisArray;


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

				case 'TiempoDemora':
					/**
					 * Sets the value for intTiempoDemora 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intTiempoDemora = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Grupo':
					/**
					 * Sets the value for intGrupo 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intGrupo = QType::Cast($mixValue, QType::Integer));
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

			
		
		// Related Objects' Methods for Resultados
		//-------------------------------------------------------------------

		/**
		 * Gets all associated Resultadoses as an array of Resultados objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Resultados[]
		*/ 
		public function GetResultadosArray($objOptionalClauses = null) {
			if ((is_null($this->intAnalisisId)))
				return array();

			try {
				return Resultados::LoadArrayByAnalisisId($this->intAnalisisId, $objOptionalClauses);
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
			if ((is_null($this->intAnalisisId)))
				return 0;

			return Resultados::CountByAnalisisId($this->intAnalisisId);
		}

		/**
		 * Associates a Resultados
		 * @param Resultados $objResultados
		 * @return void
		*/ 
		public function AssociateResultados(Resultados $objResultados) {
			if ((is_null($this->intAnalisisId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateResultados on this unsaved Analisis.');
			if ((is_null($objResultados->ResultadosId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateResultados on this Analisis with an unsaved Resultados.');

			// Get the Database Object for this Class
			$objDatabase = Analisis::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					"resultados"
				SET
					"analisis_id" = ' . $objDatabase->SqlVariable($this->intAnalisisId) . '
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
			if ((is_null($this->intAnalisisId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateResultados on this unsaved Analisis.');
			if ((is_null($objResultados->ResultadosId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateResultados on this Analisis with an unsaved Resultados.');

			// Get the Database Object for this Class
			$objDatabase = Analisis::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					"resultados"
				SET
					"analisis_id" = null
				WHERE
					"resultados_id" = ' . $objDatabase->SqlVariable($objResultados->ResultadosId) . ' AND
					"analisis_id" = ' . $objDatabase->SqlVariable($this->intAnalisisId) . '
			');
		}

		/**
		 * Unassociates all Resultadoses
		 * @return void
		*/ 
		public function UnassociateAllResultadoses() {
			if ((is_null($this->intAnalisisId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateResultados on this unsaved Analisis.');

			// Get the Database Object for this Class
			$objDatabase = Analisis::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					"resultados"
				SET
					"analisis_id" = null
				WHERE
					"analisis_id" = ' . $objDatabase->SqlVariable($this->intAnalisisId) . '
			');
		}

		/**
		 * Deletes an associated Resultados
		 * @param Resultados $objResultados
		 * @return void
		*/ 
		public function DeleteAssociatedResultados(Resultados $objResultados) {
			if ((is_null($this->intAnalisisId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateResultados on this unsaved Analisis.');
			if ((is_null($objResultados->ResultadosId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateResultados on this Analisis with an unsaved Resultados.');

			// Get the Database Object for this Class
			$objDatabase = Analisis::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"resultados"
				WHERE
					"resultados_id" = ' . $objDatabase->SqlVariable($objResultados->ResultadosId) . ' AND
					"analisis_id" = ' . $objDatabase->SqlVariable($this->intAnalisisId) . '
			');
		}

		/**
		 * Deletes all associated Resultadoses
		 * @return void
		*/ 
		public function DeleteAllResultadoses() {
			if ((is_null($this->intAnalisisId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateResultados on this unsaved Analisis.');

			// Get the Database Object for this Class
			$objDatabase = Analisis::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"resultados"
				WHERE
					"analisis_id" = ' . $objDatabase->SqlVariable($this->intAnalisisId) . '
			');
		}

			
		
		// Related Objects' Methods for UsuariosAnalisis
		//-------------------------------------------------------------------

		/**
		 * Gets all associated UsuariosAnalisises as an array of UsuariosAnalisis objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return UsuariosAnalisis[]
		*/ 
		public function GetUsuariosAnalisisArray($objOptionalClauses = null) {
			if ((is_null($this->intAnalisisId)))
				return array();

			try {
				return UsuariosAnalisis::LoadArrayByAnalisisId($this->intAnalisisId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated UsuariosAnalisises
		 * @return int
		*/ 
		public function CountUsuariosAnalisises() {
			if ((is_null($this->intAnalisisId)))
				return 0;

			return UsuariosAnalisis::CountByAnalisisId($this->intAnalisisId);
		}

		/**
		 * Associates a UsuariosAnalisis
		 * @param UsuariosAnalisis $objUsuariosAnalisis
		 * @return void
		*/ 
		public function AssociateUsuariosAnalisis(UsuariosAnalisis $objUsuariosAnalisis) {
			if ((is_null($this->intAnalisisId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateUsuariosAnalisis on this unsaved Analisis.');
			if ((is_null($objUsuariosAnalisis->UsuariosAnalisisId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateUsuariosAnalisis on this Analisis with an unsaved UsuariosAnalisis.');

			// Get the Database Object for this Class
			$objDatabase = Analisis::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					"usuarios_analisis"
				SET
					"analisis_id" = ' . $objDatabase->SqlVariable($this->intAnalisisId) . '
				WHERE
					"usuarios_analisis_id" = ' . $objDatabase->SqlVariable($objUsuariosAnalisis->UsuariosAnalisisId) . '
			');
		}

		/**
		 * Unassociates a UsuariosAnalisis
		 * @param UsuariosAnalisis $objUsuariosAnalisis
		 * @return void
		*/ 
		public function UnassociateUsuariosAnalisis(UsuariosAnalisis $objUsuariosAnalisis) {
			if ((is_null($this->intAnalisisId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUsuariosAnalisis on this unsaved Analisis.');
			if ((is_null($objUsuariosAnalisis->UsuariosAnalisisId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUsuariosAnalisis on this Analisis with an unsaved UsuariosAnalisis.');

			// Get the Database Object for this Class
			$objDatabase = Analisis::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					"usuarios_analisis"
				SET
					"analisis_id" = null
				WHERE
					"usuarios_analisis_id" = ' . $objDatabase->SqlVariable($objUsuariosAnalisis->UsuariosAnalisisId) . ' AND
					"analisis_id" = ' . $objDatabase->SqlVariable($this->intAnalisisId) . '
			');
		}

		/**
		 * Unassociates all UsuariosAnalisises
		 * @return void
		*/ 
		public function UnassociateAllUsuariosAnalisises() {
			if ((is_null($this->intAnalisisId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUsuariosAnalisis on this unsaved Analisis.');

			// Get the Database Object for this Class
			$objDatabase = Analisis::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					"usuarios_analisis"
				SET
					"analisis_id" = null
				WHERE
					"analisis_id" = ' . $objDatabase->SqlVariable($this->intAnalisisId) . '
			');
		}

		/**
		 * Deletes an associated UsuariosAnalisis
		 * @param UsuariosAnalisis $objUsuariosAnalisis
		 * @return void
		*/ 
		public function DeleteAssociatedUsuariosAnalisis(UsuariosAnalisis $objUsuariosAnalisis) {
			if ((is_null($this->intAnalisisId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUsuariosAnalisis on this unsaved Analisis.');
			if ((is_null($objUsuariosAnalisis->UsuariosAnalisisId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUsuariosAnalisis on this Analisis with an unsaved UsuariosAnalisis.');

			// Get the Database Object for this Class
			$objDatabase = Analisis::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"usuarios_analisis"
				WHERE
					"usuarios_analisis_id" = ' . $objDatabase->SqlVariable($objUsuariosAnalisis->UsuariosAnalisisId) . ' AND
					"analisis_id" = ' . $objDatabase->SqlVariable($this->intAnalisisId) . '
			');
		}

		/**
		 * Deletes all associated UsuariosAnalisises
		 * @return void
		*/ 
		public function DeleteAllUsuariosAnalisises() {
			if ((is_null($this->intAnalisisId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUsuariosAnalisis on this unsaved Analisis.');

			// Get the Database Object for this Class
			$objDatabase = Analisis::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"usuarios_analisis"
				WHERE
					"analisis_id" = ' . $objDatabase->SqlVariable($this->intAnalisisId) . '
			');
		}

			
		// Related Many-to-Many Objects' Methods for Metodos
		//-------------------------------------------------------------------

		/**
		 * Gets all many-to-many associated Metodoses as an array of Metodos objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Metodos[]
		*/ 
		public function GetMetodosArray($objOptionalClauses = null) {
			if ((is_null($this->intAnalisisId)))
				return array();

			try {
				return Metodos::LoadArrayByAnalisis($this->intAnalisisId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all many-to-many associated Metodoses
		 * @return int
		*/ 
		public function CountMetodoses() {
			if ((is_null($this->intAnalisisId)))
				return 0;

			return Metodos::CountByAnalisis($this->intAnalisisId);
		}

		/**
		 * Checks to see if an association exists with a specific Metodos
		 * @param Metodos $objMetodos
		 * @return bool
		*/
		public function IsMetodosAssociated(Metodos $objMetodos) {
			if ((is_null($this->intAnalisisId)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsMetodosAssociated on this unsaved Analisis.');
			if ((is_null($objMetodos->MetodoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsMetodosAssociated on this Analisis with an unsaved Metodos.');

			$intRowCount = Analisis::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::Analisis()->AnalisisId, $this->intAnalisisId),
					QQ::Equal(QQN::Analisis()->Metodos->MetodoId, $objMetodos->MetodoId)
				)
			);

			return ($intRowCount > 0);
		}

		/**
		 * Associates a Metodos
		 * @param Metodos $objMetodos
		 * @return void
		*/ 
		public function AssociateMetodos(Metodos $objMetodos) {
			if ((is_null($this->intAnalisisId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateMetodos on this unsaved Analisis.');
			if ((is_null($objMetodos->MetodoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateMetodos on this Analisis with an unsaved Metodos.');

			// Get the Database Object for this Class
			$objDatabase = Analisis::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				INSERT INTO "analisis_metodos_assn" (
					"analisis_id",
					"metodo_id"
				) VALUES (
					' . $objDatabase->SqlVariable($this->intAnalisisId) . ',
					' . $objDatabase->SqlVariable($objMetodos->MetodoId) . '
				)
			');
		}

		/**
		 * Unassociates a Metodos
		 * @param Metodos $objMetodos
		 * @return void
		*/ 
		public function UnassociateMetodos(Metodos $objMetodos) {
			if ((is_null($this->intAnalisisId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMetodos on this unsaved Analisis.');
			if ((is_null($objMetodos->MetodoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMetodos on this Analisis with an unsaved Metodos.');

			// Get the Database Object for this Class
			$objDatabase = Analisis::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"analisis_metodos_assn"
				WHERE
					"analisis_id" = ' . $objDatabase->SqlVariable($this->intAnalisisId) . ' AND
					"metodo_id" = ' . $objDatabase->SqlVariable($objMetodos->MetodoId) . '
			');
		}

		/**
		 * Unassociates all Metodoses
		 * @return void
		*/ 
		public function UnassociateAllMetodoses() {
			if ((is_null($this->intAnalisisId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllMetodosArray on this unsaved Analisis.');

			// Get the Database Object for this Class
			$objDatabase = Analisis::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"analisis_metodos_assn"
				WHERE
					"analisis_id" = ' . $objDatabase->SqlVariable($this->intAnalisisId) . '
			');
		}
			
		// Related Many-to-Many Objects' Methods for OrdenesTrabajo
		//-------------------------------------------------------------------

		/**
		 * Gets all many-to-many associated OrdenesTrabajos as an array of OrdenesTrabajo objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return OrdenesTrabajo[]
		*/ 
		public function GetOrdenesTrabajoArray($objOptionalClauses = null) {
			if ((is_null($this->intAnalisisId)))
				return array();

			try {
				return OrdenesTrabajo::LoadArrayByAnalisis($this->intAnalisisId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all many-to-many associated OrdenesTrabajos
		 * @return int
		*/ 
		public function CountOrdenesTrabajos() {
			if ((is_null($this->intAnalisisId)))
				return 0;

			return OrdenesTrabajo::CountByAnalisis($this->intAnalisisId);
		}

		/**
		 * Checks to see if an association exists with a specific OrdenesTrabajo
		 * @param OrdenesTrabajo $objOrdenesTrabajo
		 * @return bool
		*/
		public function IsOrdenesTrabajoAssociated(OrdenesTrabajo $objOrdenesTrabajo) {
			if ((is_null($this->intAnalisisId)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsOrdenesTrabajoAssociated on this unsaved Analisis.');
			if ((is_null($objOrdenesTrabajo->OrdenesTrabajoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsOrdenesTrabajoAssociated on this Analisis with an unsaved OrdenesTrabajo.');

			$intRowCount = Analisis::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::Analisis()->AnalisisId, $this->intAnalisisId),
					QQ::Equal(QQN::Analisis()->OrdenesTrabajo->OrdenesTrabajoId, $objOrdenesTrabajo->OrdenesTrabajoId)
				)
			);

			return ($intRowCount > 0);
		}

		/**
		 * Associates a OrdenesTrabajo
		 * @param OrdenesTrabajo $objOrdenesTrabajo
		 * @return void
		*/ 
		public function AssociateOrdenesTrabajo(OrdenesTrabajo $objOrdenesTrabajo) {
			if ((is_null($this->intAnalisisId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateOrdenesTrabajo on this unsaved Analisis.');
			if ((is_null($objOrdenesTrabajo->OrdenesTrabajoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateOrdenesTrabajo on this Analisis with an unsaved OrdenesTrabajo.');

			// Get the Database Object for this Class
			$objDatabase = Analisis::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				INSERT INTO "analisis_ordenes_trabajo_assn" (
					"analisis_id",
					"ordenes_trabajo_id"
				) VALUES (
					' . $objDatabase->SqlVariable($this->intAnalisisId) . ',
					' . $objDatabase->SqlVariable($objOrdenesTrabajo->OrdenesTrabajoId) . '
				)
			');
		}

		/**
		 * Unassociates a OrdenesTrabajo
		 * @param OrdenesTrabajo $objOrdenesTrabajo
		 * @return void
		*/ 
		public function UnassociateOrdenesTrabajo(OrdenesTrabajo $objOrdenesTrabajo) {
			if ((is_null($this->intAnalisisId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrdenesTrabajo on this unsaved Analisis.');
			if ((is_null($objOrdenesTrabajo->OrdenesTrabajoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrdenesTrabajo on this Analisis with an unsaved OrdenesTrabajo.');

			// Get the Database Object for this Class
			$objDatabase = Analisis::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"analisis_ordenes_trabajo_assn"
				WHERE
					"analisis_id" = ' . $objDatabase->SqlVariable($this->intAnalisisId) . ' AND
					"ordenes_trabajo_id" = ' . $objDatabase->SqlVariable($objOrdenesTrabajo->OrdenesTrabajoId) . '
			');
		}

		/**
		 * Unassociates all OrdenesTrabajos
		 * @return void
		*/ 
		public function UnassociateAllOrdenesTrabajos() {
			if ((is_null($this->intAnalisisId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllOrdenesTrabajoArray on this unsaved Analisis.');

			// Get the Database Object for this Class
			$objDatabase = Analisis::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"analisis_ordenes_trabajo_assn"
				WHERE
					"analisis_id" = ' . $objDatabase->SqlVariable($this->intAnalisisId) . '
			');
		}
			
		// Related Many-to-Many Objects' Methods for Unidades
		//-------------------------------------------------------------------

		/**
		 * Gets all many-to-many associated Unidadeses as an array of Unidades objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Unidades[]
		*/ 
		public function GetUnidadesArray($objOptionalClauses = null) {
			if ((is_null($this->intAnalisisId)))
				return array();

			try {
				return Unidades::LoadArrayByAnalisis($this->intAnalisisId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all many-to-many associated Unidadeses
		 * @return int
		*/ 
		public function CountUnidadeses() {
			if ((is_null($this->intAnalisisId)))
				return 0;

			return Unidades::CountByAnalisis($this->intAnalisisId);
		}

		/**
		 * Checks to see if an association exists with a specific Unidades
		 * @param Unidades $objUnidades
		 * @return bool
		*/
		public function IsUnidadesAssociated(Unidades $objUnidades) {
			if ((is_null($this->intAnalisisId)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsUnidadesAssociated on this unsaved Analisis.');
			if ((is_null($objUnidades->UnidadId)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsUnidadesAssociated on this Analisis with an unsaved Unidades.');

			$intRowCount = Analisis::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::Analisis()->AnalisisId, $this->intAnalisisId),
					QQ::Equal(QQN::Analisis()->Unidades->UnidadId, $objUnidades->UnidadId)
				)
			);

			return ($intRowCount > 0);
		}

		/**
		 * Associates a Unidades
		 * @param Unidades $objUnidades
		 * @return void
		*/ 
		public function AssociateUnidades(Unidades $objUnidades) {
			if ((is_null($this->intAnalisisId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateUnidades on this unsaved Analisis.');
			if ((is_null($objUnidades->UnidadId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateUnidades on this Analisis with an unsaved Unidades.');

			// Get the Database Object for this Class
			$objDatabase = Analisis::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				INSERT INTO "analisis_unidades_assn" (
					"analisis_id",
					"unidad_id"
				) VALUES (
					' . $objDatabase->SqlVariable($this->intAnalisisId) . ',
					' . $objDatabase->SqlVariable($objUnidades->UnidadId) . '
				)
			');
		}

		/**
		 * Unassociates a Unidades
		 * @param Unidades $objUnidades
		 * @return void
		*/ 
		public function UnassociateUnidades(Unidades $objUnidades) {
			if ((is_null($this->intAnalisisId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUnidades on this unsaved Analisis.');
			if ((is_null($objUnidades->UnidadId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUnidades on this Analisis with an unsaved Unidades.');

			// Get the Database Object for this Class
			$objDatabase = Analisis::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"analisis_unidades_assn"
				WHERE
					"analisis_id" = ' . $objDatabase->SqlVariable($this->intAnalisisId) . ' AND
					"unidad_id" = ' . $objDatabase->SqlVariable($objUnidades->UnidadId) . '
			');
		}

		/**
		 * Unassociates all Unidadeses
		 * @return void
		*/ 
		public function UnassociateAllUnidadeses() {
			if ((is_null($this->intAnalisisId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllUnidadesArray on this unsaved Analisis.');

			// Get the Database Object for this Class
			$objDatabase = Analisis::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"analisis_unidades_assn"
				WHERE
					"analisis_id" = ' . $objDatabase->SqlVariable($this->intAnalisisId) . '
			');
		}




		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Analisis"><sequence>';
			$strToReturn .= '<element name="AnalisisId" type="xsd:int"/>';
			$strToReturn .= '<element name="Nombre" type="xsd:string"/>';
			$strToReturn .= '<element name="TiempoDemora" type="xsd:int"/>';
			$strToReturn .= '<element name="Grupo" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Analisis', $strComplexTypeArray)) {
				$strComplexTypeArray['Analisis'] = Analisis::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Analisis::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Analisis();
			if (property_exists($objSoapObject, 'AnalisisId'))
				$objToReturn->intAnalisisId = $objSoapObject->AnalisisId;
			if (property_exists($objSoapObject, 'Nombre'))
				$objToReturn->strNombre = $objSoapObject->Nombre;
			if (property_exists($objSoapObject, 'TiempoDemora'))
				$objToReturn->intTiempoDemora = $objSoapObject->TiempoDemora;
			if (property_exists($objSoapObject, 'Grupo'))
				$objToReturn->intGrupo = $objSoapObject->Grupo;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Analisis::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

	class QQNodeAnalisisMetodos extends QQAssociationNode {
		protected $strType = 'association';
		protected $strName = 'metodos';

		protected $strTableName = 'analisis_metodos_assn';
		protected $strPrimaryKey = 'analisis_id';
		protected $strClassName = 'Metodos';

		public function __get($strName) {
			switch ($strName) {
				case 'MetodoId':
					return new QQNode('metodo_id', 'MetodoId', 'integer', $this);
				case 'Metodos':
					return new QQNodeMetodos('metodo_id', 'MetodoId', 'integer', $this);
				case '_ChildTableNode':
					return new QQNodeMetodos('metodo_id', 'MetodoId', 'integer', $this);
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

	class QQNodeAnalisisOrdenesTrabajo extends QQAssociationNode {
		protected $strType = 'association';
		protected $strName = 'ordenestrabajo';

		protected $strTableName = 'analisis_ordenes_trabajo_assn';
		protected $strPrimaryKey = 'analisis_id';
		protected $strClassName = 'OrdenesTrabajo';

		public function __get($strName) {
			switch ($strName) {
				case 'OrdenesTrabajoId':
					return new QQNode('ordenes_trabajo_id', 'OrdenesTrabajoId', 'integer', $this);
				case 'OrdenesTrabajo':
					return new QQNodeOrdenesTrabajo('ordenes_trabajo_id', 'OrdenesTrabajoId', 'integer', $this);
				case '_ChildTableNode':
					return new QQNodeOrdenesTrabajo('ordenes_trabajo_id', 'OrdenesTrabajoId', 'integer', $this);
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

	class QQNodeAnalisisUnidades extends QQAssociationNode {
		protected $strType = 'association';
		protected $strName = 'unidades';

		protected $strTableName = 'analisis_unidades_assn';
		protected $strPrimaryKey = 'analisis_id';
		protected $strClassName = 'Unidades';

		public function __get($strName) {
			switch ($strName) {
				case 'UnidadId':
					return new QQNode('unidad_id', 'UnidadId', 'integer', $this);
				case 'Unidades':
					return new QQNodeUnidades('unidad_id', 'UnidadId', 'integer', $this);
				case '_ChildTableNode':
					return new QQNodeUnidades('unidad_id', 'UnidadId', 'integer', $this);
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

	class QQNodeAnalisis extends QQNode {
		protected $strTableName = 'analisis';
		protected $strPrimaryKey = 'analisis_id';
		protected $strClassName = 'Analisis';
		public function __get($strName) {
			switch ($strName) {
				case 'AnalisisId':
					return new QQNode('analisis_id', 'AnalisisId', 'integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'string', $this);
				case 'TiempoDemora':
					return new QQNode('tiempo_demora', 'TiempoDemora', 'integer', $this);
				case 'Grupo':
					return new QQNode('grupo', 'Grupo', 'integer', $this);
				case 'Metodos':
					return new QQNodeAnalisisMetodos($this);
				case 'OrdenesTrabajo':
					return new QQNodeAnalisisOrdenesTrabajo($this);
				case 'Unidades':
					return new QQNodeAnalisisUnidades($this);
				case 'Resultados':
					return new QQReverseReferenceNodeResultados($this, 'resultados', 'reverse_reference', 'analisis_id');
				case 'UsuariosAnalisis':
					return new QQReverseReferenceNodeUsuariosAnalisis($this, 'usuariosanalisis', 'reverse_reference', 'analisis_id');

				case '_PrimaryKeyNode':
					return new QQNode('analisis_id', 'AnalisisId', 'integer', $this);
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

	class QQReverseReferenceNodeAnalisis extends QQReverseReferenceNode {
		protected $strTableName = 'analisis';
		protected $strPrimaryKey = 'analisis_id';
		protected $strClassName = 'Analisis';
		public function __get($strName) {
			switch ($strName) {
				case 'AnalisisId':
					return new QQNode('analisis_id', 'AnalisisId', 'integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'string', $this);
				case 'TiempoDemora':
					return new QQNode('tiempo_demora', 'TiempoDemora', 'integer', $this);
				case 'Grupo':
					return new QQNode('grupo', 'Grupo', 'integer', $this);
				case 'Metodos':
					return new QQNodeAnalisisMetodos($this);
				case 'OrdenesTrabajo':
					return new QQNodeAnalisisOrdenesTrabajo($this);
				case 'Unidades':
					return new QQNodeAnalisisUnidades($this);
				case 'Resultados':
					return new QQReverseReferenceNodeResultados($this, 'resultados', 'reverse_reference', 'analisis_id');
				case 'UsuariosAnalisis':
					return new QQReverseReferenceNodeUsuariosAnalisis($this, 'usuariosanalisis', 'reverse_reference', 'analisis_id');

				case '_PrimaryKeyNode':
					return new QQNode('analisis_id', 'AnalisisId', 'integer', $this);
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