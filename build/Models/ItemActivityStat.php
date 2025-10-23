<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ItemActivityStat
 */
class ItemActivityStat
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Statistics about the access actions in this interval. Read-only.
     * @var ItemActionStat|\stdClass|null
     */
    public mixed $access = null;

    /** 
     * Statistics about the create actions in this interval. Read-only.
     * @var ItemActionStat|\stdClass|null
     */
    public mixed $create = null;

    /** 
     * Statistics about the delete actions in this interval. Read-only.
     * @var ItemActionStat|\stdClass|null
     */
    public mixed $delete = null;

    /** 
     * Statistics about the edit actions in this interval. Read-only.
     * @var ItemActionStat|\stdClass|null
     */
    public mixed $edit = null;

    /** When the interval ends. Read-only. */
    public ?\DateTimeInterface $endDateTime = null;

    /** 
     * Indicates that the statistics in this interval are based on incomplete data. Read-only.
     * @var IncompleteData|\stdClass|null
     */
    public mixed $incompleteData = null;

    /** Indicates whether the item is 'trending.' Read-only. */
    public ?bool $isTrending = null;

    /** 
     * Statistics about the move actions in this interval. Read-only.
     * @var ItemActionStat|\stdClass|null
     */
    public mixed $move = null;

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
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['access'])) {
            $this->access = $data['access'];
        }
        if (isset($data['create'])) {
            $this->create = $data['create'];
        }
        if (isset($data['delete'])) {
            $this->delete = $data['delete'];
        }
        if (isset($data['edit'])) {
            $this->edit = $data['edit'];
        }
        if (isset($data['endDateTime'])) {
            $this->endDateTime = is_string($data['endDateTime']) ? new \DateTimeImmutable($data['endDateTime']) : $data['endDateTime'];
        }
        if (isset($data['incompleteData'])) {
            $this->incompleteData = $data['incompleteData'];
        }
        if (isset($data['isTrending'])) {
            $this->isTrending = $data['isTrending'];
        }
        if (isset($data['move'])) {
            $this->move = $data['move'];
        }
        if (isset($data['startDateTime'])) {
            $this->startDateTime = is_string($data['startDateTime']) ? new \DateTimeImmutable($data['startDateTime']) : $data['startDateTime'];
        }
        if (isset($data['activities'])) {
            $this->activities = $data['activities'];
        }
    }
}
