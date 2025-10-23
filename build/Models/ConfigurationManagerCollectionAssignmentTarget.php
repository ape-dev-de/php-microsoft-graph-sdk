<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConfigurationManagerCollectionAssignmentTarget
 */
class ConfigurationManagerCollectionAssignmentTarget
{
    /** The collection Id that is the target of the assignment. */
    public ?string $collectionId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['collectionId'])) {
            $this->collectionId = $data['collectionId'];
        }
    }
}
