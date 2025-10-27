<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationAssignmentIndividualRecipient
 */
class EducationAssignmentIndividualRecipient
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * A collection of IDs of the recipients.
     * @var string[]
     */
    public array $recipients = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['recipients'])) {
            $this->recipients = $data['recipients'];
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
