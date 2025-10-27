<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WebPartPosition
 */
class WebPartPosition
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Indicates the identifier of the column where the web part is located.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $columnId = null;

    /** 
     * Indicates the horizontal section where the web part is located.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $horizontalSectionId = null;

    /** Indicates whether the web part is located in the vertical section. */
    public ?bool $isInVerticalSection = null;

    /** 
     * Index of the current web part. Represents the order of the web part in this column or section.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $webPartIndex = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['columnId'])) {
            $this->columnId = $data['columnId'];
        }
        if (isset($data['horizontalSectionId'])) {
            $this->horizontalSectionId = $data['horizontalSectionId'];
        }
        if (isset($data['isInVerticalSection'])) {
            $this->isInVerticalSection = $data['isInVerticalSection'];
        }
        if (isset($data['webPartIndex'])) {
            $this->webPartIndex = $data['webPartIndex'];
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
