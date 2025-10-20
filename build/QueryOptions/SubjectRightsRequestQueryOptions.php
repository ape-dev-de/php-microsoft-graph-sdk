<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SubjectRightsRequest resources
 *
 * Available select fields:
 * - assignedTo
 * - closedDateTime
 * - contentQuery
 * - createdBy
 * - createdDateTime
 * - dataSubject
 * - dataSubjectType
 * - description
 * - displayName
 * - externalId
 * - history
 * - includeAllVersions
 * - includeAuthoredContent
 * - insight
 * - internalDueDateTime
 * - lastModifiedBy
 * - lastModifiedDateTime
 * - mailboxLocations
 * - pauseAfterEstimate
 * - regulations
 * - siteLocations
 * - stages
 * - status
 * - type
 * - approvers
 * - collaborators
 * - notes
 * - team
 */
class SubjectRightsRequestQueryOptions extends QueryOptions
{
    public const FIELD_ASSIGNED_TO = 'assignedTo';
    public const FIELD_CLOSED_DATE_TIME = 'closedDateTime';
    public const FIELD_CONTENT_QUERY = 'contentQuery';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DATA_SUBJECT = 'dataSubject';
    public const FIELD_DATA_SUBJECT_TYPE = 'dataSubjectType';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_EXTERNAL_ID = 'externalId';
    public const FIELD_HISTORY = 'history';
    public const FIELD_INCLUDE_ALL_VERSIONS = 'includeAllVersions';
    public const FIELD_INCLUDE_AUTHORED_CONTENT = 'includeAuthoredContent';
    public const FIELD_INSIGHT = 'insight';
    public const FIELD_INTERNAL_DUE_DATE_TIME = 'internalDueDateTime';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_MAILBOX_LOCATIONS = 'mailboxLocations';
    public const FIELD_PAUSE_AFTER_ESTIMATE = 'pauseAfterEstimate';
    public const FIELD_REGULATIONS = 'regulations';
    public const FIELD_SITE_LOCATIONS = 'siteLocations';
    public const FIELD_STAGES = 'stages';
    public const FIELD_STATUS = 'status';
    public const FIELD_TYPE = 'type';
    public const FIELD_APPROVERS = 'approvers';
    public const FIELD_COLLABORATORS = 'collaborators';
    public const FIELD_NOTES = 'notes';
    public const FIELD_TEAM = 'team';

    /**
     * Select specific SubjectRightsRequest properties
     * 
     * @param array<string> $select Use SubjectRightsRequestQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
