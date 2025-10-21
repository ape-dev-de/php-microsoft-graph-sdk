<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BaseItemVersion resources
 *
 * Available select fields:
 * - lastModifiedBy
 * - lastModifiedDateTime
 * - publication
 */
class BaseItemVersionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BaseItemVersion
     */
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_PUBLICATION = 'publication';

    /**
     * Select specific BaseItemVersion properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
