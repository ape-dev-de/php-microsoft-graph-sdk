<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AppManagementPolicy resources
 *
 * Available select fields:
 * - isEnabled
 * - restrictions
 * - appliesTo
 */
class AppManagementPolicyQueryOptions extends QueryOptions
{
    public const FIELD_IS_ENABLED = 'isEnabled';
    public const FIELD_RESTRICTIONS = 'restrictions';
    public const FIELD_APPLIES_TO = 'appliesTo';

    /**
     * Select specific AppManagementPolicy properties
     * 
     * @param array<string> $select Use AppManagementPolicyQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
