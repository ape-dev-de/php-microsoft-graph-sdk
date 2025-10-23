<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnAttributeCollectionStartCustomExtensionHandler
 */
class OnAttributeCollectionStartCustomExtensionHandler
{
    /** 
     * Configuration regarding properties of the custom extension that are can be overwritten per event listener.
     * @var CustomExtensionOverwriteConfiguration|\stdClass|null
     */
    public mixed $configuration = null;

    /** 
     * 
     * @var OnAttributeCollectionStartCustomExtension|\stdClass|null
     */
    public mixed $customExtension = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['configuration'])) {
            $this->configuration = $data['configuration'];
        }
        if (isset($data['customExtension'])) {
            $this->customExtension = $data['customExtension'];
        }
    }
}
