<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CustomExtensionOverwriteConfiguration
 */
class CustomExtensionOverwriteConfiguration
{
    /** 
     * 
     * @var CustomExtensionBehaviorOnError|\stdClass|null
     */
    public mixed $behaviorOnError = null;

    /** 
     * Configuration regarding properties of the custom extension which can be overwritten per event listener. If no values are provided, the properties on the custom extension are used.
     * @var CustomExtensionClientConfiguration|\stdClass|null
     */
    public mixed $clientConfiguration = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['behaviorOnError'])) {
            $this->behaviorOnError = is_array($data['behaviorOnError']) ? new CustomExtensionBehaviorOnError($data['behaviorOnError']) : $data['behaviorOnError'];
        }
        if (isset($data['clientConfiguration'])) {
            $this->clientConfiguration = is_array($data['clientConfiguration']) ? new CustomExtensionClientConfiguration($data['clientConfiguration']) : $data['clientConfiguration'];
        }
    }
}
