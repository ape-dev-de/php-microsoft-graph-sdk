<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ItemActivityStat
 */
class ItemActivityStat
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Statistics about the access actions in this interval. Read-only. */
        public ?string $access = null,
        /** Statistics about the create actions in this interval. Read-only. */
        public ?string $create = null,
        /** Statistics about the delete actions in this interval. Read-only. */
        public ?string $delete = null,
        /** Statistics about the edit actions in this interval. Read-only. */
        public ?string $edit = null,
        /** When the interval ends. Read-only. */
        public ?\DateTimeInterface $endDateTime = null,
        /** Indicates that the statistics in this interval are based on incomplete data. Read-only. */
        public ?string $incompleteData = null,
        /** Indicates whether the item is 'trending.' Read-only. */
        public ?bool $isTrending = null,
        /** Statistics about the move actions in this interval. Read-only. */
        public ?string $move = null,
        /** When the interval starts. Read-only. */
        public ?\DateTimeInterface $startDateTime = null,
        /** @var string[] Exposes the itemActivities represented in this itemActivityStat resource. */
        public array $activities = []
    ) {}
}
