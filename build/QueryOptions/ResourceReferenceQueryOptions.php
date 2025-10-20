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
    public const FIELD_ID = 'id';
    public const FIELD_TYPE = 'type';
    public const FIELD_WEB_URL = 'webUrl';

    /**
     * Select specific ResourceReference properties
     * 
     * @param array<string> $select Use ResourceReferenceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
