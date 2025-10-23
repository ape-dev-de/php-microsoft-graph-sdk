<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AndroidMobileAppIdentifier
 */
class AndroidMobileAppIdentifier
{
    /** The identifier for an app, as specified in the play store. */
    public ?string $packageId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['packageId'])) {
            $this->packageId = $data['packageId'];
        }
    }
}
