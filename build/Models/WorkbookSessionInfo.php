<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookSessionInfo
 */
class WorkbookSessionInfo
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** ID of the workbook session. */
    public ?string $id = null;

    /** true for persistent session. false for non-persistent session (view mode) */
    public ?bool $persistChanges = null;


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
        if (isset($data['persistChanges'])) {
            $this->persistChanges = is_bool($data['persistChanges']) ? $data['persistChanges'] : (bool)$data['persistChanges'];
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
