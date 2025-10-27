<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ItemActivityStat
 */
class ItemActivityStat
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Statistics about the access actions in this interval. Read-only.
     * @var ItemActionStat|\stdClass|null
     */
    public ItemActionStat|\stdClass|null $access = null;

    /** 
     * Statistics about the create actions in this interval. Read-only.
     * @var ItemActionStat|\stdClass|null
     */
    public ItemActionStat|\stdClass|null $create = null;

    /** 
     * Statistics about the delete actions in this interval. Read-only.
     * @var ItemActionStat|\stdClass|null
     */
    public ItemActionStat|\stdClass|null $delete = null;

    /** 
     * Statistics about the edit actions in this interval. Read-only.
     * @var ItemActionStat|\stdClass|null
     */
    public ItemActionStat|\stdClass|null $edit = null;

    /** When the interval ends. Read-only. */
    public ?\DateTimeInterface $endDateTime = null;

    /** 
     * Indicates that the statistics in this interval are based on incomplete data. Read-only.
     * @var IncompleteData|\stdClass|null
     */
    public IncompleteData|\stdClass|null $incompleteData = null;

    /** Indicates whether the item is 'trending.' Read-only. */
    public ?bool $isTrending = null;

    /** 
     * Statistics about the move actions in this interval. Read-only.
     * @var ItemActionStat|\stdClass|null
     */
    public ItemActionStat|\stdClass|null $move = null;

    /** When the interval starts. Read-only. */
    public ?\DateTimeInterface $startDateTime = null;

    /** 
     * Exposes the itemActivities represented in this itemActivityStat resource.
     * @var ItemActivity[]
     */
    public array $activities = [];


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
        if (isset($data['access'])) {
            $this->access = is_array($data['access']) ? new ItemActionStat($data['access']) : $data['access'];
        }
        if (isset($data['create'])) {
            $this->create = is_array($data['create']) ? new ItemActionStat($data['create']) : $data['create'];
        }
        if (isset($data['delete'])) {
            $this->delete = is_array($data['delete']) ? new ItemActionStat($data['delete']) : $data['delete'];
        }
        if (isset($data['edit'])) {
            $this->edit = is_array($data['edit']) ? new ItemActionStat($data['edit']) : $data['edit'];
        }
        if (isset($data['endDateTime'])) {
            $this->endDateTime = is_string($data['endDateTime']) ? new \DateTimeImmutable($data['endDateTime']) : $data['endDateTime'];
        }
        if (isset($data['incompleteData'])) {
            $this->incompleteData = is_array($data['incompleteData']) ? new IncompleteData($data['incompleteData']) : $data['incompleteData'];
        }
        if (isset($data['isTrending'])) {
            $this->isTrending = $data['isTrending'];
        }
        if (isset($data['move'])) {
            $this->move = is_array($data['move']) ? new ItemActionStat($data['move']) : $data['move'];
        }
        if (isset($data['startDateTime'])) {
            $this->startDateTime = is_string($data['startDateTime']) ? new \DateTimeImmutable($data['startDateTime']) : $data['startDateTime'];
        }
        if (isset($data['activities'])) {
            $this->activities = $data['activities'];
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
