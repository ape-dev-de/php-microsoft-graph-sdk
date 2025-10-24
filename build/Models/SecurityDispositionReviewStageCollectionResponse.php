<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityDispositionReviewStageCollectionResponse
 */
class SecurityDispositionReviewStageCollectionResponse
{
    /** 
     * 
     * @var SecurityDispositionReviewStage[]
     */
    public array $value = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['value'])) {
            $this->value = $data['value'];
        }
    }
}
