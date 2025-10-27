<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlannerChecklistItem
 */
class PlannerChecklistItem
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Value is true if the item is checked and false otherwise. */
    public ?bool $isChecked = null;

    /** 
     * Read-only. User ID by which this is last modified.
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $lastModifiedBy = null;

    /** Read-only. Date and time at which this is last modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** Used to set the relative order of items in the checklist. The format is defined as outlined here. */
    public ?string $orderHint = null;

    /** Title of the checklist item */
    public ?string $title = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['isChecked'])) {
            $this->isChecked = is_bool($data['isChecked']) ? $data['isChecked'] : (bool)$data['isChecked'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = is_array($data['lastModifiedBy']) ? new IdentitySet($data['lastModifiedBy']) : $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['orderHint'])) {
            $this->orderHint = $data['orderHint'];
        }
        if (isset($data['title'])) {
            $this->title = $data['title'];
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
