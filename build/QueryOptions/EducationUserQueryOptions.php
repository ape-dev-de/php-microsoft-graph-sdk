<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationUser resources
 *
 * Available select fields:
 * - accountEnabled
 * - assignedLicenses
 * - assignedPlans
 * - businessPhones
 * - createdBy
 * - department
 * - displayName
 * - externalSource
 * - externalSourceDetail
 * - givenName
 * - mail
 * - mailingAddress
 * - mailNickname
 * - middleName
 * - mobilePhone
 * - officeLocation
 * - onPremisesInfo
 * - passwordPolicies
 * - passwordProfile
 * - preferredLanguage
 * - primaryRole
 * - provisionedPlans
 * - refreshTokensValidFromDateTime
 * - relatedContacts
 * - residenceAddress
 * - showInAddressList
 * - student
 * - surname
 * - teacher
 * - usageLocation
 * - userPrincipalName
 * - userType
 * - assignments
 * - classes
 * - rubrics
 * - schools
 * - taughtClasses
 * - user
 */
class EducationUserQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationUser
     */
    public const FIELD_ACCOUNT_ENABLED = 'accountEnabled';
    public const FIELD_ASSIGNED_LICENSES = 'assignedLicenses';
    public const FIELD_ASSIGNED_PLANS = 'assignedPlans';
    public const FIELD_BUSINESS_PHONES = 'businessPhones';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_DEPARTMENT = 'department';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_EXTERNAL_SOURCE = 'externalSource';
    public const FIELD_EXTERNAL_SOURCE_DETAIL = 'externalSourceDetail';
    public const FIELD_GIVEN_NAME = 'givenName';
    public const FIELD_MAIL = 'mail';
    public const FIELD_MAILING_ADDRESS = 'mailingAddress';
    public const FIELD_MAIL_NICKNAME = 'mailNickname';
    public const FIELD_MIDDLE_NAME = 'middleName';
    public const FIELD_MOBILE_PHONE = 'mobilePhone';
    public const FIELD_OFFICE_LOCATION = 'officeLocation';
    public const FIELD_ON_PREMISES_INFO = 'onPremisesInfo';
    public const FIELD_PASSWORD_POLICIES = 'passwordPolicies';
    public const FIELD_PASSWORD_PROFILE = 'passwordProfile';
    public const FIELD_PREFERRED_LANGUAGE = 'preferredLanguage';
    public const FIELD_PRIMARY_ROLE = 'primaryRole';
    public const FIELD_PROVISIONED_PLANS = 'provisionedPlans';
    public const FIELD_REFRESH_TOKENS_VALID_FROM_DATE_TIME = 'refreshTokensValidFromDateTime';
    public const FIELD_RELATED_CONTACTS = 'relatedContacts';
    public const FIELD_RESIDENCE_ADDRESS = 'residenceAddress';
    public const FIELD_SHOW_IN_ADDRESS_LIST = 'showInAddressList';
    public const FIELD_STUDENT = 'student';
    public const FIELD_SURNAME = 'surname';
    public const FIELD_TEACHER = 'teacher';
    public const FIELD_USAGE_LOCATION = 'usageLocation';
    public const FIELD_USER_PRINCIPAL_NAME = 'userPrincipalName';
    public const FIELD_USER_TYPE = 'userType';
    public const FIELD_ASSIGNMENTS = 'assignments';
    public const FIELD_CLASSES = 'classes';
    public const FIELD_RUBRICS = 'rubrics';
    public const FIELD_SCHOOLS = 'schools';
    public const FIELD_TAUGHT_CLASSES = 'taughtClasses';
    public const FIELD_USER = 'user';

    /**
     * Select specific EducationUser properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
