<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RestorePointSearchResult
 */
class RestorePointSearchResult
{
    /** Total number of artifacts restored. */
    public ?float $artifactHitCount = null;

    /** 
     * 
     * @var RestorePoint|\stdClass|null
     */
    public mixed $restorePoint = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['artifactHitCount'])) {
            $this->artifactHitCount = $data['artifactHitCount'];
        }
        if (isset($data['restorePoint'])) {
            $this->restorePoint = $data['restorePoint'];
        }
    }
}
