<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRbacResourceAction
 */
class UnifiedRbacResourceAction
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?string $actionVerb = null;

    /**  */
    public ?string $authenticationContextId = null;

    /**  */
    public ?string $description = null;

    /**  */
    public ?bool $isAuthenticationContextSettable = null;

    /**  */
    public ?string $name = null;

    /**  */
    public ?string $resourceScopeId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['actionVerb'])) {
            $this->actionVerb = $data['actionVerb'];
        }
        if (isset($data['authenticationContextId'])) {
            $this->authenticationContextId = $data['authenticationContextId'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['isAuthenticationContextSettable'])) {
            $this->isAuthenticationContextSettable = $data['isAuthenticationContextSettable'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['resourceScopeId'])) {
            $this->resourceScopeId = $data['resourceScopeId'];
        }
    }
}
