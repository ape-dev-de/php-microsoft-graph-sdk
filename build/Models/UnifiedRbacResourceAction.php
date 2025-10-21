<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRbacResourceAction
 */
class UnifiedRbacResourceAction
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?string $actionVerb = null,
        /**  */
        public ?string $authenticationContextId = null,
        /**  */
        public ?string $description = null,
        /**  */
        public ?bool $isAuthenticationContextSettable = null,
        /**  */
        public ?string $name = null,
        /**  */
        public ?string $resourceScopeId = null
    ) {}
}
