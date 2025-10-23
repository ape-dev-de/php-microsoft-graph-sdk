<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * StaffAvailabilityItem
 */
class StaffAvailabilityItem
{
    /** 
     * Each item in this collection indicates a slot and the status of the staff member.
     * @var AvailabilityItem[]
     */
    public array $availabilityItems = [];

    /** The ID of the staff member. */
    public ?string $staffId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['availabilityItems'])) {
            $this->availabilityItems = $data['availabilityItems'];
        }
        if (isset($data['staffId'])) {
            $this->staffId = $data['staffId'];
        }
    }
}
