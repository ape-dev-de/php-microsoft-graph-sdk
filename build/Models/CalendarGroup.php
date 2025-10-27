<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CalendarGroup
 */
class CalendarGroup
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Identifies the version of the calendar group. Every time the calendar group is changed, ChangeKey changes as well. This allows Exchange to apply changes to the correct version of the object. Read-only. */
    public ?string $changeKey = null;

    /** The class identifier. Read-only. */
    public ?string $classId = null;

    /** The group name. */
    public ?string $name = null;

    /** 
     * The calendars in the calendar group. Navigation property. Read-only. Nullable.
     * @var Calendar[]
     */
    public array $calendars = [];


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
        if (isset($data['changeKey'])) {
            $this->changeKey = $data['changeKey'];
        }
        if (isset($data['classId'])) {
            $this->classId = $data['classId'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['calendars'])) {
            $this->calendars = $data['calendars'];
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
