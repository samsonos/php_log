<?php
//
// Коды ошибок
// Новые коды должны попадать в диапазон ( E_SAMSON_FATAL_ERROR - D_SAMSON_DEBUG )
//

/** Критическая ошибка в системы, после ее срабатывания система прекращает работу */
define( 'E_SAMSON_FATAL_ERROR', 900 );
/** Ошибка при работе с ресурсами системы */
define( 'E_SAMSON_SRC_ERROR', 901 );
/** Ошибка в ядре системы */
define( 'E_SAMSON_CORE_ERROR', 999 );
/** Ошибка в АктивнойЗаписи */
define( 'E_SAMSON_ACTIVERECORD_ERROR', 998 );
/** Ошибка в SQL */
define( 'E_SAMSON_SQL_ERROR', 997 );
/** Ошибка в работе SamsonCMS */
define( 'E_SAMSON_CMS_ERROR', 996 );
/** Ошибка в AUTH */
define( 'E_SAMSON_AUTH_ERROR', 995 );
/** Ошибка в компрессоре системы */
define( 'E_SAMSON_SNAPSHOT_ERROR', 994 );
/** Ошибка в компрессоре системы */
define( 'E_SAMSON_RENDER_ERROR', 993 );

//
// Коды для отладочных сообщений
// Новые коды должны все быть больше D_SAMSON_DEBUG(10000)
//

/**
 * Отладочное сообщение
 */
define( 'D_SAMSON_DEBUG', 10000 );
/**
 * Отладочное сообщение ActiveRecord
 */
define( 'D_SAMSON_ACTIVERECORD_DEBUG', 10001 );
/**
 * Отладочное сообщение в CMS
 */
define( 'D_SAMSON_CMS_DEBUG', 10002 );
/**
 * Отладочное сообщение в AUTH
 */
define( 'D_SAMSON_AUTH_DEBUG', 10003 );