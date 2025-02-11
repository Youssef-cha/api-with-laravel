<?php

namespace App\Filters;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class InvoicesFilter extends ApiFilter
{

    protected $allowedParms = [
        'customer_id' => ['eq'],
        'amount' => ['eq','gt','lt', 'lte', 'gte'],
        'status' => ['eq','ne'],
        'billed_date' => ['eq','gt','lt', 'lte', 'gte'],
        'paid_date' => ['eq','gt','lt', 'lte', 'gte'],
    ];

    protected $columnMap = [
        'customerId' => 'customer_id',
        'billedDate' => 'billed_date',
        'paidDate' => 'paid_date',
    ];

    protected $operatorMap = [
        'eq' => '=',
        'gt' => '>',
        'lt' => '<',
        'lte' => '<=',
        'gte' => '>=',
        'ne' => '!=',
    ];


}
