<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SearchRequest resources
 *
 * Available select fields:
 * - aggregationFilters
 * - aggregations
 * - collapseProperties
 * - contentSources
 * - enableTopResults
 * - entityTypes
 * - fields
 * - from
 * - query
 * - queryAlterationOptions
 * - region
 * - resultTemplateOptions
 * - sharePointOneDriveOptions
 * - size
 * - sortProperties
 */
class SearchRequestQueryOptions extends QueryOptions
{
    public const FIELD_AGGREGATION_FILTERS = 'aggregationFilters';
    public const FIELD_AGGREGATIONS = 'aggregations';
    public const FIELD_COLLAPSE_PROPERTIES = 'collapseProperties';
    public const FIELD_CONTENT_SOURCES = 'contentSources';
    public const FIELD_ENABLE_TOP_RESULTS = 'enableTopResults';
    public const FIELD_ENTITY_TYPES = 'entityTypes';
    public const FIELD_FIELDS = 'fields';
    public const FIELD_FROM = 'from';
    public const FIELD_QUERY = 'query';
    public const FIELD_QUERY_ALTERATION_OPTIONS = 'queryAlterationOptions';
    public const FIELD_REGION = 'region';
    public const FIELD_RESULT_TEMPLATE_OPTIONS = 'resultTemplateOptions';
    public const FIELD_SHARE_POINT_ONE_DRIVE_OPTIONS = 'sharePointOneDriveOptions';
    public const FIELD_SIZE = 'size';
    public const FIELD_SORT_PROPERTIES = 'sortProperties';

    /**
     * Select specific SearchRequest properties
     * 
     * @param array<string> $select Use SearchRequestQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
