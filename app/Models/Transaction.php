<?php
// https://laracasts.com/discuss/channels/laravel/laravel-sum-month 
namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'contact_id',
        'type_of_client',
        'description',        
        'credit',
        'debit',
        'exchange',
        'currency',
        'bolivares',
        'invoice',
        'contact',
        'type',
        'source',
        'destinatary',
        'user_id',
        'company_id',
    ];

    public function getCurrencySymbolAttribute()
    {
        if ($this->currency ==  'usd') {
            return '$';
        } else if ($this->currency == 'eur') {
            return '€';
        } else {
            return '';
        }
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopeByCompany($query, $company)
    {
        if (!empty($company)) {
            return $query->where('company_id', $company);
        }
        return $query;
    }

    public function scopeCurrency($query, $currency)
    {
        if (!empty($currency)) {
            return $query->where('currency', $currency);
        }
        return $query;
    }

    public function scopePeriod($query, $period)
    {
        if (!empty($period)) {
            return $query->whereBetween('date', $period);
        }
        #whereBetween('created_at', [$dateFrom, $dateTo])
        return $query;
    }

    public function scopeLastDays($query, $days)
    {
        if (!empty($days)) {
            return $query->whereDate('date', '>=', Carbon::now()->subDays($days));
        }
        return $query;
    }

    public function scopeByType($query, $type)
    {
        if (!empty($type)) {
            return $query->where('type', $type);
        }
        return $query;
    }

    public function scopeByClientType($query, $clientType)
    {
        if (!empty($clientType)) {
            return $query->where('type_of_client', $clientType);
        }
        return $query;
    }

    public function scopeByContact($query, $contact)
    {
        if (!empty($contact)) {
            return $query->where('contact', $contact);
        }
        return $query;
    }

    public function scopeByContactID($query, $contactID)
    {
        if (!empty($contactID)) {
            return $query->where('contact', $contactID);
        }
        return $query;
    }

    public static function getTotalAmount($currency = null, $type = null, $company = null, $days = null)
    {
        return Transaction::currency($currency)->byType($type)->byCompany($company)->lastDays($days)->sum( $type == 'in' ? 'credit':'debit');
    }

    public static function getTransactions($year, $month, $currency, $type)
    {
        return Transaction::whereYear('date', $year)
            ->whereMonth('date', $month)
            ->currency($currency)
            ->type($type)
            ->sum('amount');
    }
}

