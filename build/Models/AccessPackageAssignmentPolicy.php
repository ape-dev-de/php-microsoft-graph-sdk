<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAssignmentPolicy
 */
class AccessPackageAssignmentPolicy
{
    /**
     * Principals that can be assigned the access package through this policy. The possible values are: notSpecified, specificDirectoryUsers, specificConnectedOrganizationUsers, specificDirectoryServicePrincipals, allMemberUsers, allDirectoryUsers, allDirectoryServicePrincipals, allConfiguredConnectedOrganizationUsers, allExternalUsers, unknownFutureValue.
     */
    private ?string $allowedTargetScope;

    /**
     * This property is only present for an auto assignment policy; if absent, this is a request-based policy.
     */
    private ?string $automaticRequestSettings;

    /**
     * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The description of the policy.
     */
    private ?string $description;

    /**
     * The display name of the policy.
     */
    private ?string $displayName;

    /**
     * The expiration date for assignments created in this policy.
     */
    private ?string $expiration;

    /**
     * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $modifiedDateTime;

    /**
     */
    private ?string $notificationSettings;

    /**
     * Specifies the settings for approval of requests for an access package assignment through this policy. For example, if approval is required for new requests.
     */
    private ?string $requestApprovalSettings;

    /**
     * Provides additional settings to select who can create a request for an access package assignment through this policy, and what they can include in their request.
     */
    private ?string $requestorSettings;

    /**
     * Settings for access reviews of assignments through this policy.
     */
    private ?string $reviewSettings;

    /**
     * The principals that can be assigned access from an access package through this policy.
     */
    private array $specificAllowedTargets = [];

    /**
     * Access package containing this policy. Read-only.  Supports $expand.
     */
    private ?string $accessPackage;

    /**
     * Catalog of the access package containing this policy. Read-only.
     */
    private ?string $catalog;

    /**
     * The collection of stages when to execute one or more custom access package workflow extensions. Supports $expand.
     */
    private array $customExtensionStageSettings = [];

    /**
     * Questions that are posed to the  requestor.
     * @var string[]
     */
    private array $questions = [];


    public function getAllowedTargetScope(): ?string
    {
        return $this->allowedTargetScope;
    }

    public function setAllowedTargetScope(?string $allowedTargetScope): self
    {
        $this->allowedTargetScope = $allowedTargetScope;
        return $this;
    }

    public function getAutomaticRequestSettings(): ?string
    {
        return $this->automaticRequestSettings;
    }

    public function setAutomaticRequestSettings(?string $automaticRequestSettings): self
    {
        $this->automaticRequestSettings = $automaticRequestSettings;
        return $this;
    }

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
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

    public function getExpiration(): ?string
    {
        return $this->expiration;
    }

    public function setExpiration(?string $expiration): self
    {
        $this->expiration = $expiration;
        return $this;
    }

    public function getModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->modifiedDateTime;
    }

    public function setModifiedDateTime(?\DateTimeInterface $modifiedDateTime): self
    {
        $this->modifiedDateTime = $modifiedDateTime;
        return $this;
    }

    public function getNotificationSettings(): ?string
    {
        return $this->notificationSettings;
    }

    public function setNotificationSettings(?string $notificationSettings): self
    {
        $this->notificationSettings = $notificationSettings;
        return $this;
    }

    public function getRequestApprovalSettings(): ?string
    {
        return $this->requestApprovalSettings;
    }

    public function setRequestApprovalSettings(?string $requestApprovalSettings): self
    {
        $this->requestApprovalSettings = $requestApprovalSettings;
        return $this;
    }

    public function getRequestorSettings(): ?string
    {
        return $this->requestorSettings;
    }

    public function setRequestorSettings(?string $requestorSettings): self
    {
        $this->requestorSettings = $requestorSettings;
        return $this;
    }

    public function getReviewSettings(): ?string
    {
        return $this->reviewSettings;
    }

    public function setReviewSettings(?string $reviewSettings): self
    {
        $this->reviewSettings = $reviewSettings;
        return $this;
    }

    public function getSpecificAllowedTargets(): array
    {
        return $this->specificAllowedTargets;
    }

    public function setSpecificAllowedTargets(array $specificAllowedTargets): self
    {
        $this->specificAllowedTargets = $specificAllowedTargets;
        return $this;
    }

    public function getAccessPackage(): ?string
    {
        return $this->accessPackage;
    }

    public function setAccessPackage(?string $accessPackage): self
    {
        $this->accessPackage = $accessPackage;
        return $this;
    }

    public function getCatalog(): ?string
    {
        return $this->catalog;
    }

    public function setCatalog(?string $catalog): self
    {
        $this->catalog = $catalog;
        return $this;
    }

    public function getCustomExtensionStageSettings(): array
    {
        return $this->customExtensionStageSettings;
    }

    public function setCustomExtensionStageSettings(array $customExtensionStageSettings): self
    {
        $this->customExtensionStageSettings = $customExtensionStageSettings;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getQuestions(): array
    {
        return $this->questions;
    }

    /**
     * @param string[] $questions
     */
    public function setQuestions(array $questions): self
    {
        $this->questions = $questions;
        return $this;
    }

}
