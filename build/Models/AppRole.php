<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppRole
 */
class AppRole
{
    /**
     * Specifies whether this app role can be assigned to users and groups (by setting to [''User'']), to other application''s (by setting to [''Application''], or both (by setting to [''User'', ''Application'']). App roles supporting assignment to other applications'' service principals are also known as application permissions. The ''Application'' value is only supported for app roles defined on application entities.
     */
    private ?string $allowedMemberTypes;

    /**
     * The description for the app role. This is displayed when the app role is being assigned and, if the app role functions as an application permission, during  consent experiences.
     */
    private ?string $description;

    /**
     * Display name for the permission that appears in the app role assignment and consent experiences.
     */
    private ?string $displayName;

    /**
     * Unique role identifier inside the appRoles collection. When creating a new app role, a new GUID identifier must be provided.
     */
    private ?string $id;

    /**
     * When creating or updating an app role, this must be set to true (which is the default). To delete a role, this must first be set to false.  At that point, in a subsequent call, this role may be removed.
     */
    private ?bool $isEnabled;

    /**
     * Specifies if the app role is defined on the application object or on the servicePrincipal entity. Must not be included in any POST or PATCH requests. Read-only.
     */
    private ?string $origin;

    /**
     * Specifies the value to include in the roles claim in ID tokens and access tokens authenticating an assigned user or service principal. Must not exceed 120 characters in length. Allowed characters are : ! # $ % & '' ( ) * + , - . / : ;  =  ? @ [ ] ^ + _  {  } ~, and characters in the ranges 0-9, A-Z and a-z. Any other character, including the space character, aren''t allowed. May not begin with ..
     */
    private ?string $value;

    public function getAllowedMemberTypes(): ?string
    {
        return $this->allowedMemberTypes;
    }

    public function setAllowedMemberTypes(?string $allowedMemberTypes): self
    {
        $this->allowedMemberTypes = $allowedMemberTypes;
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
