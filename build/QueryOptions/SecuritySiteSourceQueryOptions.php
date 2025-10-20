<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecuritySiteSource resources
 *
 * Available select fields:
 * - site
 */
class SecuritySiteSourceQueryOptions extends QueryOptions
{
    public const FIELD_SITE = 'site';

    /**
     * Select specific SecuritySiteSource properties
     * 
     * @param array<string> $select Use SecuritySiteSourceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
