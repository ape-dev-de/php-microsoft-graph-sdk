<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedAppRegistration
 */
class ManagedAppRegistration
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The app package Identifier
     * @var MobileAppIdentifier|\stdClass|null
     */
    public mixed $appIdentifier = null;

    /** App version */
    public ?string $applicationVersion = null;

    /** Date and time of creation */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Host device name */
    public ?string $deviceName = null;

    /** App management SDK generated tag, which helps relate apps hosted on the same device. Not guaranteed to relate apps in all conditions. */
    public ?string $deviceTag = null;

    /** Host device type */
    public ?string $deviceType = null;

    /** 
     * Zero or more reasons an app registration is flagged. E.g. app running on rooted device
     * @var ManagedAppFlaggedReason[]
     */
    public array $flaggedReasons = [];

    /** Date and time of last the app synced with management service. */
    public ?\DateTimeInterface $lastSyncDateTime = null;

    /** App management SDK version */
    public ?string $managementSdkVersion = null;

    /** Operating System version */
    public ?string $platformVersion = null;

    /** The user Id to who this app registration belongs. */
    public ?string $userId = null;

    /** Version of the entity. */
    public ?string $version = null;

    /** 
     * Zero or more policys already applied on the registered app when it last synchronized with managment service.
     * @var ManagedAppPolicy[]
     */
    public array $appliedPolicies = [];

    /** 
     * Zero or more policies admin intended for the app as of now.
     * @var ManagedAppPolicy[]
     */
    public array $intendedPolicies = [];

    /** 
     * Zero or more long running operations triggered on the app registration.
     * @var ManagedAppOperation[]
     */
    public array $operations = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['appIdentifier'])) {
            $this->appIdentifier = $data['appIdentifier'];
        }
        if (isset($data['applicationVersion'])) {
            $this->applicationVersion = $data['applicationVersion'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['deviceName'])) {
            $this->deviceName = $data['deviceName'];
        }
        if (isset($data['deviceTag'])) {
            $this->deviceTag = $data['deviceTag'];
        }
        if (isset($data['deviceType'])) {
            $this->deviceType = $data['deviceType'];
        }
        if (isset($data['flaggedReasons'])) {
            $this->flaggedReasons = $data['flaggedReasons'];
        }
        if (isset($data['lastSyncDateTime'])) {
            $this->lastSyncDateTime = is_string($data['lastSyncDateTime']) ? new \DateTimeImmutable($data['lastSyncDateTime']) : $data['lastSyncDateTime'];
        }
        if (isset($data['managementSdkVersion'])) {
            $this->managementSdkVersion = $data['managementSdkVersion'];
        }
        if (isset($data['platformVersion'])) {
            $this->platformVersion = $data['platformVersion'];
        }
        if (isset($data['userId'])) {
            $this->userId = $data['userId'];
        }
        if (isset($data['version'])) {
            $this->version = $data['version'];
        }
        if (isset($data['appliedPolicies'])) {
            $this->appliedPolicies = $data['appliedPolicies'];
        }
        if (isset($data['intendedPolicies'])) {
            $this->intendedPolicies = $data['intendedPolicies'];
        }
        if (isset($data['operations'])) {
            $this->operations = $data['operations'];
        }
    }
}
