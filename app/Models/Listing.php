<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listing extends Model
{
    use HasFactory, SoftDeletes;


    public function scopeFilter($query, array $filters){
        
        if($filters['tehnology'] ?? false){

            $query->where('tehnologies','like','%'.request('tehnology').'%');
        }

        if($filters['search'] ?? false){
            $query->where('tehnologies','like','%'.request('search').'%')
            ->orWhere('company','like','%'.request('search').'%')
                ->orWhere('location','like','%'.request('search').'%')
                    ->orWhere('job_link','like','%'.request('search').'%')
                        ->orWhere('status','like','%'.request('search').'%')
                            ->orWhere('website','like','%'.request('search').'%');
        }
        if($filters['statusi'] ?? false){
            
            $query->where('status','like','%'.request('statusi').'%');
        }
    }
}
