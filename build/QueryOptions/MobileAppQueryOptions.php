<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MobileApp resources
 *
 * Available select fields:
 * - createdDateTime
 * - description
 * - developer
 * - displayName
 * - informationUrl
 * - isFeatured
 * - largeIcon
 * - lastModifiedDateTime
 * - notes
 * - owner
 * - privacyInformationUrl
 * - publisher
 * - publishingState
 * - assignments
 * - categories
 */
class MobileAppQueryOptions extends QueryOptions
{
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DEVELOPER = 'developer';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_INFORMATION_URL = 'informationUrl';
    public const FIELD_IS_FEATURED = 'isFeatured';
    public const FIELD_LARGE_ICON = 'largeIcon';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_NOTES = 'notes';
    public const FIELD_OWNER = 'owner';
    public const FIELD_PRIVACY_INFORMATION_URL = 'privacyInformationUrl';
    public const FIELD_PUBLISHER = 'publisher';
    public const FIELD_PUBLISHING_STATE = 'publishingState';
    public const FIELD_ASSIGNMENTS = 'assignments';
    public const FIELD_CATEGORIES = 'categories';

    /**
     * Select specific MobileApp properties
     * 
     * @param array<string> $select Use MobileAppQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
