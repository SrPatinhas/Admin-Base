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
                'title' => 'expense_management_access',
            ],
            [
                'id'    => '18',
                'title' => 'expense_category_create',
            ],
            [
                'id'    => '19',
                'title' => 'expense_category_edit',
            ],
            [
                'id'    => '20',
                'title' => 'expense_category_show',
            ],
            [
                'id'    => '21',
                'title' => 'expense_category_delete',
            ],
            [
                'id'    => '22',
                'title' => 'expense_category_access',
            ],
            [
                'id'    => '23',
                'title' => 'income_category_create',
            ],
            [
                'id'    => '24',
                'title' => 'income_category_edit',
            ],
            [
                'id'    => '25',
                'title' => 'income_category_show',
            ],
            [
                'id'    => '26',
                'title' => 'income_category_delete',
            ],
            [
                'id'    => '27',
                'title' => 'income_category_access',
            ],
            [
                'id'    => '28',
                'title' => 'expense_create',
            ],
            [
                'id'    => '29',
                'title' => 'expense_edit',
            ],
            [
                'id'    => '30',
                'title' => 'expense_show',
            ],
            [
                'id'    => '31',
                'title' => 'expense_delete',
            ],
            [
                'id'    => '32',
                'title' => 'expense_access',
            ],
            [
                'id'    => '33',
                'title' => 'income_create',
            ],
            [
                'id'    => '34',
                'title' => 'income_edit',
            ],
            [
                'id'    => '35',
                'title' => 'income_show',
            ],
            [
                'id'    => '36',
                'title' => 'income_delete',
            ],
            [
                'id'    => '37',
                'title' => 'income_access',
            ],
            [
                'id'    => '38',
                'title' => 'expense_report_create',
            ],
            [
                'id'    => '39',
                'title' => 'expense_report_edit',
            ],
            [
                'id'    => '40',
                'title' => 'expense_report_show',
            ],
            [
                'id'    => '41',
                'title' => 'expense_report_delete',
            ],
            [
                'id'    => '42',
                'title' => 'expense_report_access',
            ],
            [
                'id'    => '43',
                'title' => 'contact_management_access',
            ],
            [
                'id'    => '44',
                'title' => 'contact_company_create',
            ],
            [
                'id'    => '45',
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => '46',
                'title' => 'contact_company_show',
            ],
            [
                'id'    => '47',
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => '48',
                'title' => 'contact_company_access',
            ],
            [
                'id'    => '49',
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => '50',
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => '51',
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => '52',
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => '53',
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => '54',
                'title' => 'faq_management_access',
            ],
            [
                'id'    => '55',
                'title' => 'faq_category_create',
            ],
            [
                'id'    => '56',
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => '57',
                'title' => 'faq_category_show',
            ],
            [
                'id'    => '58',
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => '59',
                'title' => 'faq_category_access',
            ],
            [
                'id'    => '60',
                'title' => 'faq_question_create',
            ],
            [
                'id'    => '61',
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => '62',
                'title' => 'faq_question_show',
            ],
            [
                'id'    => '63',
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => '64',
                'title' => 'faq_question_access',
            ],
            [
                'id'    => '65',
                'title' => 'time_management_access',
            ],
            [
                'id'    => '66',
                'title' => 'time_work_type_create',
            ],
            [
                'id'    => '67',
                'title' => 'time_work_type_edit',
            ],
            [
                'id'    => '68',
                'title' => 'time_work_type_show',
            ],
            [
                'id'    => '69',
                'title' => 'time_work_type_delete',
            ],
            [
                'id'    => '70',
                'title' => 'time_work_type_access',
            ],
            [
                'id'    => '71',
                'title' => 'time_project_create',
            ],
            [
                'id'    => '72',
                'title' => 'time_project_edit',
            ],
            [
                'id'    => '73',
                'title' => 'time_project_show',
            ],
            [
                'id'    => '74',
                'title' => 'time_project_delete',
            ],
            [
                'id'    => '75',
                'title' => 'time_project_access',
            ],
            [
                'id'    => '76',
                'title' => 'time_entry_create',
            ],
            [
                'id'    => '77',
                'title' => 'time_entry_edit',
            ],
            [
                'id'    => '78',
                'title' => 'time_entry_show',
            ],
            [
                'id'    => '79',
                'title' => 'time_entry_delete',
            ],
            [
                'id'    => '80',
                'title' => 'time_entry_access',
            ],
            [
                'id'    => '81',
                'title' => 'time_report_create',
            ],
            [
                'id'    => '82',
                'title' => 'time_report_edit',
            ],
            [
                'id'    => '83',
                'title' => 'time_report_show',
            ],
            [
                'id'    => '84',
                'title' => 'time_report_delete',
            ],
            [
                'id'    => '85',
                'title' => 'time_report_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
