<?php

namespace App\Models\Course;

use App\Models\Admin;
use App\Models\Course\CourseCategoryContent;
use App\Models\Settings\Language;
use App\Models\SuccessStory\SuccessStory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CourseCategory extends Model
{
    protected $guarded = ['id'];

    protected $casts = ['is_active' => 'boolean'];

    function createdBy()
    {
        return $this->belongsTo(Admin::class, 'created_by');
    }

    public function contents()
    {
        return $this->hasMany(CourseCategoryContent::class, 'course_category_id');
    }

    public function content()
    {
        return $this->hasOne(CourseCategoryContent::class, 'course_category_id', 'id');
    }

    public function courses(): HasMany
    {
        return $this->hasMany(Course::class, 'course_category_id');
    }

    public function successStories()
    {
        return $this->hasMany(SuccessStory::class, 'course_category_id');
    }
}
