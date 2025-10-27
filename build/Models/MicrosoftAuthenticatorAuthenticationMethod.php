<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MicrosoftAuthenticatorAuthenticationMethod
 */
class MicrosoftAuthenticatorAuthenticationMethod
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The date and time that this app was registered. This property is null if the device isn't registered for passwordless Phone Sign-In. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Tags containing app metadata. */
    public ?string $deviceTag = null;

    /** The name of the device on which this app is registered. */
    public ?string $displayName = null;

    /** Numerical version of this instance of the Authenticator app. */
    public ?string $phoneAppVersion = null;

    /** 
     * The registered device on which Microsoft Authenticator resides. This property is null if the device isn't registered for passwordless Phone Sign-In.
     * @var Device|\stdClass|null
     */
    public Device|\stdClass|null $device = null;


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
        if (isset($data['deviceTag'])) {
            $this->deviceTag = $data['deviceTag'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['phoneAppVersion'])) {
            $this->phoneAppVersion = $data['phoneAppVersion'];
        }
        if (isset($data['device'])) {
            $this->device = is_array($data['device']) ? new Device($data['device']) : $data['device'];
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
