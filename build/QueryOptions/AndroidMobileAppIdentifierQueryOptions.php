<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AndroidMobileAppIdentifier resources
 *
 * Available select fields:
 * - packageId
 */
class AndroidMobileAppIdentifierQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AndroidMobileAppIdentifier
     */
    public const FIELD_PACKAGE_ID = 'packageId';

    /**
     * Select specific AndroidMobileAppIdentifier properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
