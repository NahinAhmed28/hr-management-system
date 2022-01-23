<?php
namespace App\Models;

/**
 * Class Leavetype
 * @package App\Models
 */
class LeaveType extends \Eloquent
{

    // Don't forget to fill this array
    protected $fillable = ['leaveType', 'num_of_leave'];
    protected $guarded = ['id'];

}
