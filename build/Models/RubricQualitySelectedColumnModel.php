<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RubricQualitySelectedColumnModel
 */
class RubricQualitySelectedColumnModel
{
    /** ID of the selected level for this quality. */
    public ?string $columnId = null;

    /** ID of the associated quality. */
    public ?string $qualityId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['columnId'])) {
            $this->columnId = $data['columnId'];
        }
        if (isset($data['qualityId'])) {
            $this->qualityId = $data['qualityId'];
        }
    }
}
