<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServiceHealthIssue resources
 *
 * Available select fields:
 * - classification
 * - feature
 * - featureGroup
 * - impactDescription
 * - isResolved
 * - origin
 * - posts
 * - service
 * - status
 */
class ServiceHealthIssueQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ServiceHealthIssue
     */
    public const FIELD_CLASSIFICATION = 'classification';
    public const FIELD_FEATURE = 'feature';
    public const FIELD_FEATURE_GROUP = 'featureGroup';
    public const FIELD_IMPACT_DESCRIPTION = 'impactDescription';
    public const FIELD_IS_RESOLVED = 'isResolved';
    public const FIELD_ORIGIN = 'origin';
    public const FIELD_POSTS = 'posts';
    public const FIELD_SERVICE = 'service';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific ServiceHealthIssue properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
