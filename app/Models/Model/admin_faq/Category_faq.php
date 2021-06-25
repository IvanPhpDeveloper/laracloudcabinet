<?php

namespace App\Models\Model\admin_faq;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_faq extends Model
{
    use HasFactory;


    public function questions()
    {
        return $this->belongsToMany(Question::class, 'category_questions')->onDelete("cascade")->paginate(5);
    }
}
