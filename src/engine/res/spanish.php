<?php

//------------------------------------------------------------------------------
//
//  eTraxis - Records tracking web-based system
//  Copyright (C) 2007-2010  Artem Rodygin
//
//  This program is free software: you can redistribute it and/or modify
//  it under the terms of the GNU General Public License as published by
//  the Free Software Foundation, either version 3 of the License, or
//  (at your option) any later version.
//
//  This program is distributed in the hope that it will be useful,
//  but WITHOUT ANY WARRANTY; without even the implied warranty of
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//  GNU General Public License for more details.
//
//  You should have received a copy of the GNU General Public License
//  along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
//------------------------------------------------------------------------------

/**
 * Localization
 *
 * This module contains prompts translated in Spanish (ES).
 *
 * @package Engine
 * @subpackage Localization
 * @author Normando Hall
 */

$resource_spanish = array
(
    RES_SECTION_ALERTS =>
    /* 200 */
    'Debe completar los campos marcados como obligatorios.',
    'El valor predeterminado debe estar comprendido entre %1 y %2.',
    'Cuenta deshabilitada.',
    'Cuenta bloqueada.',
    'Nombre de usuario inválido.',
    'Ya existe una cuenta con ese nombre de usuario.',
    'Email inválido.',
    'Las contraseñas no coinciden.',
    'La contraseña debe tener una logintud mínima de %1 caracteres.',
    'Ya existe un Proyecto con ese nombre.',
    /* 210 */
    'Ya existe un Grupo con ese nombre.',
    'Ya existe una Plantilla con ese nombre o prefijo.',
    'Ya existe un Estado con ese nombre o inicial.',
    'Ya existe un Campo con ese nombre.',
    'Valor entero inválido.',
    'El entero debe estar comprendido entre %1 y %2.',
    'El valor de "%1" debe estar comprendido entre %2 y %3.',
    'El valor máximo debe ser mayor que el mínimo.',
    'El archivo subido excede la directiva "upload_max_filesize" en "php.ini".',
    'El tamaño del archivo subido no debe superar los %1 Kbytes.',
    /* 220 */
    'El archivo subido fue parcialmente cargado.',
    'No se ha cargado el archivo.',
    'Carpeta temporal inexistente.',
    'Ya existe un Adjunto con ese nombre.',
    'Registro no encontrado.',
    'Ya existe un Filtro con ese nombre.',
    'Fecha inválida.',
    'La fecha debe estar comprendida entre %1 y %2.',
    'Hora inválida.',
    'La hora debe estar comprendida entre %1 y %2.',
    /* 230 */
    'Ya existe una Suscripción con ese nombre.',
    'Ya existe un Recordatorio con ese nombre.',
    'El recordatorio fue correctamente enviado.',
    'Ya existe una Vista con ese nombre.',
    'Por favor, introduzca una breve descripción del registro.',
    'Falla al escribir el archivo al disco.',
    'Se detuvo la carga del archivo por la extensión.',
    'Debe tener habilitado JavaScript.',
    'Este es un mensaje automático, por favor no lo responda.',
    'Valor decimal inválido.',
    /* 240 */
    'El valor decimal debe estar comprendido entre %1 y %2.',
    'La vista no puede tener mas de %1 columnas.',
    'El valor de "%1" falló en la verificación de formato.',
    'Usuario no autorizado.',
    'Nombre de usuario desconocido o contraseña incorrecta.',
    'Error desconocido.',
    'Error del analizador XML.',
    'Cambios guardados correctamente.',

    RES_SECTION_CONFIRMS =>
    /* 300 */
    '¿Está seguro de eliminar todas las vistas seleccionadas?',
    '¿Está seguro de eliminar esta cuenta?',
    '¿Está seguro de eliminar este proyecto?',
    '¿Está seguro de eliminar este grupo?',
    '¿Está seguro de eliminar esta plantilla?',
    '¿Está seguro de eliminar este estado?',
    '¿Está seguro de eliminar este campo?',
    '¿Está seguro de cambiar el estado de este registro?',
    '¿Está seguro de reanudar este registro?',
    '¿Está seguro de asignar este registro?',
    /* 310 */
    '¿Está seguro de eliminar todos los filtros seleccionados?',
    '¿Está seguro de eliminar todas las suscripciones seleccionadas?',
    '¿Está seguro de enviar este recordatorio?',
    '¿Está seguro de eliminar este recordatorio?',
    '¿Está seguro de salir?',
    '¿Está seguro de eliminar este registro?',

    RES_SECTION_PROMPTS =>
    /* 1000 */
    'Español',
    'Ingresar',
    'OK',
    'Cancelar',
    'Guardar',
    'Atras',
    'Siguiente',
    'Crear',
    'Modificar',
    'Eliminar',
    /* 1010 */
    'Registros',
    'Cuentas',
    'Proyectos',
    'Cambiar contraseña',
    'Campos del estado "%1"',
    'ninguno',
    'Total:',
    'Tema',
    'Información de la cuenta',
    'Nombre de usuario',
    /* 1020 */
    'Nombre completo',
    'Email',
    'Predeterminado',
    'administrador',
    'usuario',
    'Descripción',
    'Contraseña',
    'Confirmación',
    'deshabilitado',
    'bloqueado',
    /* 1030 */
    'Nueva cuenta',
    'Cuenta "%1"',
    'Información del proyecto',
    'Nombre del proyecto',
    'Fecha de inicio',
    'suspendido',
    'Nuevo proyecto',
    'Proyecto "%1"',
    'Grupos',
    'Información del grupo',
    /* 1040 */
    'Nombre del grupo',
    'Nuevo grupo',
    'Grupo "%1"',
    'Membresía',
    'Otros',
    'Miembros',
    'Plantillas',
    'Información de plantilla',
    'Nombre de plantilla',
    'Prefijo',
    /* 1050 */
    'Nueva plantilla',
    'Plantilla "%1"',
    'Estados',
    'Información de estados',
    'Nombre de estado',
    'Abreviatura',
    'Tipo de estado',
    'inicial',
    'intermedio',
    'final',
    /* 1060 */
    'Responsable',
    'dejar sin cambios',
    'asignar',
    'eliminar',
    'Nuevo estado',
    'Estado "%1"',
    'Crear intermedio',
    'Crear final',
    'Transiciones',
    'Permisos',
    /* 1070 */
    'Hacer inicial',
    'Permitido',
    'Campos',
    'Información de campos',
    'Orden',
    'Nombre de campo',
    'Tipo de campo',
    'número',
    'cadena',
    'texto multilínea',
    /* 1080 */
    'Obligatorio',
    'si',
    'no',
    'Valor Min.',
    'Valor Max.',
    'Longitud Max.',
    'obligatorio',
    'Nuevo campo (paso %1/%2)',
    'Campo "%1"',
    'sólo lectura',
    /* 1090 */
    'lectura y escritura',
    'Información general',
    'ID',
    'Proyecto',
    'Plantilla',
    'Estado',
    'Edad',
    'Nuevo registro',
    'Registro "%1"',
    'Mis registros',
    /* 1100 */
    'Historial',
    'Aplazar',
    'Reanudar',
    'Asignar',
    'Cambiar estado',
    'Fecha y Hora',
    'Autor',
    'Registro creado con el estado "%1".',
    'Se asignó el registro a %1.',
    'Se modificó el registro.',
    /* 1110 */
    'Se cambió el estado a "%1".',
    'Se aplazó el registro hasta el %1.',
    'Se reanudó el registro.',
    'Se adjuntó el archivo "%1".',
    'El archivo "%1" fue eliminado.',
    'permiso para crear registros',
    'permiso para modificar registros',
    'permiso para aplazar registros',
    'permiso para reanudar registros',
    'permiso para reasignar registros asignados',
    /* 1120 */
    'premiso para reabrir registros',
    'permiso para adjuntar archivos',
    'permiso para eliminar archivos',
    'Idioma',
    'Añadir comentario',
    'Se añadió un comentario.',
    'permiso para añadir comentarios',
    'Comentario',
    'Adjuntar archivo',
    'Eliminar archivo',
    /* 1130 */
    'Adjunto',
    'Nombre adjunto',
    'Archivo adjunto',
    'Adjuntos',
    'Sin campos.',
    'Auto expiración',
    'Tiempo congelado',
    'Cambios',
    'Valor anterior',
    'Valor nuevo',
    /* 1140 */
    'casilla de verificación',
    'registro',
    'lista',
    'Lista de ítems',
    '%1 Kb',
    'Filtros',
    'Nombre del Filtro',
    'Todos los proyectos',
    'Todas las plantillas',
    'Todos los estados',
    /* 1150 */
    'Ver registro',
    'Mostrar sólo los creados por ...',
    'Mostrar sólo los asignados a ...',
    'mostrar únicamente los no cerrados',
    'Asunto',
    'Buscar',
    'Buscar parámetros',
    'Buscar resultados',
    'Texto a buscar',
    'buscar en campos',
    /* 1160 */
    'buscar en comentarios',
    'Estado',
    'activo',
    'Suscripciones',
    'notificar cuando un registro sea creado',
    'notificar cuando un registro sea asignado',
    'notificar cuando un registro sea modificado',
    'notificar cuando el estado sea cambiado',
    'notificar cuando un registro sea aplazado',
    'notificar cuando un registro sea reanudado',
    /* 1170 */
    'notificar cuando un comentario sea agregado',
    'notificar cuando un archivo sea adjuntado',
    'notificar cuando un archivo sea eliminado',
    'obligatorio',
    'Aplazado',
    'Fecha de vencimiento',
    'Valor predeterminado',
    'on',
    'off',
    'Métrica',
    /* 1180 */
    'Registros abiertos',
    'Creados vs Cerrados',
    'semana',
    'cantidad',
    'Clonar',
    'El registro fue clonado desde "%1".',
    'Salir',
    'notificar cuando un registro sea clonado',
    'Ajustes',
    'Filas por página',
    /* 1190 */
    'Favoritos por página',
    'Bloquear',
    'Desbloquear',
    'Tipo de grupo',
    'global',
    'local',
    'Configuración',
    'Línea',
    'Ruta web',
    'Seguridad',
    /* 1200 */
    'Longitud mínima de contraseña',
    'Reintentos máximos de ingreso',
    'Bloqueo de tiempo (min)',
    'Base de datos',
    'Tipo de base de datos',
    'Oracle',
    'MySQL',
    'Microsoft SQL Server',
    'Servidor de base de datos',
    'Nombre de la base de datos',
    /* 1210 */
    'Usuario de la base de datos',
    'Directorio Activo',
    'Servidor LDAP',
    'Puerto',
    'Buscar cuenta',
    'Base DN',
    'Administradores',
    'Notificaciones por Email',
    'Tamaño máximo',
    'Depuración',
    /* 1220 */
    'Modo de depuración',
    'habilitado (sin datos privados)',
    'habilitado (todos los datos)',
    'Registros de depuración',
    'Habilitado',
    'Deshabilitado',
    'decimal',
    'permiso para ver sólo regitros',
    'Seleccionar todo',
    'Autor',
    /* 1230 */
    'fecha',
    'duración',
    'mostrar sólo aplazados',
    'Nombre de la suscripción',
    'Eventos',
    'Versión %1',
    'rol',
    'Suscribirse',
    'Desuscribirse',
    'Recordatorios',
    /* 1240 */
    'Nombre de recordatorio',
    'Asunto del recordatorio',
    'Destinatarios del recordatorio',
    'Nuevo recordatorio',
    'Recordatorio "%1"',
    'permiso para enviar recordatorios',
    'Enviar',
    'Nuevo filtro',
    'Filtro "%1"',
    'Nueva suscripción',
    /* 1250 */
    'Suscripción "%1"',
    'Cantidad de líneas en campos multilínea',
    'Puede insertar un enlace hacia otro registro ingresando "rec#" y el número del mismo (ej. "rec#305").',
    'Mostrar sólo los movidos a los estados ...',
    'Compartir con ...',
    'Exportar',
    'Suscribir a otros...',
    'Suscripto',
    '%1 lo ha suscripto al registro.',
    '%1 se ha desuscripto.',
    /* 1260 */
    'Copia carbónica',
    'Almacenamiento',
    'Atributo LDAP',
    'Vistas',
    'Cerrar',
    'Ver nombre',
    'Nueva vista',
    'Vista "%1"',
    'Sin vistas',
    'Fijar',
    /* 1270 */
    'Columnas',
    'Advertencia',
    'Información',
    'Error',
    'Pregunta',
    'Alineación',
    'izquierda',
    'centro',
    'derecha',
    'El servicio no estará disponible desde el %1 hasta %2 (%3)',
    /* 1280 */
    'Todos los asignados a mi',
    'Todos los creados por mi',
    'Mostrar en emails',
    'Por favor espere...',
    'Descargar',
    'Subregistros',
    'Crear subregistro',
    'Adjuntar subregistro',
    'Eliminar subregistro',
    'Intervalo de auto-refresco',
    /* 1290 */
    'El subregistro "%1" fue añadido.',
    'El subregistro "%1" fue eliminado.',
    'permiso para añadir subregistros',
    'permiso para eliminar subregistros',
    'notificar cuando un subregistro sea añadido',
    'notificar cuando un subregistro sea eliminado',
    'registros creados',
    'registros cerrados',
    'Confidencial',
    'Añadir comentario confidencial',
    /* 1300 */
    'permiso para añadir/leer comentarios confidenciales',
    'Fue añadido un comentario confidencial.',
    'ID Padre',
    'dependencia',
    'Zona horaria',
    'Agregar separador',
    'Delimitador CSV',
    'Codificación CSV',
    'Final de línea CSV',
    'notificar cuando el registro sea reabierto',
    /* 1310 */
    'Habilitar filtros',
    'Deshabilitar filtros',
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    'Expandir todo',
    /* 1320 */
    'Colapsar todo',
    'El registro fue reabierto en el estado de "%1".',
    'P/Ev',
    'Usar PCRE para verificar el valor de los campos',
    'Búsqueda PCRE para transformar el valor de los campos',
    'Reemplazo PCRE para transformar el valor de los campos',
    'Estado siguiente predeterminado',
    'Estados de aplazo',
    'mostrar todos',
    'mostrar sólo activos',
    /* 1330 */
    'Evento',
    'Reabrir',
    'Acceso de invitado',
    'Ninguno.',
    'Grupos Globales',
    'Invitado',
    'Importar',
    'permiso para eliminar registros',
    NULL,
    'Idioma predeterminado',
    /* 1340 */
    'Expiración de contraseña (días)',
    'Expiración de la sesión (min)',
    'LDAP enumeración',
    'PostgreSQL',
    'lista de índices',
    'lista de valores',
    'Creado',
    'Marcar como leído',
    'Registrado',
    'TLS',
    /* 1350 */
    'Compresión',
    'P/Es',
    'Comentarios',
    'Tamaño',
    'Apariencia',
    'CSV',
    'Habilitar',
    'Deshabilitar',
    'Vista Previa',
    'Dueño',
    /* 1360 */
    'Nadie.',
    'Marcar como no leído',
    'Registros padres',
);

?>
