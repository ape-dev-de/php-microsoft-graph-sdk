<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationUser
 */
class EducationUser
{
    /**
     * True if the account is enabled; otherwise, false. This property is required when a user is created. Supports $filter.
     */
    private ?bool $accountEnabled;

    /**
     * The licenses that are assigned to the user. Not nullable.
     */
    private array $assignedLicenses = [];

    /**
     * The plans that are assigned to the user. Read-only. Not nullable.
     */
    private array $assignedPlans = [];

    /**
     * The telephone numbers for the user. Note: Although this is a string collection, only one number can be set for this property.
     * @var string[]
     */
    private array $businessPhones = [];

    /**
     * The entity who created the user.
     */
    private ?string $createdBy;

    /**
     * The name for the department in which the user works. Supports $filter.
     */
    private ?string $department;

    /**
     * The name displayed in the address book for the user. This is usually the combination of the user''s first name, middle initial, and last name. This property is required when a user is created and it cannot be cleared during updates. Supports $filter and $orderby.
     */
    private ?string $displayName;

    /**
     * Where this user was created from. Possible values are: sis, manual.
     */
    private ?string $externalSource;

    /**
     * The name of the external source this resource was generated from.
     */
    private ?string $externalSourceDetail;

    /**
     * The given name (first name) of the user. Supports $filter.
     */
    private ?string $givenName;

    /**
     * The SMTP address for the user, for example, jeff@contoso.com. Read-Only. Supports $filter.
     */
    private ?string $mail;

    /**
     * The mail address of the user.
     */
    private ?string $mailingAddress;

    /**
     * The mail alias for the user. This property must be specified when a user is created. Supports $filter.
     */
    private ?string $mailNickname;

    /**
     * The middle name of the user.
     */
    private ?string $middleName;

    /**
     * The primary cellular telephone number for the user.
     */
    private ?string $mobilePhone;

    /**
     * The office location for the user.
     */
    private ?string $officeLocation;

    /**
     * Additional information used to associate the Microsoft Entra user with its Active Directory counterpart.
     */
    private ?string $onPremisesInfo;

    /**
     * Specifies password policies for the user. This value is an enumeration with one possible value being DisableStrongPassword, which allows weaker passwords than the default policy to be specified. DisablePasswordExpiration can also be specified. The two can be specified together; for example: DisablePasswordExpiration, DisableStrongPassword.
     */
    private ?string $passwordPolicies;

    /**
     * Specifies the password profile for the user. The profile contains the user''s password. This property is required when a user is created. The password in the profile must satisfy minimum requirements as specified by the passwordPolicies property. By default, a strong password is required.
     */
    private ?string $passwordProfile;

    /**
     * The preferred language for the user that should follow the ISO 639-1 code, for example, en-US.
     */
    private ?string $preferredLanguage;

    /**
     */
    private ?string $primaryRole;

    /**
     * The plans that are provisioned for the user. Read-only. Not nullable.
     */
    private array $provisionedPlans = [];

    /**
     * Any refresh tokens or sessions tokens (session cookies) issued before this time are invalid, and applications get an error when using an invalid refresh or sessions token to acquire a delegated access token (to access APIs such as Microsoft Graph).  If this happens, the application needs to acquire a new refresh token by requesting the authorized endpoint. Returned only on $select. Read-only.
     */
    private ?\DateTimeInterface $refreshTokensValidFromDateTime;

    /**
     * Related records associated with the user. Read-only.
     */
    private array $relatedContacts = [];

    /**
     * The address where the user lives.
     */
    private ?string $residenceAddress;

    /**
     * True if the Outlook Global Address List should contain this user; otherwise, false. If not set, this will be treated as true. For users invited through the invitation manager, this property will be set to false.
     */
    private ?bool $showInAddressList;

    /**
     * If the primary role is student, this block will contain student specific data.
     */
    private ?string $student;

    /**
     * The user's surname (family name or last name). Supports $filter.
     */
    private ?string $surname;

    /**
     * If the primary role is teacher, this block will contain teacher specific data.
     */
    private ?string $teacher;

    /**
     * A two-letter country code (ISO standard 3166). Required for users who will be assigned licenses due to a legal requirement to check for availability of services in countries or regions. Examples include: US, JP, and GB. Not nullable. Supports $filter.
     */
    private ?string $usageLocation;

