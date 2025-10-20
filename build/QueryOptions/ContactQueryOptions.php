<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Contact resources
 *
 * Available select fields:
 * - assistantName
 * - birthday
 * - businessAddress
 * - businessHomePage
 * - businessPhones
 * - children
 * - companyName
 * - department
 * - displayName
 * - emailAddresses
 * - fileAs
 * - generation
 * - givenName
 * - homeAddress
 * - homePhones
 * - imAddresses
 * - initials
 * - jobTitle
 * - manager
 * - middleName
 * - mobilePhone
 * - nickName
 * - officeLocation
 * - otherAddress
 * - parentFolderId
 * - personalNotes
 * - profession
 * - spouseName
 * - surname
 * - title
 * - yomiCompanyName
 * - yomiGivenName
 * - yomiSurname
 * - extensions
 * - multiValueExtendedProperties
 * - photo
 * - singleValueExtendedProperties
 */
class ContactQueryOptions extends QueryOptions
{
    public const FIELD_ASSISTANT_NAME = 'assistantName';
    public const FIELD_BIRTHDAY = 'birthday';
    public const FIELD_BUSINESS_ADDRESS = 'businessAddress';
    public const FIELD_BUSINESS_HOME_PAGE = 'businessHomePage';
    public const FIELD_BUSINESS_PHONES = 'businessPhones';
    public const FIELD_CHILDREN = 'children';
    public const FIELD_COMPANY_NAME = 'companyName';
    public const FIELD_DEPARTMENT = 'department';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_EMAIL_ADDRESSES = 'emailAddresses';
    public const FIELD_FILE_AS = 'fileAs';
    public const FIELD_GENERATION = 'generation';
    public const FIELD_GIVEN_NAME = 'givenName';
    public const FIELD_HOME_ADDRESS = 'homeAddress';
    public const FIELD_HOME_PHONES = 'homePhones';
    public const FIELD_IM_ADDRESSES = 'imAddresses';
    public const FIELD_INITIALS = 'initials';
    public const FIELD_JOB_TITLE = 'jobTitle';
    public const FIELD_MANAGER = 'manager';
    public const FIELD_MIDDLE_NAME = 'middleName';
    public const FIELD_MOBILE_PHONE = 'mobilePhone';
    public const FIELD_NICK_NAME = 'nickName';
    public const FIELD_OFFICE_LOCATION = 'officeLocation';
    public const FIELD_OTHER_ADDRESS = 'otherAddress';
    public const FIELD_PARENT_FOLDER_ID = 'parentFolderId';
    public const FIELD_PERSONAL_NOTES = 'personalNotes';
    public const FIELD_PROFESSION = 'profession';
    public const FIELD_SPOUSE_NAME = 'spouseName';
    public const FIELD_SURNAME = 'surname';
    public const FIELD_TITLE = 'title';
    public const FIELD_YOMI_COMPANY_NAME = 'yomiCompanyName';
    public const FIELD_YOMI_GIVEN_NAME = 'yomiGivenName';
    public const FIELD_YOMI_SURNAME = 'yomiSurname';
    public const FIELD_EXTENSIONS = 'extensions';
    public const FIELD_MULTI_VALUE_EXTENDED_PROPERTIES = 'multiValueExtendedProperties';
    public const FIELD_PHOTO = 'photo';
    public const FIELD_SINGLE_VALUE_EXTENDED_PROPERTIES = 'singleValueExtendedProperties';

    /**
     * Select specific Contact properties
     * 
     * @param array<string> $select Use ContactQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
