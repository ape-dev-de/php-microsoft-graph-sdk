<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedMobileApp resources
 *
 * Available select fields:
 * - mobileAppIdentifier
 * - version
 */
class ManagedMobileAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedMobileApp
     */
    public const FIELD_MOBILE_APP_IDENTIFIER = 'mobileAppIdentifier';
    public const FIELD_VERSION = 'version';

    /**
     * Select specific ManagedMobileApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
