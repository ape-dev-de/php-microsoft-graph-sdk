<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProfileCardProperty
 */
class ProfileCardProperty
{
    /**
     * Allows an administrator to set a custom display label for the directory property and localize it for the users in their tenant.
     */
    private array $annotations = [];

    /**
     * Identifies a profileCardProperty resource in Get, Update, or Delete operations. Allows an administrator to surface hidden Microsoft Entra ID properties on the Microsoft 365 profile card within their tenant. When present, the Microsoft Entra ID field referenced in this property is visible to all users in your tenant on the contact pane of the profile card. Allowed values for this field are: UserPrincipalName, Fax, StreetAddress, PostalCode, StateOrProvince, Alias, CustomAttribute1,  CustomAttribute2, CustomAttribute3, CustomAttribute4, CustomAttribute5, CustomAttribute6, CustomAttribute7, CustomAttribute8, CustomAttribute9, CustomAttribute10, CustomAttribute11, CustomAttribute12, CustomAttribute13, CustomAttribute14, CustomAttribute15.
     */
    private ?string $directoryPropertyName;

    public function getAnnotations(): array
    {
        return $this->annotations;
    }

    public function setAnnotations(array $annotations): self
    {
        $this->annotations = $annotations;
        return $this;
    }

    public function getDirectoryPropertyName(): ?string
    {
        return $this->directoryPropertyName;
    }

    public function setDirectoryPropertyName(?string $directoryPropertyName): self
    {
        $this->directoryPropertyName = $directoryPropertyName;
        return $this;
    }

}
