/*------------------------------------------------------------------------------------------------*/
/*                                                                                                */
/*  eTraxis - Records tracking web-based system.                                                  */
/*  Copyright (C) 2011 by Artem Rodygin                                                           */
/*                                                                                                */
/*  This program is free software; you can redistribute it and/or modify                          */
/*  it under the terms of the GNU General Public License as published by                          */
/*  the Free Software Foundation; either version 2 of the License, or                             */
/*  (at your option) any later version.                                                           */
/*                                                                                                */
/*  This program is distributed in the hope that it will be useful,                               */
/*  but WITHOUT ANY WARRANTY; without even the implied warranty of                                */
/*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the                                 */
/*  GNU General Public License for more details.                                                  */
/*                                                                                                */
/*  You should have received a copy of the GNU General Public License along                       */
/*  with this program; if not, write to the Free Software Foundation, Inc.,                       */
/*  51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.                                   */
/*                                                                                                */
/*------------------------------------------------------------------------------------------------*/
/*  Server type: MySQL 5.0                                                                        */
/*------------------------------------------------------------------------------------------------*/

use etraxis;
set @dbname = 'etraxis';

/*------------------------------------------------------------------------------------------------*/

update tbl_sys_vars
set var_value = '3.4'
where var_name = 'FEATURE_LEVEL';

/*------------------------------------------------------------------------------------------------*/

alter table tbl_fields modify column regex_check varchar (500) null;
alter table tbl_fields modify column regex_search varchar (500) null;
alter table tbl_fields modify column regex_replace varchar (500) null;

/*------------------------------------------------------------------------------------------------*/

create table tbl_float_values
(
    value_id int not null auto_increment primary key,
    float_value decimal (20,10) not null
);

alter table tbl_float_values add constraint unique ix_float_values
(
    float_value
);

/*------------------------------------------------------------------------------------------------*/
