<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SiteProtectionRule resources
 *
 * Available select fields:
 * - siteExpression
 */
class SiteProtectionRuleQueryOptions extends QueryOptions
{
    public const FIELD_SITE_EXPRESSION = 'siteExpression';

    /**
     * Select specific SiteProtectionRule properties
     * 
     * @param array<string> $select Use SiteProtectionRuleQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
