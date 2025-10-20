<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PermissionScope
 */
class PermissionScope
{
    /**
     * A description of the delegated permissions, intended to be read by an administrator granting the permission on behalf of all users. This text appears in tenant-wide admin consent experiences.
     */
    private ?string $adminConsentDescription;

    /**
     * The permission''s title, intended to be read by an administrator granting the permission on behalf of all users.
     */
    private ?string $adminConsentDisplayName;

    /**
     * Unique delegated permission identifier inside the collection of delegated permissions defined for a resource application.
     */
    private ?string $id;

    /**
     * When you create or update a permission, this property must be set to true (which is the default). To delete a permission, this property must first be set to false.  At that point, in a subsequent call, the permission may be removed.
     */
    private ?bool $isEnabled;

    /**
     */
    private ?string $origin;

    /**
     * The possible values are: User and Admin. Specifies whether this delegated permission should be considered safe for non-admin users to consent to on behalf of themselves, or whether an administrator consent should always be required. While Microsoft Graph defines the default consent requirement for each permission, the tenant administrator may override the behavior in their organization (by allowing, restricting, or limiting user consent to this delegated permission). For more information, see Configure how users consent to applications.
     */
    private ?string $type;

    /**
     * A description of the delegated permissions, intended to be read by a user granting the permission on their own behalf. This text appears in consent experiences where the user is consenting only on behalf of themselves.
     */
    private ?string $userConsentDescription;

    /**
     * A title for the permission, intended to be read by a user granting the permission on their own behalf. This text appears in consent experiences where the user is consenting only on behalf of themselves.
     */
    private ?string $userConsentDisplayName;

    /**
     * Specifies the value to include in the scp (scope) claim in access tokens. Must not exceed 120 characters in length. Allowed characters are : ! # $ % & '' ( ) * + , - . / : ;  =  ? @ [ ] ^ + _  {  } ~, and characters in the ranges 0-9, A-Z and a-z. Any other character, including the space character, aren''t allowed. May not begin with ..
     */
    private ?string $value;

    public function getAdminConsentDescription(): ?string
    {
        return $this->adminConsentDescription;
    }

    public function setAdminConsentDescription(?string $adminConsentDescription): self
    {
        $this->adminConsentDescription = $adminConsentDescription;
        return $this;
    }

    public function getAdminConsentDisplayName(): ?string
    {
        return $this->adminConsentDisplayName;
    }

    public function setAdminConsentDisplayName(?string $adminConsentDisplayName): self
    {
        $this->adminConsentDisplayName = $adminConsentDisplayName;
        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getIsEnabled(): ?bool
    {
        return $this->isEnabled;
    }

    public function setIsEnabled(?bool $isEnabled): self
    {
        $this->isEnabled = $isEnabled;
        return $this;
    }

    public function getOrigin(): ?string
    {
        return $this->origin;
    }

    public function setOrigin(?string $origin): self
    {
        $this->origin = $origin;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getUserConsentDescription(): ?string
    {
        return $this->userConsentDescription;
    }

    public function setUserConsentDescription(?string $userConsentDescription): self
    {
        $this->userConsentDescription = $userConsentDescription;
        return $this;
    }

    public function getUserConsentDisplayName(): ?string
    {
        return $this->userConsentDisplayName;
    }

    public function setUserConsentDisplayName(?string $userConsentDisplayName): self
    {
        $this->userConsentDisplayName = $userConsentDisplayName;
        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }

}
