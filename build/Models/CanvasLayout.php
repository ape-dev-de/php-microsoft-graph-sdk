<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CanvasLayout
 */
class CanvasLayout
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Collection of horizontal sections on the SharePoint page.
     * @var HorizontalSection[]
     */
    public array $horizontalSections = [];

    /** 
     * Vertical section on the SharePoint page.
     * @var VerticalSection|\stdClass|null
     */
    public VerticalSection|\stdClass|null $verticalSection = null;


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
        if (isset($data['horizontalSections'])) {
            $this->horizontalSections = $data['horizontalSections'];
        }
        if (isset($data['verticalSection'])) {
            $this->verticalSection = is_array($data['verticalSection']) ? new VerticalSection($data['verticalSection']) : $data['verticalSection'];
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
