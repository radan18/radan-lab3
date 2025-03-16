<?php
namespace App\Http\Controllers;
use App\Models\Contribution_deduction;
use App\Models\Employee;
use Illuminate\Support\Facades\DB; 

use Illuminate\Http\Request;
use function Laravel\Prompts\select;

class TransactionController extends Controller
{
    public function getEmployee()
    {
        $easy = DB::select('SELECT  employees.*, a.check_in_time AS a_in, ca.amount AS ca_amount, p.start_date AS p.sdate,  cd.contribution_amount AS cd_ca, ps.end_date AS ps_ed 
        INNER JOIN attendance AS a ON a.employee_id = employees.id
        INNER JOIN cash_advance AS ca ON ca.employee_id = employees.id
        INNER JOIN contribution_deduction AS cd ON cd.employee_id = employees.id
        INNER JOIN payroll AS p ON p.id = contribution_deduction.payroll_id  
        INNER JOIN payslip AS ps ON ps.employee_id = employees.id'); 
 
        return response()->json(['success' => true, 'easy' => $easy], 200);
    }

    public function getEmployeeData()
    {
        $moderate = DB::table('employees as emp')
        ->select('emp.*', 'a.check_in_time'  , 'ca.amount'  , 'p.start_date'  ,  'cd.contribution_amount'  , 'ps.end_date')
        ->join('attendance as a', 'a.employee_id', 'emp.id')
        ->join('cash_advance as ca', 'ca.employee_id', 'emp.id')
        ->join('contribution_deduction as cd', 'cd.employee_id', 'emp.id')
        ->join('payroll as p', 'p.id',' contribution_deduction.payroll_id')
        ->join('payslip as ps', 'ps.employee_id', 'emp.id')
        ->get();

        return response()->json(['success' => true, 'moderate' => $moderate], 200);
        
    }

    public function getEmployeeChallenging()
    {
        $challenging = Employee::with('employees','cash_advance', 'attendance', 'payroll.contribution_deduction', 'payslip');
 
        return response()->json(['success' => true, 'challenging' => $challenging], 200);
    }
    public function getEmployeeDifficult()
    {
        $difficult = Employee::with(['attendance' => function($q){
            $q->select('*');
        }])->with(['cash_advance' => function($q){ 
            $q->select('*');
        }])->with(['payroll' => function($q){ 
            $q->select('*');
        }])->with(['contribution_deduction' => function($q){ 
            $q->select('*');
        }])->with(['payslip' => function($q){ 
            $q->select('*');
        }])->get();
        return response()->json(['success' => true, 'difficult' => $difficult], 200);
        
    }


}
