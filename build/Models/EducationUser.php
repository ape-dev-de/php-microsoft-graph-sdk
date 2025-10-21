<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationUser
 */
class EducationUser
{
    public function __construct(
        /** True if the account is enabled; otherwise, false. This property is required when a user is created. Supports $filter. */
        public ?bool $accountEnabled = null,
        /** The licenses that are assigned to the user. Not nullable. */
        public array $assignedLicenses = [],
        /** The plans that are assigned to the user. Read-only. Not nullable. */
        public array $assignedPlans = [],
        /** @var string[] The telephone numbers for the user. Note: Although this is a string collection, only one number can be set for this property. */
        public array $businessPhones = [],
        /** The entity who created the user. */
        public ?string $createdBy = null,
        /** The name for the department in which the user works. Supports $filter. */
        public ?string $department = null,
        /** The name displayed in the address book for the user. This is usually the combination of the user''s first name, middle initial, and last name. This property is required when a user is created and it cannot be cleared during updates. Supports $filter and $orderby. */
        public ?string $displayName = null,
        /** Where this user was created from. Possible values are: sis, manual. */
        public ?string $externalSource = null,
        /** The name of the external source this resource was generated from. */
        public ?string $externalSourceDetail = null,
        /** The given name (first name) of the user. Supports $filter. */
        public ?string $givenName = null,
        /** The SMTP address for the user, for example, jeff@contoso.com. Read-Only. Supports $filter. */
        public ?string $mail = null,
        /** The mail address of the user. */
        public ?string $mailingAddress = null,
        /** The mail alias for the user. This property must be specified when a user is created. Supports $filter. */
        public ?string $mailNickname = null,
        /** The middle name of the user. */
        public ?string $middleName = null,
        /** The primary cellular telephone number for the user. */
        public ?string $mobilePhone = null,
        /** The office location for the user. */
        public ?string $officeLocation = null,
        /** Additional information used to associate the Microsoft Entra user with its Active Directory counterpart. */
        public ?string $onPremisesInfo = null,
        /** Specifies password policies for the user. This value is an enumeration with one possible value being DisableStrongPassword, which allows weaker passwords than the default policy to be specified. DisablePasswordExpiration can also be specified. The two can be specified together; for example: DisablePasswordExpiration, DisableStrongPassword. */
        public ?string $passwordPolicies = null,
        /** Specifies the password profile for the user. The profile contains the user''s password. This property is required when a user is created. The password in the profile must satisfy minimum requirements as specified by the passwordPolicies property. By default, a strong password is required. */
        public ?string $passwordProfile = null,
        /** The preferred language for the user that should follow the ISO 639-1 code, for example, en-US. */
        public ?string $preferredLanguage = null,
        /**  */
        public ?string $primaryRole = null,
        /** The plans that are provisioned for the user. Read-only. Not nullable. */
        public array $provisionedPlans = [],
        /** Any refresh tokens or sessions tokens (session cookies) issued before this time are invalid, and applications get an error when using an invalid refresh or sessions token to acquire a delegated access token (to access APIs such as Microsoft Graph).  If this happens, the application needs to acquire a new refresh token by requesting the authorized endpoint. Returned only on $select. Read-only. */
        public ?\DateTimeInterface $refreshTokensValidFromDateTime = null,
        /** Related records associated with the user. Read-only. */
        public array $relatedContacts = [],
        /** The address where the user lives. */
        public ?string $residenceAddress = null,
        /** True if the Outlook Global Address List should contain this user; otherwise, false. If not set, this will be treated as true. For users invited through the invitation manager, this property will be set to false. */
        public ?bool $showInAddressList = null,
        /** If the primary role is student, this block will contain student specific data. */
        public ?string $student = null,
        /** The user's surname (family name or last name). Supports $filter. */
        public ?string $surname = null,
        /** If the primary role is teacher, this block will contain teacher specific data. */
        public ?string $teacher = null,
        /** A two-letter country code (ISO standard 3166). Required for users who will be assigned licenses due to a legal requirement to check for availability of services in countries or regions. Examples include: US, JP, and GB. Not nullable. Supports $filter. */
        public ?string $usageLocation = null,
        /** The user principal name (UPN) of the user. The UPN is an internet-style login name for the user based on the internet standard RFC 822. By convention, this should map to the user''s email name. The general format is alias@domain, where domain must be present in the tenant''s collection of verified domains. This property is required when a user is created. The verified domains for the tenant can be accessed from the verifiedDomains property of the organization. Supports $filter and $orderby. */
        public ?string $userPrincipalName = null,
        /** A string value that can be used to classify user types in your directory, such as Member and Guest. Supports $filter. */
        public ?string $userType = null,
        /** Assignments belonging to the user. */
        public array $assignments = [],
        /** Classes to which the user belongs. Nullable. */
        public array $classes = [],
        /** When set, the grading rubric attached to the assignment. */
        public array $rubrics = [],
        /** Schools to which the user belongs. Nullable. */
        public array $schools = [],
        /** Classes for which the user is a teacher. */
        public array $taughtClasses = [],
        /** The directory user that corresponds to this user. */
        public ?string $user = null
    ) {}
}
