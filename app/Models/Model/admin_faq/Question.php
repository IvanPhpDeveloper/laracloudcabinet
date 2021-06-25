<?php

namespace App\Models\Model\admin_faq;

use App\Models\Model\user\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function category_faqs(){
        return $this->belongsToMany(Category_faq::class,'category_questions')->withTimestamps();
    }

    public function categories() {
        return $this->belongsToMany(Category_faq::class, 'category_questions', 'question_id', 'category_faq_id')->withPivot('category_faqs.name');
    }
}
