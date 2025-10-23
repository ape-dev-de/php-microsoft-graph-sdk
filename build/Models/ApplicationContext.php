<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ApplicationContext
 */
class ApplicationContext
{
    /** 
     * Collection of appId values for the applications.
     * @var string[]
     */
    public array $includeApplications = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['includeApplications'])) {
            $this->includeApplications = $data['includeApplications'];
        }
    }
}
