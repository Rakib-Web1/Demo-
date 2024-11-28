<?php

namespace Database\Seeders;

use App\Models\Authorization\permission;
use App\Models\Authorization\PermissionGroup;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Role Manage
        $rolesManage = PermissionGroup::updateOrCreate([
            'name' => 'Roles Manage',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $rolesManage->id,
            'name' => 'Access Roles',
            'slug' => 'role.access',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $rolesManage->id,
            'name' => 'Create Roles',
            'slug' => 'role.create',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $rolesManage->id,
            'name' => 'Edit Roles',
            'slug' => 'role.edit',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $rolesManage->id,
            'name' => 'Destroy Roles',
            'slug' => 'role.destroy',
        ]);

        //Language Permission
        $languageManage = PermissionGroup::updateOrCreate([
            'name' => 'Language Manage',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $languageManage->id,
            'name' => 'Access Language',
            'slug' => 'language.access',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $languageManage->id,
            'name' => 'Create Language',
            'slug' => 'language.create',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $languageManage->id,
            'name' => 'Edit Language',
            'slug' => 'language.edit',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $languageManage->id,
            'name' => 'Destroy Language',
            'slug' => 'language.destroy',
        ]);

        //Logo Permission
        $logoManage = PermissionGroup::updateOrCreate([
            'name' => 'Logo Manage',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $logoManage->id,
            'name' => 'Access Logo',
            'slug' => 'logo.access',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $logoManage->id,
            'name' => 'Create Logo',
            'slug' => 'logo.create',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $logoManage->id,
            'name' => 'Update Logo',
            'slug' => 'logo.edit',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $logoManage->id,
            'name' => 'Destroy Logo',
            'slug' => 'logo.destroy',
        ]);

        //Welcome Screen Permission
        $welcomeScreen = PermissionGroup::updateOrCreate([
            'name' => 'Welcome Screen Manage',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $welcomeScreen->id,
            'name' => 'Access Welcome Screen',
            'slug' => 'welcome.screen.access',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $welcomeScreen->id,
            'name' => 'Create Welcome Screen',
            'slug' => 'welcome.screen.create',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $welcomeScreen->id,
            'name' => 'Update Welcome Screen',
            'slug' => 'welcome.screen.edit',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $welcomeScreen->id,
            'name' => 'Destroy Welcome Screen',
            'slug' => 'welcome.screen.destroy',
        ]);

        //Facility Manage
        $facility = PermissionGroup::updateOrCreate([
            'name' => 'Facility Manage',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $facility->id,
            'name' => 'Access Facility',
            'slug' => 'facility.access',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $facility->id,
            'name' => 'Create Facility',
            'slug' => 'facility.create',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $facility->id,
            'name' => 'Update Facility',
            'slug' => 'facility.edit',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $facility->id,
            'name' => 'Destroy Facility',
            'slug' => 'facility.destroy',
        ]);

        //Course Category Permission

        $courseCategoryManage = PermissionGroup::updateOrCreate([
            'name' => 'Course Category Manage',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $courseCategoryManage->id,
            'name' => 'Access Course Category',
            'slug' => 'course.category.access',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $courseCategoryManage->id,
            'name' => 'Create Course Category ',
            'slug' => 'course.category.create',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $courseCategoryManage->id,
            'name' => 'Update Course Category',
            'slug' => 'course.category.edit',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $courseCategoryManage->id,
            'name' => 'Destroy Course Category',
            'slug' => 'course.category.destroy',
        ]);


        //Software Permission
        $software = PermissionGroup::updateOrCreate([
            'name' => 'Software Manage',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $software->id,
            'name' => 'Access Software',
            'slug' => 'software.access',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $software->id,
            'name' => 'Create Software',
            'slug' => 'software.create',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $software->id,
            'name' => 'Update Software',
            'slug' => 'software.edit',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $software->id,
            'name' => 'Destroy Software',
            'slug' => 'software.destroy',
        ]);

        //Banner Permission
        $banner = PermissionGroup::updateOrCreate([
            'name' => 'Banner Manage',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $banner->id,
            'name' => 'Access Banner',
            'slug' => 'banner.access',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $banner->id,
            'name' => 'Create Banner',
            'slug' => 'banner.create',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $banner->id,
            'name' => 'Update Banner',
            'slug' => 'banner.edit',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $banner->id,
            'name' => 'Destroy Banner',
            'slug' => 'banner.destroy',
        ]);

        //About Permission
        $aboutManage = PermissionGroup::updateOrCreate([
            'name' => 'About Manage',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $aboutManage->id,
            'name' => 'Access About',
            'slug' => 'about.access',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $aboutManage->id,
            'name' => 'Create About',
            'slug' => 'about.create',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $aboutManage->id,
            'name' => 'Update About',
            'slug' => 'about.edit',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $aboutManage->id,
            'name' => 'Destroy About',
            'slug' => 'about.destroy',
        ]);

        //Initiative Permission
        $initiative = PermissionGroup::updateOrCreate([
            'name' => 'Initiative Manage',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $initiative->id,
            'name' => 'Access Initiative',
            'slug' => 'initiative.access',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $initiative->id,
            'name' => 'Create Initiative',
            'slug' => 'initiative.create',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $initiative->id,
            'name' => 'Update Initiative',
            'slug' => 'initiative.edit',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $initiative->id,
            'name' => 'Destroy Initiative',
            'slug' => 'initiative.destroy',
        ]);

        //Course Permission
        $course = PermissionGroup::updateOrCreate([
            'name' => 'Course Manage',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $course->id,
            'name' => 'Access Course',
            'slug' => 'course.access',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $course->id,
            'name' => 'Create Course',
            'slug' => 'course.create',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $course->id,
            'name' => 'Update Course',
            'slug' => 'course.edit',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $course->id,
            'name' => 'Destroy Course',
            'slug' => 'course.destroy',
        ]);

        //Success Story Category Permission
        $successCategory = PermissionGroup::updateOrCreate([
            'name' => 'Success Story Category Manage',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $successCategory->id,
            'name' => 'Access Success Story Category',
            'slug' => 'success.category.access',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $successCategory->id,
            'name' => 'Create Success Story Category',
            'slug' => 'success.category.create',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $successCategory->id,
            'name' => 'Update Success Story Category',
            'slug' => 'success.category.edit',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $successCategory->id,
            'name' => 'Destroy Success Story Category',
            'slug' => 'success.category.destroy',
        ]);

        //Achievement Permission
        $achievement = PermissionGroup::updateOrCreate([
            'name' => 'Achievement Manage',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $achievement->id,
            'name' => 'Access Achievement',
            'slug' => 'achievement.access',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $achievement->id,
            'name' => 'Create Achievement',
            'slug' => 'achievement.create',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $achievement->id,
            'name' => 'Update Achievement',
            'slug' => 'achievement.edit',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $achievement->id,
            'name' => 'Destroy Achievement',
            'slug' => 'achievement.destroy',
        ]);

        //FAQ Permission
        $faq = PermissionGroup::updateOrCreate([
            'name' => 'FAQ Manage',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $faq->id,
            'name' => 'Access FAQ',
            'slug' => 'faq.access',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $faq->id,
            'name' => 'Create FAQ',
            'slug' => 'faq.create',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $faq->id,
            'name' => 'Update FAQ',
            'slug' => 'faq.edit',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $faq->id,
            'name' => 'Destroy FAQ',
            'slug' => 'faq.destroy',
        ]);

        //Success Story Permission
        $successStory = PermissionGroup::updateOrCreate([
            'name' => 'Success Story Manage',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $successStory->id,
            'name' => 'Access Success Story',
            'slug' => 'success.story.access',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $successStory->id,
            'name' => 'Create Success Story',
            'slug' => 'success.story.create',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $successStory->id,
            'name' => 'Update Success Story',
            'slug' => 'success.story.edit',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $successStory->id,
            'name' => 'Destroy Success Story',
            'slug' => 'success.story.destroy',
        ]);

        //Course content Permission
        $courseContentManage = PermissionGroup::updateOrCreate([
            'name' => 'Course Content Manage',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $courseContentManage->id,
            'name' => 'Update Course Content',
            'slug' => 'course.content.edit',
        ]);

        //Course media Permission
        $courseMediaManage = PermissionGroup::updateOrCreate([
            'name' => 'Course Media Manage',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $courseMediaManage->id,
            'name' => 'Update Course Media',
            'slug' => 'course.media.edit',
        ]);

         //Home content Permission
        $homeContent = PermissionGroup::updateOrCreate([
            'name' => 'Home Content Manage',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $homeContent->id,
            'name' => 'Home Content Access',
            'slug' => 'home.content.access',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $homeContent->id,
            'name' => 'Update Home Content',
            'slug' => 'home.content.edit',
        ]);
         //Home Facility Permission
        $homeFacilities = PermissionGroup::updateOrCreate([
            'name' => 'Home Facilities Manage',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $homeFacilities->id,
            'name' => 'Home Facility Access',
            'slug' => 'home.facility.access',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $homeFacilities->id,
            'name' => 'Home Facility Create',
            'slug' => 'home.facility.create',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $homeFacilities->id,
            'name' => 'Home Facility Rearrange',
            'slug' => 'home.facility.edit',
        ]);
        Permission::updateOrCreate([
            'permission_group_id' => $homeFacilities->id,
            'name' => 'Home Facility Delete',
            'slug' => 'home.facility.destroy',
        ]);
    }
}
