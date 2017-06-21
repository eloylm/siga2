<?php
	class QQN {
		/**
		 * @return QQNodeAnalisis
		 */
		static public function Analisis() {
			return new QQNodeAnalisis('analisis', null, null);
		}
		/**
		 * @return QQNodeClientes
		 */
		static public function Clientes() {
			return new QQNodeClientes('clientes', null, null);
		}
		/**
		 * @return QQNodeMetodos
		 */
		static public function Metodos() {
			return new QQNodeMetodos('metodos', null, null);
		}
		/**
		 * @return QQNodeMuestras
		 */
		static public function Muestras() {
			return new QQNodeMuestras('muestras', null, null);
		}
		/**
		 * @return QQNodeOrdenesTrabajo
		 */
		static public function OrdenesTrabajo() {
			return new QQNodeOrdenesTrabajo('ordenes_trabajo', null, null);
		}
		/**
		 * @return QQNodeResultados
		 */
		static public function Resultados() {
			return new QQNodeResultados('resultados', null, null);
		}
		/**
		 * @return QQNodeRoles
		 */
		static public function Roles() {
			return new QQNodeRoles('roles', null, null);
		}
		/**
		 * @return QQNodeUnidades
		 */
		static public function Unidades() {
			return new QQNodeUnidades('unidades', null, null);
		}
		/**
		 * @return QQNodeUsuarios
		 */
		static public function Usuarios() {
			return new QQNodeUsuarios('usuarios', null, null);
		}
		/**
		 * @return QQNodeUsuariosAnalisis
		 */
		static public function UsuariosAnalisis() {
			return new QQNodeUsuariosAnalisis('usuarios_analisis', null, null);
		}
	}
?>