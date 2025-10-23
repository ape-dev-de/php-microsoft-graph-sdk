<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnTokenIssuanceStartCustomExtensionHandler
 */
class OnTokenIssuanceStartCustomExtensionHandler
{
    /** 
     * 
     * @var CustomExtensionOverwriteConfiguration|\stdClass|null
     */
    public mixed $configuration = null;

    /** 
     * 
     * @var OnTokenIssuanceStartCustomExtension|\stdClass|null
     */
    public mixed $customExtension = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['configuration'])) {
            $this->configuration = is_array($data['configuration']) ? new CustomExtensionOverwriteConfiguration($data['configuration']) : $data['configuration'];
        }
        if (isset($data['customExtension'])) {
            $this->customExtension = is_array($data['customExtension']) ? new OnTokenIssuanceStartCustomExtension($data['customExtension']) : $data['customExtension'];
        }
    }
}
