<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationTerm
 */
class EducationTerm
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Display name of the term. */
    public ?string $displayName = null;

    /** End of the term. */
    public ?\DateTimeInterface $endDate = null;

    /** ID of term in the syncing system. */
    public ?string $externalId = null;

    /** Start of the term. */
    public ?\DateTimeInterface $startDate = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['endDate'])) {
            $this->endDate = is_string($data['endDate']) ? new \DateTimeImmutable($data['endDate']) : $data['endDate'];
        }
        if (isset($data['externalId'])) {
            $this->externalId = $data['externalId'];
        }
        if (isset($data['startDate'])) {
            $this->startDate = is_string($data['startDate']) ? new \DateTimeImmutable($data['startDate']) : $data['startDate'];
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
