<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationSubmission resources
 *
 * Available select fields:
 * - assignmentId
 * - excusedBy
 * - excusedDateTime
 * - lastModifiedBy
 * - lastModifiedDateTime
 * - reassignedBy
 * - reassignedDateTime
 * - recipient
 * - resourcesFolderUrl
 * - returnedBy
 * - returnedDateTime
 * - status
 * - submittedBy
 * - submittedDateTime
 * - unsubmittedBy
 * - unsubmittedDateTime
 * - webUrl
 * - outcomes
 * - resources
 * - submittedResources
 */
class EducationSubmissionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationSubmission
     */
    public const FIELD_ASSIGNMENT_ID = 'assignmentId';
    public const FIELD_EXCUSED_BY = 'excusedBy';
    public const FIELD_EXCUSED_DATE_TIME = 'excusedDateTime';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_REASSIGNED_BY = 'reassignedBy';
    public const FIELD_REASSIGNED_DATE_TIME = 'reassignedDateTime';
    public const FIELD_RECIPIENT = 'recipient';
    public const FIELD_RESOURCES_FOLDER_URL = 'resourcesFolderUrl';
    public const FIELD_RETURNED_BY = 'returnedBy';
    public const FIELD_RETURNED_DATE_TIME = 'returnedDateTime';
    public const FIELD_STATUS = 'status';
    public const FIELD_SUBMITTED_BY = 'submittedBy';
    public const FIELD_SUBMITTED_DATE_TIME = 'submittedDateTime';
    public const FIELD_UNSUBMITTED_BY = 'unsubmittedBy';
    public const FIELD_UNSUBMITTED_DATE_TIME = 'unsubmittedDateTime';
    public const FIELD_WEB_URL = 'webUrl';
    public const FIELD_OUTCOMES = 'outcomes';
    public const FIELD_RESOURCES = 'resources';
    public const FIELD_SUBMITTED_RESOURCES = 'submittedResources';

    /**
     * Select specific EducationSubmission properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
