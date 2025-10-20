<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Website resources
 *
 * Available select fields:
 * - address
 * - displayName
 * - type
 */
class WebsiteQueryOptions extends QueryOptions
{
    public const FIELD_ADDRESS = 'address';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_TYPE = 'type';

    /**
     * Select specific Website properties
     * 
     * @param array<string> $select Use WebsiteQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
