<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserSignInInsight
 */
class UserSignInInsight
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Indicates when the insight was created. */
    public ?\DateTimeInterface $insightCreatedDateTime = null;

    /** Indicates when the user last signed in. */
    public ?\DateTimeInterface $lastSignInDateTime = null;


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
        if (isset($data['insightCreatedDateTime'])) {
            $this->insightCreatedDateTime = is_string($data['insightCreatedDateTime']) ? new \DateTimeImmutable($data['insightCreatedDateTime']) : $data['insightCreatedDateTime'];
        }
        if (isset($data['lastSignInDateTime'])) {
            $this->lastSignInDateTime = is_string($data['lastSignInDateTime']) ? new \DateTimeImmutable($data['lastSignInDateTime']) : $data['lastSignInDateTime'];
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
