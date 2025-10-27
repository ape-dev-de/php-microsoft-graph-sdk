<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAssignmentPolicy
 */
class AccessPackageAssignmentPolicy
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Principals that can be assigned the access package through this policy. The possible values are: notSpecified, specificDirectoryUsers, specificConnectedOrganizationUsers, specificDirectoryServicePrincipals, allMemberUsers, allDirectoryUsers, allDirectoryServicePrincipals, allConfiguredConnectedOrganizationUsers, allExternalUsers, unknownFutureValue.
     * @var AllowedTargetScope|\stdClass|null
     */
    public mixed $allowedTargetScope = null;

    /** 
     * This property is only present for an auto assignment policy; if absent, this is a request-based policy.
     * @var AccessPackageAutomaticRequestSettings|\stdClass|null
     */
    public mixed $automaticRequestSettings = null;

    /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The description of the policy. */
    public ?string $description = null;

    /** The display name of the policy. */
    public ?string $displayName = null;

    /** 
     * The expiration date for assignments created in this policy.
     * @var ExpirationPattern|\stdClass|null
     */
    public mixed $expiration = null;

    /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $modifiedDateTime = null;

    /** 
     * 
     * @var AccessPackageNotificationSettings|\stdClass|null
     */
    public mixed $notificationSettings = null;

    /** 
     * Specifies the settings for approval of requests for an access package assignment through this policy. For example, if approval is required for new requests.
     * @var AccessPackageAssignmentApprovalSettings|\stdClass|null
     */
    public mixed $requestApprovalSettings = null;

    /** 
     * Provides additional settings to select who can create a request for an access package assignment through this policy, and what they can include in their request.
     * @var AccessPackageAssignmentRequestorSettings|\stdClass|null
     */
    public mixed $requestorSettings = null;

    /** 
     * Settings for access reviews of assignments through this policy.
     * @var AccessPackageAssignmentReviewSettings|\stdClass|null
     */
    public mixed $reviewSettings = null;

    /** 
     * The principals that can be assigned access from an access package through this policy.
     * @var SubjectSet[]
     */
    public array $specificAllowedTargets = [];

    /** 
     * Access package containing this policy. Read-only.  Supports $expand.
     * @var AccessPackage|\stdClass|null
     */
    public mixed $accessPackage = null;

    /** 
     * Catalog of the access package containing this policy. Read-only.
     * @var AccessPackageCatalog|\stdClass|null
     */
    public mixed $catalog = null;

    /** 
     * The collection of stages when to execute one or more custom access package workflow extensions. Supports $expand.
     * @var CustomExtensionStageSetting[]
     */
    public array $customExtensionStageSettings = [];

    /** 
     * Questions that are posed to the  requestor.
     * @var AccessPackageQuestion[]
     */
    public array $questions = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['allowedTargetScope'])) {
            $this->allowedTargetScope = is_array($data['allowedTargetScope']) ? new AllowedTargetScope($data['allowedTargetScope']) : $data['allowedTargetScope'];
        }
        if (isset($data['automaticRequestSettings'])) {
            $this->automaticRequestSettings = is_array($data['automaticRequestSettings']) ? new AccessPackageAutomaticRequestSettings($data['automaticRequestSettings']) : $data['automaticRequestSettings'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['expiration'])) {
            $this->expiration = is_array($data['expiration']) ? new ExpirationPattern($data['expiration']) : $data['expiration'];
        }
        if (isset($data['modifiedDateTime'])) {
            $this->modifiedDateTime = is_string($data['modifiedDateTime']) ? new \DateTimeImmutable($data['modifiedDateTime']) : $data['modifiedDateTime'];
        }
        if (isset($data['notificationSettings'])) {
            $this->notificationSettings = is_array($data['notificationSettings']) ? new AccessPackageNotificationSettings($data['notificationSettings']) : $data['notificationSettings'];
        }
        if (isset($data['requestApprovalSettings'])) {
            $this->requestApprovalSettings = is_array($data['requestApprovalSettings']) ? new AccessPackageAssignmentApprovalSettings($data['requestApprovalSettings']) : $data['requestApprovalSettings'];
        }
        if (isset($data['requestorSettings'])) {
            $this->requestorSettings = is_array($data['requestorSettings']) ? new AccessPackageAssignmentRequestorSettings($data['requestorSettings']) : $data['requestorSettings'];
        }
        if (isset($data['reviewSettings'])) {
            $this->reviewSettings = is_array($data['reviewSettings']) ? new AccessPackageAssignmentReviewSettings($data['reviewSettings']) : $data['reviewSettings'];
        }
        if (isset($data['specificAllowedTargets'])) {
            $this->specificAllowedTargets = $data['specificAllowedTargets'];
        }
        if (isset($data['accessPackage'])) {
            $this->accessPackage = is_array($data['accessPackage']) ? new AccessPackage($data['accessPackage']) : $data['accessPackage'];
        }
        if (isset($data['catalog'])) {
            $this->catalog = is_array($data['catalog']) ? new AccessPackageCatalog($data['catalog']) : $data['catalog'];
        }
        if (isset($data['customExtensionStageSettings'])) {
            $this->customExtensionStageSettings = $data['customExtensionStageSettings'];
        }
        if (isset($data['questions'])) {
            $this->questions = $data['questions'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
