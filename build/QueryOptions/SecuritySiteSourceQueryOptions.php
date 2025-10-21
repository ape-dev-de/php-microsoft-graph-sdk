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
    /**
     * Available select fields for SecuritySiteSource
     */
    public const FIELD_SITE = 'site';

    /**
     * Select specific SecuritySiteSource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
