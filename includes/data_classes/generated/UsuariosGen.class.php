<?php
	/**
	 * The abstract UsuariosGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Usuarios subclass which
	 * extends this UsuariosGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Usuarios class.
	 * 
	 * @package SIGA
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $UsuariosId the value for intUsuariosId (Read-Only PK)
	 * @property string $Usuario the value for strUsuario (Unique)
	 * @property string $Nombre the value for strNombre 
	 * @property string $Email the value for strEmail 
	 * @property boolean $Habilitado the value for blnHabilitado 
	 * @property string $Password the value for strPassword 
	 * @property-read Roles $_Roles the value for the private _objRoles (Read-Only) if set due to an expansion on the usuarios_roles_assn association table
	 * @property-read Roles[] $_RolesArray the value for the private _objRolesArray (Read-Only) if set due to an ExpandAsArray on the usuarios_roles_assn association table
	 * @property-read Muestras $_Muestras the value for the private _objMuestras (Read-Only) if set due to an expansion on the muestras.usuarios_id reverse relationship
	 * @property-read Muestras[] $_MuestrasArray the value for the private _objMuestrasArray (Read-Only) if set due to an ExpandAsArray on the muestras.usuarios_id reverse relationship
	 * @property-read OrdenesTrabajo $_OrdenesTrabajo the value for the private _objOrdenesTrabajo (Read-Only) if set due to an expansion on the ordenes_trabajo.usuarios_id reverse relationship
	 * @property-read OrdenesTrabajo[] $_OrdenesTrabajoArray the value for the private _objOrdenesTrabajoArray (Read-Only) if set due to an ExpandAsArray on the ordenes_trabajo.usuarios_id reverse relationship
	 * @property-read Resultados $_Resultados the value for the private _objResultados (Read-Only) if set due to an expansion on the resultados.usuarios_id reverse relationship
	 * @property-read Resultados[] $_ResultadosArray the value for the private _objResultadosArray (Read-Only) if set due to an ExpandAsArray on the resultados.usuarios_id reverse relationship
	 * @property-read UsuariosAnalisis $_UsuariosAnalisis the value for the private _objUsuariosAnalisis (Read-Only) if set due to an expansion on the usuarios_analisis.usuarios_id reverse relationship
	 * @property-read UsuariosAnalisis[] $_UsuariosAnalisisArray the value for the private _objUsuariosAnalisisArray (Read-Only) if set due to an ExpandAsArray on the usuarios_analisis.usuarios_id reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class UsuariosGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column usuarios.usuarios_id
		 * @var integer intUsuariosId
		 */
		protected $intUsuariosId;
		const UsuariosIdDefault = 'nextval(\'usuarios_usuarios_id_seq\'::regclass)';


		/**
		 * Protected member variable that maps to the database column usuarios.usuario
		 * @var string strUsuario
		 */
		protected $strUsuario;
		const UsuarioDefault = null;


		/**
		 * Protected member variable that maps to the database column usuarios.nombre
		 * @var string strNombre
		 */
		protected $strNombre;
		const NombreDefault = null;


		/**
		 * Protected member variable that maps to the database column usuarios.email
		 * @var string strEmail
		 */
		protected $strEmail;
		const EmailDefault = null;


		/**
		 * Protected member variable that maps to the database column usuarios.habilitado
		 * @var boolean blnHabilitado
		 */
		protected $blnHabilitado;
		const HabilitadoDefault = null;


		/**
		 * Protected member variable that maps to the database column usuarios.password
		 * @var string strPassword
		 */
		protected $strPassword;
		const PasswordDefault = null;


		/**
		 * Private member variable that stores a reference to a single Roles object
		 * (of type Roles), if this Usuarios object was restored with
		 * an expansion on the usuarios_roles_assn association table.
		 * @var Roles _objRoles;
		 */
		private $_objRoles;

		/**
		 * Private member variable that stores a reference to an array of Roles objects
		 * (of type Roles[]), if this Usuarios object was restored with
		 * an ExpandAsArray on the usuarios_roles_assn association table.
		 * @var Roles[] _objRolesArray;
		 */
		private $_objRolesArray = array();

		/**
		 * Private member variable that stores a reference to a single Muestras object
		 * (of type Muestras), if this Usuarios object was restored with
		 * an expansion on the muestras association table.
		 * @var Muestras _objMuestras;
		 */
		private $_objMuestras;

		/**
		 * Private member variable that stores a reference to an array of Muestras objects
		 * (of type Muestras[]), if this Usuarios object was restored with
		 * an ExpandAsArray on the muestras association table.
		 * @var Muestras[] _objMuestrasArray;
		 */
		private $_objMuestrasArray = array();

		/**
		 * Private member variable that stores a reference to a single OrdenesTrabajo object
		 * (of type OrdenesTrabajo), if this Usuarios object was restored with
		 * an expansion on the ordenes_trabajo association table.
		 * @var OrdenesTrabajo _objOrdenesTrabajo;
		 */
		private $_objOrdenesTrabajo;

		/**
		 * Private member variable that stores a reference to an array of OrdenesTrabajo objects
		 * (of type OrdenesTrabajo[]), if this Usuarios object was restored with
		 * an ExpandAsArray on the ordenes_trabajo association table.
		 * @var OrdenesTrabajo[] _objOrdenesTrabajoArray;
		 */
		private $_objOrdenesTrabajoArray = array();

		/**
		 * Private member variable that stores a reference to a single Resultados object
		 * (of type Resultados), if this Usuarios object was restored with
		 * an expansion on the resultados association table.
		 * @var Resultados _objResultados;
		 */
		private $_objResultados;

		/**
		 * Private member variable that stores a reference to an array of Resultados objects
		 * (of type Resultados[]), if this Usuarios object was restored with
		 * an ExpandAsArray on the resultados association table.
		 * @var Resultados[] _objResultadosArray;
		 */
		private $_objResultadosArray = array();

		/**
		 * Private member variable that stores a reference to a single UsuariosAnalisis object
		 * (of type UsuariosAnalisis), if this Usuarios object was restored with
		 * an expansion on the usuarios_analisis association table.
		 * @var UsuariosAnalisis _objUsuariosAnalisis;
		 */
		private $_objUsuariosAnalisis;

		/**
		 * Private member variable that stores a reference to an array of UsuariosAnalisis objects
		 * (of type UsuariosAnalisis[]), if this Usuarios object was restored with
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
		 * Load a Usuarios from PK Info
		 * @param integer $intUsuariosId
		 * @return Usuarios
		 */
		public static function Load($intUsuariosId) {
			// Use QuerySingle to Perform the Query
			return Usuarios::QuerySingle(
				QQ::Equal(QQN::Usuarios()->UsuariosId, $intUsuariosId)
			);
		}

		/**
		 * Load all Usuarioses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Usuarios[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Usuarios::QueryArray to perform the LoadAll query
			try {
				return Usuarios::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Usuarioses
		 * @return int
		 */
		public static function CountAll() {
			// Call Usuarios::QueryCount to perform the CountAll query
			return Usuarios::QueryCount(QQ::All());
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
			$objDatabase = Usuarios::GetDatabase();

			// Create/Build out the QueryBuilder object with Usuarios-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'usuarios');
			Usuarios::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('usuarios');

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
		 * Static Qcubed Query method to query for a single Usuarios object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Usuarios the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Usuarios::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new Usuarios object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Usuarios::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
					if ($objItem)
						$objToReturn[] = $objItem;					
				}			
				// Since we only want the object to return, lets return the object and not the array.
				return $objToReturn[0];
			} else {
				// No expands just return the first row
				$objToReturn = null;
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn = Usuarios::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
			
			return $objToReturn;
		}

		/**
		 * Static Qcubed Query method to query for an array of Usuarios objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Usuarios[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Usuarios::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Usuarios::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of Usuarios objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Usuarios::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Usuarios::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'usuarios_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with Usuarios-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				Usuarios::GetSelectFields($objQueryBuilder);
				Usuarios::GetFromFields($objQueryBuilder);

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
			return Usuarios::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Usuarios
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'usuarios';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'usuarios_id', $strAliasPrefix . 'usuarios_id');
			$objBuilder->AddSelectItem($strTableName, 'usuario', $strAliasPrefix . 'usuario');
			$objBuilder->AddSelectItem($strTableName, 'nombre', $strAliasPrefix . 'nombre');
			$objBuilder->AddSelectItem($strTableName, 'email', $strAliasPrefix . 'email');
			$objBuilder->AddSelectItem($strTableName, 'habilitado', $strAliasPrefix . 'habilitado');
			$objBuilder->AddSelectItem($strTableName, 'password', $strAliasPrefix . 'password');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Usuarios from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Usuarios::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Usuarios
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'usuarios_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {            
					if ($objPreviousItem->intUsuariosId == $objDbRow->GetColumn($strAliasName, 'Integer')) {        
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'usuarios__';

						// Expanding many-to-many references: Roles
						$strAlias = $strAliasPrefix . 'roles__roles_id__roles_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objRolesArray)) {
								$objPreviousChildItems = $objPreviousItem->_objRolesArray;
								$objChildItem = Roles::InstantiateDbRow($objDbRow, $strAliasPrefix . 'roles__roles_id__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objRolesArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objRolesArray[] = Roles::InstantiateDbRow($objDbRow, $strAliasPrefix . 'roles__roles_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}


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
						} else if ($strAliasPrefix == 'usuarios__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Usuarios object
			$objToReturn = new Usuarios();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'usuarios_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'usuarios_id'] : $strAliasPrefix . 'usuarios_id';
			$objToReturn->intUsuariosId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'usuario', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'usuario'] : $strAliasPrefix . 'usuario';
			$objToReturn->strUsuario = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'nombre', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nombre'] : $strAliasPrefix . 'nombre';
			$objToReturn->strNombre = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'email', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'email'] : $strAliasPrefix . 'email';
			$objToReturn->strEmail = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'habilitado', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'habilitado'] : $strAliasPrefix . 'habilitado';
			$objToReturn->blnHabilitado = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAliasName = array_key_exists($strAliasPrefix . 'password', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'password'] : $strAliasPrefix . 'password';
			$objToReturn->strPassword = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->UsuariosId != $objPreviousItem->UsuariosId) {
						continue;
					}
					if (array_diff($objPreviousItem->_objRolesArray, $objToReturn->_objRolesArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objMuestrasArray, $objToReturn->_objMuestrasArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objOrdenesTrabajoArray, $objToReturn->_objOrdenesTrabajoArray) != null) {
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
				$strAliasPrefix = 'usuarios__';



			// Check for Roles Virtual Binding
			$strAlias = $strAliasPrefix . 'roles__roles_id__roles_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objRolesArray[] = Roles::InstantiateDbRow($objDbRow, $strAliasPrefix . 'roles__roles_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objRoles = Roles::InstantiateDbRow($objDbRow, $strAliasPrefix . 'roles__roles_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}


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
		 * Instantiate an array of Usuarioses from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Usuarios[]
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
					$objItem = Usuarios::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Usuarios::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Usuarios object,
		 * by UsuariosId Index(es)
		 * @param integer $intUsuariosId
		 * @return Usuarios
		*/
		public static function LoadByUsuariosId($intUsuariosId) {
			return Usuarios::QuerySingle(
				QQ::Equal(QQN::Usuarios()->UsuariosId, $intUsuariosId)
			);
		}
			
		/**
		 * Load a single Usuarios object,
		 * by Usuario Index(es)
		 * @param string $strUsuario
		 * @return Usuarios
		*/
		public static function LoadByUsuario($strUsuario) {
			return Usuarios::QuerySingle(
				QQ::Equal(QQN::Usuarios()->Usuario, $strUsuario)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////
			/**
		 * Load an array of Roles objects for a given Roles
		 * via the usuarios_roles_assn table
		 * @param integer $intRolesId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Usuarios[]
		*/
		public static function LoadArrayByRoles($intRolesId, $objOptionalClauses = null) {
			// Call Usuarios::QueryArray to perform the LoadArrayByRoles query
			try {
				return Usuarios::QueryArray(
					QQ::Equal(QQN::Usuarios()->Roles->RolesId, $intRolesId),
					$objOptionalClauses
				);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Usuarioses for a given Roles
		 * via the usuarios_roles_assn table
		 * @param integer $intRolesId
		 * @return int
		*/
		public static function CountByRoles($intRolesId) {
			return Usuarios::QueryCount(
				QQ::Equal(QQN::Usuarios()->Roles->RolesId, $intRolesId)
			);
		}




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Usuarios
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Usuarios::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO "usuarios" (
							"usuario",
							"nombre",
							"email",
							"habilitado",
							"password"
						) VALUES (
							' . $objDatabase->SqlVariable($this->strUsuario) . ',
							' . $objDatabase->SqlVariable($this->strNombre) . ',
							' . $objDatabase->SqlVariable($this->strEmail) . ',
							' . $objDatabase->SqlVariable($this->blnHabilitado) . ',
							' . $objDatabase->SqlVariable($this->strPassword) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intUsuariosId = $objDatabase->InsertId('usuarios', 'usuarios_id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							"usuarios"
						SET
							"usuario" = ' . $objDatabase->SqlVariable($this->strUsuario) . ',
							"nombre" = ' . $objDatabase->SqlVariable($this->strNombre) . ',
							"email" = ' . $objDatabase->SqlVariable($this->strEmail) . ',
							"habilitado" = ' . $objDatabase->SqlVariable($this->blnHabilitado) . ',
							"password" = ' . $objDatabase->SqlVariable($this->strPassword) . '
						WHERE
							"usuarios_id" = ' . $objDatabase->SqlVariable($this->intUsuariosId) . '
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
		 * Delete this Usuarios
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intUsuariosId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Usuarios with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Usuarios::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"usuarios"
				WHERE
					"usuarios_id" = ' . $objDatabase->SqlVariable($this->intUsuariosId) . '');
		}

		/**
		 * Delete all Usuarioses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Usuarios::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					"usuarios"');
		}

		/**
		 * Truncate usuarios table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Usuarios::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE "usuarios"');
		}

		/**
		 * Reload this Usuarios from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Usuarios object.');

			// Reload the Object
			$objReloaded = Usuarios::Load($this->intUsuariosId);

			// Update $this's local variables to match
			$this->strUsuario = $objReloaded->strUsuario;
			$this->strNombre = $objReloaded->strNombre;
			$this->strEmail = $objReloaded->strEmail;
			$this->blnHabilitado = $objReloaded->blnHabilitado;
			$this->strPassword = $objReloaded->strPassword;
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
					 * Gets the value for intUsuariosId (Read-Only PK)
					 * @return integer
					 */
					return $this->intUsuariosId;

				case 'Usuario':
					/**
					 * Gets the value for strUsuario (Unique)
					 * @return string
					 */
					return $this->strUsuario;

				case 'Nombre':
					/**
					 * Gets the value for strNombre 
					 * @return string
					 */
					return $this->strNombre;

				case 'Email':
					/**
					 * Gets the value for strEmail 
					 * @return string
					 */
					return $this->strEmail;

				case 'Habilitado':
					/**
					 * Gets the value for blnHabilitado 
					 * @return boolean
					 */
					return $this->blnHabilitado;

				case 'Password':
					/**
					 * Gets the value for strPassword 
					 * @return string
					 */
					return $this->strPassword;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_Roles':
					/**
					 * Gets the value for the private _objRoles (Read-Only)
					 * if set due to an expansion on the usuarios_roles_assn association table
					 * @return Roles
					 */
					return $this->_objRoles;

				case '_RolesArray':
					/**
					 * Gets the value for the private _objRolesArray (Read-Only)
					 * if set due to an ExpandAsArray on the usuarios_roles_assn association table
					 * @return Roles[]
					 */
					return (array) $this->_objRolesArray;

				case '_Muestras':
					/**
					 * Gets the value for the private _objMuestras (Read-Only)
					 * if set due to an expansion on the muestras.usuarios_id reverse relationship
					 * @return Muestras
					 */
					return $this->_objMuestras;

				case '_MuestrasArray':
					/**
					 * Gets the value for the private _objMuestrasArray (Read-Only)
					 * if set due to an ExpandAsArray on the muestras.usuarios_id reverse relationship
					 * @return Muestras[]
					 */
					return (array) $this->_objMuestrasArray;

				case '_OrdenesTrabajo':
					/**
					 * Gets the value for the private _objOrdenesTrabajo (Read-Only)
					 * if set due to an expansion on the ordenes_trabajo.usuarios_id reverse relationship
					 * @return OrdenesTrabajo
					 */
					return $this->_objOrdenesTrabajo;

				case '_OrdenesTrabajoArray':
					/**
					 * Gets the value for the private _objOrdenesTrabajoArray (Read-Only)
					 * if set due to an ExpandAsArray on the ordenes_trabajo.usuarios_id reverse relationship
					 * @return OrdenesTrabajo[]
					 */
					return (array) $this->_objOrdenesTrabajoArray;

				case '_Resultados':
					/**
					 * Gets the value for the private _objResultados (Read-Only)
					 * if set due to an expansion on the resultados.usuarios_id reverse relationship
					 * @return Resultados
					 */
					return $this->_objResultados;

				case '_ResultadosArray':
					/**
					 * Gets the value for the private _objResultadosArray (Read-Only)
					 * if set due to an ExpandAsArray on the resultados.usuarios_id reverse relationship
					 * @return Resultados[]
					 */
					return (array) $this->_objResultadosArray;

				case '_UsuariosAnalisis':
					/**
					 * Gets the value for the private _objUsuariosAnalisis (Read-Only)
					 * if set due to an expansion on the usuarios_analisis.usuarios_id reverse relationship
					 * @return UsuariosAnalisis
					 */
					return $this->_objUsuariosAnalisis;

				case '_UsuariosAnalisisArray':
					/**
					 * Gets the value for the private _objUsuariosAnalisisArray (Read-Only)
					 * if set due to an ExpandAsArray on the usuarios_analisis.usuarios_id reverse relationship
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
				case 'Usuario':
					/**
					 * Sets the value for strUsuario (Unique)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strUsuario = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

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

				case 'Email':
					/**
					 * Sets the value for strEmail 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strEmail = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Habilitado':
					/**
					 * Sets the value for blnHabilitado 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnHabilitado = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Password':
					/**
					 * Sets the value for strPassword 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPassword = QType::Cast($mixValue, QType::String));
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
			if ((is_null($this->intUsuariosId)))
				return array();

			try {
				return Muestras::LoadArrayByUsuariosId($this->intUsuariosId, $objOptionalClauses);
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
			if ((is_null($this->intUsuariosId)))
				return 0;

			return Muestras::CountByUsuariosId($this->intUsuariosId);
		}

		/**
		 * Associates a Muestras
		 * @param Muestras $objMuestras
		 * @return void
		*/ 
		public function AssociateMuestras(Muestras $objMuestras) {
			if ((is_null($this->intUsuariosId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateMuestras on this unsaved Usuarios.');
			if ((is_null($objMuestras->MuestrasId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateMuestras on this Usuarios with an unsaved Muestras.');

			// Get the Database Object for this Class
			$objDatabase = Usuarios::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					"muestras"
				SET
					"usuarios_id" = ' . $objDatabase->SqlVariable($this->intUsuariosId) . '
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
			if ((is_null($this->intUsuariosId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMuestras on this unsaved Usuarios.');
			if ((is_null($objMuestras->MuestrasId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMuestras on this Usuarios with an unsaved Muestras.');

			// Get the Database Object for this Class
			$objDatabase = Usuarios::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					"muestras"
				SET
					"usuarios_id" = null
				WHERE
					"muestras_id" = ' . $objDatabase->SqlVariable($objMuestras->MuestrasId) . ' AND
					"usuarios_id" = ' . $objDatabase->SqlVariable($this->intUsuariosId) . '
			');
		}

		/**
		 * Unassociates all Muestrases
		 * @return void
		*/ 
		public function UnassociateAllMuestrases() {
			if ((is_null($this->intUsuariosId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMuestras on this unsaved Usuarios.');

			// Get the Database Object for this Class
			$objDatabase = Usuarios::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					"muestras"
				SET
					"usuarios_id" = null
				WHERE
					"usuarios_id" = ' . $objDatabase->SqlVariable($this->intUsuariosId) . '
			');
		}

		/**
		 * Deletes an associated Muestras
		 * @param Muestras $objMuestras
		 * @return void
		*/ 
		public function DeleteAssociatedMuestras(Muestras $objMuestras) {
			if ((is_null($this->intUsuariosId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMuestras on this unsaved Usuarios.');
			if ((is_null($objMuestras->MuestrasId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMuestras on this Usuarios with an unsaved Muestras.');

			// Get the Database Object for this Class
			$objDatabase = Usuarios::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"muestras"
				WHERE
					"muestras_id" = ' . $objDatabase->SqlVariable($objMuestras->MuestrasId) . ' AND
					"usuarios_id" = ' . $objDatabase->SqlVariable($this->intUsuariosId) . '
			');
		}

		/**
		 * Deletes all associated Muestrases
		 * @return void
		*/ 
		public function DeleteAllMuestrases() {
			if ((is_null($this->intUsuariosId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMuestras on this unsaved Usuarios.');

			// Get the Database Object for this Class
			$objDatabase = Usuarios::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"muestras"
				WHERE
					"usuarios_id" = ' . $objDatabase->SqlVariable($this->intUsuariosId) . '
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
			if ((is_null($this->intUsuariosId)))
				return array();

			try {
				return OrdenesTrabajo::LoadArrayByUsuariosId($this->intUsuariosId, $objOptionalClauses);
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
			if ((is_null($this->intUsuariosId)))
				return 0;

			return OrdenesTrabajo::CountByUsuariosId($this->intUsuariosId);
		}

		/**
		 * Associates a OrdenesTrabajo
		 * @param OrdenesTrabajo $objOrdenesTrabajo
		 * @return void
		*/ 
		public function AssociateOrdenesTrabajo(OrdenesTrabajo $objOrdenesTrabajo) {
			if ((is_null($this->intUsuariosId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateOrdenesTrabajo on this unsaved Usuarios.');
			if ((is_null($objOrdenesTrabajo->OrdenesTrabajoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateOrdenesTrabajo on this Usuarios with an unsaved OrdenesTrabajo.');

			// Get the Database Object for this Class
			$objDatabase = Usuarios::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					"ordenes_trabajo"
				SET
					"usuarios_id" = ' . $objDatabase->SqlVariable($this->intUsuariosId) . '
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
			if ((is_null($this->intUsuariosId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrdenesTrabajo on this unsaved Usuarios.');
			if ((is_null($objOrdenesTrabajo->OrdenesTrabajoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrdenesTrabajo on this Usuarios with an unsaved OrdenesTrabajo.');

			// Get the Database Object for this Class
			$objDatabase = Usuarios::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					"ordenes_trabajo"
				SET
					"usuarios_id" = null
				WHERE
					"ordenes_trabajo_id" = ' . $objDatabase->SqlVariable($objOrdenesTrabajo->OrdenesTrabajoId) . ' AND
					"usuarios_id" = ' . $objDatabase->SqlVariable($this->intUsuariosId) . '
			');
		}

		/**
		 * Unassociates all OrdenesTrabajos
		 * @return void
		*/ 
		public function UnassociateAllOrdenesTrabajos() {
			if ((is_null($this->intUsuariosId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrdenesTrabajo on this unsaved Usuarios.');

			// Get the Database Object for this Class
			$objDatabase = Usuarios::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					"ordenes_trabajo"
				SET
					"usuarios_id" = null
				WHERE
					"usuarios_id" = ' . $objDatabase->SqlVariable($this->intUsuariosId) . '
			');
		}

		/**
		 * Deletes an associated OrdenesTrabajo
		 * @param OrdenesTrabajo $objOrdenesTrabajo
		 * @return void
		*/ 
		public function DeleteAssociatedOrdenesTrabajo(OrdenesTrabajo $objOrdenesTrabajo) {
			if ((is_null($this->intUsuariosId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrdenesTrabajo on this unsaved Usuarios.');
			if ((is_null($objOrdenesTrabajo->OrdenesTrabajoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrdenesTrabajo on this Usuarios with an unsaved OrdenesTrabajo.');

			// Get the Database Object for this Class
			$objDatabase = Usuarios::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"ordenes_trabajo"
				WHERE
					"ordenes_trabajo_id" = ' . $objDatabase->SqlVariable($objOrdenesTrabajo->OrdenesTrabajoId) . ' AND
					"usuarios_id" = ' . $objDatabase->SqlVariable($this->intUsuariosId) . '
			');
		}

		/**
		 * Deletes all associated OrdenesTrabajos
		 * @return void
		*/ 
		public function DeleteAllOrdenesTrabajos() {
			if ((is_null($this->intUsuariosId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrdenesTrabajo on this unsaved Usuarios.');

			// Get the Database Object for this Class
			$objDatabase = Usuarios::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"ordenes_trabajo"
				WHERE
					"usuarios_id" = ' . $objDatabase->SqlVariable($this->intUsuariosId) . '
			');
		}

			
		
		// Related Objects' Methods for Resultados
		//-------------------------------------------------------------------

		/**
		 * Gets all associated Resultadoses as an array of Resultados objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Resultados[]
		*/ 
		public function GetResultadosArray($objOptionalClauses = null) {
			if ((is_null($this->intUsuariosId)))
				return array();

			try {
				return Resultados::LoadArrayByUsuariosId($this->intUsuariosId, $objOptionalClauses);
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
			if ((is_null($this->intUsuariosId)))
				return 0;

			return Resultados::CountByUsuariosId($this->intUsuariosId);
		}

		/**
		 * Associates a Resultados
		 * @param Resultados $objResultados
		 * @return void
		*/ 
		public function AssociateResultados(Resultados $objResultados) {
			if ((is_null($this->intUsuariosId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateResultados on this unsaved Usuarios.');
			if ((is_null($objResultados->ResultadosId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateResultados on this Usuarios with an unsaved Resultados.');

			// Get the Database Object for this Class
			$objDatabase = Usuarios::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					"resultados"
				SET
					"usuarios_id" = ' . $objDatabase->SqlVariable($this->intUsuariosId) . '
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
			if ((is_null($this->intUsuariosId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateResultados on this unsaved Usuarios.');
			if ((is_null($objResultados->ResultadosId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateResultados on this Usuarios with an unsaved Resultados.');

			// Get the Database Object for this Class
			$objDatabase = Usuarios::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					"resultados"
				SET
					"usuarios_id" = null
				WHERE
					"resultados_id" = ' . $objDatabase->SqlVariable($objResultados->ResultadosId) . ' AND
					"usuarios_id" = ' . $objDatabase->SqlVariable($this->intUsuariosId) . '
			');
		}

		/**
		 * Unassociates all Resultadoses
		 * @return void
		*/ 
		public function UnassociateAllResultadoses() {
			if ((is_null($this->intUsuariosId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateResultados on this unsaved Usuarios.');

			// Get the Database Object for this Class
			$objDatabase = Usuarios::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					"resultados"
				SET
					"usuarios_id" = null
				WHERE
					"usuarios_id" = ' . $objDatabase->SqlVariable($this->intUsuariosId) . '
			');
		}

		/**
		 * Deletes an associated Resultados
		 * @param Resultados $objResultados
		 * @return void
		*/ 
		public function DeleteAssociatedResultados(Resultados $objResultados) {
			if ((is_null($this->intUsuariosId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateResultados on this unsaved Usuarios.');
			if ((is_null($objResultados->ResultadosId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateResultados on this Usuarios with an unsaved Resultados.');

			// Get the Database Object for this Class
			$objDatabase = Usuarios::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"resultados"
				WHERE
					"resultados_id" = ' . $objDatabase->SqlVariable($objResultados->ResultadosId) . ' AND
					"usuarios_id" = ' . $objDatabase->SqlVariable($this->intUsuariosId) . '
			');
		}

		/**
		 * Deletes all associated Resultadoses
		 * @return void
		*/ 
		public function DeleteAllResultadoses() {
			if ((is_null($this->intUsuariosId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateResultados on this unsaved Usuarios.');

			// Get the Database Object for this Class
			$objDatabase = Usuarios::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"resultados"
				WHERE
					"usuarios_id" = ' . $objDatabase->SqlVariable($this->intUsuariosId) . '
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
			if ((is_null($this->intUsuariosId)))
				return array();

			try {
				return UsuariosAnalisis::LoadArrayByUsuariosId($this->intUsuariosId, $objOptionalClauses);
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
			if ((is_null($this->intUsuariosId)))
				return 0;

			return UsuariosAnalisis::CountByUsuariosId($this->intUsuariosId);
		}

		/**
		 * Associates a UsuariosAnalisis
		 * @param UsuariosAnalisis $objUsuariosAnalisis
		 * @return void
		*/ 
		public function AssociateUsuariosAnalisis(UsuariosAnalisis $objUsuariosAnalisis) {
			if ((is_null($this->intUsuariosId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateUsuariosAnalisis on this unsaved Usuarios.');
			if ((is_null($objUsuariosAnalisis->UsuariosAnalisisId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateUsuariosAnalisis on this Usuarios with an unsaved UsuariosAnalisis.');

			// Get the Database Object for this Class
			$objDatabase = Usuarios::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					"usuarios_analisis"
				SET
					"usuarios_id" = ' . $objDatabase->SqlVariable($this->intUsuariosId) . '
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
			if ((is_null($this->intUsuariosId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUsuariosAnalisis on this unsaved Usuarios.');
			if ((is_null($objUsuariosAnalisis->UsuariosAnalisisId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUsuariosAnalisis on this Usuarios with an unsaved UsuariosAnalisis.');

			// Get the Database Object for this Class
			$objDatabase = Usuarios::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					"usuarios_analisis"
				SET
					"usuarios_id" = null
				WHERE
					"usuarios_analisis_id" = ' . $objDatabase->SqlVariable($objUsuariosAnalisis->UsuariosAnalisisId) . ' AND
					"usuarios_id" = ' . $objDatabase->SqlVariable($this->intUsuariosId) . '
			');
		}

		/**
		 * Unassociates all UsuariosAnalisises
		 * @return void
		*/ 
		public function UnassociateAllUsuariosAnalisises() {
			if ((is_null($this->intUsuariosId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUsuariosAnalisis on this unsaved Usuarios.');

			// Get the Database Object for this Class
			$objDatabase = Usuarios::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					"usuarios_analisis"
				SET
					"usuarios_id" = null
				WHERE
					"usuarios_id" = ' . $objDatabase->SqlVariable($this->intUsuariosId) . '
			');
		}

		/**
		 * Deletes an associated UsuariosAnalisis
		 * @param UsuariosAnalisis $objUsuariosAnalisis
		 * @return void
		*/ 
		public function DeleteAssociatedUsuariosAnalisis(UsuariosAnalisis $objUsuariosAnalisis) {
			if ((is_null($this->intUsuariosId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUsuariosAnalisis on this unsaved Usuarios.');
			if ((is_null($objUsuariosAnalisis->UsuariosAnalisisId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUsuariosAnalisis on this Usuarios with an unsaved UsuariosAnalisis.');

			// Get the Database Object for this Class
			$objDatabase = Usuarios::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"usuarios_analisis"
				WHERE
					"usuarios_analisis_id" = ' . $objDatabase->SqlVariable($objUsuariosAnalisis->UsuariosAnalisisId) . ' AND
					"usuarios_id" = ' . $objDatabase->SqlVariable($this->intUsuariosId) . '
			');
		}

		/**
		 * Deletes all associated UsuariosAnalisises
		 * @return void
		*/ 
		public function DeleteAllUsuariosAnalisises() {
			if ((is_null($this->intUsuariosId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUsuariosAnalisis on this unsaved Usuarios.');

			// Get the Database Object for this Class
			$objDatabase = Usuarios::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"usuarios_analisis"
				WHERE
					"usuarios_id" = ' . $objDatabase->SqlVariable($this->intUsuariosId) . '
			');
		}

			
		// Related Many-to-Many Objects' Methods for Roles
		//-------------------------------------------------------------------

		/**
		 * Gets all many-to-many associated Roleses as an array of Roles objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Roles[]
		*/ 
		public function GetRolesArray($objOptionalClauses = null) {
			if ((is_null($this->intUsuariosId)))
				return array();

			try {
				return Roles::LoadArrayByUsuarios($this->intUsuariosId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all many-to-many associated Roleses
		 * @return int
		*/ 
		public function CountRoleses() {
			if ((is_null($this->intUsuariosId)))
				return 0;

			return Roles::CountByUsuarios($this->intUsuariosId);
		}

		/**
		 * Checks to see if an association exists with a specific Roles
		 * @param Roles $objRoles
		 * @return bool
		*/
		public function IsRolesAssociated(Roles $objRoles) {
			if ((is_null($this->intUsuariosId)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsRolesAssociated on this unsaved Usuarios.');
			if ((is_null($objRoles->RolesId)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsRolesAssociated on this Usuarios with an unsaved Roles.');

			$intRowCount = Usuarios::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::Usuarios()->UsuariosId, $this->intUsuariosId),
					QQ::Equal(QQN::Usuarios()->Roles->RolesId, $objRoles->RolesId)
				)
			);

			return ($intRowCount > 0);
		}

		/**
		 * Associates a Roles
		 * @param Roles $objRoles
		 * @return void
		*/ 
		public function AssociateRoles(Roles $objRoles) {
			if ((is_null($this->intUsuariosId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateRoles on this unsaved Usuarios.');
			if ((is_null($objRoles->RolesId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateRoles on this Usuarios with an unsaved Roles.');

			// Get the Database Object for this Class
			$objDatabase = Usuarios::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				INSERT INTO "usuarios_roles_assn" (
					"usuarios_id",
					"roles_id"
				) VALUES (
					' . $objDatabase->SqlVariable($this->intUsuariosId) . ',
					' . $objDatabase->SqlVariable($objRoles->RolesId) . '
				)
			');
		}

		/**
		 * Unassociates a Roles
		 * @param Roles $objRoles
		 * @return void
		*/ 
		public function UnassociateRoles(Roles $objRoles) {
			if ((is_null($this->intUsuariosId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRoles on this unsaved Usuarios.');
			if ((is_null($objRoles->RolesId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRoles on this Usuarios with an unsaved Roles.');

			// Get the Database Object for this Class
			$objDatabase = Usuarios::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"usuarios_roles_assn"
				WHERE
					"usuarios_id" = ' . $objDatabase->SqlVariable($this->intUsuariosId) . ' AND
					"roles_id" = ' . $objDatabase->SqlVariable($objRoles->RolesId) . '
			');
		}

		/**
		 * Unassociates all Roleses
		 * @return void
		*/ 
		public function UnassociateAllRoleses() {
			if ((is_null($this->intUsuariosId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllRolesArray on this unsaved Usuarios.');

			// Get the Database Object for this Class
			$objDatabase = Usuarios::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					"usuarios_roles_assn"
				WHERE
					"usuarios_id" = ' . $objDatabase->SqlVariable($this->intUsuariosId) . '
			');
		}




		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Usuarios"><sequence>';
			$strToReturn .= '<element name="UsuariosId" type="xsd:int"/>';
			$strToReturn .= '<element name="Usuario" type="xsd:string"/>';
			$strToReturn .= '<element name="Nombre" type="xsd:string"/>';
			$strToReturn .= '<element name="Email" type="xsd:string"/>';
			$strToReturn .= '<element name="Habilitado" type="xsd:boolean"/>';
			$strToReturn .= '<element name="Password" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Usuarios', $strComplexTypeArray)) {
				$strComplexTypeArray['Usuarios'] = Usuarios::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Usuarios::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Usuarios();
			if (property_exists($objSoapObject, 'UsuariosId'))
				$objToReturn->intUsuariosId = $objSoapObject->UsuariosId;
			if (property_exists($objSoapObject, 'Usuario'))
				$objToReturn->strUsuario = $objSoapObject->Usuario;
			if (property_exists($objSoapObject, 'Nombre'))
				$objToReturn->strNombre = $objSoapObject->Nombre;
			if (property_exists($objSoapObject, 'Email'))
				$objToReturn->strEmail = $objSoapObject->Email;
			if (property_exists($objSoapObject, 'Habilitado'))
				$objToReturn->blnHabilitado = $objSoapObject->Habilitado;
			if (property_exists($objSoapObject, 'Password'))
				$objToReturn->strPassword = $objSoapObject->Password;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Usuarios::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

	class QQNodeUsuariosRoles extends QQAssociationNode {
		protected $strType = 'association';
		protected $strName = 'roles';

		protected $strTableName = 'usuarios_roles_assn';
		protected $strPrimaryKey = 'usuarios_id';
		protected $strClassName = 'Roles';

		public function __get($strName) {
			switch ($strName) {
				case 'RolesId':
					return new QQNode('roles_id', 'RolesId', 'integer', $this);
				case 'Roles':
					return new QQNodeRoles('roles_id', 'RolesId', 'integer', $this);
				case '_ChildTableNode':
					return new QQNodeRoles('roles_id', 'RolesId', 'integer', $this);
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

	class QQNodeUsuarios extends QQNode {
		protected $strTableName = 'usuarios';
		protected $strPrimaryKey = 'usuarios_id';
		protected $strClassName = 'Usuarios';
		public function __get($strName) {
			switch ($strName) {
				case 'UsuariosId':
					return new QQNode('usuarios_id', 'UsuariosId', 'integer', $this);
				case 'Usuario':
					return new QQNode('usuario', 'Usuario', 'string', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'string', $this);
				case 'Email':
					return new QQNode('email', 'Email', 'string', $this);
				case 'Habilitado':
					return new QQNode('habilitado', 'Habilitado', 'boolean', $this);
				case 'Password':
					return new QQNode('password', 'Password', 'string', $this);
				case 'Roles':
					return new QQNodeUsuariosRoles($this);
				case 'Muestras':
					return new QQReverseReferenceNodeMuestras($this, 'muestras', 'reverse_reference', 'usuarios_id');
				case 'OrdenesTrabajo':
					return new QQReverseReferenceNodeOrdenesTrabajo($this, 'ordenestrabajo', 'reverse_reference', 'usuarios_id');
				case 'Resultados':
					return new QQReverseReferenceNodeResultados($this, 'resultados', 'reverse_reference', 'usuarios_id');
				case 'UsuariosAnalisis':
					return new QQReverseReferenceNodeUsuariosAnalisis($this, 'usuariosanalisis', 'reverse_reference', 'usuarios_id');

				case '_PrimaryKeyNode':
					return new QQNode('usuarios_id', 'UsuariosId', 'integer', $this);
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

	class QQReverseReferenceNodeUsuarios extends QQReverseReferenceNode {
		protected $strTableName = 'usuarios';
		protected $strPrimaryKey = 'usuarios_id';
		protected $strClassName = 'Usuarios';
		public function __get($strName) {
			switch ($strName) {
				case 'UsuariosId':
					return new QQNode('usuarios_id', 'UsuariosId', 'integer', $this);
				case 'Usuario':
					return new QQNode('usuario', 'Usuario', 'string', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'string', $this);
				case 'Email':
					return new QQNode('email', 'Email', 'string', $this);
				case 'Habilitado':
					return new QQNode('habilitado', 'Habilitado', 'boolean', $this);
				case 'Password':
					return new QQNode('password', 'Password', 'string', $this);
				case 'Roles':
					return new QQNodeUsuariosRoles($this);
				case 'Muestras':
					return new QQReverseReferenceNodeMuestras($this, 'muestras', 'reverse_reference', 'usuarios_id');
				case 'OrdenesTrabajo':
					return new QQReverseReferenceNodeOrdenesTrabajo($this, 'ordenestrabajo', 'reverse_reference', 'usuarios_id');
				case 'Resultados':
					return new QQReverseReferenceNodeResultados($this, 'resultados', 'reverse_reference', 'usuarios_id');
				case 'UsuariosAnalisis':
					return new QQReverseReferenceNodeUsuariosAnalisis($this, 'usuariosanalisis', 'reverse_reference', 'usuarios_id');

				case '_PrimaryKeyNode':
					return new QQNode('usuarios_id', 'UsuariosId', 'integer', $this);
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