<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ReportRoot resources
 *
 * Available select fields:
 * - authenticationMethods
 * - dailyPrintUsageByPrinter
 * - dailyPrintUsageByUser
 * - monthlyPrintUsageByPrinter
 * - monthlyPrintUsageByUser
 * - partners
 * - security
 */
class ReportRootQueryOptions extends QueryOptions
{
    public const FIELD_AUTHENTICATION_METHODS = 'authenticationMethods';
    public const FIELD_DAILY_PRINT_USAGE_BY_PRINTER = 'dailyPrintUsageByPrinter';
    public const FIELD_DAILY_PRINT_USAGE_BY_USER = 'dailyPrintUsageByUser';
    public const FIELD_MONTHLY_PRINT_USAGE_BY_PRINTER = 'monthlyPrintUsageByPrinter';
    public const FIELD_MONTHLY_PRINT_USAGE_BY_USER = 'monthlyPrintUsageByUser';
    public const FIELD_PARTNERS = 'partners';
    public const FIELD_SECURITY = 'security';

    /**
     * Select specific ReportRoot properties
     * 
     * @param array<string> $select Use ReportRootQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
