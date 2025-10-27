<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventRegistrationConfiguration
 */
class VirtualEventRegistrationConfiguration
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Total capacity of the virtual event. */
    public ?float $capacity = null;

    /** Registration URL of the virtual event. */
    public ?string $registrationWebUrl = null;

    /** 
     * Registration questions.
     * @var VirtualEventRegistrationQuestionBase[]
     */
    public array $questions = [];


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
        if (isset($data['capacity'])) {
            $this->capacity = is_numeric($data['capacity']) ? (float)$data['capacity'] : $data['capacity'];
        }
        if (isset($data['registrationWebUrl'])) {
            $this->registrationWebUrl = $data['registrationWebUrl'];
        }
        if (isset($data['questions'])) {
            $this->questions = $data['questions'];
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
