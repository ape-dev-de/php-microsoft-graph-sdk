<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcUserSetting
 */
class CloudPcUserSetting
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The date and time when the setting was created. The timestamp type represents the date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The setting name displayed in the user interface. */
    public ?string $displayName = null;

    /** The date and time when the setting was last modified. The timestamp type represents the date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** Indicates whether the local admin option is enabled. The default value is false. To enable the local admin option, change the setting to true. If the local admin option is enabled, the end user can be an admin of the Cloud PC device. */
    public ?bool $localAdminEnabled = null;

    /** Indicates whether an end user is allowed to reset their Cloud PC. When true, the user is allowed to reset their Cloud PC. When false, end-user initiated reset is not allowed. The default value is false. */
    public ?bool $resetEnabled = null;

    /** 
     * Defines how frequently a restore point is created that is, a snapshot is taken) for users' provisioned Cloud PCs (default is 12 hours), and whether the user is allowed to restore their own Cloud PCs to a backup made at a specific point in time.
     * @var CloudPcRestorePointSetting|\stdClass|null
     */
    public CloudPcRestorePointSetting|\stdClass|null $restorePointSetting = null;

    /** 
     * Represents the set of Microsoft 365 groups and security groups in Microsoft Entra ID that have cloudPCUserSetting assigned. Returned only on $expand. For an example, see Get cloudPcUserSetting.
     * @var CloudPcUserSettingAssignment[]
     */
    public array $assignments = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['localAdminEnabled'])) {
            $this->localAdminEnabled = is_bool($data['localAdminEnabled']) ? $data['localAdminEnabled'] : (bool)$data['localAdminEnabled'];
        }
        if (isset($data['resetEnabled'])) {
            $this->resetEnabled = is_bool($data['resetEnabled']) ? $data['resetEnabled'] : (bool)$data['resetEnabled'];
        }
        if (isset($data['restorePointSetting'])) {
            $this->restorePointSetting = is_array($data['restorePointSetting']) ? new CloudPcRestorePointSetting($data['restorePointSetting']) : $data['restorePointSetting'];
        }
        if (isset($data['assignments'])) {
            $this->assignments = $data['assignments'];
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
