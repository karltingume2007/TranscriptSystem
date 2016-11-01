<?php



class global_json_repo extends MY_Controller
{    
    public function get_all_academic_years($addEmpty = null)
    {
       $years = new Academic_year();
       
       $all_academic_years = array();
       
       if($addEmpty != null)
       {
           $all_academic_years[0]['year_value'] = 0;
           $all_academic_years[0]['year_name'] = 'All Academic Years';
       }
       
       foreach($years->load_all_academic_years() as $y)
       {
           $all_academic_years[$y]['year_value'] = $y;
           $all_academic_years[$y]['year_name'] = $y;
       }
       
       echo json_encode($all_academic_years);
    }
    
    public function get_all_Programs()
    {
        $prog = new detailed_school_program();
        $programs = $prog->get_all_school_programs_ordered();
        echo json_encode($programs);
    }
    
    public function get_all_levels()
    {
        $level = new level();
        echo json_encode($level->get());
    }
    
//    public function get_all_months()
//    {
//        $months = array();
//        
//        for($i = 1; $i <= 12; $i++)
//        {
//            
//            $months[$i]['index'] = $i;
//            switch ($i)
//            {
//                case 1:
//                    $months[$i]['month'] = 'January';
//                    break;
//                case 2:
//                    $months[$i]['month'] = 'February';
//                    break;
//                case 3:
//                    $months[$i]['month'] = 'March';
//                    break;
//                case 4:
//                    $months[$i]['month'] = 'April';
//                    break;
//                case 5:
//                    $months[$i]['month'] = 'May';
//                    break;
//                case 6:
//                    $months[$i]['month'] = 'June';
//                    break;
//                case 7:
//                    $months[$i]['month'] = 'July';
//                    break;
//                case 8:
//                    $months[$i]['month'] = 'August';
//                    break;
//                case 9:
//                    $months[$i]['month'] = 'September';
//                    break;
//                case 10:
//                    $months[$i]['month'] = 'October';
//                    break;
//                case 11:
//                    $months[$i]['month'] = 'November';
//                    break;
//                case 12:
//                    $months[$i]['month'] = 'December';
//                    break;
//            }
//        }
//        echo json_encode($months);
//    }
}