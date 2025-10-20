<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SearchHit resources
 *
 * Available select fields:
 * - contentSource
 * - hitId
 * - isCollapsed
 * - rank
 * - resultTemplateId
 * - summary
 * - resource
 */
class SearchHitQueryOptions extends QueryOptions
{
    public const FIELD_CONTENT_SOURCE = 'contentSource';
    public const FIELD_HIT_ID = 'hitId';
    public const FIELD_IS_COLLAPSED = 'isCollapsed';
    public const FIELD_RANK = 'rank';
    public const FIELD_RESULT_TEMPLATE_ID = 'resultTemplateId';
    public const FIELD_SUMMARY = 'summary';
    public const FIELD_RESOURCE = 'resource';

    /**
     * Select specific SearchHit properties
     * 
     * @param array<string> $select Use SearchHitQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
