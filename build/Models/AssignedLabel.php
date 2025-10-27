<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AssignedLabel
 */
class AssignedLabel
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The display name of the label. Read-only. */
    public ?string $displayName = null;

    /** The unique identifier of the label. */
    public ?string $labelId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['labelId'])) {
            $this->labelId = $data['labelId'];
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
