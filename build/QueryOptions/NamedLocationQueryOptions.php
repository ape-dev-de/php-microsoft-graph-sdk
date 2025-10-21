<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for NamedLocation resources
 *
 * Available select fields:
 * - createdDateTime
 * - displayName
 * - modifiedDateTime
 */
class NamedLocationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for NamedLocation
     */
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_MODIFIED_DATE_TIME = 'modifiedDateTime';

    /**
     * Select specific NamedLocation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
