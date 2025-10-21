<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationClass resources
 *
 * Available select fields:
 * - classCode
 * - course
 * - createdBy
 * - description
 * - displayName
 * - externalId
 * - externalName
 * - externalSource
 * - externalSourceDetail
 * - grade
 * - mailNickname
 * - term
 * - assignmentCategories
 * - assignmentDefaults
 * - assignments
 * - assignmentSettings
 * - group
 * - members
 * - modules
 * - schools
 * - teachers
 */
class EducationClassQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationClass
     */
    public const FIELD_CLASS_CODE = 'classCode';
    public const FIELD_COURSE = 'course';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_EXTERNAL_ID = 'externalId';
    public const FIELD_EXTERNAL_NAME = 'externalName';
    public const FIELD_EXTERNAL_SOURCE = 'externalSource';
    public const FIELD_EXTERNAL_SOURCE_DETAIL = 'externalSourceDetail';
    public const FIELD_GRADE = 'grade';
    public const FIELD_MAIL_NICKNAME = 'mailNickname';
    public const FIELD_TERM = 'term';
    public const FIELD_ASSIGNMENT_CATEGORIES = 'assignmentCategories';
    public const FIELD_ASSIGNMENT_DEFAULTS = 'assignmentDefaults';
    public const FIELD_ASSIGNMENTS = 'assignments';
    public const FIELD_ASSIGNMENT_SETTINGS = 'assignmentSettings';
    public const FIELD_GROUP = 'group';
    public const FIELD_MEMBERS = 'members';
    public const FIELD_MODULES = 'modules';
    public const FIELD_SCHOOLS = 'schools';
    public const FIELD_TEACHERS = 'teachers';

    /**
     * Select specific EducationClass properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
