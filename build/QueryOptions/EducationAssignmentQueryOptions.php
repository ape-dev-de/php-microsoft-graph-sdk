<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationAssignment resources
 *
 * Available select fields:
 * - addedStudentAction
 * - addToCalendarAction
 * - allowLateSubmissions
 * - allowStudentsToAddResourcesToSubmission
 * - assignDateTime
 * - assignedDateTime
 * - assignTo
 * - classId
 * - closeDateTime
 * - createdBy
 * - createdDateTime
 * - displayName
 * - dueDateTime
 * - feedbackResourcesFolderUrl
 * - grading
 * - instructions
 * - lastModifiedBy
 * - lastModifiedDateTime
 * - moduleUrl
 * - notificationChannelUrl
 * - resourcesFolderUrl
 * - status
 * - webUrl
 * - categories
 * - gradingCategory
 * - resources
 * - rubric
 * - submissions
 */
class EducationAssignmentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationAssignment
     */
    public const FIELD_ADDED_STUDENT_ACTION = 'addedStudentAction';
    public const FIELD_ADD_TO_CALENDAR_ACTION = 'addToCalendarAction';
    public const FIELD_ALLOW_LATE_SUBMISSIONS = 'allowLateSubmissions';
    public const FIELD_ALLOW_STUDENTS_TO_ADD_RESOURCES_TO_SUBMISSION = 'allowStudentsToAddResourcesToSubmission';
    public const FIELD_ASSIGN_DATE_TIME = 'assignDateTime';
    public const FIELD_ASSIGNED_DATE_TIME = 'assignedDateTime';
    public const FIELD_ASSIGN_TO = 'assignTo';
    public const FIELD_CLASS_ID = 'classId';
    public const FIELD_CLOSE_DATE_TIME = 'closeDateTime';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_DUE_DATE_TIME = 'dueDateTime';
    public const FIELD_FEEDBACK_RESOURCES_FOLDER_URL = 'feedbackResourcesFolderUrl';
    public const FIELD_GRADING = 'grading';
    public const FIELD_INSTRUCTIONS = 'instructions';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_MODULE_URL = 'moduleUrl';
    public const FIELD_NOTIFICATION_CHANNEL_URL = 'notificationChannelUrl';
    public const FIELD_RESOURCES_FOLDER_URL = 'resourcesFolderUrl';
    public const FIELD_STATUS = 'status';
    public const FIELD_WEB_URL = 'webUrl';
    public const FIELD_CATEGORIES = 'categories';
    public const FIELD_GRADING_CATEGORY = 'gradingCategory';
    public const FIELD_RESOURCES = 'resources';
    public const FIELD_RUBRIC = 'rubric';
    public const FIELD_SUBMISSIONS = 'submissions';

    /**
     * Select specific EducationAssignment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
