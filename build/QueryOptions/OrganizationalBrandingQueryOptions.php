<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OrganizationalBranding resources
 *
 * Available select fields:
 * - localizations
 */
class OrganizationalBrandingQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OrganizationalBranding
     */
    public const FIELD_LOCALIZATIONS = 'localizations';

    /**
     * Select specific OrganizationalBranding properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
