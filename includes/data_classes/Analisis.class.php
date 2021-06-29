<?php
	require(__DATAGEN_CLASSES__ . '/AnalisisGen.class.php');

	/**
	 * The Analisis class defined here contains any
	 * customized code for the Analisis class in the
	 * Object Relational Model.  It represents the "analisis" table 
	 * in the database, and extends from the code generated abstract AnalisisGen
	 * class, which contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 * 
	 * @package My Application
	 * @subpackage DataObjects
	 * 
	 */

            function utf8_strtolower($string) {
                    return utf8_encode(strtolower(utf8_decode($string)));
                }

	class Analisis extends AnalisisGen {
		/**
		 * Default "to string" handler
		 * Allows pages to _p()/echo()/print() this object, and to define the default
		 * way this object would be outputted.
		 *
		 * Can also be called directly via $objAnalisis->__toString().
		 *
		 * @return string a nicely formatted string representation of this object
		 */
                
		public function __toString() {
                        
			return ucfirst(utf8_strtolower(($this->strNombre)));
		}


		// Override or Create New Load/Count methods
		// (For obvious reasons, these methods are commented out...
		// but feel free to use these as a starting point)
		
		public static function LoadbyGrupo($objOptionalClauses = null) {
                        if (func_num_args() > 1) {
                                throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
                        }
                        // Call Muestras::QueryArray to perform the LoadAll query
                        try {
                                return Analisis::QueryArray(QQ::Equal(QQN::Analisis()->Grupo, 1), $objOptionalClauses);
                        } catch (QCallerException $objExc) {
                                $objExc->IncrementOffset();
                                throw $objExc;
                        }
                }


/*
		public static function LoadArrayBySample($strParam1, $intParam2, $objOptionalClauses = null) {
			// This will return an array of Analisis objects
			return Analisis::QueryArray(
				QQ::AndCondition(
					QQ::Equal(QQN::Analisis()->Param1, $strParam1),
					QQ::GreaterThan(QQN::Analisis()->Param2, $intParam2)
				),
				$objOptionalClauses
			);
		}

		public static function LoadBySample($strParam1, $intParam2, $objOptionalClauses = null) {
			// This will return a single Analisis object
			return Analisis::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Analisis()->Param1, $strParam1),
					QQ::GreaterThan(QQN::Analisis()->Param2, $intParam2)
				),
				$objOptionalClauses
			);
		}

		public static function CountBySample($strParam1, $intParam2, $objOptionalClauses = null) {
			// This will return a count of Analisis objects
			return Analisis::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::Analisis()->Param1, $strParam1),
					QQ::Equal(QQN::Analisis()->Param2, $intParam2)
				),
				$objOptionalClauses
			);
		}

		public static function LoadArrayBySample($strParam1, $intParam2, $objOptionalClauses) {
			// Performing the load manually (instead of using QCubed Query)

			// Get the Database Object for this Class
			$objDatabase = Analisis::GetDatabase();

			// Properly Escape All Input Parameters using Database->SqlVariable()
			$strParam1 = $objDatabase->SqlVariable($strParam1);
			$intParam2 = $objDatabase->SqlVariable($intParam2);

			// Setup the SQL Query
			$strQuery = sprintf('
				SELECT
					"analisis".*
				FROM
					"analisis" AS "analisis"
				WHERE
					param_1 = %s AND
					param_2 < %s',
				$strParam1, $intParam2);

			// Perform the Query and Instantiate the Result
			$objDbResult = $objDatabase->Query($strQuery);
			return Analisis::InstantiateDbResult($objDbResult);
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