    /**
     * The user principal name (UPN) of the user. The UPN is an internet-style login name for the user based on the internet standard RFC 822. By convention, this should map to the user''s email name. The general format is alias@domain, where domain must be present in the tenant''s collection of verified domains. This property is required when a user is created. The verified domains for the tenant can be accessed from the verifiedDomains property of the organization. Supports $filter and $orderby.
     */
    private ?string $userPrincipalName;

    /**
     * A string value that can be used to classify user types in your directory, such as Member and Guest. Supports $filter.
     */
    private ?string $userType;

    /**
     * Assignments belonging to the user.
     */
    private array $assignments = [];

    /**
     * Classes to which the user belongs. Nullable.
     */
    private array $classes = [];

    /**
     * When set, the grading rubric attached to the assignment.
     */
    private array $rubrics = [];

    /**
     * Schools to which the user belongs. Nullable.
     */
    private array $schools = [];

    /**
     * Classes for which the user is a teacher.
     */
    private array $taughtClasses = [];

    /**
     * The directory user that corresponds to this user.
     */
    private ?string $user;


    public function getAccountEnabled(): ?bool
    {
        return $this->accountEnabled;
    }

    public function setAccountEnabled(?bool $accountEnabled): self
    {
        $this->accountEnabled = $accountEnabled;
        return $this;
    }

    public function getAssignedLicenses(): array
    {
        return $this->assignedLicenses;
    }

    public function setAssignedLicenses(array $assignedLicenses): self
    {
        $this->assignedLicenses = $assignedLicenses;
        return $this;
    }

    public function getAssignedPlans(): array
    {
        return $this->assignedPlans;
    }

    public function setAssignedPlans(array $assignedPlans): self
    {
        $this->assignedPlans = $assignedPlans;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getBusinessPhones(): array
    {
        return $this->businessPhones;
    }

    /**
     * @param string[] $businessPhones
     */
    public function setBusinessPhones(array $businessPhones): self
    {
        $this->businessPhones = $businessPhones;
        return $this;
    }

    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?string $createdBy): self
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    public function getDepartment(): ?string
    {
        return $this->department;
    }

