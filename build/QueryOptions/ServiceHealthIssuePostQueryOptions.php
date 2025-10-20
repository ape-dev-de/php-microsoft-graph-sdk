<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServiceHealthIssuePost resources
 *
 * Available select fields:
 * - createdDateTime
 * - description
 * - postType
 */
class ServiceHealthIssuePostQueryOptions extends QueryOptions
{
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_POST_TYPE = 'postType';

    /**
     * Select specific ServiceHealthIssuePost properties
     * 
     * @param array<string> $select Use ServiceHealthIssuePostQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
