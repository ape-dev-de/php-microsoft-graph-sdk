<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceLocalCredentialInfo
 */
class DeviceLocalCredentialInfo
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The credentials of the device's local administrator account backed up to Azure Active Directory.
     * @var DeviceLocalCredential[]
     */
    public array $credentials = [];

    /** Display name of the device that the local credentials are associated with. */
    public ?string $deviceName = null;

    /** When the local administrator account credential was backed up to Azure Active Directory. */
    public ?\DateTimeInterface $lastBackupDateTime = null;

    /** When the local administrator account credential will be refreshed and backed up to Azure Active Directory. */
    public ?\DateTimeInterface $refreshDateTime = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['credentials'])) {
            $this->credentials = $data['credentials'];
        }
        if (isset($data['deviceName'])) {
            $this->deviceName = $data['deviceName'];
        }
        if (isset($data['lastBackupDateTime'])) {
            $this->lastBackupDateTime = is_string($data['lastBackupDateTime']) ? new \DateTimeImmutable($data['lastBackupDateTime']) : $data['lastBackupDateTime'];
        }
        if (isset($data['refreshDateTime'])) {
            $this->refreshDateTime = is_string($data['refreshDateTime']) ? new \DateTimeImmutable($data['refreshDateTime']) : $data['refreshDateTime'];
        }
    }
}
