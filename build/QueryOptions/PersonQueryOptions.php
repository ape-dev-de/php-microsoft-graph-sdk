<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Person resources
 *
 * Available select fields:
 * - birthday
 * - companyName
 * - department
 * - displayName
 * - givenName
 * - imAddress
 * - isFavorite
 * - jobTitle
 * - officeLocation
 * - personNotes
 * - personType
 * - phones
 * - postalAddresses
 * - profession
 * - scoredEmailAddresses
 * - surname
 * - userPrincipalName
 * - websites
 * - yomiCompany
 */
class PersonQueryOptions extends QueryOptions
{
    public const FIELD_BIRTHDAY = 'birthday';
    public const FIELD_COMPANY_NAME = 'companyName';
    public const FIELD_DEPARTMENT = 'department';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_GIVEN_NAME = 'givenName';
    public const FIELD_IM_ADDRESS = 'imAddress';
    public const FIELD_IS_FAVORITE = 'isFavorite';
    public const FIELD_JOB_TITLE = 'jobTitle';
    public const FIELD_OFFICE_LOCATION = 'officeLocation';
    public const FIELD_PERSON_NOTES = 'personNotes';
    public const FIELD_PERSON_TYPE = 'personType';
    public const FIELD_PHONES = 'phones';
    public const FIELD_POSTAL_ADDRESSES = 'postalAddresses';
    public const FIELD_PROFESSION = 'profession';
    public const FIELD_SCORED_EMAIL_ADDRESSES = 'scoredEmailAddresses';
    public const FIELD_SURNAME = 'surname';
    public const FIELD_USER_PRINCIPAL_NAME = 'userPrincipalName';
    public const FIELD_WEBSITES = 'websites';
    public const FIELD_YOMI_COMPANY = 'yomiCompany';

    /**
     * Select specific Person properties
     * 
     * @param array<string> $select Use PersonQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
