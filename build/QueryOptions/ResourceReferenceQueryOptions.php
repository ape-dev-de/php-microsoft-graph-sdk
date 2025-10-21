<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ResourceReference resources
 *
 * Available select fields:
 * - id
 * - type
 * - webUrl
 */
class ResourceReferenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ResourceReference
     */
    public const FIELD_ID = 'id';
    public const FIELD_TYPE = 'type';
    public const FIELD_WEB_URL = 'webUrl';

    /**
     * Select specific ResourceReference properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
