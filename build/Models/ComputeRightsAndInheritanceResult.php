<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ComputeRightsAndInheritanceResult
 */
class ComputeRightsAndInheritanceResult
{
    /** 
     * 
     * @var LabelContentRight[]
     */
    public array $contentRights = [];

    /** 
     * 
     * @var SensitivityLabel|\stdClass|null
     */
    public mixed $inheritedLabel = null;

    /** 
     * 
     * @var SensitivityLabel[]
     */
    public array $sensitivityLabels = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['contentRights'])) {
            $this->contentRights = $data['contentRights'];
        }
        if (isset($data['inheritedLabel'])) {
            $this->inheritedLabel = $data['inheritedLabel'];
        }
        if (isset($data['sensitivityLabels'])) {
            $this->sensitivityLabels = $data['sensitivityLabels'];
        }
    }
}
