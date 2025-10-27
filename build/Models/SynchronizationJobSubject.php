<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationJobSubject
 */
class SynchronizationJobSubject
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Principals that you would like to provision.
     * @var SynchronizationLinkedObjects|\stdClass|null
     */
    public SynchronizationLinkedObjects|\stdClass|null $links = null;

    /** The identifier of an object to which a synchronizationJob is to be applied. Can be one of the following: An onPremisesDistinguishedName for synchronization from Active Directory to Azure AD.The user ID for synchronization from Microsoft Entra ID to a third-party.The Worker ID of the Workday worker for synchronization from Workday to either Active Directory or Microsoft Entra ID. */
    public ?string $objectId = null;

    /** The type of the object to which a synchronizationJob is to be applied. Can be one of the following: user for synchronizing between Active Directory and Azure AD.User for synchronizing a user between Microsoft Entra ID and a third-party application. Worker for synchronization a user between Workday and either Active Directory or Microsoft Entra ID.Group for synchronizing a group between Microsoft Entra ID and a third-party application. */
    public ?string $objectTypeName = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['links'])) {
            $this->links = is_array($data['links']) ? new SynchronizationLinkedObjects($data['links']) : $data['links'];
        }
        if (isset($data['objectId'])) {
            $this->objectId = $data['objectId'];
        }
        if (isset($data['objectTypeName'])) {
            $this->objectTypeName = $data['objectTypeName'];
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
