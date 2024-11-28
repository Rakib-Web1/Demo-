<?php

namespace App\Models\Course;

use App\Models\Settings\Language;
use Illuminate\Database\Eloquent\Model;

class CourseCategoryContent extends Model
{
    protected $guarded = ['id'];

    protected $casts = ['is_active' => 'boolean'];

    function courseCategory(){
        return $this->belongsTo(CourseCategory::class, 'course_category_id');
    }

    function language()
    {
        return $this->belongsTo(Language::class, 'language_id');
    }
}
