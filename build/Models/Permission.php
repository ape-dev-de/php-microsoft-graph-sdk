<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Permission
 */
class Permission
{
    /**
     * A format of yyyy-MM-ddTHH:mm:ssZ of DateTimeOffset indicates the expiration time of the permission. DateTime.MinValue indicates there's no expiration set for this permission. Optional.
     */
    private ?\DateTimeInterface $expirationDateTime;

    /**
     * For user type permissions, the details of the users and applications for this permission. Read-only.
     */
    private ?string $grantedTo;

    /**
     * For type permissions, the details of the users to whom permission was granted. Read-only.
     */
    private array $grantedToIdentities = [];

    /**
     * For link type permissions, the details of the users to whom permission was granted. Read-only.
     */
    private array $grantedToIdentitiesV2 = [];

    /**
     * For user type permissions, the details of the users and applications for this permission. Read-only.
     */
    private ?string $grantedToV2;

    /**
     * Indicates whether the password is set for this permission. This property only appears in the response. Optional. Read-only. For OneDrive Personal only..
     */
    private ?bool $hasPassword;

    /**
     * Provides a reference to the ancestor of the current permission, if it''s inherited from an ancestor. Read-only.
     */
    private ?string $inheritedFrom;

    /**
     * Details of any associated sharing invitation for this permission. Read-only.
     */
    private ?string $invitation;

    /**
     * Provides the link details of the current permission, if it''s a link type permission. Read-only.
     */
    private ?string $link;

    /**
     * The type of permission, for example, read. See below for the full list of roles. Read-only.
     * @var string[]
     */
    private array $roles = [];

    /**
     * A unique token that can be used to access this shared item via the shares API. Read-only.
     */
    private ?string $shareId;


    public function getExpirationDateTime(): ?\DateTimeInterface
    {
        return $this->expirationDateTime;
    }

    public function setExpirationDateTime(?\DateTimeInterface $expirationDateTime): self
    {
        $this->expirationDateTime = $expirationDateTime;
        return $this;
    }

    public function getGrantedTo(): ?string
    {
        return $this->grantedTo;
    }

    public function setGrantedTo(?string $grantedTo): self
    {
        $this->grantedTo = $grantedTo;
        return $this;
    }

    public function getGrantedToIdentities(): array
    {
        return $this->grantedToIdentities;
    }

    public function setGrantedToIdentities(array $grantedToIdentities): self
    {
        $this->grantedToIdentities = $grantedToIdentities;
        return $this;
    }

    public function getGrantedToIdentitiesV2(): array
    {
        return $this->grantedToIdentitiesV2;
    }

    public function setGrantedToIdentitiesV2(array $grantedToIdentitiesV2): self
    {
        $this->grantedToIdentitiesV2 = $grantedToIdentitiesV2;
        return $this;
    }

    public function getGrantedToV2(): ?string
    {
        return $this->grantedToV2;
    }

    public function setGrantedToV2(?string $grantedToV2): self
    {
        $this->grantedToV2 = $grantedToV2;
        return $this;
    }

    public function getHasPassword(): ?bool
    {
        return $this->hasPassword;
    }

    public function setHasPassword(?bool $hasPassword): self
    {
        $this->hasPassword = $hasPassword;
        return $this;
    }

    public function getInheritedFrom(): ?string
    {
        return $this->inheritedFrom;
    }

    public function setInheritedFrom(?string $inheritedFrom): self
    {
        $this->inheritedFrom = $inheritedFrom;
        return $this;
    }

    public function getInvitation(): ?string
    {
        return $this->invitation;
    }

    public function setInvitation(?string $invitation): self
    {
        $this->invitation = $invitation;
        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(?string $link): self
    {
        $this->link = $link;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getRoles(): array
    {
        return $this->roles;
    }

    /**
     * @param string[] $roles
     */
    public function setRoles(array $roles): self
    {
        $this->roles = $roles;
        return $this;
    }

    public function getShareId(): ?string
    {
        return $this->shareId;
    }

    public function setShareId(?string $shareId): self
    {
        $this->shareId = $shareId;
        return $this;
    }

}
