<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CoachmarkLocation
 */
class CoachmarkLocation
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Length of coachmark. */
    public ?float $length = null;

    /** Offset of coachmark. */
    public ?float $offset = null;

    /** 
     * Type of coachmark location. The possible values are: unknown, fromEmail, subject, externalTag, displayName, messageBody, unknownFutureValue.
     * @var CoachmarkLocationType|\stdClass|null
     */
    public mixed $type = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['length'])) {
            $this->length = $data['length'];
        }
        if (isset($data['offset'])) {
            $this->offset = $data['offset'];
        }
        if (isset($data['type'])) {
            $this->type = is_array($data['type']) ? new CoachmarkLocationType($data['type']) : $data['type'];
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
