<?php
/**
 * Created by PhpStorm.
 * User: guoyexuan
 * Date: 2018/11/25
 * Time: 1:02 PM
 */

/**
 * Class Timer 用法
 *
 *   Timer::_init();
 *   Timer::add(5,array('tests','test_print'),array(1,2,3,4,5));
 *
 *   while(true)
 *   {
 *       pcntl_signal_dispatch();
 *   }
 *
 */
class Timer
{
    protected static $_Tasks = array();

    public static function _init()
    {
        pcntl_alarm(1);
        pcntl_signal(SIGALRM,array('Timer','signalHandle'));
    }

    public static function signalHandle()
    {
        pcntl_alarm(1);
        self::task();
    }

    public static function add($time_long,$func,$args = array(),$persistent = true)
    {
        if($time_long <= 0)
        {
            return false;
        }

        if(!is_callable($func))
        {
            return false;
        }

        $now_time = time();
        $run_time = $now_time + $time_long;

        if(!isset(self::$_Tasks[$run_time]))
        {
            self::$_Tasks[$run_time] = array();
        }
        self::$_Tasks[$run_time][] = array($func,$args,$persistent,$time_long);

        //print_R(self::$_Tasks);
    }

    public static function task()
    {
        $now_time = time();

        foreach (self::$_Tasks as $run_time => $task_data)
        {
            if($now_time >= $run_time)
            {
                foreach ($task_data as $index=>$one_task)
                {
                    $task_func = $one_task[0];
                    $task_args = $one_task[1];
                    $persistent= $one_task[2];
                    $time_long = $one_task[3];

                    call_user_func_array($task_func,$task_args);

                    if($persistent)
                    {
                        self::add($time_long,$task_func,$task_args);
                    }
                }

                unset(self::$_Tasks[$run_time]);
            }
        }
    }

    public static function delAllTask()
    {
        self::$_Tasks = array();
    }
}