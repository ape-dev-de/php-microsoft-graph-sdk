<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageSubject
 */
class AccessPackageSubject
{
    /**
     * The display name of the subject.
     */
    private ?string $displayName;

    /**
     * The email address of the subject.
     */
    private ?string $email;

    /**
     * The object identifier of the subject. null if the subject isn't yet a user in the tenant.
     */
    private ?string $objectId;

    /**
     * A string representation of the principal''s security identifier, if known, or null if the subject doesn''t have a security identifier.
     */
    private ?string $onPremisesSecurityIdentifier;

    /**
     * The principal name, if known, of the subject.
     */
    private ?string $principalName;

    /**
     * The resource type of the subject. The possible values are: notSpecified, user, servicePrincipal, unknownFutureValue.
     */
    private ?string $subjectType;

    /**
     * The connected organization of the subject. Read-only. Nullable.
     */
    private ?string $connectedOrganization;

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getObjectId(): ?string
    {
        return $this->objectId;
    }

    public function setObjectId(?string $objectId): self
    {
        $this->objectId = $objectId;
        return $this;
    }

    public function getOnPremisesSecurityIdentifier(): ?string
    {
        return $this->onPremisesSecurityIdentifier;
    }

    public function setOnPremisesSecurityIdentifier(?string $onPremisesSecurityIdentifier): self
    {
        $this->onPremisesSecurityIdentifier = $onPremisesSecurityIdentifier;
        return $this;
    }

    public function getPrincipalName(): ?string
    {
        return $this->principalName;
    }

    public function setPrincipalName(?string $principalName): self
    {
        $this->principalName = $principalName;
        return $this;
    }

    public function getSubjectType(): ?string
    {
        return $this->subjectType;
    }

    public function setSubjectType(?string $subjectType): self
    {
        $this->subjectType = $subjectType;
        return $this;
    }

    public function getConnectedOrganization(): ?string
    {
        return $this->connectedOrganization;
    }

    public function setConnectedOrganization(?string $connectedOrganization): self
    {
        $this->connectedOrganization = $connectedOrganization;
        return $this;
    }

}
