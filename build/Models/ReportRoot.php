<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ReportRoot
 */
class ReportRoot
{
    public function __construct(
        /** Container for navigation properties for Microsoft Entra authentication methods resources. */
        public ?string $authenticationMethods = null,
        /** Retrieve a list of daily print usage summaries, grouped by printer. */
        public array $dailyPrintUsageByPrinter = [],
        /** Retrieve a list of daily print usage summaries, grouped by user. */
        public array $dailyPrintUsageByUser = [],
        /** Retrieve a list of monthly print usage summaries, grouped by printer. */
        public array $monthlyPrintUsageByPrinter = [],
        /** Retrieve a list of monthly print usage summaries, grouped by user. */
        public array $monthlyPrintUsageByUser = [],
        /** Represents billing details for a Microsoft direct partner. */
        public ?string $partners = null,
        /** Represents an abstract type that contains resources for attack simulation and training reports. */
        public ?string $security = null
    ) {}
}
