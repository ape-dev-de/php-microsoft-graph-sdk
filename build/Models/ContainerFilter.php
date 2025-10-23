<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ContainerFilter
 */
class ContainerFilter
{
    /** 
     * 
     * @var string[]
     */
    public array $includedContainers = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['includedContainers'])) {
            $this->includedContainers = $data['includedContainers'];
        }
    }
}
