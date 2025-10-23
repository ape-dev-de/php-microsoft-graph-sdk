<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WebPartPosition
 */
class WebPartPosition
{
    /** Indicates the identifier of the column where the web part is located. */
    public ?string $columnId = null;

    /** Indicates the horizontal section where the web part is located. */
    public ?string $horizontalSectionId = null;

    /** Indicates whether the web part is located in the vertical section. */
    public ?bool $isInVerticalSection = null;

    /** Index of the current web part. Represents the order of the web part in this column or section. */
    public ?string $webPartIndex = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
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
}
