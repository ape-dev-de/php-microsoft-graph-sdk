<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsProperty resources
 *
 * Available select fields:
 * - aliases
 * - isQueryable
 * - isRefinable
 * - isRetrievable
 * - isSearchable
 * - labels
 * - name
 * - type
 */
class ExternalConnectorsPropertyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ExternalConnectorsProperty
     */
    public const FIELD_ALIASES = 'aliases';
    public const FIELD_IS_QUERYABLE = 'isQueryable';
    public const FIELD_IS_REFINABLE = 'isRefinable';
    public const FIELD_IS_RETRIEVABLE = 'isRetrievable';
    public const FIELD_IS_SEARCHABLE = 'isSearchable';
    public const FIELD_LABELS = 'labels';
    public const FIELD_NAME = 'name';
    public const FIELD_TYPE = 'type';

    /**
     * Select specific ExternalConnectorsProperty properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
