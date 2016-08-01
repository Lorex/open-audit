<?php
#  Copyright 2003-2015 Opmantek Limited (www.opmantek.com)
#
#  ALL CODE MODIFICATIONS MUST BE SENT TO CODE@OPMANTEK.COM
#
#  This file is part of Open-AudIT.
#
#  Open-AudIT is free software: you can redistribute it and/or modify
#  it under the terms of the GNU Affero General Public License as published
#  by the Free Software Foundation, either version 3 of the License, or
#  (at your option) any later version.
#
#  Open-AudIT is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU Affero General Public License for more details.
#
#  You should have received a copy of the GNU Affero General Public License
#  along with Open-AudIT (most likely in a file named LICENSE).
#  If not, see <http://www.gnu.org/licenses/>
#
#  For further information on Open-AudIT or for a license other than AGPL please see
#  www.opmantek.com or email contact@opmantek.com
#
# *****************************************************************************

/**
 * @author Mark Unwin <marku@opmantek.com>
 *
 * @version 1.12.8
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="text-left">Custom Fields</span>
            <span class="pull-right">Count: <?php echo count($this->response->data); ?></span>
        </h3>
    </div>
    <div class="panel-body">
        <?php include('include_collection_panel_header.php'); ?>
        <?php if (!empty($this->response->data)) { ?>
            <table class="table">
                <thead>
                    <tr>
                        <th style='text-align:center;'><?php echo __('ID')?></th>
                        <th><?php echo __('Name')?></th>
                        <th><?php echo __('Type')?></th>
                        <th><?php echo __('Placement')?></th>
                        <th><?php echo __('Group Name')?></th>
                        <th style='text-align:center;'><?php echo __('Edit')?></th>
                        <th style='text-align:center;'><?php echo __('Delete')?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($this->response->data as $item): ?>
                    <tr>
                        <td style='text-align:center;'><a class="btn btn-sm btn-success" href="fields/<?php echo htmlentities($item->id); ?>"><?php echo htmlentities($item->id); ?></a></td>
                        <td><?php echo htmlentities($item->attributes->name)?></td>
                        <td><?php echo htmlentities($item->attributes->type)?></td>
                        <td><?php echo htmlentities($item->attributes->placement)?></td>
                        <td><?php echo htmlentities($item->attributes->group_name)?></td>
                        <td style='text-align:center;'><a class="btn btn-sm btn-info" href="fields/<?php echo intval($item->id); ?>?action=update"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
                        <td style='text-align:center;'><button type="button" class="btn btn-sm btn-danger" aria-label="Left Align" ><span class="glyphicon glyphicon-trash delete_link" data-id="<?php echo intval($item->id); ?>" data-name="<?php echo htmlentities($item->attributes->name); ?>" aria-hidden="true"></span></button></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php } ?>
    </div>
</div>