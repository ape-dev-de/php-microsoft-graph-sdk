<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceStatus
 */
class ServiceStatus
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * The type of consumer. The possible values are: unknown, firstparty, thirdparty, unknownFutureValue.
     * @var BackupServiceConsumer|\stdClass|null
     */
    public mixed $backupServiceConsumer = null;

    /** 
     * The reason the service is disabled. The possible values are: none, controllerServiceAppDeleted, invalidBillingProfile, userRequested, unknownFutureValue.
     * @var DisableReason|\stdClass|null
     */
    public mixed $disableReason = null;

    /** The expiration time of the grace period. */
    public ?\DateTimeInterface $gracePeriodDateTime = null;

    /** 
     * Identity of the person who last modified the entity.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $lastModifiedBy = null;

    /** Timestamp of the last modification of the entity. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** The expiration time of the restoration allowed period. */
    public ?\DateTimeInterface $restoreAllowedTillDateTime = null;

    /** 
     * Status of the service. This value indicates what capabilities can be used. The possible values are: disabled, enabled, protectionChangeLocked, restoreLocked, unknownFutureValue.
     * @var BackupServiceStatus|\stdClass|null
     */
    public mixed $status = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['backupServiceConsumer'])) {
            $this->backupServiceConsumer = is_array($data['backupServiceConsumer']) ? new BackupServiceConsumer($data['backupServiceConsumer']) : $data['backupServiceConsumer'];
        }
        if (isset($data['disableReason'])) {
            $this->disableReason = is_array($data['disableReason']) ? new DisableReason($data['disableReason']) : $data['disableReason'];
        }
        if (isset($data['gracePeriodDateTime'])) {
            $this->gracePeriodDateTime = is_string($data['gracePeriodDateTime']) ? new \DateTimeImmutable($data['gracePeriodDateTime']) : $data['gracePeriodDateTime'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = is_array($data['lastModifiedBy']) ? new IdentitySet($data['lastModifiedBy']) : $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['restoreAllowedTillDateTime'])) {
            $this->restoreAllowedTillDateTime = is_string($data['restoreAllowedTillDateTime']) ? new \DateTimeImmutable($data['restoreAllowedTillDateTime']) : $data['restoreAllowedTillDateTime'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new BackupServiceStatus($data['status']) : $data['status'];
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
