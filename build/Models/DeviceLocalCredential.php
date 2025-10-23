<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceLocalCredential
 */
class DeviceLocalCredential
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The name of the local admin account for which LAPS is enabled. */
    public ?string $accountName = null;

    /** The SID of the local admin account for which LAPS is enabled. */
    public ?string $accountSid = null;

    /** When the local administrator account credential for the device object was backed up to Azure Active Directory. */
    public ?\DateTimeInterface $backupDateTime = null;

    /** The password for the local administrator account that is backed up to Azure Active Directory and returned as a Base64 encoded value. */
    public ?string $passwordBase64 = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['accountName'])) {
            $this->accountName = $data['accountName'];
        }
        if (isset($data['accountSid'])) {
            $this->accountSid = $data['accountSid'];
        }
        if (isset($data['backupDateTime'])) {
            $this->backupDateTime = is_string($data['backupDateTime']) ? new \DateTimeImmutable($data['backupDateTime']) : $data['backupDateTime'];
        }
        if (isset($data['passwordBase64'])) {
            $this->passwordBase64 = $data['passwordBase64'];
        }
    }
}
