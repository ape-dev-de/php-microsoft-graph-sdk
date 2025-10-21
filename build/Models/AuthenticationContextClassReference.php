<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationContextClassReference
 */
class AuthenticationContextClassReference
{
    public function __construct(
        /** A short explanation of the policies that are enforced by authenticationContextClassReference. This value should be used to provide secondary text to describe the authentication context class reference when building user-facing admin experiences. For example, a selection UX. */
        public ?string $description = null,
        /** The display name is the friendly name of the authenticationContextClassReference object. This value should be used to identify the authentication context class reference when building user-facing admin experiences. For example, a selection UX. */
        public ?string $displayName = null,
        /** Indicates whether the authenticationContextClassReference has been published by the security admin and is ready for use by apps. When it''s set to false, it shouldn''t be shown in authentication context selection UX, or used to protect app resources. It''s shown and available for Conditional Access policy authoring. The default value is false.  Supports $filter (eq). */
        public ?string $isAvailable = null
    ) {}
}
