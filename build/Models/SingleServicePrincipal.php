<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SingleServicePrincipal
 */
class SingleServicePrincipal
{
    /** Description of this service principal. */
    public ?string $description = null;

    /** ID of the servicePrincipal. */
    public ?string $servicePrincipalId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['servicePrincipalId'])) {
            $this->servicePrincipalId = $data['servicePrincipalId'];
        }
    }
}
