                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">  
                                    <!-- START DATATABLE EXPORT -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">DataTable Export</h3>
                                            <div class="btn-group pull-right">
                                                <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#" onClick ="$('#customers2').tableExport({type:'xml',escape:'false'});"><img src='<?php echo base_url();?>assets/img/icons/xml.png' width="24"/> XML</a></li>
                                                    <li><a href="#" onClick ="$('#customers2').tableExport({type:'sql'});"><img src='<?php echo base_url();?>assets/img/icons/sql.png' width="24"/> SQL</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#" onClick ="$('#customers2').tableExport({type:'csv',escape:'false'});"><img src='<?php echo base_url();?>assets/img/icons/csv.png' width="24"/> CSV</a></li>
                                                    <li><a href="#" onClick ="$('#customers2').tableExport({type:'txt',escape:'false'});"><img src='<?php echo base_url();?>assets/img/icons/txt.png' width="24"/> TXT</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#" onClick ="$('#customers2').tableExport({type:'excel',escape:'false'});"><img src='<?php echo base_url();?>assets/img/icons/xls.png' width="24"/> XLS</a></li>
                                                    <li><a href="#" onClick ="$('#customers2').tableExport({type:'doc',escape:'false'});"><img src='<?php echo base_url();?>assets/img/icons/word.png' width="24"/> Word</a></li>
                                                    <li><a href="#" onClick ="$('#customers2').tableExport({type:'pdf',escape:'false'});"><img src='<?php echo base_url();?>assets/img/icons/pdf.png' width="24"/> PDF</a></li>
                                                </ul>
                                            </div>                                    
                                            
                                        </div>
                                        <div class="panel-body">
                                            <table id="customers2" class="table datatable">
                                                <thead>
                                                    <tr>
                                                        <th><?php echo lang('index_fname_th');?></th>
                                                        <!--<th><?php echo lang('index_lname_th');?></th>-->
                                                        <th><?php echo lang('index_nip_th');?></th> <!--Tambahanku-->
                                                        <!--<th><?php echo lang('index_email_th');?></th>-->
                                                        <th><?php echo lang('index_company_th');?></th>
                                                        <th><?php echo lang('index_groups_th');?></th>
                                                        <th><?php echo lang('index_status_th');?></th>
                                                        <th><?php echo lang('index_action_th');?></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php foreach ($users as $user):?>
                                                    <tr>
                                                        <!--<td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
                                                        <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>-->
                                                        <!--Tambahanku-->
                                                        <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8').' '.htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
                                                        <td><?php echo htmlspecialchars($user->nip,ENT_QUOTES,'UTF-8');?></td>
                                                        <!--Batas Tambahanku-->
                                                        <!--<td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>-->
                                                        <td><?php echo htmlspecialchars($user->company,ENT_QUOTES,'UTF-8');?></td>
                                                        <td>
                                                            <?php foreach ($user->groups as $group):?>
                                                                [ <?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?> ] 
                                                            <?php endforeach?>
                                                        </td>
                                                        <td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
                                                        <td><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>
                                                    </tr>
                                                <?php endforeach;?>
                                                </tbody>
                                            </table>                                    
                                            
                                        </div>
                                    </div>
                                    <!-- END DATATABLE EXPORT -->  
                                </div>
                            </div>
                        </div>
                    </div>                                               