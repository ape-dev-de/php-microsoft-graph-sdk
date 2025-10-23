<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityProvider
 */
class IdentityProvider
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The client ID for the application. This is the client ID obtained when registering the application with the identity provider. Required. Not nullable. */
    public ?string $clientId = null;

    /** The client secret for the application. This is the client secret obtained when registering the application with the identity provider. This is write-only. A read operation will return .  Required. Not nullable. */
    public ?string $clientSecret = null;

    /** The display name of the identity provider. Not nullable. */
    public ?string $name = null;

    /** The identity provider type is a required field. For B2B scenario: Google, Facebook. For B2C scenario: Microsoft, Google, Amazon, LinkedIn, Facebook, GitHub, Twitter, Weibo, QQ, WeChat, OpenIDConnect. Not nullable. */
    public ?string $type = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['clientId'])) {
            $this->clientId = $data['clientId'];
        }
        if (isset($data['clientSecret'])) {
            $this->clientSecret = $data['clientSecret'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['type'])) {
            $this->type = $data['type'];
        }
    }
}
