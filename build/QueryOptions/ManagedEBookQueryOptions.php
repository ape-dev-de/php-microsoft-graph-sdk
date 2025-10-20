<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedEBook resources
 *
 * Available select fields:
 * - createdDateTime
 * - description
 * - displayName
 * - informationUrl
 * - largeCover
 * - lastModifiedDateTime
 * - privacyInformationUrl
 * - publishedDateTime
 * - publisher
 * - assignments
 * - deviceStates
 * - installSummary
 * - userStateSummary
 */
class ManagedEBookQueryOptions extends QueryOptions
{
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_INFORMATION_URL = 'informationUrl';
    public const FIELD_LARGE_COVER = 'largeCover';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_PRIVACY_INFORMATION_URL = 'privacyInformationUrl';
    public const FIELD_PUBLISHED_DATE_TIME = 'publishedDateTime';
    public const FIELD_PUBLISHER = 'publisher';
    public const FIELD_ASSIGNMENTS = 'assignments';
    public const FIELD_DEVICE_STATES = 'deviceStates';
    public const FIELD_INSTALL_SUMMARY = 'installSummary';
    public const FIELD_USER_STATE_SUMMARY = 'userStateSummary';

    /**
     * Select specific ManagedEBook properties
     * 
     * @param array<string> $select Use ManagedEBookQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
