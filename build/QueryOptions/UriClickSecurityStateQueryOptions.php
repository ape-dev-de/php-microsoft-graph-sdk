<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UriClickSecurityState resources
 *
 * Available select fields:
 * - clickAction
 * - clickDateTime
 * - id
 * - sourceId
 * - uriDomain
 * - verdict
 */
class UriClickSecurityStateQueryOptions extends QueryOptions
{
    public const FIELD_CLICK_ACTION = 'clickAction';
    public const FIELD_CLICK_DATE_TIME = 'clickDateTime';
    public const FIELD_ID = 'id';
    public const FIELD_SOURCE_ID = 'sourceId';
    public const FIELD_URI_DOMAIN = 'uriDomain';
    public const FIELD_VERDICT = 'verdict';

    /**
     * Select specific UriClickSecurityState properties
     * 
     * @param array<string> $select Use UriClickSecurityStateQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
