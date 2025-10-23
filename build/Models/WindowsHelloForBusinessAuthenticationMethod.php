<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsHelloForBusinessAuthenticationMethod
 */
class WindowsHelloForBusinessAuthenticationMethod
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The date and time that this Windows Hello for Business key was registered. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The name of the device on which Windows Hello for Business is registered */
    public ?string $displayName = null;

    /** 
     * Key strength of this Windows Hello for Business key. Possible values are: normal, weak, unknown.
     * @var AuthenticationMethodKeyStrength|\stdClass|null
     */
    public mixed $keyStrength = null;

    /** 
     * The registered device on which this Windows Hello for Business key resides. Supports $expand. When you get a user's Windows Hello for Business registration information, this property is returned only on a single GET and when you specify ?$expand. For example, GET /users/admin@contoso.com/authentication/windowsHelloForBusinessMethods/_jpuR-TGZtk6aQCLF3BQjA2?$expand=device.
     * @var Device|\stdClass|null
     */
    public mixed $device = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
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
            $this->keyStrength = is_array($data['keyStrength']) ? new AuthenticationMethodKeyStrength($data['keyStrength']) : $data['keyStrength'];
        }
        if (isset($data['device'])) {
            $this->device = is_array($data['device']) ? new Device($data['device']) : $data['device'];
        }
    }
}
