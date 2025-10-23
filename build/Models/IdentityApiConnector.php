<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityApiConnector
 */
class IdentityApiConnector
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The object which describes the authentication configuration details for calling the API. Basic and PKCS 12 client certificate are supported.
     * @var ApiAuthenticationConfigurationBase|\stdClass|null
     */
    public mixed $authenticationConfiguration = null;

    /** The name of the API connector. */
    public ?string $displayName = null;

    /** The URL of the API endpoint to call. */
    public ?string $targetUrl = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['authenticationConfiguration'])) {
            $this->authenticationConfiguration = $data['authenticationConfiguration'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['targetUrl'])) {
            $this->targetUrl = $data['targetUrl'];
        }
    }
}
