<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SocialIdentityProvider
 */
class SocialIdentityProvider
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The display name of the identity provider. */
    public ?string $displayName = null;

    /** The identifier for the client application obtained when registering the application with the identity provider. Required. */
    public ?string $clientId = null;

    /** The client secret for the application that is obtained when the application is registered with the identity provider. This is write-only. A read operation returns . Required. */
    public ?string $clientSecret = null;

    /** For a B2B scenario, possible values: Google, Facebook. For a B2C scenario, possible values: Microsoft, Google, Amazon, LinkedIn, Facebook, GitHub, Twitter, Weibo, QQ, WeChat. Required. */
    public ?string $identityProviderType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['clientId'])) {
            $this->clientId = $data['clientId'];
        }
        if (isset($data['clientSecret'])) {
            $this->clientSecret = $data['clientSecret'];
        }
        if (isset($data['identityProviderType'])) {
            $this->identityProviderType = $data['identityProviderType'];
        }
    }
}
