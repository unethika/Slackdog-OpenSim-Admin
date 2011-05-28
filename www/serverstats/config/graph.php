<?php
/**
 * $Id$
 *
 * Author: David Danier, david.danier@team23.de
 * Project: Serverstats, http://serverstats.berlios.de/
 * License: GPL v2 or later (http://www.gnu.org/licenses/gpl.html)
 *
 * Copyright (C) 2005 David Danier
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

// Define the look of the graphs
$config['width'] = 500;
$config['height'] = 150;
$config['usecache'] = true;

// List of all Graphs
$config['list'] = array();

// Add graphs using the simple configuration
// (To change what graphs are generated by simpleconfig please edit simple.php)
simpleconfig::graph($config, $rootConfig['simple']);

$config['tree'] = array(
	'title' => 'All graphs',
	'filter' => '',
	'sub' => array(
		array(
			'title' => 'localhost',
			'filter' => 'host:localhost'
		)
	)
);
$config['list'][] = array(
                          'title' => 'Grid CPU',
                          'lowerLimit' => 0,
                          'altAutoscaleMax' => true,
                          'content' => array(
                                             array(
                                                   'type' => 'AREA',
                                                   'source' => 'opensimgrid',
                                                   'ds' => 'grid_cpu_sys',
                                                   'cf' => 'AVERAGE',
                                                   'legend' => 'Grid (sys)',
                                                   'color' => 'D00000',
                                                   ),
                                             array(
                                                   'type' => 'AREA',
                                                   'source' => 'opensimgrid',
                                                   'ds' => 'grid_cpu_user',
                                                   'cf' => 'AVERAGE',
                                                   'legend' => 'Grid (user)',
                                                   'color' => 'FF0000',
                                                   'stacked' => true,
                                                   ),
                                             array(
                                                   'type' => 'AREA',
                                                   'source' => 'opensimgrid',
                                                   'ds' => 'user_cpu_sys',
                                                   'cf' => 'AVERAGE',
                                                   'legend' => 'User (sys)',
                                                   'color' => '108801',
                                                   'stacked' => true,
                                                   ),
                                             array(
                                                   'type' => 'AREA',
                                                   'source' => 'opensimgrid',
                                                   'ds' => 'user_cpu_user',
                                                   'cf' => 'AVERAGE',
                                                   'legend' => 'User (user)',
                                                   'color' => '19DC00',
                                                   'stacked' => true,
                                                   ),
                                             array(
                                                   'type' => 'AREA',
                                                   'source' => 'opensimgrid',
                                                   'ds' => 'inv_cpu_sys',
                                                   'cf' => 'AVERAGE',
                                                   'legend' => 'Inventory (sys)',
                                                   'color' => '9B0479',
                                                   'stacked' => true,
                                                   ),
                                             array(
                                                   'type' => 'AREA',
                                                   'source' => 'opensimgrid',
                                                   'ds' => 'inv_cpu_user',
                                                   'cf' => 'AVERAGE',
                                                   'legend' => 'Inventory (user)',
                                                   'color' => 'D100A2',
                                                   'stacked' => true,
                                                   ),
                                             array(
                                                   'type' => 'AREA',
                                                   'source' => 'opensimgrid',
                                                   'ds' => 'asset_cpu_sys',
                                                   'cf' => 'AVERAGE',
                                                   'legend' => 'Asset (sys)',
                                                   'color' => 'E36D14',
                                                   'stacked' => true,
                                                   ),
                                             array(
                                                   'type' => 'AREA',
                                                   'source' => 'opensimgrid',
                                                   'ds' => 'asset_cpu_user',
                                                   'cf' => 'AVERAGE',
                                                   'legend' => 'Asset (user)',
                                                   'color' => 'FF6D00',
                                                   'stacked' => true,
                                                   ),
                                             array(
                                                   'type' => 'AREA',
                                                   'source' => 'opensimgrid',
                                                   'ds' => 'msg_cpu_sys',
                                                   'cf' => 'AVERAGE',
                                                   'legend' => 'Msg (sys)',
                                                   'color' => '0C19A8',
                                                   'stacked' => true,
                                                   ),
                                             array(
                                                   'type' => 'AREA',
                                                   'source' => 'opensimgrid',
                                                   'ds' => 'msg_cpu_user',
                                                   'cf' => 'AVERAGE',
                                                   'legend' => 'Msg (user)',
                                                   'color' => '0013E3',
                                                   'stacked' => true,
                                                   ),
                                             )
                          );


$config['list'][] = array(
                          'title' => 'Grid Server Threads',
                          'lowerLimit' => 0,
                          'altAutoscaleMax' => true,
                          'content' => array(
                                             array(
                                                   'type' => 'AREA',
                                                   'source' => 'opensimgrid',
                                                   'ds' => 'grid_threads',
                                                   'cf' => 'AVERAGE',
                                                   'legend' => 'Grid',
                                                   'color' => 'FF0000',
                                                   ),
                                             array(
                                                   'type' => 'AREA',
                                                   'source' => 'opensimgrid',
                                                   'ds' => 'user_threads',
                                                   'cf' => 'AVERAGE',
                                                   'legend' => 'User',
                                                   'color' => '19DC00',
                                                   'stacked' => true,
                                                   ),
                                             array(
                                                   'type' => 'AREA',
                                                   'source' => 'opensimgrid',
                                                   'ds' => 'inv_threads',
                                                   'cf' => 'AVERAGE',
                                                   'legend' => 'Inventory',
                                                   'color' => 'D100A2',
                                                   'stacked' => true,
                                                   ),
                                             array(
                                                   'type' => 'AREA',
                                                   'source' => 'opensimgrid',
                                                   'ds' => 'asset_threads',
                                                   'cf' => 'AVERAGE',
                                                   'legend' => 'Asset',
                                                   'color' => 'FF6D00',
                                                   'stacked' => true,
                                                   ),
                                             array(
                                                   'type' => 'AREA',
                                                   'source' => 'opensimgrid',
                                                   'ds' => 'msg_threads',
                                                   'cf' => 'AVERAGE',
                                                   'legend' => 'Msg',
                                                   'color' => '0013E3',
                                                   'stacked' => true,
                                                   ),
                                             )
                          );

$config['list'][] = array(
                          'title' => 'Grid Server Virt Memory',
                          'lowerLimit' => 0,
                          'altAutoscaleMax' => true,
                          'content' => array(
                                             array(
                                                   'type' => 'AREA',
                                                   'source' => 'opensimgrid',
                                                   'ds' => 'grid_virt',
                                                   'cf' => 'AVERAGE',
                                                   'legend' => 'Grid',
                                                   'color' => 'FF0000',
                                                   ),
                                             array(
                                                   'type' => 'AREA',
                                                   'source' => 'opensimgrid',
                                                   'ds' => 'user_virt',
                                                   'cf' => 'AVERAGE',
                                                   'legend' => 'User',
                                                   'color' => '19DC00',
                                                   'stacked' => true,
                                                   ),
                                             array(
                                                   'type' => 'AREA',
                                                   'source' => 'opensimgrid',
                                                   'ds' => 'inv_virt',
                                                   'cf' => 'AVERAGE',
                                                   'legend' => 'Inventory',
                                                   'color' => 'D100A2',
                                                   'stacked' => true,
                                                   ),
                                             array(
                                                   'type' => 'AREA',
                                                   'source' => 'opensimgrid',
                                                   'ds' => 'asset_virt',
                                                   'cf' => 'AVERAGE',
                                                   'legend' => 'Asset',
                                                   'color' => 'FF6D00',
                                                   'stacked' => true,
                                                   ),
                                             array(
                                                   'type' => 'AREA',
                                                   'source' => 'opensimgrid',
                                                   'ds' => 'msg_virt',
                                                   'cf' => 'AVERAGE',
                                                   'legend' => 'Msg',
                                                   'color' => '0013E3',
                                                   'stacked' => true,
                                                   ),
                                             )
                          );

$config['list'][] = array(
                          'title' => 'Grid Server Real Memory',
                          'lowerLimit' => 0,
                          'altAutoscaleMax' => true,
                          'content' => array(
                                             array(
                                                   'type' => 'AREA',
                                                   'source' => 'opensimgrid',
                                                   'ds' => 'grid_real',
                                                   'cf' => 'AVERAGE',
                                                   'legend' => 'Grid',
                                                   'color' => 'FF0000',
                                                   ),
                                             array(
                                                   'type' => 'AREA',
                                                   'source' => 'opensimgrid',
                                                   'ds' => 'user_real',
                                                   'cf' => 'AVERAGE',
                                                   'legend' => 'User',
                                                   'color' => '19DC00',
                                                   'stacked' => true,
                                                   ),
                                             array(
                                                   'type' => 'AREA',
                                                   'source' => 'opensimgrid',
                                                   'ds' => 'inv_real',
                                                   'cf' => 'AVERAGE',
                                                   'legend' => 'Inventory',
                                                   'color' => 'D100A2',
                                                   'stacked' => true,
                                                   ),
                                             array(
                                                   'type' => 'AREA',
                                                   'source' => 'opensimgrid',
                                                   'ds' => 'asset_real',
                                                   'cf' => 'AVERAGE',
                                                   'legend' => 'Asset',
                                                   'color' => 'FF6D00',
                                                   'stacked' => true,
                                                   ),
                                             array(
                                                   'type' => 'AREA',
                                                   'source' => 'opensimgrid',
                                                   'ds' => 'msg_real',
                                                   'cf' => 'AVERAGE',
                                                   'legend' => 'Msg',
                                                   'color' => '0013E3',
                                                   'stacked' => true,
                                                   ),
                                             )
                          );
$config['list'][] = array(
        'title' => 'OpenSim CPU',
        'lowerLimit' => 0,
        'altAutoscaleMax' => true,
        'content' => array(
                array(
                        'type' => 'AREA',
                        'source' => 'opensim',
                        'ds' => 'opensim_cpu_sys',
                        'cf' => 'AVERAGE',
                        'legend' => 'OpenSim Sys CPU%',
                        'color' => 'FF0000',
                ),
                array(
                        'type' => 'AREA',
                        'source' => 'opensim',
                        'ds' => 'opensim_cpu_user',
                        'cf' => 'AVERAGE',
                        'legend' => 'OpenSim User CPU%',
                        'color' => '00FF00',
                        'stacked' => true,
                ),
        )
);

$config['list'][] = array(
	'title' => 'OpenSim Threads',
	'lowerLimit' => 0,
	'altAutoscaleMax' => true,
	'content' => array(
		array(
		        'type' => 'AREA',
                        'source' => 'opensim',
                        'ds' => 'opensim_threads',
                        'cf' => 'AVERAGE',
                        'legend' => 'number of opensim threads',
                        'color' => '0000BB',
		),
        )
);

$config['list'][] = array(
	'title' => 'OpenSim Memory',
        'lowerLimit' => 0,
        'altAutoscaleMax' => true,
	'content' => array(
		array(
			'type' => 'AREA',
                        'source' => 'opensim',
                        'ds' => 'opensim_virt',
                        'cf' => 'AVERAGE',
                        'legend' => 'OpenSim Memory (Virt)',
                        'color' => '00BB00'
                ),
		array(
                        'type' => 'AREA',
                        'source' => 'opensim',
                        'ds' => 'opensim_real',
                        'cf' => 'AVERAGE',
                        'legend' => 'OpenSim Memory (Real)',
                        'color' => 'BB0000'
                ),
        )
);

// Add own graphs (examples, like those used in the simple-config)
/*
$config['list'][] = array(
	'title' => 'Users logged in',
	'lowerLimit' => 0,
	'altAutoscaleMax' => true,
	'content' => array(
		array(
			'type' => 'AREA',
			'source' => 'users',
			'ds' => 'users',
			'cf' => 'AVERAGE',
			'legend' => 'users logged in',
			'color' => '4444DD'
		)
	)
);
$config['list'][] = array(
	'title' => 'Load',
	'lowerLimit' => 0,
	'altAutoscaleMax' => true,
	'content' => array(
		array(
			'type' => 'COMMENT',
			'text' => 'average number of tasks in the queue\:\n'
		),
		array(
			'type' => 'LINE',
			'source' => 'load',
			'ds' => '1min',
			'cf' => 'AVERAGE',
			'legend' => '1 minute',
			'width' => 1,
			'color' => 'FFDD00'
		),
		array(
			'type' => 'GPRINT',
			'name' => 'load_1min',
			'cf' => 'LAST',
			'format' => '  cur\: %01.2lf'
		),
		array(
			'type' => 'GPRINT',
			'name' => 'load_1min',
			'cf' => 'MAXIMUM',
			'format' => 'max\: %01.2lf'
		),
		array(
			'type' => 'GPRINT',
			'name' => 'load_1min',
			'cf' => 'MINIMUM',
			'format' => 'min\: %01.2lf'
		),
		array(
			'type' => 'GPRINT',
			'name' => 'load_1min',
			'cf' => 'AVERAGE',
			'format' => 'avg\: %01.2lf\n'
		),
		array(
			'type' => 'LINE',
			'source' => 'load',
			'ds' => '5min',
			'cf' => 'AVERAGE',
			'legend' => '5 minutes',
			'width' => 1,
			'color' => 'FF8800'
		),
		array(
			'type' => 'GPRINT',
			'name' => 'load_5min',
			'cf' => 'LAST',
			'format' => ' cur\: %01.2lf'
		),
		array(
			'type' => 'GPRINT',
			'name' => 'load_5min',
			'cf' => 'MAXIMUM',
			'format' => 'max\: %01.2lf'
		),
		array(
			'type' => 'GPRINT',
			'name' => 'load_5min',
			'cf' => 'MINIMUM',
			'format' => 'min\: %01.2lf'
		),
		array(
			'type' => 'GPRINT',
			'name' => 'load_5min',
			'cf' => 'AVERAGE',
			'format' => 'avg\: %01.2lf\n'
		),
		array(
			'type' => 'LINE',
			'source' => 'load',
			'ds' => '15min',
			'cf' => 'AVERAGE',
			'legend' => '15 minutes',
			'width' => 1,
			'color' => 'FF0000'
		),
		array(
			'type' => 'GPRINT',
			'name' => 'load_15min',
			'cf' => 'LAST',
			'format' => 'cur\: %01.2lf'
		),
		array(
			'type' => 'GPRINT',
			'name' => 'load_15min',
			'cf' => 'MAXIMUM',
			'format' => 'max\: %01.2lf'
		),
		array(
			'type' => 'GPRINT',
			'name' => 'load_15min',
			'cf' => 'MINIMUM',
			'format' => 'min\: %01.2lf'
		),
		array(
			'type' => 'GPRINT',
			'name' => 'load_15min',
			'cf' => 'AVERAGE',
			'format' => 'avg\: %01.2lf\n'
		)
	)
);
$config['list'][] = array(
	'title' => 'Memory',
	'lowerLimit' => 0,
	'altAutoscaleMax' => true,
	'content' => array(
		array(
			'type' => 'DEF',
			'source' => 'mem',
			'ds' => 'MemTotal',
			'cf' => 'AVERAGE',
			'name' => 'total'
		),
		array(
			'type' => 'CDEF',
			'expression' => 'total,1024,/,1024,/',
			'name' => 'total_mb'
		),
		array(
			'type' => 'DEF',
			'source' => 'mem',
			'ds' => 'MemFree',
			'cf' => 'AVERAGE',
			'name' => 'free'
		),
		array(
			'type' => 'CDEF',
			'expression' => 'free,1024,/,1024,/',
			'name' => 'free_mb'
		),
		array(
			'type' => 'DEF',
			'source' => 'mem',
			'ds' => 'Cached',
			'cf' => 'AVERAGE',
			'name' => 'cached'
		),
		array(
			'type' => 'CDEF',
			'expression' => 'cached,1024,/,1024,/',
			'name' => 'cached_mb'
		),
		array(
			'type' => 'AREA',
			'name' => 'total',
			'legend' => 'total',
			'color' => 'FFFFCC'
		),
		array(
			'type' => 'GPRINT',
			'name' => 'total_mb',
			'cf' => 'LAST',
			'format' => ' cur\: %01.2lf MB\n'
		),
		array(
			'type' => 'AREA',
			'name' => 'free',
			'legend' => 'free',
			'color' => 'FF0000'
		),
		array(
			'type' => 'GPRINT',
			'name' => 'free_mb',
			'cf' => 'LAST',
			'format' => '   cur\: %01.2lf MB'
		),
		array(
			'type' => 'GPRINT',
			'name' => 'free_mb',
			'cf' => 'MINIMUM',
			'format' => 'min\: %01.2lf MB'
		),
		array(
			'type' => 'GPRINT',
			'name' => 'free_mb',
			'cf' => 'MAXIMUM',
			'format' => 'max\: %01.2lf MB'
		),
		array(
			'type' => 'GPRINT',
			'name' => 'free_mb',
			'cf' => 'AVERAGE',
			'format' => 'avg\: %01.2lf MB\n'
		),
		array(
			'type' => 'STACK',
			'name' => 'cached',
			'legend' => 'cached',
			'color' => 'EEDD22'
		),
		array(
			'type' => 'GPRINT',
			'name' => 'cached_mb',
			'cf' => 'LAST',
			'format' => 'cur\: %01.2lf MB'
		),
		array(
			'type' => 'GPRINT',
			'name' => 'cached_mb',
			'cf' => 'MINIMUM',
			'format' => 'min\: %01.2lf MB'
		),
		array(
			'type' => 'GPRINT',
			'name' => 'cached_mb',
			'cf' => 'MAXIMUM',
			'format' => 'max\: %01.2lf MB'
		),
		array(
			'type' => 'GPRINT',
			'name' => 'cached_mb',
			'cf' => 'AVERAGE',
			'format' => 'avg\: %01.2lf MB'
		),
		array(
			'type' => 'LINE',
			'width' => 1,
			'name' => 'total',
			'color' => '000000'
		)
	)
);
$config['list'][] = array(
	'title' => 'Swap',
	'lowerLimit' => 0,
	'altAutoscaleMax' => true,
	'content' => array(
		array(
			'type' => 'DEF',
			'source' => 'mem',
			'ds' => 'SwapTotal',
			'cf' => 'AVERAGE',
			'name' => 'total'
		),
		array(
			'type' => 'CDEF',
			'expression' => 'total,1024,/,1024,/',
			'name' => 'total_mb'
		),
		array(
			'type' => 'DEF',
			'source' => 'mem',
			'ds' => 'SwapFree',
			'cf' => 'AVERAGE',
			'name' => 'free'
		),
		array(
			'type' => 'CDEF',
			'expression' => 'free,1024,/,1024,/',
			'name' => 'free_mb'
		),
		array(
			'type' => 'DEF',
			'source' => 'mem',
			'ds' => 'SwapCached',
			'cf' => 'AVERAGE',
			'name' => 'cached'
		),
		array(
			'type' => 'CDEF',
			'expression' => 'cached,1024,/,1024,/',
			'name' => 'cached_mb'
		),
		array(
			'type' => 'AREA',
			'name' => 'total',
			'legend' => 'total',
			'color' => 'FFFFCC'
		),
		array(
			'type' => 'GPRINT',
			'name' => 'total_mb',
			'cf' => 'LAST',
			'format' => ' cur\: %01.2lf MB\n'
		),
		array(
			'type' => 'AREA',
			'name' => 'free',
			'legend' => 'free',
			'color' => 'FF0000'
		),
		array(
			'type' => 'GPRINT',
			'name' => 'free_mb',
			'cf' => 'LAST',
			'format' => '   cur\: %01.2lf MB'
		),
		array(
			'type' => 'GPRINT',
			'name' => 'free_mb',
			'cf' => 'MINIMUM',
			'format' => 'min\: %01.2lf MB'
		),
		array(
			'type' => 'GPRINT',
			'name' => 'free_mb',
			'cf' => 'MAXIMUM',
			'format' => 'max\: %01.2lf MB'
		),
		array(
			'type' => 'GPRINT',
			'name' => 'free_mb',
			'cf' => 'AVERAGE',
			'format' => 'avg\: %01.2lf MB\n'
		),
		array(
			'type' => 'STACK',
			'name' => 'cached',
			'legend' => 'cached',
			'color' => 'EEDD22'
		),
		array(
			'type' => 'GPRINT',
			'name' => 'cached_mb',
			'cf' => 'LAST',
			'format' => 'cur\: %01.2lf MB'
		),
		array(
			'type' => 'GPRINT',
			'name' => 'cached_mb',
			'cf' => 'MINIMUM',
			'format' => 'min\: %01.2lf MB'
		),
		array(
			'type' => 'GPRINT',
			'name' => 'cached_mb',
			'cf' => 'MAXIMUM',
			'format' => 'max\: %01.2lf MB'
		),
		array(
			'type' => 'GPRINT',
			'name' => 'cached_mb',
			'cf' => 'AVERAGE',
			'format' => 'avg\: %01.2lf MB'
		),
		array(
			'type' => 'LINE',
			'width' => 1,
			'name' => 'total',
			'color' => '000000'
		)
	)
);
$config['list'][] = array(
	'title' => 'CPU usage',
	'upperLimit' => 100,
	'lowerLimit' => 0,
	'altAutoscaleMax' => true,
	'content' => array(
		array(
			'type' => 'AREA',
			'source' => 'cpu',
			'ds' => 'cpu_system',
			'cf' => 'AVERAGE',
			'legend' => 'System',
			'color' => 'FF0000'
		),
		array(
			'type' => 'AREA',
			'source' => 'cpu',
			'ds' => 'cpu_user',
			'cf' => 'AVERAGE',
			'legend' => 'User',
			'color' => '00FF00',
			'stacked' => true
		),
		array(
			'type' => 'AREA',
			'source' => 'cpu',
			'ds' => 'cpu_nice',
			'cf' => 'AVERAGE',
			'legend' => 'Nice',
			'color' => '0000FF',
			'stacked' => true
		),
		array(
			'type' => 'AREA',
			'source' => 'cpu',
			'ds' => 'cpu_idle',
			'cf' => 'AVERAGE',
			'legend' => 'Idle',
			'color' => 'FFFF00',
			'stacked' => true
		)
	)
);
$config['list'][] = array(
	'title' => 'Processes',
	'lowerLimit' => 0,
	'altAutoscaleMax' => true,
	'content' => array(
		array(
			'type' => 'AREA',
			'source' => 'load',
			'ds' => 'tasks',
			'cf' => 'AVERAGE',
			'legend' => 'number of processes',
			'color' => 'FFDD00'
		),
		array(
			'type' => 'AREA',
			'source' => 'load',
			'ds' => 'running',
			'cf' => 'AVERAGE',
			'legend' => 'running processes',
			'color' => 'FF0000'
		)
	)
);
$config['list'][] = array(
	'title' => 'Traffic (eth0)',
	'lowerLimit' => 0,
	'altAutoscaleMax' => true,
	'content' => array(
		array(
			'type' => 'LINE',
			'source' => 'traffic_proc',
			'ds' => 'eth0_rbytes',
			'cf' => 'AVERAGE',
			'legend' => 'Download Bytes/s',
			'width' => 1,
			'color' => '0002A3'
		),
		array(
			'type' => 'LINE',
			'source' => 'traffic_proc',
			'ds' => 'eth0_tbytes',
			'cf' => 'AVERAGE',
			'legend' => 'Upload Bytes/s',
			'width' => 1,
			'color' => '00A302'
		)
	)
);
*/

// Define what Graphes we want in the detail view (detail.php)
$config['types'] = array(
//	array('title' => 'Hour', 'period' => 3600), // only useful if you have a small step
	array('title' => 'Day', 'period' => 86400),
	array('title' => 'Week', 'period' => 604800),
	array('title' => 'Month', 'period' => 2678400),
	array('title' => 'Year', 'period' => 31536000)
);
// The period uses in the graph overview (index.php)
$config['defaultperiod'] = 86400;

?>