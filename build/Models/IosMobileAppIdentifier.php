<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosMobileAppIdentifier
 */
class IosMobileAppIdentifier
{
    /** The identifier for an app, as specified in the app store. */
    public ?string $bundleId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['bundleId'])) {
            $this->bundleId = $data['bundleId'];
        }
    }
}
