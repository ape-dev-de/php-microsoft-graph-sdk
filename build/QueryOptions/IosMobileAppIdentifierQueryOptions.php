<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosMobileAppIdentifier resources
 *
 * Available select fields:
 * - bundleId
 */
class IosMobileAppIdentifierQueryOptions extends QueryOptions
{
    public const FIELD_BUNDLE_ID = 'bundleId';

    /**
     * Select specific IosMobileAppIdentifier properties
     * 
     * @param array<string> $select Use IosMobileAppIdentifierQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
