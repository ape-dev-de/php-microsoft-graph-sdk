<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DriveProtectionRuleCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DriveProtectionRuleCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DriveProtectionRuleCollectionResponse properties
     * 
     * @param array<string> $select Use DriveProtectionRuleCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
