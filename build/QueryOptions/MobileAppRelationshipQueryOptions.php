<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MobileAppRelationship resources
 *
 * Available select fields:
 * - sourceDisplayName
 * - sourceDisplayVersion
 * - sourceId
 * - sourcePublisherDisplayName
 * - targetDisplayName
 * - targetDisplayVersion
 * - targetId
 * - targetPublisherDisplayName
 */
class MobileAppRelationshipQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MobileAppRelationship
     */
    public const FIELD_SOURCE_DISPLAY_NAME = 'sourceDisplayName';
    public const FIELD_SOURCE_DISPLAY_VERSION = 'sourceDisplayVersion';
    public const FIELD_SOURCE_ID = 'sourceId';
    public const FIELD_SOURCE_PUBLISHER_DISPLAY_NAME = 'sourcePublisherDisplayName';
    public const FIELD_TARGET_DISPLAY_NAME = 'targetDisplayName';
    public const FIELD_TARGET_DISPLAY_VERSION = 'targetDisplayVersion';
    public const FIELD_TARGET_ID = 'targetId';
    public const FIELD_TARGET_PUBLISHER_DISPLAY_NAME = 'targetPublisherDisplayName';

    /**
     * Select specific MobileAppRelationship properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
