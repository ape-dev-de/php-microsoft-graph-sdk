<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationBehaviors
 */
class AuthenticationBehaviors
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
        $this->rawData = $data;
        if (isset($data['blockAzureADGraphAccess'])) {
            $this->blockAzureADGraphAccess = is_bool($data['blockAzureADGraphAccess']) ? $data['blockAzureADGraphAccess'] : (bool)$data['blockAzureADGraphAccess'];
        }
        if (isset($data['removeUnverifiedEmailClaim'])) {
            $this->removeUnverifiedEmailClaim = is_bool($data['removeUnverifiedEmailClaim']) ? $data['removeUnverifiedEmailClaim'] : (bool)$data['removeUnverifiedEmailClaim'];
        }
        if (isset($data['requireClientServicePrincipal'])) {
            $this->requireClientServicePrincipal = is_bool($data['requireClientServicePrincipal']) ? $data['requireClientServicePrincipal'] : (bool)$data['requireClientServicePrincipal'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
