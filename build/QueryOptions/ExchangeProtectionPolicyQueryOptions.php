<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExchangeProtectionPolicy resources
 *
 * Available select fields:
 * - mailboxInclusionRules
 * - mailboxProtectionUnits
 * - mailboxProtectionUnitsBulkAdditionJobs
 */
class ExchangeProtectionPolicyQueryOptions extends QueryOptions
{
    public const FIELD_MAILBOX_INCLUSION_RULES = 'mailboxInclusionRules';
    public const FIELD_MAILBOX_PROTECTION_UNITS = 'mailboxProtectionUnits';
    public const FIELD_MAILBOX_PROTECTION_UNITS_BULK_ADDITION_JOBS = 'mailboxProtectionUnitsBulkAdditionJobs';

    /**
     * Select specific ExchangeProtectionPolicy properties
     * 
     * @param array<string> $select Use ExchangeProtectionPolicyQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
