<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChecklistItem
 */
class ChecklistItem
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The date and time when the checklistItem was finished. */
    public ?\DateTimeInterface $checkedDateTime = null;

    /** The date and time when the checklistItem was created. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Indicates the title of the checklistItem. */
    public ?string $displayName = null;

    /** State that indicates whether the item is checked off or not. */
    public ?bool $isChecked = null;


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
        if (isset($data['checkedDateTime'])) {
            $this->checkedDateTime = is_string($data['checkedDateTime']) ? new \DateTimeImmutable($data['checkedDateTime']) : $data['checkedDateTime'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['isChecked'])) {
            $this->isChecked = is_bool($data['isChecked']) ? $data['isChecked'] : (bool)$data['isChecked'];
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
