<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationSchool resources
 *
 * Available select fields:
 * - address
 * - createdBy
 * - externalId
 * - externalPrincipalId
 * - fax
 * - highestGrade
 * - lowestGrade
 * - phone
 * - principalEmail
 * - principalName
 * - schoolNumber
 * - administrativeUnit
 * - classes
 * - users
 */
class EducationSchoolQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationSchool
     */
    public const FIELD_ADDRESS = 'address';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_EXTERNAL_ID = 'externalId';
    public const FIELD_EXTERNAL_PRINCIPAL_ID = 'externalPrincipalId';
    public const FIELD_FAX = 'fax';
    public const FIELD_HIGHEST_GRADE = 'highestGrade';
    public const FIELD_LOWEST_GRADE = 'lowestGrade';
    public const FIELD_PHONE = 'phone';
    public const FIELD_PRINCIPAL_EMAIL = 'principalEmail';
    public const FIELD_PRINCIPAL_NAME = 'principalName';
    public const FIELD_SCHOOL_NUMBER = 'schoolNumber';
    public const FIELD_ADMINISTRATIVE_UNIT = 'administrativeUnit';
    public const FIELD_CLASSES = 'classes';
    public const FIELD_USERS = 'users';

    /**
     * Select specific EducationSchool properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
