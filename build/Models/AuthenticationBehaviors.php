<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationBehaviors
 */
class AuthenticationBehaviors
{
    /**  */
    public ?bool $blockAzureADGraphAccess = null;

    /**  */
    public ?bool $removeUnverifiedEmailClaim = null;

    /**  */
    public ?bool $requireClientServicePrincipal = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['blockAzureADGraphAccess'])) {
            $this->blockAzureADGraphAccess = $data['blockAzureADGraphAccess'];
        }
        if (isset($data['removeUnverifiedEmailClaim'])) {
            $this->removeUnverifiedEmailClaim = $data['removeUnverifiedEmailClaim'];
        }
        if (isset($data['requireClientServicePrincipal'])) {
            $this->requireClientServicePrincipal = $data['requireClientServicePrincipal'];
        }
    }
}
