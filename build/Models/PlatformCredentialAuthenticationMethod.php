<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlatformCredentialAuthenticationMethod
 */
class PlatformCredentialAuthenticationMethod
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The date and time that this Platform Credential Key was registered. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The name of the device on which Platform Credential is registered. */
    public ?string $displayName = null;

    /** 
     * Key strength of this Platform Credential key. Possible values are: normal, weak, unknown.
     * @var AuthenticationMethodKeyStrength|\stdClass|null
     */
    public AuthenticationMethodKeyStrength|\stdClass|null $keyStrength = null;

    /** 
     * Platform on which this Platform Credential key is present. Possible values are: unknown, windows, macOS,iOS, android, linux.
     * @var AuthenticationMethodPlatform|\stdClass|null
     */
    public AuthenticationMethodPlatform|\stdClass|null $platform = null;

    /** 
     * The registered device on which this Platform Credential resides. Supports $expand. When you get a user's Platform Credential registration information, this property is returned only on a single GET and when you specify ?$expand. For example, GET /users/admin@contoso.com/authentication/platformCredentialAuthenticationMethod/_jpuR-TGZtk6aQCLF3BQjA2?$expand=device.
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
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['keyStrength'])) {
            $this->keyStrength = is_string($data['keyStrength']) ? AuthenticationMethodKeyStrength::tryFrom($data['keyStrength']) : $data['keyStrength'];
        }
        if (isset($data['platform'])) {
            $this->platform = is_string($data['platform']) ? AuthenticationMethodPlatform::tryFrom($data['platform']) : $data['platform'];
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
