<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventWebinarRegistrationConfiguration
 */
class VirtualEventWebinarRegistrationConfiguration
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

    /**  */
    public ?bool $isManualApprovalEnabled = null;

    /**  */
    public ?bool $isWaitlistEnabled = null;


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
            $this->capacity = $data['capacity'];
        }
        if (isset($data['registrationWebUrl'])) {
            $this->registrationWebUrl = $data['registrationWebUrl'];
        }
        if (isset($data['questions'])) {
            $this->questions = $data['questions'];
        }
        if (isset($data['isManualApprovalEnabled'])) {
            $this->isManualApprovalEnabled = $data['isManualApprovalEnabled'];
        }
        if (isset($data['isWaitlistEnabled'])) {
            $this->isWaitlistEnabled = $data['isWaitlistEnabled'];
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
