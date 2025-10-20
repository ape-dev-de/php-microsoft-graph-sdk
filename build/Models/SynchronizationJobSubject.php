<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationJobSubject
 */
class SynchronizationJobSubject
{
    /**
     * Principals that you would like to provision.
     */
    private ?string $links;

    /**
     * The identifier of an object to which a synchronizationJob is to be applied. Can be one of the following: An onPremisesDistinguishedName for synchronization from Active Directory to Azure AD.The user ID for synchronization from Microsoft Entra ID to a third-party.The Worker ID of the Workday worker for synchronization from Workday to either Active Directory or Microsoft Entra ID.
     */
    private ?string $objectId;

    /**
     * The type of the object to which a synchronizationJob is to be applied. Can be one of the following: user for synchronizing between Active Directory and Azure AD.User for synchronizing a user between Microsoft Entra ID and a third-party application. Worker for synchronization a user between Workday and either Active Directory or Microsoft Entra ID.Group for synchronizing a group between Microsoft Entra ID and a third-party application.
     */
    private ?string $objectTypeName;

    public function getLinks(): ?string
    {
        return $this->links;
    }

    public function setLinks(?string $links): self
    {
        $this->links = $links;
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

    public function getObjectTypeName(): ?string
    {
        return $this->objectTypeName;
    }

    public function setObjectTypeName(?string $objectTypeName): self
    {
        $this->objectTypeName = $objectTypeName;
        return $this;
    }

}
