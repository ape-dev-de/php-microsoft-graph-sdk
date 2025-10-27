<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Shared
 */
class Shared
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * The identity of the owner of the shared item. Read-only.
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $owner = null;

    /** Indicates the scope of how the item is shared. The possible values are: anonymous, organization, or users. Read-only. */
    public ?string $scope = null;

    /** 
     * The identity of the user who shared the item. Read-only.
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $sharedBy = null;

    /** The UTC date and time when the item was shared. Read-only. */
    public ?\DateTimeInterface $sharedDateTime = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['owner'])) {
            $this->owner = is_array($data['owner']) ? new IdentitySet($data['owner']) : $data['owner'];
        }
        if (isset($data['scope'])) {
            $this->scope = $data['scope'];
        }
        if (isset($data['sharedBy'])) {
            $this->sharedBy = is_array($data['sharedBy']) ? new IdentitySet($data['sharedBy']) : $data['sharedBy'];
        }
        if (isset($data['sharedDateTime'])) {
            $this->sharedDateTime = is_string($data['sharedDateTime']) ? new \DateTimeImmutable($data['sharedDateTime']) : $data['sharedDateTime'];
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
