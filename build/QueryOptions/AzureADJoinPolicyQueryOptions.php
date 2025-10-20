<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AzureADJoinPolicy resources
 *
 * Available select fields:
 * - allowedToJoin
 * - isAdminConfigurable
 */
class AzureADJoinPolicyQueryOptions extends QueryOptions
{
    public const FIELD_ALLOWED_TO_JOIN = 'allowedToJoin';
    public const FIELD_IS_ADMIN_CONFIGURABLE = 'isAdminConfigurable';

    /**
     * Select specific AzureADJoinPolicy properties
     * 
     * @param array<string> $select Use AzureADJoinPolicyQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