    public function setDepartment(?string $department): self
    {
        $this->department = $department;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getExternalSource(): ?string
    {
        return $this->externalSource;
    }

    public function setExternalSource(?string $externalSource): self
    {
        $this->externalSource = $externalSource;
        return $this;
    }

    public function getExternalSourceDetail(): ?string
    {
        return $this->externalSourceDetail;
    }

    public function setExternalSourceDetail(?string $externalSourceDetail): self
    {
        $this->externalSourceDetail = $externalSourceDetail;
        return $this;
    }

    public function getGivenName(): ?string
    {
        return $this->givenName;
    }

    public function setGivenName(?string $givenName): self
    {
        $this->givenName = $givenName;
        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): self
    {
        $this->mail = $mail;
        return $this;
    }

    public function getMailingAddress(): ?string
    {
        return $this->mailingAddress;
    }

    public function setMailingAddress(?string $mailingAddress): self
    {
        $this->mailingAddress = $mailingAddress;
        return $this;
    }

    public function getMailNickname(): ?string
    {
        return $this->mailNickname;
    }

    public function setMailNickname(?string $mailNickname): self
    {
        $this->mailNickname = $mailNickname;
        return $this;
    }

    public function getMiddleName(): ?string
    {
        return $this->middleName;
    }

    public function setMiddleName(?string $middleName): self
    {
        $this->middleName = $middleName;
        return $this;
    }

    public function getMobilePhone(): ?string
    {
        return $this->mobilePhone;
    }

    public function setMobilePhone(?string $mobilePhone): self
    {
        $this->mobilePhone = $mobilePhone;
        return $this;
    }

    public function getOfficeLocation(): ?string
    {
        return $this->officeLocation;
    }

    public function setOfficeLocation(?string $officeLocation): self
    {
        $this->officeLocation = $officeLocation;
        return $this;
    }

    public function getOnPremisesInfo(): ?string
    {
        return $this->onPremisesInfo;
    }

    public function setOnPremisesInfo(?string $onPremisesInfo): self
    {
        $this->onPremisesInfo = $onPremisesInfo;
        return $this;
    }

    public function getPasswordPolicies(): ?string
    {
        return $this->passwordPolicies;
    }

    public function setPasswordPolicies(?string $passwordPolicies): self
    {
        $this->passwordPolicies = $passwordPolicies;
        return $this;
    }

    public function getPasswordProfile(): ?string
    {
        return $this->passwordProfile;
    }

    public function setPasswordProfile(?string $passwordProfile): self
    {
        $this->passwordProfile = $passwordProfile;
        return $this;
    }

    public function getPreferredLanguage(): ?string
    {
        return $this->preferredLanguage;
    }

    public function setPreferredLanguage(?string $preferredLanguage): self
    {
        $this->preferredLanguage = $preferredLanguage;
        return $this;
    }

    public function getPrimaryRole(): ?string
    {
        return $this->primaryRole;
    }

    public function setPrimaryRole(?string $primaryRole): self
    {
        $this->primaryRole = $primaryRole;
        return $this;
    }

    public function getProvisionedPlans(): array
    {
        return $this->provisionedPlans;
    }

    public function setProvisionedPlans(array $provisionedPlans): self
    {
        $this->provisionedPlans = $provisionedPlans;
        return $this;
    }

    public function getRefreshTokensValidFromDateTime(): ?\DateTimeInterface
    {
        return $this->refreshTokensValidFromDateTime;
    }

    public function setRefreshTokensValidFromDateTime(?\DateTimeInterface $refreshTokensValidFromDateTime): self
    {
        $this->refreshTokensValidFromDateTime = $refreshTokensValidFromDateTime;
        return $this;
    }

    public function getRelatedContacts(): array
    {
        return $this->relatedContacts;
    }

    public function setRelatedContacts(array $relatedContacts): self
    {
        $this->relatedContacts = $relatedContacts;
        return $this;
    }

    public function getResidenceAddress(): ?string
    {
        return $this->residenceAddress;
    }

    public function setResidenceAddress(?string $residenceAddress): self
    {
        $this->residenceAddress = $residenceAddress;
        return $this;
    }

    public function getShowInAddressList(): ?bool
    {
        return $this->showInAddressList;
    }

    public function setShowInAddressList(?bool $showInAddressList): self
    {
        $this->showInAddressList = $showInAddressList;
        return $this;
    }

    public function getStudent(): ?string
    {
        return $this->student;
    }

    public function setStudent(?string $student): self
    {
        $this->student = $student;
        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(?string $surname): self
    {
        $this->surname = $surname;
        return $this;
    }

    public function getTeacher(): ?string
    {
        return $this->teacher;
    }

    public function setTeacher(?string $teacher): self
    {
        $this->teacher = $teacher;
        return $this;
    }

    public function getUsageLocation(): ?string
    {
        return $this->usageLocation;
    }

    public function setUsageLocation(?string $usageLocation): self
    {
        $this->usageLocation = $usageLocation;
        return $this;
    }

    public function getUserPrincipalName(): ?string
    {
        return $this->userPrincipalName;
    }

    public function setUserPrincipalName(?string $userPrincipalName): self
    {
        $this->userPrincipalName = $userPrincipalName;
        return $this;
    }

    public function getUserType(): ?string
    {
        return $this->userType;
    }

    public function setUserType(?string $userType): self
    {
        $this->userType = $userType;
        return $this;
    }

    public function getAssignments(): array
    {
        return $this->assignments;
    }

    public function setAssignments(array $assignments): self
    {
        $this->assignments = $assignments;
        return $this;
    }

    public function getClasses(): array
    {
        return $this->classes;
    }

    public function setClasses(array $classes): self
    {
        $this->classes = $classes;
        return $this;
    }

    public function getRubrics(): array
    {
        return $this->rubrics;
    }

    public function setRubrics(array $rubrics): self
    {
        $this->rubrics = $rubrics;
        return $this;
    }

    public function getSchools(): array
    {
        return $this->schools;
    }

    public function setSchools(array $schools): self
    {
        $this->schools = $schools;
        return $this;
    }

    public function getTaughtClasses(): array
    {
        return $this->taughtClasses;
    }

    public function setTaughtClasses(array $taughtClasses): self
    {
        $this->taughtClasses = $taughtClasses;
        return $this;
    }

    public function getUser(): ?string
    {
        return $this->user;
    }

    public function setUser(?string $user): self
    {
        $this->user = $user;
        return $this;
    }

}
