<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ResourceAction
 */
class ResourceAction
{
    /** 
     * Allowed Actions
     * @var string[]
     */
    public array $allowedResourceActions = [];

    /** 
     * Not Allowed Actions.
     * @var string[]
     */
    public array $notAllowedResourceActions = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['allowedResourceActions'])) {
            $this->allowedResourceActions = $data['allowedResourceActions'];
        }
        if (isset($data['notAllowedResourceActions'])) {
            $this->notAllowedResourceActions = $data['notAllowedResourceActions'];
        }
    }
}
