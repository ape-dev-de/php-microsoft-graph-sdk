<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SiteProtectionRuleCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SiteProtectionRuleCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SiteProtectionRuleCollectionResponse properties
     * 
     * @param array<string> $select Use SiteProtectionRuleCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
