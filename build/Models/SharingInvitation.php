<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharingInvitation
 */
class SharingInvitation
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The email address provided for the recipient of the sharing invitation. Read-only. */
    public ?string $email = null;

    /** 
     * Provides information about who sent the invitation that created this permission, if that information is available. Read-only.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $invitedBy = null;

    /**  */
    public ?string $redeemedBy = null;

    /** If true the recipient of the invitation needs to sign in in order to access the shared item. Read-only. */
    public ?bool $signInRequired = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['email'])) {
            $this->email = $data['email'];
        }
        if (isset($data['invitedBy'])) {
            $this->invitedBy = is_array($data['invitedBy']) ? new IdentitySet($data['invitedBy']) : $data['invitedBy'];
        }
        if (isset($data['redeemedBy'])) {
            $this->redeemedBy = $data['redeemedBy'];
        }
        if (isset($data['signInRequired'])) {
            $this->signInRequired = $data['signInRequired'];
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
