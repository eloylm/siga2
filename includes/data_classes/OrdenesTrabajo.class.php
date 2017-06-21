<?php
	require(__DATAGEN_CLASSES__ . '/OrdenesTrabajoGen.class.php');

	/**
	 * The OrdenesTrabajo class defined here contains any
	 * customized code for the OrdenesTrabajo class in the
	 * Object Relational Model.  It represents the "ordenes_trabajo" table 
	 * in the database, and extends from the code generated abstract OrdenesTrabajoGen
	 * class, which contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 * 
	 * @package My Application
	 * @subpackage DataObjects
	 * 
	 */
	class OrdenesTrabajo extends OrdenesTrabajoGen {
		/**
		 * Default "to string" handler
		 * Allows pages to _p()/echo()/print() this object, and to define the default
		 * way this object would be outputted.
		 *
		 * Can also be called directly via $objOrdenesTrabajo->__toString().
		 *
		 * @return string a nicely formatted string representation of this object
		 */
		public function __toString() {
			return sprintf('%s',  $this->intOrdenesTrabajoId);
		}

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

                public function DeleteResultadosbyEstado($estado) {
                    
//			if ((is_null($this->intOrdenesTrabajoId)))
//				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateResultados on this unsaved OrdenesTrabajo.');

			// Get the Database Object for this Class
			$objDatabase = OrdenesTrabajo::GetDatabase();

			// Perform the SQL Query
                        
			$objDatabase->NonQuery('
				DELETE FROM
					"resultados"
				WHERE
					"ordenes_trabajo_id" = ' . $objDatabase->SqlVariable($this->intOrdenesTrabajoId) . '
                                AND     "estado" = ' . $objDatabase->SqlVariable($estado) . '
                        ');
                        
                }


		// Override or Create New Load/Count methods
		// (For obvious reasons, these methods are commented out...
		// but feel free to use these as a starting point)
/*
		public static function LoadArrayBySample($strParam1, $intParam2, $objOptionalClauses = null) {
			// This will return an array of OrdenesTrabajo objects
			return OrdenesTrabajo::QueryArray(
				QQ::AndCondition(
					QQ::Equal(QQN::OrdenesTrabajo()->Param1, $strParam1),
					QQ::GreaterThan(QQN::OrdenesTrabajo()->Param2, $intParam2)
				),
				$objOptionalClauses
			);
		}

		public static function LoadBySample($strParam1, $intParam2, $objOptionalClauses = null) {
			// This will return a single OrdenesTrabajo object
			return OrdenesTrabajo::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::OrdenesTrabajo()->Param1, $strParam1),
					QQ::GreaterThan(QQN::OrdenesTrabajo()->Param2, $intParam2)
				),
				$objOptionalClauses
			);
		}

		public static function CountBySample($strParam1, $intParam2, $objOptionalClauses = null) {
			// This will return a count of OrdenesTrabajo objects
			return OrdenesTrabajo::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::OrdenesTrabajo()->Param1, $strParam1),
					QQ::Equal(QQN::OrdenesTrabajo()->Param2, $intParam2)
				),
				$objOptionalClauses
			);
		}

		public static function LoadArrayBySample($strParam1, $intParam2, $objOptionalClauses) {
			// Performing the load manually (instead of using QCubed Query)

			// Get the Database Object for this Class
			$objDatabase = OrdenesTrabajo::GetDatabase();

			// Properly Escape All Input Parameters using Database->SqlVariable()
			$strParam1 = $objDatabase->SqlVariable($strParam1);
			$intParam2 = $objDatabase->SqlVariable($intParam2);

			// Setup the SQL Query
			$strQuery = sprintf('
				SELECT
					"ordenes_trabajo".*
				FROM
					"ordenes_trabajo" AS "ordenes_trabajo"
				WHERE
					param_1 = %s AND
					param_2 < %s',
				$strParam1, $intParam2);

			// Perform the Query and Instantiate the Result
			$objDbResult = $objDatabase->Query($strQuery);
			return OrdenesTrabajo::InstantiateDbResult($objDbResult);
		}
*/




		// Override or Create New Properties and Variables
		// For performance reasons, these variables and __set and __get override methods
		// are commented out.  But if you wish to implement or override any
		// of the data generated properties, please feel free to uncomment them.
/*
		protected $strSomeNewProperty;

		public function __get($strName) {
			switch ($strName) {
				case 'SomeNewProperty': return $this->strSomeNewProperty;

				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		public function __set($strName, $mixValue) {
			switch ($strName) {
				case 'SomeNewProperty':
					try {
						return ($this->strSomeNewProperty = QType::Cast($mixValue, QType::String));
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				default:
					try {
						return (parent::__set($strName, $mixValue));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
*/
	}
?>