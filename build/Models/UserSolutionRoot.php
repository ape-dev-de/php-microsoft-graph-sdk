<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserSolutionRoot
 */
class UserSolutionRoot
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The working time schedule entity associated with the solution.
     * @var WorkingTimeSchedule|\stdClass|null
     */
    public mixed $workingTimeSchedule = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['workingTimeSchedule'])) {
            $this->workingTimeSchedule = is_array($data['workingTimeSchedule']) ? new WorkingTimeSchedule($data['workingTimeSchedule']) : $data['workingTimeSchedule'];
        }
    }
}
