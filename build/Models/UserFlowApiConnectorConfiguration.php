<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserFlowApiConnectorConfiguration
 */
class UserFlowApiConnectorConfiguration
{
    /** 
     * 
     * @var IdentityApiConnector|\stdClass|null
     */
    public mixed $postAttributeCollection = null;

    /** 
     * 
     * @var IdentityApiConnector|\stdClass|null
     */
    public mixed $postFederationSignup = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['postAttributeCollection'])) {
            $this->postAttributeCollection = is_array($data['postAttributeCollection']) ? new IdentityApiConnector($data['postAttributeCollection']) : $data['postAttributeCollection'];
        }
        if (isset($data['postFederationSignup'])) {
            $this->postFederationSignup = is_array($data['postFederationSignup']) ? new IdentityApiConnector($data['postFederationSignup']) : $data['postFederationSignup'];
        }
    }
}
