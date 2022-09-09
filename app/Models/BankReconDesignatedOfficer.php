<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankReconDesignatedOfficer extends Model
{
    use HasFactory;
    protected $fillable = ['accountant', 'mayor', 'auditor', 'disbursing_officer'];
}
