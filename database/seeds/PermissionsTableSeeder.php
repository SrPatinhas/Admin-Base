<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => '1',
                'title' => 'user_management_access',
            ],
            [
                'id'    => '2',
                'title' => 'permission_create',
            ],
            [
                'id'    => '3',
                'title' => 'permission_edit',
            ],
            [
                'id'    => '4',
                'title' => 'permission_show',
            ],
            [
                'id'    => '5',
                'title' => 'permission_delete',
            ],
            [
                'id'    => '6',
                'title' => 'permission_access',
            ],
            [
                'id'    => '7',
                'title' => 'role_create',
            ],
            [
                'id'    => '8',
                'title' => 'role_edit',
            ],
            [
                'id'    => '9',
                'title' => 'role_show',
            ],
            [
                'id'    => '10',
                'title' => 'role_delete',
            ],
            [
                'id'    => '11',
                'title' => 'role_access',
            ],
            [
                'id'    => '12',
                'title' => 'user_create',
            ],
            [
                'id'    => '13',
                'title' => 'user_edit',
            ],
            [
                'id'    => '14',
                'title' => 'user_show',
            ],
            [
                'id'    => '15',
                'title' => 'user_delete',
            ],
            [
                'id'    => '16',
                'title' => 'user_access',
            ],
            [
                'id'    => '17',
                'title' => 'user_alert_create',
            ],
            [
                'id'    => '18',
                'title' => 'user_alert_show',
            ],
            [
                'id'    => '19',
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => '20',
                'title' => 'user_alert_access',
            ],
            [
                'id'    => '21',
                'title' => 'client_management_setting_access',
            ],
            [
                'id'    => '22',
                'title' => 'currency_create',
            ],
            [
                'id'    => '23',
                'title' => 'currency_edit',
            ],
            [
                'id'    => '24',
                'title' => 'currency_show',
            ],
            [
                'id'    => '25',
                'title' => 'currency_delete',
            ],
            [
                'id'    => '26',
                'title' => 'currency_access',
            ],
            [
                'id'    => '27',
                'title' => 'transaction_type_create',
            ],
            [
                'id'    => '28',
                'title' => 'transaction_type_edit',
            ],
            [
                'id'    => '29',
                'title' => 'transaction_type_show',
            ],
            [
                'id'    => '30',
                'title' => 'transaction_type_delete',
            ],
            [
                'id'    => '31',
                'title' => 'transaction_type_access',
            ],
            [
                'id'    => '32',
                'title' => 'income_source_create',
            ],
            [
                'id'    => '33',
                'title' => 'income_source_edit',
            ],
            [
                'id'    => '34',
                'title' => 'income_source_show',
            ],
            [
                'id'    => '35',
                'title' => 'income_source_delete',
            ],
            [
                'id'    => '36',
                'title' => 'income_source_access',
            ],
            [
                'id'    => '37',
                'title' => 'client_status_create',
            ],
            [
                'id'    => '38',
                'title' => 'client_status_edit',
            ],
            [
                'id'    => '39',
                'title' => 'client_status_show',
            ],
            [
                'id'    => '40',
                'title' => 'client_status_delete',
            ],
            [
                'id'    => '41',
                'title' => 'client_status_access',
            ],
            [
                'id'    => '42',
                'title' => 'project_status_create',
            ],
            [
                'id'    => '43',
                'title' => 'project_status_edit',
            ],
            [
                'id'    => '44',
                'title' => 'project_status_show',
            ],
            [
                'id'    => '45',
                'title' => 'project_status_delete',
            ],
            [
                'id'    => '46',
                'title' => 'project_status_access',
            ],
            [
                'id'    => '47',
                'title' => 'client_management_access',
            ],
            [
                'id'    => '48',
                'title' => 'client_create',
            ],
            [
                'id'    => '49',
                'title' => 'client_edit',
            ],
            [
                'id'    => '50',
                'title' => 'client_show',
            ],
            [
                'id'    => '51',
                'title' => 'client_delete',
            ],
            [
                'id'    => '52',
                'title' => 'client_access',
            ],
            [
                'id'    => '53',
                'title' => 'project_create',
            ],
            [
                'id'    => '54',
                'title' => 'project_edit',
            ],
            [
                'id'    => '55',
                'title' => 'project_show',
            ],
            [
                'id'    => '56',
                'title' => 'project_delete',
            ],
            [
                'id'    => '57',
                'title' => 'project_access',
            ],
            [
                'id'    => '58',
                'title' => 'note_create',
            ],
            [
                'id'    => '59',
                'title' => 'note_edit',
            ],
            [
                'id'    => '60',
                'title' => 'note_show',
            ],
            [
                'id'    => '61',
                'title' => 'note_delete',
            ],
            [
                'id'    => '62',
                'title' => 'note_access',
            ],
            [
                'id'    => '63',
                'title' => 'document_create',
            ],
            [
                'id'    => '64',
                'title' => 'document_edit',
            ],
            [
                'id'    => '65',
                'title' => 'document_show',
            ],
            [
                'id'    => '66',
                'title' => 'document_delete',
            ],
            [
                'id'    => '67',
                'title' => 'document_access',
            ],
            [
                'id'    => '68',
                'title' => 'transaction_create',
            ],
            [
                'id'    => '69',
                'title' => 'transaction_edit',
            ],
            [
                'id'    => '70',
                'title' => 'transaction_show',
            ],
            [
                'id'    => '71',
                'title' => 'transaction_delete',
            ],
            [
                'id'    => '72',
                'title' => 'transaction_access',
            ],
            [
                'id'    => '73',
                'title' => 'client_report_create',
            ],
            [
                'id'    => '74',
                'title' => 'client_report_edit',
            ],
            [
                'id'    => '75',
                'title' => 'client_report_show',
            ],
            [
                'id'    => '76',
                'title' => 'client_report_delete',
            ],
            [
                'id'    => '77',
                'title' => 'client_report_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
