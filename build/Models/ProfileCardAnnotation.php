<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProfileCardAnnotation
 */
class ProfileCardAnnotation
{
    public function __construct(
        /** If present, the value of this field is used by the profile card as the default property label in the experience (for example, ''Cost Center''). */
        public ?string $displayName = null,
        /** @var string[] Each resource in this collection represents the localized value of the attribute name for a given language, used as the default label for that locale. For example, a user with a nb-NO client gets ''Kostnadssenter'' as the attribute label, rather than ''Cost Center. */
        public array $localizations = []
    ) {}
}
