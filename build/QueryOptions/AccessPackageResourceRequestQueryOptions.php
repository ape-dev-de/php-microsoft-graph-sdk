<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageResourceRequest resources
 *
 * Available select fields:
 * - createdDateTime
 * - requestType
 * - state
 * - catalog
 * - resource
 */
class AccessPackageResourceRequestQueryOptions extends QueryOptions
{
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_REQUEST_TYPE = 'requestType';
    public const FIELD_STATE = 'state';
    public const FIELD_CATALOG = 'catalog';
    public const FIELD_RESOURCE = 'resource';

    /**
     * Select specific AccessPackageResourceRequest properties
     * 
     * @param array<string> $select Use AccessPackageResourceRequestQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
