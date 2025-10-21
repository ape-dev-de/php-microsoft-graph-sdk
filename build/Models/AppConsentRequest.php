<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppConsentRequest
 */
class AppConsentRequest
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The display name of the app for which consent is requested. Required. Supports $filter (eq only) and $orderby. */
        public ?string $appDisplayName = null,
        /** The identifier of the application. Required. Supports $filter (eq only) and $orderby. */
        public ?string $appId = null,
        /** A list of pending scopes waiting for approval. Required. */
        public array $pendingScopes = [],
        /** A list of pending user consent requests. Supports $filter (eq). */
        public array $userConsentRequests = []
    ) {}
}
